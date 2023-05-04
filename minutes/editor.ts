//Use the server library t spport communicatio between javascrit and PHP
//import * as server from "./../../../schema/v/code/server.js";
import * as server from "./../../schema/v/code/server.js";

async function save(area:HTMLTextAreaElement, full_name:string){
    //
    //Extract the edited text
    const text:string = area.value;
    //
    //Call the server to save the text
    const result:number|false = await server.exec(
        "path", 
        [full_name, true], 
        "put_file_contents", 
        [text]
    );
    //Test if the writing was successful or not
    if (result === false)  area.value='Failed to write'; else area.value='Ok';
    
}
//
export async function editor(name:string) {
    //
    //Frmulate the fulname of the file\
    const full_name = `/tracker/minutes/${name}`; 
    //
    //1. Get text for editing into the text area
    //
    //1.1 Read text from file /tracker/minutes/interns_20230503.md
    const text:string = await server.exec(
        "path", 
        [full_name, true], 
        "get_file_contents", 
        []
    );
  
    //  
    //1.2 Get the text area element;
    const textarea  = <HTMLTextAreaElement>window.document.getElementById('content');
    //
    //1.3 Place the text in the text area eleent
    textarea.value = text;
    //
    //
    //2 Add an event listenet to the save button
    //
    //2.1 Get the save buttom from the HTML
    const save_button = <HTMLButtonElement> document.getElementById('save');
    //
    //Attach an event kistenet for saving
    save_button.onclick = async()=> await save(textarea, full_name);
}

    