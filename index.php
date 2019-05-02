

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Home</title>
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
            <button class="w3-button w3-black"><a href ="index.php">Home</button></a>
            <button class="w3-button w3-white w3-hide-small"></i><a href ="login.php">Log in</button></a>
            <button class="w3-button w3-white w3-hide-small"></i><a href ="contact.php">Contact Us</button></a>
        </div>

        <center>
        <form action="search.php" method="get" enctype="multipart/form-data">
            <input type="text" name="value" placeholder="Book search" size="25">
            <input type="submit" name="search" value="search">
        </form>
        </center>
        <br>

    </div>
  </header>

    <h1 style="background-color:DodgerBlue ; text-align:center; color:white"><strong>Book Recommendation</strong></h1>
    <br>

    <div class="w3-row-padding">
        <div class="w3-third w3-container w3-margin-bottom">
            <img src="img/love simon.jpg" alt="love simon" style="width:50%" class="w3-hover-opacity">
            <img src="img/love simon2.jpg" alt="love simon" style="width:47%" class="w3-hover-opacity">
     
            <div class="w3-container w3-white">
                <p><b>Love Simon</b></p>
                <p> <b>Sixteen-year-old and not-so-openly gay</b> <i>Simon Spier</i> prefers to save his drama for the school musical. But when an email falls into the wrong hands, his secret is at risk of being thrust into the spotlight. Now change-averse <i>Simon</i> has to find a way to step out of his comfort zone before he's pushed out—without alienating his friends, compromising himself, or fumbling a shot at happiness with the most confusing, adorable guy he's never met.
                Incredibly <b>funny and poignant</b>, this twenty-first-century coming-of-age, coming out story—wrapped in a geek romance—is a knockout of a debut novel by<i>Becky Albertalli.</i> </p>
            </div>
        </div>

        <div class="w3-third w3-container w3-margin-bottom">
            <img src="img/fivefeetapart.jpg" alt="five feet apart" style="width:50%" class="w3-hover-opacity">
            <img src="img/fivefeetapart2.jpg" alt="five feet apart" style="width:48%" class="w3-hover-opacity">
            
            <div class="w3-container w3-white">
                <p><b>Five Feet Apart</b></p>
                <p> In this <b>#1 New York Times bestselling novel</b> that’s perfect for fans of John Green’s The Fault in Our Stars, two teens fall in love with just one minor complication—they can’t get within a few feet of each other without risking their lives.
                <i>Can you love someone you can never touch?</i>
                Stella Grant likes to be in control—even though her totally out of control lungs have sent her in and out of the hospital most of her life. At this point, what Stella needs to control most is keeping herself away from anyone or anything that might pass along an infection and jeopardize the possibility of a lung transplant. Six feet apart. No exceptions.</p>
            </div>
        </div>

        <div class="w3-third w3-container">
            <img src="img/love bark.jpg" alt="love bark" style="width:53%" class="w3-hover-opacity">
            <img src="img/love bark3.jpg" alt="love bark3" style="width:45%" class="w3-hover-opacity">
            
            <div class="w3-container w3-white">
                <p><b>Love at First Bark</b></p>
                <p>When <b>Marcy Deveraux's</b> romance series catapults to the top of <b>the New York Times bestseller</b> list, no one is more surprised than Marcy herself. After all, she barely passed high school, flunked the driving test four times, and fell into a pool at her sister's wedding.
                Marcy is keen to continue her literary success, but she cannot think of a single idea for her next book. Hounded by her agent, family, and friends, she decides to sequester herself in a rustic cabin in the mountains. There, she finds herself face-to-snout with a surprise visitor—a rascally black dog who must have escaped from his owner at a nearby campground.</p>
            </div>
        </div>
    </div>

    <center>
        <img src="img/library.jpg" alt="library" style="width:30%">
        <img src="img/library2.jpg" alt="library2" style="width:27%">
    </center>
      

    <div class="w3-container w3-padding-large" style="margin-bottom:32px">
        <h4><b>About the library</b></h4>
        <p>Founded in 2001,The Bangkok Library is one of the world's leading literary institutions. Members can browse and borrow our outstanding 
        collection of books and resources and use our beautiful spaces in the library.
        </p>
    <hr>

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