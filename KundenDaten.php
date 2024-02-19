<?php
Session_start();
?>
<head> <meta charset="utf-8"></head>

<html>
    <body>

        <style>
            body{
                font-family:Harlow,Solid Italic, Arial, sans-serif; 
                font-size: 20px;
                font-weight: 800;
                background-color: aquamarine;
                background-image: url(https://cdn.pixabay.com/photo/2019/05/30/12/07/pizza-4239775_1280.png);
                background-position: center;
                background-size: contain;
                background-repeat: no-repeat;
            
            }

            button[type="submit"] {
                background-color: #eb762d;
                border: 50px;
                color: rgb(21, 3, 98);
                padding: 0.5cm 1cm;
                text-align: center;
                display: inline-block;
                font-size: 20px;
                margin: 34px 1cm;
                cursor: pointer;
                border-radius:20px;
                width: 4cm;

            }
            button[type="submit"]:hover {
                    background-color: #f6f6f8;
                }       
            button[type="reset"] {
                background-color: #eb762d;
                border: 50px;
                color: rgb(21, 3, 98);
                padding: 0.5cm 1cm;
                text-align: center;
                font-size: 20px;
            
                border-radius: 20px;

            }
            button[type="reset"]:hover {
                    background-color: #f6f6f8;
                }  
            input[type="text"]{
                border-radius: 50px;
                width: 250px;
                height: 40px;
                font-size: 20px;
            }
            input[type="radio"]{
                box-align: center;
                text-align: auto;
                margin-left:40cm;
                padding-right: center;
                width: 30px;
            }

            div{
               
                text-align:right;
                border-radius: 30px;
                margin-right:0.5cm;
                   
            }
        </style>

    <form action="DatenBank.php" method="post">
   
    <p><h2>Bitte geben Sie Ihre Adresse ein:</h2></p>                     
    <p><input type="text" name="vorname" required value="Max" required>Vorname</p>                               
    <p><input type="text" name="nachname" value="Mini" required>Nachname</p> 
    <p><input type="text" name="strasse" value="Großerstr.56"  required>Straße</p>
    <p><input type="text" name="plz" required>PLZ</p>                                  
    <p><input type="text" name="ort" value="Hamburg" required>Ort </p>
    <p><input type="text" name="telefon" required>Telefonnummer</p>
    <div><h2>Bitte wählen Sie Ihre Zahlungsmethode</h2></div>
    <h2><input type="radio" name="zahlung" value="bar" checked="checked">Barzahlung</input></h2>
    <h2><input type="radio" name="zahlung" value="bank" >EC-Kartenzahlung</input></h2>
    <h2><input type="radio" name="zahlung" value="kredit" >Kreditkartenzahlung </input></h2>
    <h2><input type="radio" name="zahlung" value="paypal">Paypal</input></h2> 
    <p> <button type="submit">Fertig</button> <button type="reset">Löschen</button></p>
    
    </form>
    </body>
</html>

