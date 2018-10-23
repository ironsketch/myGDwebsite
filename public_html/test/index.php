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
                    var html = katex.renderToString(ipbox, {throwOnError: false});
                    document.getElementById("demo").innerHTML = html;
                    katex.render(ipbox.value, text);
                }
                    catch(err){
                    }
            }
        </script>
        <div id="demo">
        </div>
    </body>
</html>
