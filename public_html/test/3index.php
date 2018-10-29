<?php
    $user=$_POST['user'];
    echo $user;
    exit();
?>
<html><head>
</head><body>

<form action="<?php $_PHP_SELF ?>" method="post">
<input type="text" placeholder="username" id="uname" />
<input type="submit" />
</form>

</body>
</html>
