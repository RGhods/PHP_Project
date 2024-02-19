<head>
    <meta charset="utf_8">
</head>
<html>
    <body>
       
        <style>
            body{
                font-family:Harlow,Solid Italic, Arial, sans-serif; 
                font-size: 20px;
                font-weight: 800;
                color:rgb(21, 3, 98);
                background-color: #5af0d9;
                background-image: url(https://media.gettyimages.com/id/97743380/de/vektor/hausgemachte-pizza.jpg?s=2048x2048&w=gi&k=20&c=thq0jpl1aGQqGAeMcxV_BSxcMpSyZt1Cbak5FwPPuXY=);
                background-attachment: fixed;
                background-position:center;
                background-size: 80% 100%;
                background-position-x: right;
                background-repeat: no-repeat;
                width:500px;
                height:600px;
            }

        </style>
    </body>
</html>




<?php

session_start();
$pizzas = $_SESSION['pizza'];
$getraenkes = $_SESSION['getraenke'];
$exsaches = $_SESSION['exsache'];

if(isset($_POST['vorname']) && isset($_POST['nachname']) &&
   isset($_POST['strasse']) && isset($_POST['plz']) && 
   isset($_POST['ort']) && isset($_POST['telefon'])){


    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $strasse = $_POST['strasse'];
    $plz = $_POST['plz'];
    $ort = $_POST['ort'];
    $telefon = $_POST['telefon'];


    $sql = "INSERT INTO kunden_pizza(Vorname, Nachname, Straße, PLZ, Ort, Telefon_Nr)
             VALUES ('$vorname','$nachname','$strasse','$plz','$ort',$telefon);";

try {
    $dbh = new PDO(
        "mysql:dbname=projekt_pizza; host=localhost", 
        "root",
        ""
    );
    
    // echo "Verbindung erfolgreich hergestellt!";
    $dbh->query($sql); // schicken wir zu SQL (query = abfrage)
    $dbh = null;
    
    }catch(PDOException $e){
    echo $e->getMessage();
    // echo "Bitte versuchen sie nochmal!!!";
    
    }


}
$_session['vorname'] = $vorname;
$_session['nachname'] = $nachname;
$_session['strasse'] = $strasse;
$_session['plz']= $plz;
$_session['ort']= $ort ;
$_session['telefon']=$telefon;

echo "<u>Ihre Daten lautet</u>: <br><br> ";
echo "Vorname:" . $vorname . "<br>"  ; 
echo "Nachname:". $nachname . "<br>";
echo "Straße: " . $strasse . "<br>";
echo "PLZ/Ort: " . $plz . " " . $ort . "<br>";
echo "Telefonnummer: " . $telefon . "<br>". "<br>";


//$_session['getraenke'] ;

echo "<u>Sie haben folgende bestellt</u>: <br>" . "<br>";

$summe1 = 0;
$summe2 = 0;
$summe3 = 0;

foreach($pizzas as $pizza){

    if($pizza['menge'] > 0){
        $summe1 += floatval($pizza['menge']) * floatval($pizza['preis']);
        echo $pizza['menge'] . " x " . $pizza['name']  . " " . "je" . " " . $pizza['preis'] . "€" . "<br>";
      
    }

}
foreach($getraenkes as $getraenke){

    if($getraenke['menge'] > 0){
        $summe2 += floatval($getraenke['menge']) * floatval($getraenke['preis']);
        echo $getraenke['menge'] . " x " . $getraenke['name']  . " " . "je" . " " . $getraenke['preis'] . "€" . "<br>";
    }
}

foreach($exsaches as $exsache){

    if($exsache['menge'] > 0){
        $summe3 += floatval($exsache['menge']) * floatval($exsache['preis']);
        echo $exsache['menge'] . " x " . $exsache['name']  . " " . "je" . " " . $exsache['preis'] . "€" . "<br>";
    }
}





$gesamtepreis = floatval($summe1) + floatval($summe2) + floatval($summe3);
echo "<br><br><u>Gesamtepreis beträgt</u>: " . $gesamtepreis . "€";





$zahlung = $_POST['zahlung'];

if($zahlung == 'paypal'){
    //...

    echo "<br> <br> Bitte benutzten Sie PAYPAL";
}




