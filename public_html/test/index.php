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
            ipbox.onkeyup = butts();
                function butts(){
                try{
                    katex.render(ipbox.value, text);
                    var html = katex.renderToString(ipbox, {throwOnError: false});
                    alert('butts');
                    document.getElementById("demo").innerHTML = html;
                }
                    catch(err){
                }
            }
        </script>
        <div id="demo">
        </div>
    </body>
</html>
