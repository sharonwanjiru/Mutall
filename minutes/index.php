<!DOCTYPE html>
<html lang="en">
<head>
 <title>Minutes</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="minutes.css">
  <meta name="viewport" content="width=device-width; initial-scale=1.0;">
</head>
<body>
<?php

require_once 'parsedown.php';

// set the file to check if it is clicked
if (isset($_GET['file'])) {
    // Get the filename from the URL
    $filename = basename($_GET['file']);
    //
    // Build the path to the Markdown file
    $markdown = "./$filename";
    //
    //$markdown_file = "pres/$filename";
    if (file_exists($markdown)) {
        $markdown = file_get_contents($markdown);
        $Parsedown = new Parsedown();
        $html = $Parsedown->text($markdown);
        echo $html;
    } 
} 
   //
   else 
   {
    // $scan = scandir('http://206.189.207.206/tracker/minutes/');
    $files = scandir('./');
    //
    //exclude .php extension
    $excludedExtensions = array(
        'php'
    );
    echo
    //
    //display the title of the table
    "
    <table class=\"footable\">
     <tr>
      <th>Name</th>
      <th>Date</th>
      <th>View</th>
      <th>Edit</th>
     </tr>
    ";
    //
    // loop through each file
   
    
    foreach ($files as $file) {
        if ($file != "." && $file != ".." && !in_array(pathinfo($file, PATHINFO_EXTENSION), $excludedExtensions)){
        // if (!is_dir("./$file" && !in_array($extension, $excludedExtensions))) {
            // $name= preg_split("/^[a-z]+/",$file)[0];
            // $date= preg_split("/[0-9]/",$file)[0];
            // echo $date;
            // $split=var_export(preg_split('/[a-z]{2,}\K-?/i',$file));
            // echo $split;
        // split the name and date
          $name = preg_replace('/_[0-9]+\.md$/', '', $file);
          $date = preg_replace('/^[a-z]+_|\.md$/i', '', $file);
          echo
         "
            <tr>
                <td>$name</td>
                <td>$date</td>
                <td><a  href=\"?file=$file\">link</a><br></td>
                <td><a  href=\"editor.php?file=$file\">Link</a><br></td>
            </tr>
          " ;

        }
    }
    echo "</table>";
}
?>
</html>


