<?php
    require('dp.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
</head>

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
    <div>
        <center>
        <form action="search.php" method="get" enctype="multipart/form-data">
            <input type="text" name="value" placeholder="search topic" size="25">
            <input type="submit" name="search" value="search">
        </form>
        </center>
    </div>

    <section class="content">
        <div class="container">

        <h1>Search Result: </h1>
        <?php

            if(isset($_GET['search'])){
                $search_value = $_REQUEST['value'];
            }
            
            if(empty($search_value)){
                echo"<h3 style='margin-top: 2rem; text-align:center; color:red;'> Oops! Result Not Found</h3>";
            }
            else{
            $search_query = "SELECT * FROM books WHERE book_keywords LIKE '%$search_value%'";

            $run_query = mysqli_query($con, $search_query);

            while($search_row = mysqli_fetch_array($run_query)){
                $bookID = $search_row['bookID'];
                $bookTITLE = $search_row['title'];
                $bookAUTHOR = $search_row['author'];
                $bookCONTENT = $search_row['book_content'];

                    echo $bookID;
                    echo $bookTITLE; 
                    echo $bookAUTHOR; 
                    echo $bookCONTENT;

        ?>
        
        <?php
                }
            }
        ?>
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