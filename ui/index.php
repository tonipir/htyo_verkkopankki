<!DOCTYPE html>
<html lang="en" dir="ltr"> <!asetetaan elementtien peruskieleksi englanti ja kirjoitussuunnaksi ltr=letf to right>
  <head> <!head lohkon sisään tehdään määritykset, sitä ennen html lohkon aloitus, jonka sisään tulee kaikki tieto>
    <meta charset="utf-8"> <!määritetään html sivun koodaus>
    <title>Verkkopankki</title> <!määritetään välilehden otsikko>
   
      <script src="rest.js"></script> <!sisällytetään script lohkolla rest.js mukaan>
  </head> <!headlohkon loppu>
  <body> <!bodylohkon alku>

  <?php //php-koodia html-lohkon sisällä, muutetaan kommentointityyliä
  session_start();
    if(isset($_SESSION['username'])){ //verrataan käyttäjän antamiin kirjautumistietoihin ja jos ok, toivotetaan tervetulleeksi
      echo 'Tervetuloa '.$_SESSION['username'].'<br>';
      echo '<a href="../api/logout.php"><button>Kirjaudu ulos</button></a>'; //määritetään kirjaudu ulos -nappi ja sen toiminta
      //viittaamaan logout.php tiedostoon
    }
    else {
      echo 'Tervetuloa vieras '; //muutoin toivotetaan vieras tervetulleeksi, tämä myös oletuksena sivulle mentäessä tällä hetkellä
      echo '<a href="../ui/login.html"><button>Kirjaudu</button></a>';
      //Vastavuoroisesti jos kukaan ei ole kirjautunut sisään, asetetaan kirjaudu nappi joka viittaa login.html näkymään
    }
  ?>




    <p>  <!tässä napit tilitapahtumille, pankkikorteille sekä maksetuille maksuille
        viitataan jokaisessa rest.js tiedostossa tehtyyn funktioon<- mitä tapahtuu kun painetaan napista>
        <button class="btn btn-primary" onclick="Tilitapahtumat()">Tilitapahtumat</button>
        <button class="btn btn-primary" onclick="Pankkikortit()">Pankkikortit</button>
        <button class="btn btn-primary" onclick="Maksetutmaksut()">Maksetut maksut</button>
     <p>
        Uusi maksu
        <br>
        <!luodaan formit uutta maksua varten ja määritellään uusimaksu.php käytettäväksi,
            annetaan input tyypiksi text ja identifioivat tunnisteet .php tiedostoa varten, jossa arvot sijoitellaan muuttujiin>
        <form action="http://jukkajauhiainen.ipt.oamk.fi/~t8pito01/htyo_verkkopankki/api/uusimaksu.php" method="post">
            
Maksun numero: <input type="text" name="mn"> <br>
Saajan nimi: <input type="text" name="nimi"> <br>
Viite: <input type="text" name="viite"> <br>
Saajan Tilinumero: <input type="text" name="st"> <br>
Summa: <input type="text" name="summa"> <br>

<div id="results"></div> <!säiliöidään tulokset myöhemmin käytettäväksi>
<input type="submit"> <!submit on nimensä mukaisesti lähettäjätyyppinen input type, se käyttäytyy kuin nappi>
</form> <!formlohko päättyy>
          
  </body> <!bodylohko päättyy>
</html> <!htmllohko päättyy>
