<html>
    <head>
       <meta charset="utf-8">
    </head>
        <body> 
            <div><h1> Wir bedanken uns für Ihre Bestellung</h1></div>

            <p><h2><label>Sie haben folgendes bestellt:</label></h2></p>  
            <style>
                div{
                    width: 700px;
                    height: 80px;
                    text-align: left;
                    text-shadow: rgb(77, 79, 85);
                    border-radius: 30px;
                    animation-name: Danke;
                    animation-duration: 15s;
                    animation-direction: alternate-reverse; 
                    animation-iteration-count: 20;
                    }

                    @keyframes Danke {
                0%   {color: rgb(77, 279, 285); left:0px; top:0px;}
                25%  {color: #00024f; left:100px; top:0px;}
                50%  {color: rgb(77, 279, 285); left:100px; top:100px;}
                75%  {color: #00024f; left:0px; top:100px;}
                100% {color: rgb(77, 279, 285); left:0px; top:0px;}
                }

                label {
                    width: 600px;
                    height: 80px;
                    text-align: center;
                    text-shadow: rgb(77, 79, 85);
                    border-radius: 30px;
                    animation-name: label;
                    animation-duration: 15s;
                    animation-direction: alternate-reverse; 
                    animation-iteration-count: 20;
                    }

                    @keyframes label {
                0%   {color: #00024f; left:0px; top:0px;}
                25%  {color:rgb(77, 279, 285); left:100px; top:0px;}
                50%  {color: #00024f; left:100px; top:100px;}
                75%  {color: rgb(77, 279, 285); left:0px; top:100px;}
                100% {color: #00024f; left:0px; top:0px;}
                }



                body{
                    font-family:Harlow,Solid Italic, Arial, sans-serif; 
                    font-size: 20px ;
                    font-weight: 800;
                    
                    background-image: url("https://www.italienische-rezepte.net/wp-content/uploads/2021/01/pizza-salami.jpg") ;
                    background-size: contain;
                    background-position: right;
                    background-repeat: no-repeat;
                    background-color: rgb(77, 79, 85);
                    color: #5ae6f0;
                    max-width: 12000px;
                    margin: 10 auto;
                    padding: 100px;
                    text-shadow: #f6f6f8;
                    text-align: left;
                    }
                    
                    
               
  
    
            </style>
    </body> 
</html>

<?php 
session_start(); 


 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pizza = array();
    $pizza[0]['name'] = "Margherita";
    $pizza[0]['preis'] = 8.99;
    $pizza[0]['menge'] = 0;
 
    $pizza[1]['name'] = "Salami";
    $pizza[1]['preis'] = 9.99;
    $pizza[1]['menge'] = 0;
 
    $pizza[2]['name'] = "Prosciutto";
    $pizza[2]['preis'] = 10.50;
    $pizza[2]['menge'] = 0;
 
    $pizza[3]['name'] = "Funghi";
    $pizza[3]['preis'] = 12.50;
    $pizza[3]['menge'] = 0;
 
    $pizza[4]['name'] = "Quattro";
    $pizza[4]['preis'] = 11.50;
    $pizza[4]['menge'] = 0;

    $pizza[5]['name'] = "Diavola";
    $pizza[5]['preis'] = 12.50;
    $pizza[5]['menge'] = 0;

    $pizza[6]['name'] = "Capricciosa";
    $pizza[6]['preis'] = 14.50;
    $pizza[6]['menge'] = 0;



    $mengeMargherita = $_POST['Margherita'];
    $mengeSalami = $_POST['Salami'];
    $mengeProsciutto = $_POST['Prosciutto'];  
    $mengeFunghi = $_POST['Funghi'];  
    $mengeQuattroFormaggi = $_POST['Quattro'];  
    $mengeDiavola = $_POST['Diavola']; 
    $mengeCapricciosa = $_POST['Capricciosa']; 
 
    $gesamtepreis1 = 0;  
   

    if($mengeMargherita > 0){
        $pizza[0]['menge'] = $mengeMargherita;
        $gesamtepreis1 += $mengeMargherita * $pizza[0]['preis'];
        echo $mengeMargherita . " x " . $pizza[0]['name'] . "<br>";
    }
 
    if($mengeSalami > 0){
         $pizza[1]['menge'] = $mengeSalami;
         $gesamtepreis1 += $mengeSalami * $pizza[1]['preis'];
         echo $mengeSalami . " x " . $pizza[1]['name'] . "<br>";
    }

    if($mengeProsciutto > 0){
         $pizza[2]['menge'] = $mengeProsciutto;
         $gesamtepreis1 += $mengeProsciutto * $pizza[2]['preis'];
         echo $mengeProsciutto . " x " . $pizza[2]['name'] . "<br>"; 
    }
 
    if($mengeFunghi > 0){
        $pizza[3]['menge'] = $mengeFunghi;
         $gesamtepreis1 += $mengeFunghi * $pizza[3]['preis']; 
         echo $mengeFunghi . " x " . $pizza[3]['name'] . "<br>";
    }
 
    if($mengeQuattroFormaggi > 0){
        $pizza[4]['menge'] = $mengeQuattroFormaggi;
         $gesamtepreis1 += $mengeQuattroFormaggi * $pizza[4]['preis']; 
         echo $mengeQuattroFormaggi . " x " . $pizza[4]['name'] . "<br>";
    }

    if($mengeDiavola > 0){
        $pizza[5]['menge'] = $mengeSalami;
        $gesamtepreis1 += $mengeDiavola * $pizza[5]['preis'];
        echo $mengeDiavola . " x " . $pizza[5]['name'] . "<br>";
    }

    if($mengeCapricciosa > 0){
        $pizza[6]['menge'] = $mengeCapricciosa;
        $gesamtepreis1 += $mengeCapricciosa * $pizza[6]['preis'];
        echo $mengeCapricciosa . " x " . $pizza[6]['name'] . "<br>";
    }
}

  
    
    // Ab hier Getränke

    $getraenke = array();
    $getraenke[0]['name'] = "Cola";
    $getraenke[0]['preis'] = 1.99;
    $getraenke[0]['menge'] = 0;

    $getraenke[1]['name'] = "Fanta";
    $getraenke[1]['preis'] = 1.99;
    $getraenke[1]['menge'] = 0;


    $getraenke[2]['name'] = "Bier";
    $getraenke[2]['preis'] = 3.00;
    $getraenke[2]['menge'] = 0;

    $getraenke[3]['name'] = "Wasser";
    $getraenke[3]['preis'] = 2.00; 
    $getraenke[3]['menge'] = 0;

    $getraenke[4]['name'] = "Rotwein";
    $getraenke[4]['preis'] = 5.00;
    $getraenke[4]['menge'] = 0;

    $mengeCola = $_POST['Cola'];
    $mengeFanta = $_POST['Fanta'];
    $mengeBier = $_POST['Bier'];  
    $mengeWasser = $_POST['Wasser'];  
    $mengeRotwein = $_POST['Rotwein'];  

    $gesamtepreis2 = 0;  

    if($mengeCola > 0){
        $getraenke[0]['menge'] = $mengeCola;
        $gesamtepreis2 += $mengeCola * $getraenke[0]['preis'];
        echo $mengeCola . " x " . $getraenke[0]['name'] . "<br>";
    }


    if($mengeFanta > 0){
        $getraenke[1]['menge'] = $mengeFanta;
        $gesamtepreis2 += $mengeFanta * $getraenke[1]['preis'];
        echo $mengeFanta . " x " . $getraenke[1]['name'] . "<br>";
    }


    if($mengeBier > 0){
        $getraenke[2]['menge'] = $mengeBier;
        $gesamtepreis2 += $mengeBier * $getraenke[2]['preis']; 
        echo $mengeBier . " x " . $getraenke[2]['name'] . "<br>";
    }


    if($mengeWasser > 0){
        $getraenke[3]['menge'] = $mengeWasser;
        $gesamtepreis2 += $mengeWasser * $getraenke[3]['preis'];  
        echo $mengeWasser . " x " . $getraenke[3]['name'] . "<br>";
    }


    if($mengeRotwein > 0){
        $getraenke[4]['menge'] = $mengeRotwein;
        $gesamtepreis2 += $mengeRotwein * $getraenke[4]['preis']; 
        echo $mengeRotwein . " x " . $getraenke[4]['name'] . "<br>";
    }
        
          

 //Ab Hier Extra Sachen

 $exsache = array();
 $exsache[0]['name'] = "Extra Käse";
 $exsache[0]['preis'] = 1.50;
 $exsache[0]['menge'] = 0;

 $exsache[1]['name'] = "Extra Salami";
 $exsache[1]['preis'] = 2.00;
 $exsache[1]['menge'] = 0;

 $exsache[2]['name'] = "Extra Champinion";
 $exsache[2]['preis'] = 1.50;
 $exsache[2]['menge'] = 0;

 $exsache[3]['name'] = "Extra Jalapenos";
 $exsache[3]['preis'] = 2.00;
 $exsache[3]['menge'] = 0;

 $exsache[4]['name'] = "Extra Oliven";
 $exsache[4]['preis'] = 2.00;
 $exsache[4]['menge'] = 0;


 $mengeExKaese = $_POST['ExKaese'];
 $mengeExSalami = $_POST['ExSalami'];
 $mengeExChampinion = $_POST['ExChampinion'];  
 $mengeExJalapenos = $_POST['ExJalapenos'];  
 $mengeExOliven = $_POST['ExOliven']; 
 
 $gesamtepreis3 = 0;  

 if($mengeExKaese > 0){
    $exsache[0]['menge'] = $mengeExKaese;
     $gesamtepreis3 += $mengeExKaese * $exsache[0]['preis'];
     echo $mengeExKaese . " x " . $exsache[0]['name'] . "<br>";
 }


 if($mengeExSalami > 0){
    $exsache[0]['menge'] = $mengeExSalami;
     $gesamtepreis3 += $mengeExSalami * $exsache[1]['preis'];
     echo $mengeExSalami . " x " . $exsache[1]['name'] . "<br>";
 }


 if($mengeExChampinion > 0){
    $exsache[0]['menge'] = $mengeExChampinion ;
     $gesamtepreis3 += $mengeExChampinion * $exsache[2]['preis']; 
     echo $mengeExChampinion . " x " . $exsache[2]['name'] . "<br>";
 }


 if($mengeExJalapenos > 0){
    $exsache[0]['menge'] = $mengeExJalapenos;
     $gesamtepreis3 += $mengeExJalapenos * $exsache[3]['preis'];  
     echo $mengeExJalapenos . " x " . $exsache[3]['name'] . "<br>";
 }


 if($mengeExOliven > 0){
    $exsache[0]['menge'] = $mengeExOliven;
     $gesamtepreis3 += $mengeExOliven * $exsache[4]['preis']; 
     echo $mengeExOliven . " x " . $exsache[4]['name'] . "<br>";
 }

  

           $erg =  $gesamtepreis1 + $gesamtepreis2 + $gesamtepreis3;
           echo "<br>Ihre Rechnung beträgt: " . $erg . "€";


    
    $_SESSION['pizza'] = $pizza;
    $_SESSION['getraenke'] = $getraenke;
    $_SESSION['exsache'] = $exsache;
   
    echo "<br>";
   
?>
       
<html>
        <body>
        <style>  
       button[type="submit"] {
            background-color: #f67f35;
            border: 50px;
            color: rgb(21, 3, 98);
            padding: 10px 20px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 20px;
        }
        button[type="submit"]:hover {
            background-color: #f6f6f8;
          }
        button[type="reset"] {
            background-color: #f67f35;
            border: 50px;
            color: rgb(21, 3, 98);
            padding: 10px 20px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 20px;
        }
        button[type="reset"]:hover {
            background-color: #f6f6f8;
          }
       
        </style>
         <p><a href="http://localhost/PHP/p/p_aktuel/KundenDaten.php"><button type="submit" value="Senden">Bezahlen</button></a>
           <a href="http://localhost/PHP/p/p_aktuel/Insgesamt.html"> <button type="reset" id="reset">Zurück</button></p></a>

        </body>
</html>

  
   
        


