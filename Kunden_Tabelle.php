<?php

$sql = "SELECT * FROM kunden_pizza;";

try{


    // stellt eine connection zum sql server her
    $dbh = new PDO("mysql:dbname=projekt_pizza; host=localhost",
        "root",
        ""
    );

    echo "Verbindung erfolgreich hergestellt! <br>";

    $rueckgabe = $dbh->query($sql); // sendet eine abfrage an die sql datenbank und speichert die rückgabe 
    
    $ergebnis = $rueckgabe->fetchAll(PDO::FETCH_ASSOC); // nimmt die rückgabe und macht daraus ein assoziatives array

    // wir gehen durch jedes element in dem array und geben es aus
    foreach($ergebnis as $inhalt){
        echo $inhalt['id'].  " " . $inhalt['Vorname'] . " " . $inhalt['Nachname'] . " " . $inhalt['Straße'] . " " .
                                    $inhalt['PLZ,Ort'] . " " .  $inhalt['Telefon Nr.'] . " " . "<br>";
    }

    $dbh = null;

}catch(PDOException $e){
    echo $e->getMessage();
}




















// ?php
// $servername = "localhost"; // Name oder IP-Adresse deines Datenbankservers
// $username = "dein_benutzername"; // Benutzername für den Zugriff auf die Datenbank
// $password = "dein_passwort"; // Passwort für den Zugriff auf die Datenbank
// $dbname = "deine_datenbank"; // Name deiner Datenbank

// // Verbindung zur Datenbank herstellen
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Überprüfen, ob die Verbindung erfolgreich hergestellt wurde
// if ($conn->connect_error) {
//     die("Verbindung fehlgeschlagen: " . $conn->connect_error);
// }

// // Hier kannst du nun deine SQL-Abfragen ausführen oder andere Operationen mit der Datenbank durchführen

// // Verbindung zur Datenbank schließen, wenn du fertig bist
// $conn->close();
// ?>