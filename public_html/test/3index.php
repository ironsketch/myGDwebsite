<html><head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<?php
    if(isset($_POST['user'])){
        $user=$_POST['user'];
        echo $user;
    }
?>
</head><body>

<form action="<?php $_PHP_SELF ?>" method="post">
<input type="text" placeholder="username" id="uname" />
<button type="button" onclick="submit_form();">Submit</button>
</form>

<script>
    function submit_form(){
        var data1=$("#uname").val();
        var dataToSend='user='+data1;
        $.ajax({
            url: '3index.php',
            type: 'POST',
            data: {dataToSend},
            async: true,
        });
    }
</script>

</body>
</html>
