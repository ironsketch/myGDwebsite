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
                    var d = new Date();
                    d.setTime(d.getTime() + (exdays*24*60*60*1000));
                    var expires = "expires="+ d.toUTCString();
                    cipbox = "cipbox="+ipbox;
                    document.cookie = "cname=katex" + ";" + cipbox + ";" + expires + ";";
                }
                    catch(err){
                    }
            }
        </script>

        <?php
            $dom = new domDocument;
            function boobs(){
                $title = "the date";
                if(!isset($_COOKIE["katex"])) {
                echo "Cookie named katex is not set!";
                } else {
                    echo "Cookie katex is set!<br>";
                    echo "Value is: " . $_COOKIE["katex"];

                }
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
