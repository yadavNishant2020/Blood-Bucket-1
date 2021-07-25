<?php
session_start();
include 'dbcon.php';
    $susername = mysqli_real_escape_string($con , $_POST['susername']) ;
    $spassword = mysqli_real_escape_string($con , $_POST['spassword']) ;
          
    $user_name_search = "select * from registration where username = '$susername'";
    $query = mysqli_query($con, $user_name_search);

    if($query){
    $username_count = mysqli_num_rows($query);
    
    if($username_count)
    {
      $pass = mysqli_fetch_assoc($query);

      $db_pass= $pass['password'];

      $pass_decode = password_verify($spassword, $db_pass);

        if($pass_decode)
        {
            // echo "login successful";
            header('location:user_after_signin.php');

        }
        else
        {
            ?>
<script>
alert("Password Incorrect");
</script>
<?php
        }
    }
    else 
    {
        ?>
<script>
alert("Incorrect username");
</script>
<?php
    }
    }   
?>