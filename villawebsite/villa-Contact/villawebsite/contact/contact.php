<?php 
require_once 'proces.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./contact.css">
    <link rel="stylesheet" href="style-head-food.css">
</head>
<body>
    <header>
        <img src="./media/8210 kopie.png" alt="foto" width="70px" height="70px">
        <a href="/villawebsite/home/villa-home/index.php">Home</a>
        <a href="/villawebsite/villa-Contact/villawebsite/contact/contact.php">Contact</a>
        <span class="buttons">
            <button id="log">log in</button>
            <button id="reg">register</button>
        </span>
    </header>

    <div class="mid">

        
        <div class="titel">
            <h1>Neem contact met ons op</h1>
        </div>
        <form class="contactform" action="proces.php" method="post">
            <p> Voornaam: <input type="text"> </p>
            <br>
            <p> Achternaam: <input type="text"> </p>
            <br>
            <p> TelefoonNummer: <input type="tel"> </p>
            <br>
            <p> E-mail: <input type="email"> </p>
            <br>
            <p> Vraag/Opmerking: <textarea name="vraag" id="vraag" cols="20" rows="3"></textarea> </p>
            <br>
            <br>
            <br>
            <br>
            <button>Submit</button>
            </form>
    </div>
    <footer>
        <div class="tekst">
            <a href="">Mobile app</a>
            <a href="">Community</a>
            <a href="">Company</a>
            <img src="./media/8210 kopie.png" alt="foto" width="55px" height="55px">
            <a href="">Help desk</a>
            <a href="">Blog</a>
            <a href="">Resources</a>
        </div>
        
       
    </footer>
</body>
</html>