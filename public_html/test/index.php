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
        <input type='text' id='pinput'>
        <script>
            var ipbox = document.getElementById('pinput');
            ipbox.onkeyup = function(){
                try{
                    katex.render(ipbox.value, text);
                }
                catch(err){

                }
            }
            function myFunction(){
                var textHTML = document.getElementById('text').innerHTML;
            }
        </script>
        <div id="demo">
        </div>
        <button onclick="myFunction()">Click me</button>
        <?php
            $dom = new DOMDocument();
            $dom->loadHTML($html);
            $xpath = new DOMXPath($dom);
            $divContent = $xpath->query('//div[id="text"]');
            var_dump($divContent);
        ?>
    </body>
</html>
