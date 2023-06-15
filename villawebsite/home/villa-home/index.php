<?php
$conn = mysqli_connect('localhost:3306', '89031', 'PyjamaSammie12', '89031');
$sql = "SELECT * FROM oefen";
$result = $conn->query($sql);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-head-food.css">
    <script defer src="script.js"></script>
</head>
<body>

<header>
    <img src="./media/8210 kopie.png" alt="foto" width="55px" height="55px">
    <a href="/villawebsite/home/villa-home/index.php">Home</a>
    <a href="/villawebsite/villa-Contact/villawebsite/contact/contact.php">Contact</a>
    <span class="buttons">
            <button id="log">log in</button>
            <button id="reg">register</button>
        </span>
</header>

<div class="title">
    <p class="header">villa te koop</p>
    <p class="subtext">bij MijnVilla hebben wij villa's in allen soorten en maten speciaal voor jou.</p>
</div>
<div class="images">
    <div class="villa-button"><a href="/villawebsite/villa-main/villa-main/index2.php?villa=1"><?php foreach ($rows as $row) {echo '<img src="data:image;base64,' . base64_encode($row['img1']) . '" alt="plaatje" height="140px" width="250px">';} ?></a></div>
    <div class="villa-button"><a href="/villawebsite/villa-main/villa-main/index2.php?villa=2"><?php foreach ($rows as $row) {echo '<img src="data:image;base64,' . base64_encode($row['img2']) . '" alt="plaatje" height="140px" width="250px">';} ?></a></div>
    <div class="villa-button"><a href="/villawebsite/villa-main/villa-main/index2.php?villa=3"><?php foreach ($rows as $row) {echo '<img src="data:image;base64,' . base64_encode($row['img3']) . '" alt="plaatje" height="140px" width="250px">';} ?></a></div>
    <div class="villa-button"><?php foreach ($rows as $row) {echo '<img src="data:image;base64,' . base64_encode($row['img4']) . '" alt="plaatje" height="140px" width="250px">';} ?></div>
    <div class="villa-button"><?php foreach ($rows as $row) {echo '<img src="data:image;base64,' . base64_encode($row['img5']) . '" alt="plaatje" height="140px" width="250px">';} ?></div>
</div>
<div class="image-slideshow">
    <div class="image fade">
        <img src="https://iili.io/HWdl3Al.md.jpg" alt="Mountain Top">
    </div>
    <div class="image fade">
        <img src="https://iili.io/HWdlRDB.md.jpg" alt="Palm Trees">
    </div>
    <div class="image fade">
        <img src="https://iili.io/HWdlWDN.md.jpg" alt="Neon Sign">
    </div>
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
