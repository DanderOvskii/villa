<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header-footer.css">
</head>
<body>
    <?php
    $naamvilla = "";
        $villa = $_GET['villa'];
        if ($villa == 1) {
            $naamvilla = "villa1";
        }
        if ($villa == 2) {
            $naamvilla = "villa2";
        }
        if ($villa == 3) {
            $naamvilla = "villa3";
        }
        $conn = mysqli_connect("localhost:3306", "89031", "PyjamaSammie12", "89031");
        $sql = "SELECT * FROM biedingen WHERE naamvilla='$naamvilla' ORDER BY bod DESC LIMIT 3";
        $result = $conn->query($sql);

        $conn2 = mysqli_connect("localhost:3306", "89031", "PyjamaSammie12", "89031");
        $sql2 = "SELECT * FROM villatekst WHERE naamvilla='$naamvilla'";
        $result2 = $conn2->query($sql2);
    ?>

    <header>
        <img src="./media/8210 kopie.png" alt="foto" width="55px" height="55px">
        <a href="/villawebsite/home/villa-home/index.php">Home</a>
        <a href="/villawebsite/villa-Contact/villawebsite/contact/contact.php">Contact</a>
        <span class="buttons">
            <button id="log">Log in</button>
            <button id="reg">register</button>
        </span>
    </header>
    <?php 
    if ($villa == 1) {
?>
    <div class="mid">
        <div class="image-slideshow">
            <div class="image fade">
                <img src="media/beroeps huizen/huis1/827_1440x960.jpeg" alt="Mountain Top">
            </div>        
            <div class="image fade">
                <img src="media/beroeps huizen/huis1/832_1440x960.jpeg" alt="Palm Trees">
            </div>        
            <div class="image fade">
                <img src="media/beroeps huizen/huis1/848_1440x960.jpeg" alt="Neon Sign">
            </div>
        </div>
    </div>
<?php
    }
?>
<?php 
    if ($villa == 2) {
?>
    <div class="mid">
        <div class="image-slideshow">
            <div class="image fade">
                <img src="media/beroeps huizen/huis2/006_1440.jpeg" alt="Mountain Top">
            </div>        
            <div class="image fade">
                <img src="media/beroeps huizen/huis2/007_1440.jpeg" alt="Palm Trees">
            </div>        
            <div class="image fade">
                <img src="media/beroeps huizen/huis2/010_1440.jpeg" alt="Neon Sign">
            </div>
        </div>
    </div>
<?php
    }
?>
<?php 
    if ($villa == 3) {
?>
    <div class="mid">
        <div class="image-slideshow">
            <div class="image fade">
                <img src="media/beroeps huizen/huis3/489_1440.jpeg" alt="Mountain Top">
            </div>        
            <div class="image fade">
                <img src="media/beroeps huizen/huis3/510_1440.jpeg" alt="Palm Trees">
            </div>        
            <div class="image fade">
                <img src="media/beroeps huizen/huis3/889_1440.jpeg" alt="Neon Sign">
            </div>
        </div>
    </div>
<?php
    }
?>


    <div class="break"></div>

    <div class="infocontainer">
        <div class="left">
            <?php 
            if($villa == 1) {
            ?>
            
            <div class="titel">
                <h1>Villa Beschrijving</h1>
            </div>
            <div class="kop1">
                <p><?php 
                while ($row2 = $result2->fetch_assoc()) {
                    echo $row2['tekst'];
                }
                ?></p>
            </div>
            <?php
            }
            ?>
            <?php 
            if($villa == 2) {
            ?>
            
            <div class="titel">
                <h1>Villa Beschrijving</h1>
            </div>
            <div class="kop1">
                
                <p><?php 
                while ($row2 = $result2->fetch_assoc()) {
                    echo $row2['tekst'];
                }
                ?></p>
            </div>
            <?php
            }
            ?>
            <?php 
            if($villa == 3) {
            ?>
            
            <div class="titel">
                <h1>Villa Beschrijving</h1>
            </div>
            <div class="kop1">
            <p><?php 
                while ($row2 = $result2->fetch_assoc()) {
                    echo $row2['tekst'];
                }
                ?></p>
            </div>
            <?php
            }
            ?>
            <div class="kop2">
            <?php 
if ($villa == 1) {
    ?>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2437.34307341079!2d4.881996!3d52.3460627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609f626f88303%3A0x8db6d678ac5bf7fc!2sHerman%20Gorterstraat%2036%2C%201077%20WH%20Amsterdam!5e0!3m2!1snl!2snl!4v1686561834390!5m2!1snl!2snl" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <?php
}
if ($villa == 2){
    ?>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2450.034037651183!2d4.349119376462664!3d52.11550946609829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b9d4b097d317%3A0xd17649032e75c7bc!2sBuurtweg%2087%2C%202244%20AB%20Wassenaar!5e0!3m2!1snl!2snl!4v1686561939286!5m2!1snl!2snl" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <?php
}
if ($villa == 3){
    ?>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.25780914736!2d5.157820076469811!3d52.23870075701835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c66ca87d40f67f%3A0x1ce26805d211d5c8!2sPalestrinalaan%2011%2C%201217%20CD%20Hilversum!5e0!3m2!1snl!2snl!4v1686561973497!5m2!1snl!2snl" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <?php
}
?>

            </div>
        </div>

        <div class="right">
            <div class="titel"></div>
            <div class="kop1">
                <table>
                    <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Bod</th>
                            <th>Datum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row["naam"]; ?></td>
                                <td><?php echo $row["bod"]; ?></td>
                                <td><?php echo $row["datum"]; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="kop2">
                <h3 >doe een bieding</h3>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <input type="hidden" name="villa" value="<?php echo $villa; ?>">
                <input type="hidden" name="naamvilla" value="<?php echo $naamvilla; ?>">
                    <p>
                        <label for="naam">naam:</label>
                        <input type="text" name="naam" />
                    </p>

                    <p>
                        <label for="telefoon">Telefoon nummer:</label>
                        <input type="number" name="telefoon" />
                    </p>

                    <p>
                        <label for="mail">E-mail:</label>
                        <input type="text" name="mail" />
                    </p>

                    <p>
                        <label for="bieding">Bod:</label>
                        <input type="number" name="bieding" />
                    </p>
            
                    <p>
                        <button class="verstuur" type="submit">verstuur</button>
                    </p>
            
                </form>
                <p>
                   om de geupdatte prijzen te zien kom terug via de home <button class="verstuur" onclick="window.location.href = '/villawebsite/home/villa-home/index.php';">Go to index.php</button>
                </p>
                <?php 
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $naam = $_POST['naam'];
                        $bod = $_POST['bieding'];
                        $naamvilla = $_POST['naamvilla'];

                        $sql2 = "INSERT INTO biedingen (naamvilla, naam, bod, datum) VALUES (?, ?, ?, NOW())";
                        $stmt = $conn->prepare($sql2);
                        $stmt->bind_param("ssd", $naamvilla, $naam, $bod);
                        $stmt->execute();

                        header("Location: /villawebsite/home/villa-home/index.php");
                        exit();
                    }
                ?>

                
            </div>
         
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

<script src="script.js"></script>
</body>
</html>
 