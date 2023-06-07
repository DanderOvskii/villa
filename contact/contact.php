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
</head>
<body>
    <header>
        <img src="./media/bungalow.png" alt="foto" width="55px" height="55px">
        <a href="#">Home</a>
        <a href="#">Contact</a>
        <span class="buttons">
            <button id="log">log in</button>
            <button id="reg">register</button>
        </span>
    </header>
    <div class="titel">
        <h1>Neem contact met ons op</h1>
        <br>
        <br>
        <h2>voor problemen of met vragen kun je met ons contact opnemen.</h2>
    </div>
    <form method="post" class="contactform">'
        <p> Voornaam: <input type="text" name="Anaam" > </p>
        <br>
        <p> Achternaam: <input type="text" name="Bnaam" > </p>
        <br>
        <p> TelefoonNummer: <input type="text" name="Tel"> </p>
        <br>
        <p> E-mail: <input type="text" name="Email"> </p>
        <br>
        <p> Vraag/Opmerking: <textarea name="vraag" id="vraag" cols="20" rows="3"></textarea> </p>
        <br>
        <br>
        <br>
        <br>
        <button>Submit</button>
    </form>
    <footer>
        <div class="tekst">
            <a href="">Mobile app</a>
            <a href="">Community</a>
            <a href="">Company</a>
            <span><img src="./media/bungalow.png" alt="foto" width="55px" height="55px"><span class="ptekst">Photo</span></span>
            <a href="">Help desk</a>
            <a href="">Blog</a>
            <a href="">Resources</a>
        </div>
        <hr>
        <div class="foto">
            <img src="./media/bungalow.png" alt="plaatje" width="50px">
            <img src="./media/bungalow.png" alt="plaatje" width="50px">
            <img src="./media/bungalow.png" alt="plaatje" width="50px">
            <img src="./media/bungalow.png" alt="plaatje" width="50px">
        </div>
        <br>
        <br>
        <p class="copy">©Photo, Inc, 2019. We love our users!</p>
    </footer>
</body>
</html>