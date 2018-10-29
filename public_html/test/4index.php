<!DOCTYPE html>
    <head>
        <title>Note writer</title>
        <link rel="stylesheet" href="katex.min.css">
        <script src="katex.js"></script>
        <?php
            $user=$_POST['name'];
            $katex=$_POST['katex'];
            echo $user."\n";
            echo $katex;
        ?>
    </head>
    <body>
        <h1>Test h1</h1>
        
        <form action="<?php $_PHP_SELF ?>" method="post">
            <input type="text" id="finKatex" name="katex" />
            <input type="text" id="input" name="name" onkeyup="convert()" />
            <input type="submit" />
        </form> 
        <script>
            function convert(){
                try{
                    alert('got to try');
                    var input = document.getElementById('input');
                    katex.render(input.value, finKatex);
                } catch(err){

                }
            }
        </script> 
    </body>
</html>
