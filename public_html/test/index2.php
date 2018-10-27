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
                d.setTime(d.getTime() + (exdays*24*60*60*1000));
                var expires = "expires="+ d.toUTCString();
                document.cookie = "katex=" + ipbox + "," + expires + "," + "path=/";
                alert(document.cookie);
        </script>
    </body>
</html>
