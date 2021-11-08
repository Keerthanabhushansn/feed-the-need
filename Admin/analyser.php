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
   <div style="width:1000px; height:900px; box-shadow:-10px 10px 5px #CCC">
     
<div style="height:900px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
<link rel="stylesheet" href="css\style1.css" />
  </head>
  <br> <tr><td colspan="4">&nbsp;</td></tr> 
   <br> <tr><td colspan="4">&nbsp;</td></tr>  
   <tr><td colspan="2" align="center" class="toptd">
    <font size=8px><b>REPORT ANALYSER</b></font> </td></tr>
     
    <div class="container">
    <title>Analyser</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
    <div class="container">
      <h4>Food to be cooked</h4>
      <h1 id="balance">=0.00</h1>
      <div class="inc-exp-container">
        <div>
          <h4>Actual Invited People</h4>
          <p id="money-plus" class="money-plus">
            +0.00
          </p>
        </div>
        <div>
          <h4>Estimated People Attending</h4>
          <p id="money-minus" class="money-minus">
            -0.00
          </p>
        </div>
      </div>

      <h3>History</h3>
      <ul id="list" class="list">
        <!-- <li class="minus">
          Cash <span>-$400</span
          ><button class="delete-btn">x</button>
        </li> -->
      </ul>
      <h3>Add New Event</h3>
      <form id="form">
          <div class="form-control">
              <label for="text">Event Name</label>
              <input type="text" id="text" placeholder="Enter Only event name...."/>
          </div>
          <div class="form-control">
              <label for="amount">Enter No of people invited & attending <br> 
 (invited-attending)



              </label>
              <input type="number" id="amount" placeholder="Enter No of people ...">
          </div>


          <button class="btn">GENERATE</button>


 
  <div class="f_nav">
    <ul>
      <li class="active"><a href="index.php">Back</a></li>      
     <br>
        </br>    
            
            </ul>
  </div>

    </div>
  <div class="clear"></div>
</div>
</div>
</div>
      </form>
    </div>
</div>
    <!-- JavaYscript Project  -->
    <script src="js\script.js"></script>
  
       
      
  
    </center>
    
 
  <div class="clear"></div>
</div>
</div>
</div>
</body>
</html>