<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>

<html>
<head>
    <title>Homepage</title>
<link rel="stylesheet" href="../csss/secondstep.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          
          <form method="post" action="thirdstep.php">
              <h2>Step 2/2 : Add Activity points</h2>
         
          <td><input type="hidden" name="u_name" class="u_name" value="<?php  echo $_POST['u_name']; ?>" required/></td>
          
          <td><input type="hidden" name="id" class="id" value="<?php  echo $_POST['id']; ?>" required/></td>
          
              
              
          <table class="table1">
              <span> <h4 class="h_3">Acitivity Points (A)</h4></span>
             <tr>
                <th>Name</th>   <th> USN </th> <th>activity points</th><th>Branch</th><th>Sem</th>
             </tr>
             <tr>
                 <td><input type='text' name='u_name' placeholder='Name' required/></td>
                 <td><input type='text' name='id' placeholder='USN' required/></td>
                 <td><input type='text' name='u_activity' placeholder='activity' required/></td>
                 <td><input type='text' name='u_branch' placeholder='branch' required/></td>
                 <td><input type='text' name='u_sem' placeholder='sem' required/></td>
             </tr>
             <tr>
             <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>   
             </tr>
             </table>
             
       
       </form>
      </div>
    </header>
    
</body>
</html>
<?php
if(isset($_POST['submit1']))
{ 
    include('../dbcon.php');
    $id=$_POST['id'];
    $username=$_POST['u_name'];
    $branch=$_POST['u_branch'];
    $sem=$_POST['u_sem'];
    $mobile=$_POST['mobile'];
    
    
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    $sql="INSERT INTO `Student_data`(`id`, `u_name`, `u_branch`, 'u_sem'`u_mobile`) VALUES ('$id','$username','$branch','$sem','$mobile')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('1step Complete and this is second  Step');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        </script>
        <?php 
    }
}

?>
