<!DOCTYPE html>
<head><title>NoteTaker</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="container">
<div id="topNav">
<?php
function get_title($url){
    $str = file_get_contents($url);
    if(strlen($str)>0){
        $str = trim(preg_replace('/\s+/', ' ', $str));
        preg_match("/\<title\>(.*)\<\/title\>/i", $str, $title);
        return $title[1];
    }
}
$path = ".";
if($handle = opendir($path)){
    while(false !== ($file = readdir($handle))) {
        if('.' === $file) continue;
        if('..' === $file) continue;
        echo "$path.$file";
    }
}
closedir($handle);
?>
</div>
<div id="cardHolder">
cardHolder
</div>
<div id="bottom">
bottom
</div>
</div>
</body>
</html>
