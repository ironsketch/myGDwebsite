<html><head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
function submit_form(){                                                                                                              
                                                                                                                                           var data1=$("#uname").val();                                                                                                     
     var dataTosend='user='+data1;                                                                                                    
                                                                                                                                           $.ajax({                                                                                                                         
         url: '3index.php',                                                                                                                    type: 'POST',                                                                                                                         data: {dataTosend},                                                                                                          
         async: true,                                                                                                                 
     });                                                                                                                              
 }
</script>
</head><body>

<form method="post">
<input type="text" placeholder="username" id="uname" />
<button type="button" onclick="submit_form();">Submit</button>
</form>

<?php
    if(empty($_POST['user'])){
        echo "username is required";
    } else {
        $user=$_POST['user'];
        echo $user;
    }
?>

</body>
</html>
