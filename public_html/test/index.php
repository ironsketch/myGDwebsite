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
        </div>

        <input type='text' id='pinput' onkeyup="butts()">

        <script>
            function butts(){
                try{
                    var ipbox = document.getElementById('pinput');
                    katex.render(ipbox.value, textArea);
                    var textA = document.getElementById('textArea');
                }
                    catch(err){
                    }
            }
        </script>

        <?php
            function boobs(){
                $body = file_get_contents('http://artbergin.com/test/index.php');
                $title = "the date";
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
