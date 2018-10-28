<!DOCTYPE html>
    <head>
        <title>Testing an auto parser for creating webpage notes</title>
    </head>
    <body>
        <div id="textArea">
            word top 5
        <div id="t">
            word inner <a href="google.com">link</a>
        </div>
        </div>
        <?php
            $dochtml = new DOMDocument();
            $dochtml->loadHTML($strhtml);
            function boobs(){            
                if(is_null($dochtml->getElementById('textArea'))){
                    echo "<script>alert('im null');</script>";
                }
            }
            if (isset($_GET['hello'])) {
                boobs();
            }
        ?>
        <div id="demo">
            <a href='2index.php?hello=true'>Run PHP Function</a>
        </div>
    </body>
</html>
