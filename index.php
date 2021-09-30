<?php
            if(isset($_GET['msg'])){
				$msg = base64_decode($_GET['msg']);
                if($msg!=""){
                    echo $msg;
                }
            }
			?>
<!DOCTYPE html>
<html>

 <head>
	 <title>VTU Calculator</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 <style>
	 .divup
	 {
		 border:1px solid white;
		 border-radius: 20px;
		 box-shadow: -10px -10px 15px white;

	 }
	 .divdown
	 {
		 border-top: 1px solid white;
		 border-radius: 20px;
		 background-color: #dde0d7;
		 box-shadow: 5px 9px 15px #888888;
		 margin-left: -17px;
		 margin-right: -18px;
	 }
	 .text
	 {
		 border-color:transparent;
		 border-bottom: 1px solid black;
		 background-color: #dde0d7;
	 }
	 .forbutton
	 {
		 border-right: 1px solid #dde0d7;
		 border-bottom: 1px solid ##dde0d7;
		 box-shadow: 5px 5px 5px #888888;
		 border-radius: 40px;
		 width: 89%;

	 }
 </style>
 </head>

 <body style="background-color: #dde0d7;">
 	<br><br><br>
	 <div class="container">
		 <div class="row">
			 <div class="col-sm-4 offset-4 divup">
		 <div height=40px width="100px" class="divdown">
			 <br>
			 <h2 class="text-center text-dark font-weight-bold">Login</h2>
			 <br><br>
			 <div class="container text-center">
			 <form action="validation.php" method="post">
	 		<input id="text" type="text" name="user" class="form-control text" placeholder="Username">
			 <br><br>
	 		<input id="text" type="password" name="password" class="form-control text" placeholder="Password">
	 		<br><br><br>
			 <button class="btn btn-success bt-lg forbutton" input id="button" type="submit" value="Login" >Sign in</button>
			 <br><br><br>
			<p>Don't have an Account? &nbsp;<a href="signup.php" class="text-dark font-weight-bold">Sign up</a></p>
			<br><br><br>
			 </div>
	 </div>
		</form>
	</div>
</body>
</html>