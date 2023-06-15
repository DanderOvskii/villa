<?php 
$conn = mysqli_connect("localhost:3306", "89031", "PyjamaSammie12", "89031");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
print_r($_POST);    
    $vnaam = $_POST['Anaam'];
    $anaam = $_POST['Bnaam'];
    $tel = $_POST['Tel'];
    $email = $_POST['Email'];
    $vraag = $_POST['vraag'];

    $sql = "INSERT INTO contact (Voornaam, Achternaam, TelefoonNummer, E-mail, Vraag) VALUES ('$vnaam', '$anaam', '$tel', '$email', '$vraag')";
    if ($conn->query($sql) === TRUE) {
        header("Location: contact.php");
    } else {
        echo "Error: " .$sql . "<br>" . $conn->error;
    }

}


?>

