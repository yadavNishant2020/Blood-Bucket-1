<?php
session_start();

include 'dbcon.php';
?>
<?php
      $name = mysqli_real_escape_string($con , $_POST['name']) ;
      $username = mysqli_real_escape_string($con , $_POST['username']) ;
      $password = mysqli_real_escape_string($con , $_POST['password']) ;
      $confirm_password = mysqli_real_escape_string($con , $_POST['confirm_password']) ;

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpassword = password_hash($confirm_password, PASSWORD_BCRYPT);
    
    $usernamequery = " select * from registration where username = '$username' ";
    $query = mysqli_query($con , $usernamequery);
    if($query){

    
    $usernamecount =  mysqli_num_rows($query);

    if($usernamecount>0){
        ?>
<script>
alert("username alredy exist");
</script>
<?php
    }else{
        if($password == $confirm_password){
             $insertquery = "insert into registration (name, username, password, confirm_password) VALUES('$name', '$username', '$pass', '$cpassword' )";
             if(strlen(trim($_POST['password'])) < 5){
                ?>
<script>
alert("Password cannot be less than 5 characters");
</script>
<?php
             }
            else{
                
             $iquery = mysqli_query($con, $insertquery);
             if($iquery){
                ?>
<script>
alert("Now please Sign In");
</script>
<?php
            }
            else{
                ?>
<script>
alert("insertion error .");
</script>
<?php
            }
        }
        }else{
            ?>
<script>
alert("please match the password and current password");
</script>
<?php
        }
    }

    }
?>