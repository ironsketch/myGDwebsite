<!DOCTYPE html>
    <head>
        <title>Note writer</title>
        <link rel="stylesheet" href="katex.min.css">
        <script src="katex.js"></script>
        <?php
            $input=$_POST['input'];
            $location=$_POST['location'];
            $title=$_POST['title'];
            $date=$_POST['date'];

            $myFile = fopen("butt/".$date.".php", "w") or die ("Unable to open MF!");
            $body='<!DOCTYPE html><head><title>'.$title.'</title><link rel="stylesheet" href="../katex.min.css"><script src="../katex.js"></script></head><body><div id="textArea"></div><script>try{katex.render("'.$input.'",textArea);} catch(err){}</script></body></html>';
            fwrite($myFile,$body);
            fclose($myFile);            
        ?>
    </head>
    <body>
        <h1>Test h1</h1>
        <div id="textArea">
        </div> 
        <form action="<?php $_PHP_SELF ?>" method="post">
            <input type="text" id="input" name="input" onkeyup="convert()" />
            <br />Location: <input type="text" name="location">
            <br />Title: <input type="text" name="title">
            <br />Date: <input type="text" name="date">
            <input type="submit" />
        </form> 
        <script>
            katex.render("\lambda abc",textArea,{displayMode:false,});
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
