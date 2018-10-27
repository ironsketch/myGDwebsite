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
            var d = new Date();
            d.setTime(d.getTime()+36*24*60*60*1000);            
            document.cookie = "katex=meow;" + "expires=" + d + ";" + "path=/";
            alert(document.cookie);
        </script>
    </body>
</html>
