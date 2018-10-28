<html><head></head><body>
<form method="post">

<input type="text" placeholder="username" id="uname" />

<input type="password" placeholder="passowrd" id="pwd" />

<button type="button" onclick="submit_form();">Submit</button>

</form>

<script>
function submit_form()

{

    var data1=$("#uname").val();

    var data2=$("#pwd").val();

    var dataTosend='user='+data1+'&pwd='+data2;

    $.ajax({

    url: '3index.php',

        type: 'POST',

        data:dataTosend,

        async: true,

        success: function (data) {

            alert(data)


        },


    });


}
</script>
<?php

$user=$_POST['user'];

$pwd=$_POST['pwd'];

// now this data can be used for any function.
//
// //One can even add this to database.
//
// //We will just echo the data.
//
echo "username=".$user."password=".$pwd;
//
// ?>
</body>
</html>
