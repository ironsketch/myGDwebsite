<!DOCTYPE html>
    <head>
        <title>Testing an auto parser for creating webpage notes</title>
    </head>
    <body>
        <div id="textArea">
            word top
        <div id="t">
            word inner <a href="google.com">link</a>
        </div>
        </div>
        <?php
            function boobs(){            
                $dom = new domDocument;
                $dom->preserveWhiteSpace = false;
                $dom->formatOutput = true;
                $dom->load($html_string);
                $textArea = $dom->getElementById('textArea');
                echo $textArea;
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
