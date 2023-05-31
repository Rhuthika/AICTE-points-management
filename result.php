
<?php
if(isset($_POST['submit']))
{

	include('dbcon.php');
	
	$NAME=$_POST['name'];
	$USN =$_POST['usn'];
	$sql="SELECT * FROM `student_data` WHERE `u_name`='$NAME' AND `id`='$USN'";
    $sql2="SELECT * FROM `user_mark` WHERE `u_name`='$NAME' AND `id`='$USN'";
$run=mysqli_query($con,$sql);
$run2=mysqli_query($con,$sql2);
   $row=mysqli_num_rows($run2);
   $data2=mysqli_fetch_assoc($run2);
       
if(mysqli_num_rows($run)>0)
{
$data=mysqli_fetch_assoc($run);
?>

<html>
<head>
    <title>Result</title>
<link rel="stylesheet" href="csss/result.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php"><b>HOME</b></a></li>
                <li><a href="admin/aboutus.php"><b>ABOUT</b></a></li>
                <li><a href="admin/contactus.php"><b>CONTACT</b></a></li>
                <li><a href="login.php"><b>ADMIN LOGIN</b></a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="result.php">
          <table class="table1">
            
              <tr>
              <th>Name :</th>
                <td><?php echo $data['u_name'] ?></td>
              </tr>
              <tr>
              <th>Branch :</th>
              <td><?php echo $data2['u_branch']; ?></td>
              </tr>
              <tr>
              <th>USN :</th>
              <td><?php echo $data['id']; ?></td>
              </tr>
              <tr>
              <th>Activity :</th>
              <td><?php echo $data2['u_activity']; ?></td>
              </tr>
              <tr>
              <th>sem :</th>
              <td><?php echo $data['u_sem']; ?></td>
              </tr>
          </table>
          <!-- <table class="table2">
              <tr>
               <th>Suject</th><th>Half Yealy Exam (Score) </th><th>Annual Exam (Score)</th><th>Total</th><th>Max. Marks</th>
              </tr>
              <tr>
                  
              <th>Hindi</th>
                <th><?php echo $data2['u_hindi1']; ?></th>
                <th><?php echo $data2['u_hindi2']; ?></th>
                <th><?php echo $total1=$data2['u_hindi1']+$data2['u_hindi2']; ?> </th>
                <th>200</th>
              </tr>
              <tr>  
              <th>English</th>
                <th><?php echo $data2['u_english1']; ?></th>
                <th><?php echo $data2['u_english2']; ?></th>
                <th><?php echo $total2=$data2['u_english1']+$data2['u_english2']; ?> </th>
                <th>200</th>
              </tr>
              <tr>
              <th>Math</th>
                  <th><?php echo $data2['u_math1']; ?></th>
                  <th><?php echo $data2['u_math2']; ?></th>
                  <th><?php echo $total3=$data2['u_math1']+$data2['u_math2']; ?> </th>
                  <th>200</th>
              </tr>
              <tr>
              <th>Physics</th>
                  <th><?php echo $data2['u_physics1']; ?></th>
                  <th><?php echo $data2['u_physics2']; ?></th>
                  <th><?php echo $total4=$data2['u_physics1']+$data2['u_physics2']; ?></th>
                  <th>200</th>
              </tr>
              <tr>
              <th>Chemestry</th>
                  <th><?php echo $data2['u_chemestry1']; ?></th>
                  <th><?php echo $data2['u_chemestry']; ?></th>
                  <th><?php echo $total5=$data2['u_chemestry1']+$data2['u_chemestry']; ?></th>
                  <th>200</th>
              </tr>
              <tr>
              <th>Total</th>
                  <th>
                   <?php echo $data2['u_hindi1']+$data2['u_english1']+$data2['u_math1']+$data2['u_physics1']+$data2['u_chemestry1']; ?>
                  </th>
                  <th>
                  <?php echo $data2['u_hindi2']+$data2['u_english2']+$data2['u_math2']+$data2['u_physics2']+$data2['u_chemestry']; ?>
                  </th>
                  
                  <th><span class="colorchange"><?php echo $all=$total1+$total2+$total3+$total3+$total4+$total5; ?></span></th>
                 
                  <th>1000</th>
                  
              </tr>    
             
          </table> -->
             <!-- <h1>You Are <span class="colorchange1"><?php 
                        if($all<=500) 
                        {
                            echo "Fail";
                        }
                       else
                       {
                           echo"Pass";
                       }
                      ?></span></h1> -->
            <marquee scrollamount="5"><p> Kindly check your points and in case of any discrepany contact the admin. </p>
                </marquee>
       </form>
      </div>
    </header>
    
</body>
</html>
<?php
}
else
{
?>
<script>
alert('Record Not found');
    window.open('index.php','_self');
</script>
<?php
}

}

?>
