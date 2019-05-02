<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
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
                <button class="w3-button w3-white w3-hide-small"></i><a href ="login.php">Log in</button></a>
                <button class="w3-button w3-black"></i><a href ="contact.php">Contact Us</button></a>
        </div>

        </header>

        
        <h1><strong> GET IN TOUCH </strong></h1>
        <br>
        <div class="w3-container w3-padding-large w3-grey">
            <h4 id="contact"><b>Contact</b></h4>
            <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
                <div class="w3-third w3-dark-grey">
                <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
                <p>mylibrary2018@gmail.com</p>
            </div>

            <div class="w3-third w3-indigo">
                <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
                <p>Bangkok, Thailand</p>
            </div>

            <div class="w3-third w3-dark-grey">
                <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
                <p>02 218 6061</p>
            </div>
        </div>

        <hr class="w3-opacity">
            <form action="/action_page.php" target="_blank">
            <div class="w3-section">
                <label>Name</label>
                <input class="w3-input w3-border" type="text" name="Name" required>
            </div>
        
            <div class="w3-section">
                <label>Email</label>
                <input class="w3-input w3-border" type="text" name="Email" required>
            </div>

        <div class="w3-section">
            <label>Message</label>
            <input class="w3-input w3-border" type="text" name="Message" required>
        </div>
      
        <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
        </form>
        </div>
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