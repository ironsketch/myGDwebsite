<!DOCTYPE html>
	<head>
		<title>the date</title>
	</head>
	<body>
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

                <div id="demo">
            <a href='index.php?hello=true'>Run PHP Function</a>
        </div>
    </body>
</html>

	</body>
</html>
