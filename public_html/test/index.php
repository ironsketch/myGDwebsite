<html>
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
                document.getElementById('text').innerHTML = ipbox.value;
            katex.render("f(a,b,c) = (a^2+b^2+c^2)^3", text);
            }
        </script>
    </body>
</html>
