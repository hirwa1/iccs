<?php
  session_start();
   if ($_SESSION['id']==0) {
  header('location:logout.php');
  } else{
?>


<!DOCTYPE html>
<?php 
require_once('dbcon.php');


//Code for Registration 
if(isset($_POST['sub']))
{
  $title=$_POST['title'];
  $content=$_POST['content'];
  $dates=$_POST['dates'];
  $uid=$_SESSION['id'];
  $uh="1";
  $province="Kigali";
  $district="Kicukiro";
  $sector="Kagarama";

  
  
$sql=mysqli_query($con,"insert into prob  (pid,content,dates,uid,uid2,province,district,sector,title)
                                 values(NULL,'$content','$dates','$uh','$uid','$province','$district','$sector','$title' )");

 

}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home" >Home</a>
  <a href="javascript:void(0);" id="myBtn">Ask</a>
  <a href="">Veiw your problems</a>
  <a href="#about">About Us</a>
  <a href="">Contact Us</a>
   <a href="logout.php">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a><br>
</div>

<div  class="cld">
  <h1>Electonic Citizen Contribution System</h1>
  <button>Welcome</button><br><br>
  <p><i>Feel free to sumbmit your Problem , We are here to serve you .<br>

    You can submit your problem and get response in few days for free . </i></p>
</div>

<script>

</script>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Ask here</p>
    <form action="dashboard.php" method="post">
      <input type="text" name="title" placeholder="Enetr yout problem title ">
      <input type="date" value="<?php echo date('Y-m-d') ;?>"  name="dates" readonly>
     <textarea name="content"></textarea>
       <select name="province" >
        <option>kigali city</option>
      </select>
      <select name="district" >
        <option>kicukiro</option>
      </select>
      <select name="district" >
        <option>kicukiro</option>
        <option>kagarama</option>
        <option>Gatenga</option>
        <option>Niboye</option>
      </select>
      
<input type="submit" name="sub" value="Send">

    </form>
  </div>

</div>






<footer><center><br>
  
  <ul >
    <li>Our Social Media</li>
    <li class="fa fa-facebook"></li>
    <li class="fa fa-instagram"></li>
    <li class="fa fa-whatsapp"></li>
    <li class="fa fa-youtube"></li>
    <li class="fa fa-twitter"></li>
    <li class="fa fa-linkedin"></li>

  </ul>
  <p> &copy; Electonic Citizen COntribution System 2020</p></center>
  <br>
</footer>
<script type="text/javascript" src="main.js"></script>
</body>


</html>
<?php } ?>
