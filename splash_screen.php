<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Elite cabs</title>
    <link rel="stylesheet" type="text/css" href="splash_screen.css" />
  
</head>
<body>
    <!--spinner image-->
    <div class="spinner-circle-container">
        <div class="spinner-circle"></div>
        <img src="Images/splash/Splash__Logo.jpg" alt="Spinner image">
    </div>
    <!-- SPINNER -->
    <div class="spinner-box">
        <div class="circle-border">
            <div class="circle-core"></div>
        </div>
    </div>
    <!-- LOADING TEXT -->
    <div class="loading-text">Loading...</div>

    <script src="index.php"></script>
    <!--Directed to another page-->
    <script>
    setTimeout(function () {
         window.location.href = "index.php";
     }, 4000);
    </script>
</body>
</html>