<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "logindata";

$conn = mysqli_connect($server, $username, $password, $dbname);



if(isset($_POST['submit'])){
    $imie = $_POST['Imię'];
    $nazwisko = $_POST['nazwisko'];
    $data_urodzenia = $_POST['datea'];
    $email = $_POST['email'];
    $telefon = $_POST['phone'];
    $wojewodztwo = $_POST['wojewodztwo'];
    $plec = $_POST['plec'];
    $newsletter = isset($_POST['newsletter']) ? 1 : 0;

    $sql = "INSERT INTO data (imie, nazwisko, dataur, email, tel, wojewodztwo, plec, zgoda) VALUES ('$imie', '$nazwisko', '$data_urodzenia', '$email', '$telefon', '$wojewodztwo', '$plec', '$newsletter')";

    if (mysqli_query($conn, $sql)) {
        echo "Formularz wysłany";
    } else {
        echo "Błąd: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$conn->close();
?>
