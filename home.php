<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/static/styles.css">
    <link href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.splash
{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: #dde0d7;
    z-index: 200;
    color: rgb(0, 0, 0);
    text-align: center;
    line-height: 90vh;

}

.splash.display-none
{
    position: fixed;
    opacity: 0;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: #dde0d7;
    z-index: -10;
    color: rgb(0, 0, 0);
    text-align: center;
    line-height: 90vh;
    transition: all 0.5s;

}
@keyframes fadeIn {
    to{
        opacity: 1;
    }
}

.fade-in{
    opacity: 0;
    animation: fadeIn 1s ease-in forwards;
}
    </style>
    <title>VTU Calaulator</title>
</head>
<body>
    <div class="splash">
        <h1 class="fade-in"><i>Hey there <?php echo $_SESSION['username']; ?>!
         Welcome to VTU Calculator. </i>🤓</h1>
    </div>
<meta http-equiv = "refresh" content = "3; index1.html" />
  

</body>

</html>
