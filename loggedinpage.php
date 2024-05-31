<?php

session_start();
$diarycontent="";
if(array_key_exists("id", $_COOKIE)){
    $_SESSION['id']=$_COOKIE['id'];
}
if(array_key_exists("id",$_SESSION)){
    echo "<p></p>";
    include("connection.php");
    $query="select diary from login_details where id='".mysqli_real_escape_string($link, $_SESSION['id'])."' limit 1";
    $row=mysqli_fetch_array(mysqli_query($link,$query));
    $diarycontent=$row['diary'];
}
else{
    header("Location:index.php");
}
include("header.php");
?>
<style>
      html {
            background: url(./graphics/background2.gif) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top  ">
  <a class="navbar-brand" href="#" style="font-family: 'Rampart One', cursive;font-size:30px">Secret Diary</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <div class="form-inline my-2 my-lg-0">
    <a href='https://portfolio-three-omega-23.vercel.app/#home' target="blank">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-right:30px">Reach us</button></a>
   
    <a href='index.php?logout=1'>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button></a>
    </div>
  </div>
</nav>


<div class="container-fluid" id="container-loggedinpage">
    <div style="text-align:center;font-family: 'Teko', sans-serif;">
<h1 style="margin-bottom:0px;padding-bottom:0px;">What's your STORY?</h1>
<span style="text-align:left;float:left;">
<?php
// echo $_COOKIE['id'];
// echo $_SESSION['id'];
  $query="select email from login_details where id='".mysqli_real_escape_string($link, $_SESSION['id'])."' limit 1";
  $row1=mysqli_fetch_array(mysqli_query($link,$query));
  
echo "<i class='fas fa-user-edit' style='font-size:24px'></i><span class='toggleforms' style='font-family: Satisfy, cursive;'>&nbsp;". $row1['email']."</span>";
?>

</span><span style="margin-top:0px;padding-top:0px;"> pen down your feelings...</span></div>
<textarea id="diary" class="form-control">
<?php
 echo $diarycontent;
?>
</textarea>


</div>
<?php

include("footer.php");

?>