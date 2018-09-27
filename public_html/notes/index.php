<html>
	<head>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div id="container">
			<div id="top">
				<div id="title">
					<h1>NOTES</h1>
				</div>
			</div>
			<div id="heading">
				<br>Notes from classes
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
                $path = "formal_language/";
                    if ($handle = opendir($path)) {
                        while (false !== ($file = readdir($handle))) {
                            if ('.' === $file) continue;
                            if ('..' === $file) continue;
                            $html = explode(".", $file);
                            if($html[1] === "html"){
                                $title = get_title($path . $file);
                                echo "<div id='card'><span class='cardtitle'>" . $title . "</span><p class='start'><a href='" . $path . $file . "' class='startLink'>Open</a></p></div>";
                            }
                        }
                        closedir($handle);
                    }
                $path = "types/";
                    if ($handle = opendir($path)) {
                        while (false !== ($file = readdir($handle))) {
                            if ('.' === $file) continue;
                            if ('..' === $file) continue;
                            $html = explode(".", $file);
                            if($html[1] === "html"){
                                $title = get_title("docs/" . $file);
                                echo "<div id='card'><span class='cardtitle'>" . $title . "</span><p class='start'><a href='" . $path . $file . "' class='startLink'>Start</a></p></div>";
                            }
                        }
                        closedir($handle);
                    }
                $path = "logic_programming/";
                    if ($handle = opendir($path)) {
                        while (false !== ($file = readdir($handle))) {
                            if ('.' === $file) continue;
                            if ('..' === $file) continue;
                            $html = explode(".", $file);
                            if($html[1] === "html"){
                                $title = get_title("docs/" . $file);
                                echo "<div id='card'><span class='cardtitle'>" . $title . "</span><p class='start'><a href='" .  $path . $file . "' class='startLink'>Start</a></p></div>";
                            }
                        }
                        closedir($handle);
                    }
                $path = "lambda/";
                    if ($handle = opendir($path)) {
                        while (false !== ($file = readdir($handle))) {
                            if ('.' === $file) continue;
                            if ('..' === $file) continue;
                            $html = explode(".", $file);
                            if($html[1] === "html"){
                                $title = get_title("docs/" . $file);
                                echo "<div id='card'><span class='cardtitle'>" . $title . "</span><p class='start'><a href='" . $path . $file . "' class='startLink'>Start</a></p></div>";
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

