<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple RestApi</title>
   
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
      echo '<a href="login.html"><button>Kirjaudu</button></a>';
    }
  ?>
  <hr>
</div>

<div class="container">

    <p>
        <button class="btn btn-primary" onclick="GetBooks()">Kaikki kirjat</button>

        Anna kirjan id
        <input type="text" id="book_id">
        <button onclick="GetBooks_by_id()">Etsi kirja</button>
    </p>

    <p>
        Lisää kirja
        <br>
        <form id='BookForm'>
            <label for="name">Book name</label> <br>
            <input type="text" name="name" id="name"> <br>
            <label for="author">Author</label> <br>
            <input type="text" name="author" id="author"> <br>
        </form>
        <button onclick="AddBook()">Lisää kirja</button>
    </p>
    <p>
      Anna poistettavan kirjan id
      <input type="number" id="delete_id">
      <button class="btn btn-danger" onclick="DeleteBook()">Poista</button>
    </p>

    <p>
        Muokkaa kirja
        <br>
        <form id='UpdateForm'>
          <label for="name">Book id</label> <br>
          <input type="text" name="idBooks" id="idBooks"> <br>
            <label for="name">Book name</label> <br>
            <input type="text" name="name" id="name"> <br>
            <label for="author">Author</label> <br>
            <input type="text" name="author" id="author"> <br>
        </form>
        <button onclick="UpdateBook()">Tallenna</button>
    </p>


    <div id="results"></div>
  </div>
  </body>
</html>
