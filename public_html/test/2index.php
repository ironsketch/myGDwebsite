<!DOCTYPE html>
    <head>
        <title>Testing an auto parser for creating webpage notes</title>
    </head>
    <body>
        <div id="textArea">
            word top 3
        <div id="t">
            word inner <a href="google.com">link</a>
        </div>
        </div>
        <?php
            function boobs(){
                echo "<script></script>";
                //$dom = new domDocument;
                //$dom->loadHTML($html);
                $html = file_get_contents('http://artbergin.com/test/index.php');
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
