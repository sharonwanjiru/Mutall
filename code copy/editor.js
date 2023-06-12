//Use the server library t spport communicatio between javascrit and PHP
import * as server from "../../../schema/v/code/server.js";
async function save(area, full_name) {
    //
    //Extract the edited text
    const text = area.value;
    //
    //Call the server to save the text
    const result = await server.exec("path", [full_name, true], "put_file_contents", [text]);
    //Test if the writing was successful or not
    if (result === false)
        alert("Failed to write");
    else
        alert("Minutes Saved Successfully");
}
async function view() {
    //
    // Scan the directory for copies
    const files = await server.exec('path', ['/tracker/v/data/minutes/copies', false], 'scandir', []);
    console.log(files);
    //
    //loop through each file
    for (const file of files) {
        //
        // Extract the first 2 parts of copies e.g sharon_20230502_kibe.md
        //       
        const filename = file.name;
        //
        //Get the parts split using the underscore e.g., wanjiru and 20230502.md
        const part = filename.split("_");
        //
        //return the first part of the file e.g., sharon_20230502
        const copy_name = part[0];
        // 
        //compare and return the files with the parts
    }
}
//Assume that the filename is as complete. E.g.,
// /tracker/v/data/shallon.md, /tracker/v/data/copies/shallon.md, etc. 
export async function editor(full_name) {
    //
    //1. Get text for editing into the text area
    //
    //1.1 Read text from file /tracker/minutes/file
    const text = await server.exec("path", [full_name, true], "get_file_contents", []);
    //
    //1.2 Get the text area element;
    const textarea = (window.document.getElementById("content"));
    //
    //1.3 Place the text in the text area eleent
    textarea.value = text;
    //
    //2 Add an event listener to the save button
    //
    //2.1 Get the save buttom from the HTML
    const save_button = document.getElementById("save");
    //
    //Attach an event listener for saving saving the contents o the text area
    //to the given file
    save_button.onclick = async () => await save(textarea, full_name);
}
//
// extracting the constituents of full_name
function extract_fullname(full_name) {
    //
    // Extract the file name from the full path, e.g.,sharon_20230504.md 
    const filename = full_name.substring(full_name.lastIndexOf("/") + 1);
    //
    //a. Split the filename into its constituent parts, viz., source surname, 
    //date code and the extension 
    //
    //a1.......
    const part = filename.split(".");
    //
    //a2Get the name of the file, e.g., sharon_20230504
    const name = part[0];
    //
    // Get the extension of the file, e.g., md
    const extension = part[1];
    //
    // return the name
    return { name, extension };
}
// A function to get the user name from a user using a prompt 
function prompt_username() {
    //
    //if user surname is not registered prompt the user to enter their name
    const name = prompt("Please Enter your name for presentation");
    if (name !== null) {
        //
        // return the surname of the copier
        return name;
    }
    else {
        //
        // Alert the user that they cant copy without the name
        throw new Error("Name not entered can not copy");
    }
}
//async function prompt_username(): Promise<string>{
//    // Fetch the surnames directly from the PHP file
//    const response = await fetch('./interns.php');
//    const surnames: string[] = await response.json();
//    
//    
//    // Create a dropdown select element
//    const selectElement = document.createElement('select');
//    
//     // Create option elements for each surname
//    surnames.forEach((surname) => {
//      const optionElement = document.createElement('option');
//      optionElement.text = surname;
//      selectElement.add(optionElement);
//    });
//
//    //if user surname is not registered prompt the user to enter their name
//    const name = prompt("Please select your surname:", selectElement.outerHTML); 
//    
//    if(name!==null){
//        //
//        // return the surname of the copier
//        return name;
//    }
//    else{
//        //
//        // Alert the user that they cant copy without the name
//        throw new Error("Name not entered can not copy");
//    }
//}
//
//Get the username from local storage. If it does not exost, prompt the
//the user and save it for fture purpose
function get_surname() {
    //
    //Get the copier surname from local storage if it exists
    const surname = localStorage.getItem("userfullname");
    //
    // If it does not exist prompt the user for a name
    if (surname === null) {
        //
        //Get the
        const name = prompt_username();
        //
        localStorage.setItem("userfullname", name);
        //
        return name;
    }
    else {
        return surname;
    }
}
//
//Gt the target given a path
function get_target(full_name) {
    // Get the full_name constitutent parts, eg., mogaka_20230530 and md
    const { name, extension } = extract_fullname(full_name);
    //
    //Get the surname (of the user who is copying) from the local storage,
    const copysurname = get_surname();
    //
    //Formulate the full path of where to copy the file
    //const copyfilename = name + "_" + copysurname + "." + extension; 
    const copyfilename = `${name}_${copysurname}.${extension}`;
    //
    //set the target
    const target = `/tracker/v/data/minutes/copies/${copyfilename}`;
    //
    //return the target
    return target;
}
//Copy and open the given file to a destination which is the copies folder under
//tracker/v/data/minutes/copies. The copied file name is the same as the original 
//one suffixed by the current user. If the copy exists open it in the edit mode.
//The funame looks like: tracker/v/data/minutes/mogaka_20230530.md 
export async function copy(source) {
    //
    //Get the target path
    const target = get_target(source);
    //
    //Check if the file exists in the folder or not
    const exists = await server.exec('path', ['/', false], 'exists', [target]);
    //
    //If it does not exist  use the libray to effect the copying
    if (!exists)
        await server.exec("path", //The php class
        [source, true], //2 constructor arguments
        "copy", //The method we are calling
        [target] //Copy args
        );
    //
    //Open it in the editor
    window.open(`/tracker/v/code/editor.php?file=${target}`);
}
