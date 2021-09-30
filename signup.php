<!DOCTYPE html>
<html>
<!-- <head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>
 -->
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
			 <h2 class="text-center text-dark font-weight-bold">Create an Account</h2>
			 <br><br>
			 <div class="container text-center">
			 <form action="addtodb.php" method="post">
	 		<input type="text" name="user" class="form-control text" placeholder="Username" required>
			 <br><br>
	 		<input type="password" name="password" class="form-control text" placeholder="Password" required>
	 		<br><br><br>
			 <button class="btn btn-success bt-lg forbutton" input id="button" type="submit" value="Signup" >Sign Up</button>
			 <br><br><br>
			<p>Alreadyhave an Account? &nbsp;<a href="index.php" class="text-dark font-weight-bold">Login</a></p>
			<br><br><br>
			 </div>
	 </div>
		</form>
	</div>
</body>
</html>