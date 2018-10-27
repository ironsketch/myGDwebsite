<!DOCTYPE html>
    <head>
        <title>Testing an auto parser for creating webpage notes</title>
    </head>
    <body>
        <div id="textArea">
            word top 1
        <div id="t">
            word inner <a href="google.com">link</a>
        </div>
        </div>
        <?php
            function boobs(){            
                $dom = new domDocument;
                $textArea = $dom.getElementById('textArea');
                if(!textArea){
                    die("nope");
                }
                echo "<script type='text/javascript'>alert('$dom->saveHTML()');</script>";
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
