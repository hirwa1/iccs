
<!DOCTYPE html>
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
   <a href="">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a><br>
</div>

<div  class="cld">
  <h1>Electonic Citizen Contribution System</h1>
  <button>Welcome</button><br><br>
  <div style="margin-left: 10%; ">
    <table role="table" style="background-color: white; opacity: 0.9; color: #0073bc;  ">
  <thead role="rowgroup">
    <tr role="row">
      <th role="columnheader">N0</th>
      <th role="columnheader">Submit Date</th>
      <th role="columnheader">Respose Date</th>
      <th role="columnheader">Title</th>
      
      
      <th role="columnheader">View More</th>
     
    </tr>
  </thead>
  <tbody role="rowgroup">
    <tr role="row">
      <td role="cell">1</td>
      <td role="cell">20  /12 /2020</td>
      <td role="cell">NO </td>
      <td role="cell">Akarengane</td>
      <td role="cell"><a href="#">View more</a></td>
      
      
      
    </tr>
  </tbody>
</table>
  </div>
</div>

<script>

</script>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Register here</p>
    <form>
      <input type="text" name="title" placeholder="Enetr yout problem title ">
     <textarea></textarea>
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
