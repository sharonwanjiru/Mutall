<?php

require_once 'parsedown.php';


// set the file to check if it is clicked
if (isset($_GET['file'])) {
    // Get the filename from the URL
    $filename = basename($_GET['file']);
    // Build the path to the Markdown file
    $markdown = "./$filename";
    //$markdown_file = "pres/$filename";
    if (file_exists($markdown)) {
        $markdown = file_get_contents($markdown);
        $Parsedown = new Parsedown();
        $html = $Parsedown->text($markdown);
        echo $html;
    } 
} 
else 
{
    // $scan = scandir('http://206.189.207.206/tracker/minutes/');

    $files = scandir('./');
    foreach ($files as $file) {

        if (!is_dir("./$file")) {
            echo "<a href=\"?file=$file\">$file</a><br>";
        }
    }
}


?>
