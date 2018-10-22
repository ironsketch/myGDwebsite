<html>
    <head>
        <title>Testing an auto parser for creating webpage notes</title>
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
            }
        </script>
    </body>
</html>
