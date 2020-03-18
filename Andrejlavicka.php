<html>
   <head>
      <title>Assassins Creed Odyssey</title>
       <link rel="stylesheet" type="text/css" href="css/css.css">
   </head>
   <body bgcolor="#f0fff0">

       <h1>Pribeh</h1>
       Neco k nove hre AC Odyssea,zajimavosti a tak dale.
       <p>hra strucne se odehrava v recku, jsou zde spartane a pribeh je mozne hrat dvemi prve v AC za obe pohlavi</p>
       <h2>Mapa, body zkusenosti</h2>
       <p>Mapa je nejvetsi ze vsech co zatim vysli<br>
       Dovednostni strom obsahuje tri typy</p>
      <b>hodnoceni 9/10</b>
      <i>Hra je opravdu super - hrac (250h)</i>
           <p><span style="color:red"> hra bezi plynule </span></p>
           <p> <img src="1.jpg" height="215" width="460"/></p>
           <a href="https://assassinscreed.ubisoft.com">Hlavni stranka Ubisoftu</a>
       <br>
           <a href="https://www.seznam.cz/">seznam</a>

       <ol>
             <li> O Assassins Creed</li>
             <li> O Recku </li>
       </ol>
             <hr>

       <ul>
                 <li>Predmety</li>
                 <li>Loot</li>
                 <li>Vyhlidkove Body</li>
                 <li>Nepratele</li>
       </ul>

       <dl>
           <dd>Assassin</dd> Alexios
           <dd>Assassinka</dd> Kassandra

       </dl>
       <table border="100">

           <tr>
               <td width="100">Pribeh</td>
               <td width="30">Predmety</td>
               <td width="20">Ukol</td>
           </tr>
           <tr>
               <td width="20">Prumerna doba hratelnosti az 100h</td>
               <td width="200">Jsou zde od common po epic predmety</td>
               <td width="20">Je spoustu hlavnich ale i vedlejsich</td>
           </tr>
       </table>
       <a href="https://is.sssep9.cz/next/login.aspx" target="_blank"><img src="2.jpeg" height="225" width="225"></a>
       <form method="get" action="index.html">
           <input type="text" name="firstname" value="Vase jmeno">
           <input type="sumbit" value="Kolik mate hodin?"><br>
           <input type="text" size="10" name="textik" value="">Prezdivka<br>
           <input type="password" size="10" name="heslo" value="">Heslo<br>
           <input type="radio"  value="prvni">zena
           <input type="radio"  value="druha">muz<br>
           <input type="checkbox" name="souhlas" value="0">souhlas
           <input type="checkbox" name="souhlas" value="0">nesouhlas<br>
           <input type="sumbit" onclick="location.href='http://gmail.com';" value="gmail" /><br>
           <input type="file" name="cokoliv">
           <select size="2">
               <option value="odesilana_hodnota">Dekujeme za vyplneni dotazniku</option>
           </select>
       </form>

   </body>

    <?PHP

       echo "Ahoj";
       echo "<br>";

       print_r ("Ahoj");
       echo "<br>";


       var_dump ("Ahoj");
       echo "<br>";

       echo  "\$nazdarek";
       echo "<br>";

       echo "<a href=\"index.php\"> Domovska stranka </a>";
       echo "<br>";

       $a = 20;
       $b = 30;
       $c = 89;

       var_dump($a === $b);
       echo "<br>";
       var_dump($a === $c);
       echo "<br>";
       var_dump($a == $b);
       echo "<br>";
       var_dump($a == $c);
       echo "<br>";
       var_dump($a.$c);
       echo "<br>";
       var_dump($a+$c);
       echo "<br>";
       var_dump($a || $b);
       echo "<br>";

       $cena1 = 12;
       $cena2 = 13;

       if ($cena1 > $cena2) {
           echo "je vetsi";
       }else{
           echo "je mensi";
       }

       echo "<br>";


    $cislo1 = 60;
    $cislo2 = 30;
    if ($cislo2 > $cislo1){
        echo "je vetsi";
    }else{
        echo "neni vetsi";
    }
    echo "<br>";

    $cislo3 = 20;
    $cislo4 = 65;
    $cislo5 = 32;
    if ($cislo4 != $cislo5)
        if ($cislo4 > $cislo5)
            echo "je vetsi";
        echo "<br>";

        $zelenina = array("mrkef", "celer", "brambory", 'kvetak', 'rajce', 'petrzel','paprika', 'cesnek','lilek','kapie');
        echo "<br>";
        var_dump($zelenina);
        echo"<br>";
        $auta [osobni][skoda] = 'fabia';
        $auta [osobni][skoda] = 'octavia';
        $auta [osobni][skoda] = 'Citygo';
        $auta [osobni][skoda] = 'Rapid';
        $auta [osobni][skoda] = 'Felicia';
        $auta [sportovni][ferrari] = 'Enzo';
        $auta [sportovni][ferrari] = '308';
        $auta [sportovni][ferrari] = 'Laferrari';
        $auta [sportovni][Lambo] = 'Hurikan';
        $auta [sportovni][Lambo] = 'Aventador';
        $auta [sportovni][Lambo] = '400GT';
        $auta [sportovni][Lambo] = 'Miura';
        $auta [sportovni][Lambo] = 'Jarama';
        $auta [sportovni][Lambo] = 'Uracco';
        $auta [sportovni][Lambo] = 'Jalpa';
        $auta [sportovni][Lambo] = 'Gallardo';
        $auta [sportovni][Lambo] = 'Diablo';
        $auta [nakladni][Tatra] = 'T 815';
        $auta [nakladni][Mercedes] = 'X';
        $auta [nakladni][Daf] = '342 typ';
        $auta [nakladni][Tatra] = 'T 138';
        var_dump($auta);
        echo "<br>";

        foreach ($zelenina as $key => $value){
            echo $value."<br>";

        }
        echo "<br>";
        echo "<table border=1>";
         foreach($zelenina as $key => $value) {
             echo "<tr><td>$key</td>
               <td>$value</td>
               </tr>";
         }
         echo "</table>";
         $count  = 10;
         $count2 = 5;

         echo "<br>";

         echo "<table border='1'>";

         for ($index = 1; $index < $count+1; $index++){
             echo "<tr>";
              for ($index2 = 1; $index2 < $count2+1; $index2++){
                 echo "<td>".$index."-".$index2."</td>";
                 echo "<td>".$index."</td>";

             }
             echo "</tr>";


         }
         echo "</table>"


        ?>

<?php
class Zdroj {
    public $napeti;


    public function getNapeti(){


    }


      }

      $zdroj = new Zdroj ();
      $zdroj -> napeti = 12;
      $zdroj -> getNapeti();
     var_dump ($zdroj);



     class User {
          private $firstname;
          private $lastname;
          private $ulice;
          private $fullname;
          public $phone;
          public $email;



          public function __construct($data){
              $this->firstname = $data['firstname'];
              foreach ($data as $key => $value){
                  $this -> $key = $value;
              }


          }
     }
     



    $data ['firstname'] = "bara";
    $data ['lastname'] = "novakova";


     $user = new User($data);
     $user ->phone = 876;
     $user ->email = n.cz ;


     var_dump($user);





