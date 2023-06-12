
function sample1(){
    //
    //Uae Javsscript to create a simple table
    //
    ///Get the body section of the table
    const tbody:HTMLTableSectionElement = <HTMLTableSectionElement>document.getElementById('body');
    //
    //Create a new row
    const tr:HTMLTableRowElement = tbody.insertRow();
    //
    //Add 4 cells to the row
    const cell1: HTMLTableCellElement = tr.insertCell(); cell1.textContent='1';
    const cell2:HTMLTableCellElement = tr.insertCell(); cell2.textContent='2';
    const cell3:HTMLTableCellElement = tr.insertCell(); cell3.textContent='3';
    const cell4:HTMLTableCellElement = tr.insertCell();; cell4.textContent='4';
    const cell5:HTMLTableCellElement = tr.insertCell();; cell5.textContent='5';
    
    
}
import * as lib from  "../../../schema/v/code/library";

import * as server from "../../../schema/v/code/server.js";

import {copy} from "./editor.js";

const files:Array<{
		path: string;
		name: string;
		is_file: boolean;
		properties: { [index: string]: lib.basic_value };
	}> = await server.exec('path', ['/tracker/v/data/minutes', false], 'scandir', []);

export function view_minutes(){
    
    //Get the body section of the table
    const tbody:HTMLTableSectionElement = <HTMLTableSectionElement>document.getElementById('body');
    //
    //Load the data to the table
    for(const file of files){
        //
        // Loop if the file is a file and it ends with .md
        if (file.is_file && file.name.endsWith(".md")){
            //
            // Get the file name e.g., wanjiru_20230502.md
            const filename = file.name;
            //
            //Get the parts split using the underscore e.g., wanjiru and 20230502.md
            const part = filename.split("_");
            //
            // Get the first part which is the name e.g., wanjiru
            const minute = part[0];
            //
            //In the second part slice the last three indexes  e.g., .md to 
            //obtain a date only such as 20230502
            const date =part[1].slice(0,-3);
            //
            // Extract year
            const year = date.substr(0, 4);
            //
            // Splitting month
            const month = date.substr(4, 2);
            //
            //splitting day
            const day = date.substr(6, 2);
            //
            // Combine the day,month and year
            const dates = `${day}/${month}/${year}`;           
            //
            //Create a table row
            const tr:HTMLTableRowElement = tbody.insertRow();
            //
            //Insert one cell 1-name
            tr.insertCell().textContent=minute;            
            //
            //insert cell 2-date
            tr.insertCell().textContent=dates;           
            //
            //Create the view cell
            const vcell: HTMLTableCellElement = tr.insertCell();            
            //
            //Create the anchor element  
            const view: HTMLAnchorElement = document.createElement('a');
            //
            //Attach an anchor element to the cell to view
            vcell.appendChild(view);
            //
            //Set the source of the anchor element to the file link
            view.href = `view_minute.php?file=${filename}`; 
            //
            //Set the content of the anchor ro 'view 
            view.textContent = 'view';
            //create edit cell
            const ecell: HTMLTableCellElement = tr.insertCell();
            //
            //Create the anchor element  
            const edit: HTMLAnchorElement = document.createElement('a');
            //
            //Attach an anchor elent to the cell to edit
            ecell.appendChild(edit);
            //
            //Set the source of the anchor element to the file link
            const fil = `/tracker/v/data/minutes/${filename}`;
            edit.href = `editor.php?file=${fil}`;            
            //
            //Set the content of the anchor ro 'view 
            edit.textContent = 'edit';         
            //
            //create a copy cell
            const ccell: HTMLTableCellElement = tr.insertCell();
            //
            //create a button element
            const button: HTMLButtonElement = document.createElement('button');
            //
            //set button class
            button.classList.add('copy');
            //
            //Attach an anchor element to the cell to copy
            ccell.appendChild(button); 
            //
            //Set the content of the anchor ro 'view 2
            button.textContent = 'copy';
            // Attach the event listener to the copy button
            button.addEventListener('click', () => {
              copy(fil);
            }); 
            //
            //Add  button to view all the copies of a file
            const mcell: HTMLTableCellElement = tr.insertCell();
            //
            //create a button element for the view copies
            const mbutton: HTMLButtonElement = document.createElement('button');
             //
            //set the view button class
            mbutton.classList.add('view');
            //
            //Attach an anchor element to the cell to copy
            mcell.appendChild(mbutton); 
            //
            //Set the content of the anchor ro 'view 2
            mbutton.textContent = 'view';
            //
            //attach the view copy function
                     
        }
    }
}
 