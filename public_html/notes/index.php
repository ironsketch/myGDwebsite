<html>
	<head>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div id="container">
			<div id="top">
                <img style="float:right;padding-right:20px;" src="cat.gif" />
                <div id="title">
					<h1>Programming Language Theory and Practice Notes</h1>
                </div>
			</div>
			<div id="heading">
				<br>Notes from my 2018-19 classes :3 Which includes Foundations of Programming Languages (Lambda Calculus), Types and Programming Languages, Formal Languages, and Logic Programming
			</div>
			<div id="cardHolder">
            <?php
                function get_title($url){
                    $str = file_get_contents($url);
                    if(strlen($str)>0){
                        $str = trim(preg_replace('/\s+/', ' ', $str));
                        preg_match("/\<title\>(.*)\<\/title\>/i",$str, $title);
                    return $title[1];
                    }
                }
                echo "<h3>Formal Languages</h3>";
                $path = "formal_language/";
                    if ($handle = opendir($path)) {
                        while (false !== ($file = readdir($handle))) {
                            if ('.' === $file) continue;
                            if ('..' === $file) continue;
                            $html = explode(".", $file);
                            if($html[1] === "html"){
                                $title = get_title($path . $file);
                                echo "<div id='cardFormal'><span class='cardtitle'>" . $title . "</span><p class='start'><a href='" . $path . $file . "' class='startLink'>Open</a></p></div>";
                            }
                        }
                        closedir($handle);
                    }
                echo "<h3>Homework</h3>";
                 $path = "formal_language/hw/";
                     if ($handle = opendir($path)) {
                         while (false !== ($file = readdir($handle))) {
                             if ('.' === $file) continue;
                             if ('..' === $file) continue;
                             $html = explode(".", $file);
                             if($html[1] === "pdf"){
                                 echo "<br /><a href='" . $path . $file . "'>" . $file . "</a>";
                             }
                         }
                         closedir($handle);
                     }
                echo "<h3>Types</h3>";
                $path = "types/";
                    if ($handle = opendir($path)) {
                        while (false !== ($file = readdir($handle))) {
                            if ('.' === $file) continue;
                            if ('..' === $file) continue;
                            $html = explode(".", $file);
                            if($html[1] === "html"){
                                $title = get_title($path . $file);
                                echo "<div id='cardType'><span class='cardtitle'>" . $title . "</span><p class='start'><a href='" . $path . $file . "' class='startLink'>Open</a></p></div>";
                            }
                        }
                        closedir($handle);
                    }
                echo "<h3>Logic Programming</h3>";
                $path = "logic_programming/";
                    if ($handle = opendir($path)) {
                        while (false !== ($file = readdir($handle))) {
                            if ('.' === $file) continue;
                            if ('..' === $file) continue;
                            $html = explode(".", $file);
                            if($html[1] === "html"){
                                $title = get_title($path . $file);
                                echo "<div id='cardLogic'><span class='cardtitle'>" . $title . "</span><p class='start'><a href='" .  $path . $file . "' class='startLink'>Open</a></p></div>";
                            }
                        }
                        closedir($handle);
                    }
                echo "<h3>Lambda</h3>";
                $path = "lambda/";
                    if ($handle = opendir($path)) {
                        while (false !== ($file = readdir($handle))) {
                            if ('.' === $file) continue;
                            if ('..' === $file) continue;
                            $html = explode(".", $file);
                            if($html[1] === "html"){
                                $title = get_title($path . $file);
                                echo "<div id='cardLambda'><span class='cardtitle'>" . $title . "</span><p class='start'><a href='" . $path . $file . "' class='startLink'>Open</a></p></div>";
                            }
                        }
                        closedir($handle);
                    }
                echo "<h3>BOOK Sudkamp</h3>";
                 $path = "sudkamp/";
                     if ($handle = opendir($path)) {
                         while (false !== ($file = readdir($handle))) {
                             if ('.' === $file) continue;
                             if ('..' === $file) continue;
                             $html = explode(".", $file);
                             if($html[1] === "html"){
                                 $title = get_title($path . $file);
                                 echo "<div id='cardFormal'><span class='cardtitle'>" . $title . "</span><p class='start'><a           href='" . $path . $file . "' class='startLink'>Open</a></p></div>";
                             }
                         }
                         closedir($handle);
                     }
                echo "<h3>BOOK Pierce</h3>";
                 $path = "pierce/";
                     if ($handle = opendir($path)) {
                         while (false !== ($file = readdir($handle))) {
                             if ('.' === $file) continue;
                             if ('..' === $file) continue;
                             $html = explode(".", $file);
                             if($html[1] === "html"){
                                 $title = get_title($path . $file);
                                 echo "<div id='cardType'><span class='cardtitle'>" . $title . "</span><p class='start'><a           href='" . $path . $file . "' class='startLink'>Open</a></p></div>";
                             }
                         }
                         closedir($handle);
                     }
                echo "<h3>PDFs</h3>";
                 $path = "pdfs/";
                     if ($handle = opendir($path)) {
                         while (false !== ($file = readdir($handle))) {
                             if ('.' === $file) continue;
                             if ('..' === $file) continue;
                             $html = explode(".", $file);
                             if($html[1] === "html"){
                                 $title = get_title($path . $file);
                                 echo "<div id='cardLogic'><span class='cardtitle'>" . $title . "</span><p class='start'><a           href='" . $path . $file . "' class='startLink'>Open</a></p></div>";
                             }
                         }
                         closedir($handle);
                     }
                ?>          
			</div>
			<div id="bottom">
				<br> This is a bunch of text n' stuff!
				<p class="copyright">Copyright &copy; 2017</p>
			</div>
		</div>
	</body>
</html>

