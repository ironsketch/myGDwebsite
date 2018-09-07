<html>
	<head>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div id="container">
			<div id="top">
				<div id="title">
					<h1>Documentation</h1>
				</div>
				<a href="https://edurange.org/"><img src="logo_menu.png" /></a>
			</div>
			<div id="heading">
				Alright here we go. Plans:
				<br>
				Folder with all edurange documentation
				<br>
				Javascript to populate each...?
				<br>
				Displayed beautifully with square represenations of each just like in google codelabs
				<br>
				<a href="https://codelabs.developers.google.com/">Google CodeLabs</a>
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
                $path = "docs/";
                    if ($handle = opendir($path)) {
                        while (false !== ($file = readdir($handle))) {
                            if ('.' === $file) continue;
                            if ('..' === $file) continue;
                            $html = explode(".", $file);
                            if($html[1] === "html"){
                                $title = get_title("docs/" . $file);
                                echo "<div id='card'><span class='cardtitle'>" . $title . "</span>";//"<p class='start'><a href='docs/" . $file . "' class='startLink'>Start</a></p></div>";
                        }
                    closedir($handle);
                    }
                ?>          
                <div id="card">
					This is where a short description would go for what this document has.
					<p class="start"><a href="" class="startLink">Start</a></p>
				</div>
			</div>
			<div id="bottom">
				<img src="logo_menu.png" />
				<br> This is a bunch of text n' stuff!
				<p class="copyright">Copyright &copy; 2017</p>
			</div>
		</div>
	</body>
</html>

