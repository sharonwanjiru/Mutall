<?php
$file = $_GET['file'];
?>
<html>
  <head>
    <title>Editor</title>
    
    <script type="module">
      //  
      //????????  
      import { editor } from "./editor.js";
      //
      ///Set the fie name to whatever we want
      const file = '<?php echo $file; ?>';
      //
      //???????
      window.onload = async () => await editor(file);
      
    </script>
  </head>
  
  <body>
     <!-- Heading for the title -->
    <h3>Minutes Editor</h3>
      
    <h2>Content</h2>

    <textarea cols="100" rows="20" id="content"></textarea><br />

    <button id="save">Save</button>

    <button id="cancel" >Cancel</button>
    
  </body>
</html>
