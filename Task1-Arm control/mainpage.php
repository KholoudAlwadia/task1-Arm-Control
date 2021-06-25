<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Control Page </title>
    <<link rel="stylesheet" href="mainpagestyle.css">

  </head>
  <body>
<img src="chip.jpg" style="width:100%; height:440px" alt="">


<form action="mainpage.php" method="post">


<div class="row">

  <div class="column">
    <div class="card" style = " height:300px" >
<h1 style =" color: #f2f2f2 ;  padding-left: 80px; padding-top: 30px;"> Engine 1 </h1>
<div class="center">

    <div class="slider">

        <div class="show-value">
          <span id="currentvalue"></span>
          </div>

  <input type="range" min="0" max="180" value="0" step="1" id="custom-slider" name="Engine1">

    <div class="range">
      <div>0</div>
      <div>180</div>
   </div>

</div>
</div>

  </div>
</div>

  <div class="column">
    <div class="card" style = " height:300px; background-color: #5CAAEF;">
      <h1 style =" color: #0f0f24 ;  padding-left: 80px; padding-top: 30px;"> Engine 2 </h1>
      <div class="center">

        <div class="slider">

            <div class="show-value">
              <span id="currentvalue1"></span>
              </div>

      <input type="range" min="0" max="180" value="0" step="1" id="custom-slider1" name="Engine2">

        <div class="range">
          <div>0</div>
          <div>180</div>
       </div>

    </div>
    </div></div>
  </div>



  <div class="column ">
    <div class="card" style = " height:300px; background-color:#07A1C8">
      <h1 style =" color: #f2f2f2 ;  padding-left: 80px; padding-top: 30px;"> Engine 3 </h1>
      <div class="center">

        <div class="slider">

            <div class="show-value">
              <span id="currentvalue2"></span>
              </div>

      <input type="range" min="0" max="180" value="0" step="1" id="custom-slider2" name="Engine3">

        <div class="range">
          <div>0</div>
          <div>180</div>
       </div>

    </div>
    </div></div>
  </div>


  <div class="column" >
    <div class="card" style = " height:300px; ">
      <h1 style =" color: #f2f2f2 ;  padding-left: 80px; padding-top: 30px;"> Engine 4 </h1>
      <div class="center">

        <div class="slider">

            <div class="show-value">
              <span id="currentvalue3"></span>
              </div>

      <input type="range" min="0" max="180" value="0" step="1" id="custom-slider3" name="Engine4">

        <div class="range">
          <div>0</div>
          <div>180</div>
       </div>

    </div>
    </div></div>
  </div>



  <div class="column">
    <div class="card" style = " height:300px;  background-color: #5CAAEF;">
      <h1 style =" color: #0f0f24 ;  padding-left: 80px; padding-top: 30px;"> Engine 5 </h1>
      <div class="center" style="background-color:0f0f24">

        <div class="slider">

            <div class="show-value">
              <span id="currentvalue4"></span>
              </div>

      <input type="range" min="0" max="180" value="0" step="1" id="custom-slider4" name="Engine5">

        <div class="range">
          <div>0</div>
          <div>180</div>
       </div>

    </div>
    </div></div>
  </div>



  <div class="column">
    <div class="card" style = " height:300px;background-color: #07A1C8;">
      <h1 style =" color: #f2f2f2 ;  padding-left: 80px; padding-top: 30px;"> Engine 6 </h1>
      <div class="center">

        <div class="slider">

            <div class="show-value">
              <span id="currentvalue5"></span>
              </div>

      <input type="range" min="0" max="180" value="0" step="1" id="custom-slider5" name="Engine6">

        <div class="range">
          <div>0</div>
          <div>180</div>
       </div>

    </div>
    </div></div>
  </div>

</div>


<input type="submit" name="save" value="save" style="background-color:#5CAAEF ; width:70px; height:28px;border-radius: 13%;margin-left:30px;margin-bottom:10px">


</form>

<form  action="run.php" method="post">
  <input type="submit" name="run" value="run"style="background-color:#07A1C8 ; width:70px; height:28px ;border-radius: 13%; margin-left:30px;margin-bottom:10px">

</form>


<script>

   document.getElementById("custom-slider").addEventListener("input",function(event){let value = event.target.value;
   document.getElementById("currentvalue").innerText = value;
    document.getElementById("currentvalue").classList.add("active");
   document.getElementById("currentvalue").style.left='${value/2}%'; });

 document.getElementById("custom-slider").addEventListener("blur",function(event){
     document.getElementById("currentvalue").classList.remove("active");


 });

 document.getElementById("custom-slider1").addEventListener("input",function(event){let value = event.target.value;
 document.getElementById("currentvalue1").innerText = value;
  document.getElementById("currentvalue1").classList.add("active");
 document.getElementById("currentvalue1").style.left='${value/2}%'; });

document.getElementById("custom-slider1").addEventListener("blur",function(event){
   document.getElementById("currentvalue1").classList.remove("active");


});


document.getElementById("custom-slider2").addEventListener("input",function(event){let value = event.target.value;
document.getElementById("currentvalue2").innerText = value;
 document.getElementById("currentvalue2").classList.add("active");
document.getElementById("currentvalue2").style.left='${value/2}%'; });

document.getElementById("custom-slider2").addEventListener("blur",function(event){
  document.getElementById("currentvalue2").classList.remove("active");


});



document.getElementById("custom-slider3").addEventListener("input",function(event){let value = event.target.value;
document.getElementById("currentvalue3").innerText = value;
 document.getElementById("currentvalue3").classList.add("active");
document.getElementById("currentvalue3").style.left='${value/2}%'; });

document.getElementById("custom-slider3").addEventListener("blur",function(event){
  document.getElementById("currentvalue3").classList.remove("active");


});




document.getElementById("custom-slider4").addEventListener("input",function(event){let value = event.target.value;
document.getElementById("currentvalue4").innerText = value;
 document.getElementById("currentvalue4").classList.add("active");
document.getElementById("currentvalue4").style.left='${value/2}%'; });

document.getElementById("custom-slider4").addEventListener("blur",function(event){
  document.getElementById("currentvalue4").classList.remove("active");


});


document.getElementById("custom-slider5").addEventListener("input",function(event){let value = event.target.value;
document.getElementById("currentvalue5").innerText = value;
 document.getElementById("currentvalue5").classList.add("active");
document.getElementById("currentvalue5").style.left='${value/2}%'; });

document.getElementById("custom-slider5").addEventListener("blur",function(event){
  document.getElementById("currentvalue5").classList.remove("active");


});



</script>

<?php

include "conection.php";

if(isset($_POST['save']))
{
  $Engine1 = $_POST['Engine1'];
  $Engine2 = $_POST['Engine2'];
  $Engine3 = $_POST['Engine3'];
  $Engine4 = $_POST['Engine4'];
  $Engine5 = $_POST['Engine5'];
  $Engine6 = $_POST['Engine6'];


$off=0;
    $edit = mysqli_query($db, "UPDATE `robot-arm` SET `Engine 1`='$Engine1',`Engine 2`='$Engine2',`Engine 3`='$Engine3',`Engine 4`='$Engine4',`Engine 5`='$Engine5',`Engine 6`='$Engine6',`Status`='$off' WHERE id='1'");

    if(!$edit)
    {
        echo mysqli_error($db);
    }
}

?>
  </body>

</html>
