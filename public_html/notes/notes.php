<!DOCTYPE html>
    <head>
        <title>Note Writer</title>
        <link rel="stylesheet" href="katex.min.css">
        <link rel="stylesheet" href="notes.css">
        <script src="katex.js"></script>
        <?php
            $before=$_POST['input'];
            $location=$_POST['location'];
            $title=$_POST['title'];
            $date=$_POST['date'];
            $input=str_replace('\\',"\\\\",$before);

            $myFile = fopen($location.$date.".php", "w") or die ("Unable to open MF!");
            $body='<!DOCTYPE html><head><title>'.$title.'</title><link rel="stylesheet" href="../katex.min.css"><script src="../katex.js"></script></head><body><div id="textArea"></div><script>try{katex.render("'.$input.'",textArea);} catch(err){}</script></body></html>';
            fwrite($myFile,$body);
            fclose($myFile);            
        ?>
    </head>
    <body>
        <h1>Note Writer</h1>
        <div id="textArea">
        </div> 
        <div id="formDiv">
        <form action="<?php $_PHP_SELF ?>" method="post" id="form">
            <input type="text" id="input" name="input" onkeyup="convert()" />
            <table style="border:0px">
            <tr><td><br />Location: </td><td><input type="text" name="location"></td></tr>
            <tr><td><br />Title: </td><td><input type="text" name="title"></td></tr>
            <tr><td><br />Date: </td><td><input type="text" name="date"></td></tr></table>
            <br /><input type="submit" />
        </form> 
        </div>
        <script>
            function convert(){
                try{
                    var input = document.getElementById('input');
                    katex.render(input.value, textArea);
                } catch(err){

                }
            }
        </script> 
    </body>
</html>
