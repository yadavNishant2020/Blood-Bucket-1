  <?php
            include 'dbcon.php';

            $id1 = $_GET['id'];

            $updatequery = "delete from org_form where id=$id1";
            $cn= mysqli_query($con, $updatequery);
            if($cn){
                ?>
  <script>
alert("Deleted Successfully");
  </script>
  <?php
                header('location: org_table.php');
            }
            else{
                ?>
  <script>
alert("Operation Not Completed .");
  </script>
  <?php
            }
?>