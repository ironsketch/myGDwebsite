<!DOCTYPE html>
    <head>
        <title>Testing an auto parser for creating webpage notes</title>
        <link rel="stylesheet" href="katex.min.css">
        <script src="katex.js">
        </script>
    </head>
    <body>
        <h1>My test page</h1>
        <div id="textArea">
            PPOOOOOOOOPPPPPPPPPPPPPPPPPPP
            <h3>butts</h3>
        </div>
        <input type='text' id='pinput' onkeyup="butts()">
        <script>
            function butts(){
                try{
                    katex.render(ipbox.value, textArea);
                }
                    catch(err){
                    }
            }
        </script>
        <?php
            function boobs(){
                $title = "the date";
                $dom = new domDocument;
                $body = $dom->getElementById('textArea');
                //$body = 'test';
                $myfile = fopen("butt/imaphppage.php", "w") or die ("unable to OPEN MOTHER FUCKER!");
                $header = "<!DOCTYPE html>\n\t<head>\n\t\t<title>$title</title>\n\t</head>\n\t<body>\n\t\t$body\n\t</body>\n</html>\n";
                fwrite($myfile,$header);
                fclose($myfile);
            }
            if (isset($_GET['hello'])) {
                boobs();
            }
        ?>
        <div id="demo">
            <a href='index.php?hello=true'>Run PHP Function</a>
        </div>
    </body>
</html>
