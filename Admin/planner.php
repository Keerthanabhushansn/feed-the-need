<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin functions</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>
<body>


<?php
if($_SESSION['loginstatus']=="")
{
  header("location:admimlogin.php");
}
?>

    <center>
   <div style="width:800px; height:800px; box-shadow:-10px 10px 5px #CCC">
     
<div style="height:700px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
<link rel="stylesheet" href="css\style1.css" />
  </head>
  <br> <tr><td colspan="4">&nbsp;</td></tr>   
   <tr><td colspan="2" align="center" class="toptd"><font size=8px>PLANNER</font></td></tr>
    <div class="container">
    <font size="6px" >
 
      
 

 <font size="5px" color="">
  Share your information for helping us to avoid food wastage !!!!.
   
   <br>
 
   </font></div>
            <center>
<img src="images/plan.png " width="500px" height="300px" >
</center>

<h2> 


<a href="analyser.php">Click on the link!!!!!</a>
</h2>

</p></font>
        
      
      
  </div>
  
       </div>


   </div>
    </center>

   
</body>
</html>