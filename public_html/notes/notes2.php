<!DOCTYPE html>
    <head>
        <title>Note Writer</title>
        <link rel="stylesheet" href="katex.min.css">
        <link rel="stylesheet" href="notes.css">
        <script src="katex.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.10.0/dist/katex.min.css" integrity="sha384-9eLZqc9ds8eNjO3TmqPeYcDj8n+Qfa4nuSiGYa6DjLNcv9BtN69ZIulL9+8CqC9Y" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/katex@0.10.0/dist/katex.min.js" integrity="sha384-K3vbOmF2BtaVai+Qk37uypf7VrgBubhQreNQe9aGsz9lB63dIFiQVlJbr92dw2Lx" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/katex@0.10.0/dist/contrib/auto-render.min.js" integrity="sha384-kmZOZB5ObwgQnS/DuDg6TScgOiWWBiVt0plIRkZCmE6rDZGrEOQeHM5PcHi+nyqe" crossorigin="anonymous"></script>
        <?php
            $before=$_POST['input'];
            $location=$_POST['location'];
            $title=$_POST['title'];
            $date=$_POST['date'];
            $input1=str_replace('\\',"\\\\",$before);
            $input=str_replace('\\n','',$input1);

            $myFile = fopen($location.$date.".php", "w") or die ("Unable to open MF!");
        $body='<!DOCTYPE html><head><title>'.$title.'</title><link rel="stylesheet" href="../../styles.css"><link rel="stylesheet" href="../../katex.min.css"><script src="../../katex.js"></script></head><body><div id="container"><div id="top"><img style="float:right;padding-right:20px;width:250px;" src="../../cat3.gif" /><div id="title"><h1>'.$title.'</h1></div></div><div id="top_nav"><a class="top_nav" href="formal_language/">Formal</a><a class="top_nav" href="logic/">Logic</a><a class="top_nav" href="lambda/">Lambda</a><a class="top_nav" href="types/">Types</a></div><div id="cardHolder"><center><div id="textArea" style="padding-top:20px"></div><script>try{katex.render("'.$input.'",textArea);} catch(err){}</script></center></div><div id="bottom"><br> Thanks for checking out my mafff and pergrehming sight.<p class="copyright">Copyright &copy; 2017 and beyond</p></div></div></body></html>';
            fwrite($myFile,$body);
            fclose($myFile);            
        ?>
    </head>
    <body>
        <h1>Note Writer</h1>
        <div id="textArea">
        </div> 
        <div id="formDiv">
        <form action="<?php $_PHP_SELF ?>" method="post" id="form">
            <textarea id="input" name="input" onkeyup="convert()" /></textarea>
            <table style="border:0px">
            <tr><td><br />Location: </td><td><input type="text" name="location"></td></tr>
            <tr><td><br />Title: </td><td><input type="text" name="title"></td></tr>
            <tr><td><br />Date: </td><td><input type="text" name="date"></td></tr></table>
            <br /><input type="submit" />
        </form> 
        </div>
        <script>
            function convert(){
                try{
                    var input = document.getElementById('input');
                    renderMathInElement(input,{delimiter: [{left: "$$", right: "$$", display: true}]});
                    //katex.render(input.value, textArea);
                } catch(err){

                }
            }
        </script> 
    </body>
</html>
