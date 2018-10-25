<!DOCTYPE html>
    <head>
        <title>Testing an auto parser for creating webpage notes</title>
        <link rel="stylesheet" href="katex.min.css">
        <script src="katex.js">
        </script>
    </head>
    <body>
        <h1>My test page</h1>
        <div id="text">
        </div>
        <input type='text' id='pinput' onkeyup="butts()">
        <script>
            var ipbox = document.getElementById('pinput');
                function butts(){
                try{
                    var html = katex.renderToString("c = \\pm\\sqrt{a^2 + b^2}", {
                        throwOnError: false

                });
                    //var html = katex.renderToString(ipbox, {});
                    document.getElementById("demo").outerHTML = html;
                    katex.render(ipbox.value, text);
                }
                    catch(err){
                    }
            }
        </script>
        <?php
            function boobs(){
                //$divs = $dom->getElementsByTagName('div');
                $title = "the date";
                $body = "BUTTTTTTTTTTTTTTTTTs";
                //$myfile = fopen("butt/test.php","w");
                $myfile = fopen("butt/imaphppage.php", "w") or die ("unable to OPEN MOTHER FUCKER!");
                $header = "<!DOCTYPE html><head><title>$title</title></head>\n<body>$body</body></html>";
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
