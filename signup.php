<?php
	
?>
html>
<head>
	<title>downlose</title>
	<link rel="stylesheet" type="text/css" href="cc.css">
	<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" type="text/css" href="css/media.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Maitree|Ropa+Sans" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<style>
	.msg-alert{
  display: none;
  position: fixed;
  left: 50%;
 -ms-transform: translate(-50%);
  transform: translate(-50%); 
  bottom:0;
  z-index: 9999;
}

.msg-alert p{
  font-family: calibri;
  border-radius: 5px 5px 0px 0px;
  padding: 5px 8px;
  font-size: 20px;
  color: white;
}
</style>
</head>

<body id="home">
	<div class="msg-alert"><p></p></div>
	<div class="cssload-loader">
	<div class="cssload-flipper">
		<div class="cssload-front"></div>
		<div class="cssload-back"></div>
	</div><br/>
	<center><span id="loading">Loading</span></center>
	</div>

	<div class="clr-switch"></div>
	<div class="bubble-1"></div>
	<div class="bubble-2"></div>
	<div class="bubble-3"></div>
	
	<div id="login-form">
	<input type="radio" id="login" name="switch" class="hide" checked>
	<input type="radio" id="signup" name="switch" class="hide">
	<div>
		<ul class="form-header">
		<li><label for="login"><i class="material-icons">lock</i> LOGIN</li>
		
		</ul>
	</div>

	<div class="section-out">
		<section class="login-section">
			<div class="login">
				<form id="form_login" name="form_signup" action="index.php" method="post">
					<li><input type="submit" id="signup-btn" value="Logout" class="btn"></li>
				
				</form>
			</div>	<!-- login -->
		</section>

		<section class="signup-section">
			<div class="login">
				<form id="form_signup" name="form_signup" action="index.php" method="post">
					
					<script type="text/javascript">
						function check_type(){
							if ($("#student").is(":checked")){
								$("input#reg_name").prop("placeholder","Student Name");
								$("input#reg_name span i").text("account_box");
							}

							else if ($("#inst").is(":checked")){
								$("input#reg_name").prop("placeholder","Lecturer Name");
								$("input#reg_name span i").text("account_balance");	
							}
							else{
								$("input#reg_name").prop("placeholder","Company Name");
								$("input#reg_name span i").text("business_center");
							}
						}
					</script>

					<script type="text/javascript">
   					function check_user(){
   						var uname = $("#reg_uname").val();
   						$.ajax({
            				url: "check_user.php?username="+uname,
            				success: function(data){
            					$(".msg-alert p").html(data);
            					if (data == "Username Available"){
            						$(".msg-alert p").css("background-color","green");
            					}
            					else{
            						$(".msg-alert p").css("background-color","red");
            					}
            					$(".msg-alert").show(0,function(){
            						$(".msg-alert").delay(3000).fadeOut('slow');
            					});
             				}
          				});
					}
					</script>

				</form>
			</div>	<!-- login -->
		</section>
	</div>	<!-- section-out -->
	</div>	<!-- login-form -->

	<header>
		<div class="wrap-width">
		<a href="#home">
			<div class="navbar-logo">
				<img src="images/logo.png"/>
				<img id="hat" src="images/hat.png"/>
			</div> <!-- navbar-logo -->
		</a>
		<!--<a href="#nav"><i class="material-icons">reorder</i></a>-->
		<div class="horizontal-page-links" id="nav">

			<div class="register-user">
				
				<a id="login">Logout</a>
				<!--<a id="register" href="#register">Register</a>-->
			</div>	<!-- register-user -->
			
			<ul>	
				<div class="sliding-out links"><li><a href="#home">Home</a></li></div>
				<div class="sliding-out links"><li><a href="#about">About </a></li></div>
				<div class="sliding-out links"><li><a href="#contact">Contact </a></li></div>
				<div class="last-navbar-link"><li></li></div>
			</ul>
			
		</div> <!-- horizontal-page-links -->
		</div>
	</header>

   <p>student portal by group on members, software engeneering project</p>

<h1 style="font-size:60px;" margin-left="50px">Student resources, easy navigation to access it</h1>

	  <div id="table">
	  	<table border = "1" style="width:100%" height="200px"  margin-top="500px">
         <tr>
            <th>Class Resources </th>
            <th>Date</th>
             
         </tr>
         <tr>
            <td><?php


$files = scandir("uploads");
for ($a = 2; $a < count($files); $a++) {
	?>
      <p>
	<a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
	</p>
	<?php


}

?> </td>
            <td>18 Nove. 2020</td>
              
         </tr>
         
        
      </table>

<?php



?>

<form method="POST" enctype="multipart/form-data" action="#">
 <input type="file" name="file">
 <input type="submit" value="upload">
   
</form>


     
      </table>
	  	
	  </div>
  
      
		


<footer>

		<a href="#home"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
		<div id="copyrights">
				<span class="siteName">group1 ©  2020. All rights reserved.</span>
            </div><!--copyrights-->
	</footer>
	</header>
	</body>
	</html>