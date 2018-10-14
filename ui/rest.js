function Tilitapahtumat() {
  var url = '../api/tilitapahtumat.php';
  var xhttp = new XMLHttpRequest();
  xhttp.open('GET', url, true);
  var jsonData = '';
  var data = '<table class="table table-bordered table-hover">';
  data += '<tr><th>Pvm</th><th>Saaja</th><th>Viite</th><th>Selite</th><th>Saajan Tilinumero</th><th>Määrä</th></tr>';
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState === 4 && xhttp.status === 200) {
      jsonData = JSON.parse(xhttp.responseText);
      for (x in jsonData) {
        data +=
          '<tr><td>' +
          jsonData[x].Etunimi +
          '</td><td>' +
          jsonData[x].Sukunimi +
          '</td><td> ' 
          jsonData[x].Osoite +
          '</td><td> ' 
          ;
                
      }
      data += '</table>';
      document.getElementById('results').innerHTML = data;
    }
  };
  xhttp.send();
}

function GetBooks_by_id() {
  var id = document.getElementById('book_id').value;
  var url ='../api/get_books_by_id.php?id=';
  url += id;
  var xhttp = new XMLHttpRequest();
  xhttp.open('GET', url, true);
  var jsonData = '';
  var data = '<table border="1">';
  data += '<tr><th>Book name</th><th>Author</th></tr>';
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState === 4 && xhttp.status === 200) {
      jsonData = JSON.parse(xhttp.responseText);
      for (x in jsonData) {
        data +=
          '<tr><td>' +
          jsonData[x].name +
          '</td><td> ' +
          jsonData[x].author +
          '</td></tr>';
      }
      data += '</table>';
      document.getElementById('results').innerHTML = data;
    }
  };
  xhttp.send();
}

function AddBook() {
	var url = '../api/add_book.php';
	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', url, true);
	var form = document.getElementById('BookForm');
	var formData = new FormData(form);
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState === 4 && xhttp.status === 201) {
		document.getElementById('results').innerHTML = 'Kirjan lisäys onnistui';
		} else {
		document.getElementById('results').innerHTML = 'Virhe';
		}
	};
	xhttp.send(formData);
}

function DeleteBook() {
  var id = document.getElementById('delete_id').value;
  var url ='../api/delete_books.php?id=';
  url += id;
  var xhttp = new XMLHttpRequest();
  xhttp.open('DELETE', url, true);
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState === 4 && xhttp.status === 201) {
  		document.getElementById('results').innerHTML = 'Kirjan poisto onnistui';
  		} else {
  		document.getElementById('results').innerHTML = 'Virhe';
  		}
  };
  xhttp.send();
}

function UpdateBook() {
	var url = '../api/update_book.php';
	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', url, true);
	var form = document.getElementById('UpdateForm');
	var formData = new FormData(form);
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState === 4 && xhttp.status === 201) {
		document.getElementById('results').innerHTML = 'Kirjan muokkaus onnistui';
		} else {
		document.getElementById('results').innerHTML = 'Virhe';
		}
	};
	xhttp.send(formData);
}
