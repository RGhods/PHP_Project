<head>
    <meta charset="utf-8">
</head>

<html>
<body>
    <style>

       h1 {
            text-align: center;
            margin-top: 30px;
            margin-left: 10%;
            position:relative;
            animation-name: wilkommen;
            animation-duration: 4s;
            animation-delay: -2s;
            animation-direction: alternate-reverse; 
            animation-iteration-count: 4;
            background-color: lightblue inset;
            opacity: 0.5;
            transform: matrix(1, 0, 0.5, 1, 150, 0);
             
        }

            @keyframes wilkommen {
                0%   {background-color:white; left:0px; right:0px;}
                25%  {background-color:white; left:25px; right:0px;}
                50%  {background-color:white; left:0px; right:25px;}
                75%  {background-color:white; left:50px; right:0px;}
                90% {background-color:white; left:0px; right:25px;}
                100% {background-color:white; bottom:25px; top:0px;}
                }
                
                
        div#db {

            width: 290px;
            height: 80px;
            background-color: lightblue inset; 
            transform: matrix(1, -0.3, 0, 1, 0, 0); 

          } 

         div#click{
            text-align: center;
         }

         body{
            font-family:Harlow,Solid Italic, Arial, sans-serif;
            font-size: 20px;
            font-weight: 800;
            background-size: 40% 50%;
            background-image: url(https://e1.pxfuel.com/desktop-wallpaper/66/80/desktop-wallpaper-italian-cartoon-animated-pizza.jpg) ;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            border-radius: 50%;
            box-shadow: 10px 10px 5px rgb(90, 180, 198);
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; 
            }
          
         
      
        button[type="submit"] {
            background-color: rgb(90, 180, 198);
            border: 50px;
            color: rgb(21, 3, 98);
            padding: 10px 20px;
            text-align: center;
            text-decoration: underline;
            display: inline-block;
            font-size: 20px;
            font-style: italic;
            margin: 4px 2px;
            cursor: pointer;
            border-radius:20px;
            width: 3cm;
        }
        button[type="submit"]:hover {
            background-color:#05c0a4; 
            width: 3.5cm;
          }
        
    </style>
    <form action="Insgesamt.html" method="post">
        
        <!-- <div id="hw"><br><br><h1>*Herzlich Wilkommen *</div> -->
        <p><h1>Herzlich Wilkommen</h1></p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div id="db"><h1> Danke für Ihr Besuch</h1></div><br><br><br><br><br><br>
        <div id="click"><h2>* Um Ihre Bestellung aufzugeben clicken Sie bitte auf den  
        <button type="submit" name="start">Start</button> Button *</h2></p>  
     
    </form>   
    
</body>
</html>
