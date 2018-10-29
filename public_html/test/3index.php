<?php
    $user=$_POST['name'];
    echo $user;
?>
<html><head>
</head><body>

<form action="<?php $_PHP_SELF ?>" method="post">
<input type="text" name="name"/>
<input type="submit" />
</form>

</body>
</html>
