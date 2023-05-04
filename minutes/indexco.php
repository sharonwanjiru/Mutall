<!DOCTYPE html>
<html lang="en">
<head>
 <title>Minutes</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
     a{
        font-size: 25px;
        line-height:1.5;    
     }   
     p,li,code{
        font-size: 22px;
     }
     @media (max-width: 800px) {
      a{
        font-size: 25px;   
        line-height:1.5;
      }
     }
  
  </style>
</head>
<body>
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
            echo "<a  href=\"?file=$file\">$file</a><br>";
            // echo "<a href=\"?file=$file\" style=\"font-size: 60px; \">$file</a><br>";

        }
    }
}
?>
</body>
</html>


