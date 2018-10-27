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
            $dom = new domDocument;
            $dom->loadHTML($html);
            $textArea = $dom->getElementById('textArea');
        ?>
        <div id="demo">
            <a href='index.php?hello=true'>Run PHP Function</a>
        </div>
    </body>
</html>
