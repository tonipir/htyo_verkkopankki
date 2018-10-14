<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Verkkopankki</title>
   
      <script src="rest.js"></script>
  </head>
  <body>
<div id="login_status">
  <?php
  session_start();
    if(isset($_SESSION['username'])){
      echo 'Tervetuloa '.$_SESSION['username'].'<br>';
      echo '<a href="../api/logout.php"><button>Kirjaudu ulos</button></a>';
    }
    else {
      echo 'Tervetuloa vieras ';
      echo '<a href="../ui/login.html"><button>Kirjaudu</button></a>';
      
    }
  ?>
  <hr>
</div>

<div class="container">

    <p>
        <button class="btn btn-primary" onclick="Tilitapahtumat()">Tilitapahtumat</button>

     

    <div id="results"></div>
  </div>
  </body>
</html>
