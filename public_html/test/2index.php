<!DOCTYPE html>
    <head>
        <title>Testing an auto parser for creating webpage notes</title>
    </head>
    <body>
        <div id="textArea">
            word top 8
        <div id="t">
            word inner <a href="google.com">link</a>
        </div>
        </div>
        <?php
            function boobs(){
                echo "<script>alert('i got to boobs');</script>";
                $dom = new domDocument('1.0', 'iso-8859-1');
                $dom->loadHTML($html);
                $ta = $dom->getElementById('textArea');
                $html = $dom->saveHTML();
                echo $ta;
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
