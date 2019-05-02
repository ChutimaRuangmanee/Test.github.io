<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
</head>

<style>
    a{
        color: #0067ab;
        text-decoration: none;
    }
</style>

<body>
    <body class="w3-light-grey w3-content" style="max-width:1600px">
        <div class="w3-main" style="margin-left:50px">
        <header id="Library">
   
            <div class="w3-container">
                <h1><b>My Library</b></h1>
    
            <div class="w3-section w3-bottombar w3-padding-16">
                <span class="w3-margin-right">Menu :</span> 
                <button class="w3-button w3-white w3-hide-small"><a href ="index.php">Home</button></a>
                <button class="w3-button w3-black"></i><a href ="login.php">Log in</button></a>
                <button class="w3-button w3-white w3-hide-small"></i><a href ="contact.php">Contact Us</button></a>
        </div>

        </header>

    <?php
        require('dp.php');
        session_start();

        if(isset($_POST['username'])){
            $username = stripcslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($con, $username);

            $password = stripcslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);

            $userID = stripslashes($_REQUEST['userID']);
            $userID  = mysqli_real_escape_string($con, $userID);
            
            $query = "SELECT * FROM users WHERE username='$username' AND password='".md5($password)."'";

            $result = mysqli_query($con, $query) or die(mysql_error());
            $row = mysqli_num_rows($result);

            if($row == 1){
                $_SESSION['username'] = $username;
                $_SESSION['userID'] = $userID;
                header("Location: info.php");
            }
            else{
                echo"<div class='form'>
                    <h3>Username or/and Password is incorrect.</h3>
                    <br>
                    Click here to <a href='login.php'>Log in</a>
                    </div>";
            }
            }
            else{
    ?>

            <div class="form">
                <h1>Log in</h1>
                <form action="" method="post" name="login">
                    <input type="text" name="username" placeholder="Username" require>
                    <br><br>
                    <input type="password" name="password" placeholder="Password" require>
                    <br>
                    <input type="submit" name="submit" value="Login">
                </form>
                <p>Not registered yet?  <a href="registration.php">Register Here!</p>
                </div> 
    <?php } ?>
    <br><br><br>

    <footer class="w3-container w3-padding-32 w3-dark-grey">
        <div class="w3-row-padding">
            <div class="w3-third">
                <img src="img/logo.png" alt="My Library Logo" width="200" height="200">
            </div>
         
            <div class="w3-third">
                <h3>Address</h3>
                <h4>My Library</h4>
                <p>201 Phyathai Road, Pathumwan, Bangkok 10330 Thailand</p>
            </div>
                   
            <div class="w3-third">
                <h3>OFFICE HOURS</h3>
                <ul class="w3-ul w3-hoverable">
                    <li class="w3-padding-16">
                        <span class="w3-large clock-o">Weekdays (Mon. - Fri.)</span><br>
                        <span>8 AM - 8 PM</span>
                    </li>
         
                    <li class="w3-padding-16">
                        <span class="w3-large clock-o">Weekends (Sat. - Sun.)</span><br>
                        <span>10 AM - 6 PM</span>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>