function Tilitapahtumat() {
  var url = 'http://jukkajauhiainen.ipt.oamk.fi/~t8pito01/htyo_verkkopankki/api/tilitapahtumat.php';
  var xhttp = new XMLHttpRequest(); //luodaan funktio tilitapahtumat, jossa viittaus tilitapahtumat.php:hen
  xhttp.open('GET', url, true);//get-metodi
  var jsonData = '';
  var data = '<table border="10">'; //määritetään mm. taulukon koko, voisi olla muitakin kuten width jne
  data += '<tr><th>Pvm</th><th>Saaja</th><th>Viite</th><th>Saajan tilinumero</th><th>Selite</th><th>Summa</th></tr>';
  //yllä asetellaan otsikot
  //alla mennään funktion if silmukkaan
  xhttp.onreadystatechange = function() { 
    if (xhttp.readyState == 4 && xhttp.status == 200) { // readystate == 4 ilmaisee done tilan ja status = 200 tarkoittaa ok-tilaa 
      jsonData = JSON.parse(xhttp.responseText);
      for (x in jsonData) { //for silmukalla käydään json tiedostomuodon taulukkoon
          //mysql-tietokannasta valitut arvot näytille
        data +=
          '<tr><td>' +
          jsonData[x].Pvm +
          '</td><td> ' +
          jsonData[x].Saaja +
          '</td><td> ' +
          jsonData[x].Viite +
          '</td><td>'+
          jsonData[x].Saajan_tili +
          '</td><td>' +
          jsonData[x].Selite +
          '</td><td>' +
          jsonData[x].Summa +//muistutuksena: muuttuja ei tykkää ä-kirjaimesta sarakkeen nimessä
          '</td></tr>'
              
              
              
              ;
      }
      data += '</table>';
      document.getElementById('results').innerHTML = data;
    }
  };
  xhttp.send();
}

//maksetut maksut ja pankkikortit tehty samalla tyylillä
function Pankkikortit() {
  var url = 'http://jukkajauhiainen.ipt.oamk.fi/~t8pito01/htyo_verkkopankki/api/pankkikortit.php';
  var xhttp = new XMLHttpRequest();
  xhttp.open('GET', url, true);
  var jsonData = '';
  var data = '<table border="10">';
  data += '<tr><th>Kortin tyyppi</th><th>Voimassa</th></tr>';
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      jsonData = JSON.parse(xhttp.responseText);
      for (x in jsonData) {
        data +=
          '<tr><td>' +
          jsonData[x].Kortin_tyyppi +
          '</td><td> ' +
          jsonData[x].Voimassa +
        //muistutuksena: muuttuja ei tykkää ä-kirjaimesta sarakkeen nimessä
          '</td></tr>'
                 
              ;
      }
      data += '</table>';
      document.getElementById('results').innerHTML = data;
    }
  };
  xhttp.send();
}


function Uusimaksu() {
	var url = 'http://jukkajauhiainen.ipt.oamk.fi/~t8pito01/htyo_verkkopankki/api/uusimaksu.php';
	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', url, true); //uusimaksu on muuten samalla lailla, php-tiedosto tietysti eroaa
	var form = document.getElementById('UusiMaksu');
	var formData = new FormData(form);
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 201) { //tässä status = 201 mitä käytetään uuden tiedon luomisessa
		document.getElementById('results').innerHTML = 'Maksu maksettu!';//tarkastetaan menikö ok
		} else {
		document.getElementById('results').innerHTML = 'Jotakin meni pieleen';
		}
	};
	xhttp.send(formData);
}



function Maksetutmaksut() {
  var url = 'http://jukkajauhiainen.ipt.oamk.fi/~t8pito01/htyo_verkkopankki/api/maksetutmaksut.php';
  var xhttp = new XMLHttpRequest();
  xhttp.open('GET', url, true);
  var jsonData = '';
  var data = '<table border="10">';
  data += '<tr><th>Saaja</th><th>Viite</th><th>Saajan tili</th><th>Summa</th></tr>';
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      jsonData = JSON.parse(xhttp.responseText);
      for (x in jsonData) {
        data +=
          '<tr><td>' +
          jsonData[x].Saaja +
          '</td><td> ' +
          jsonData[x].Viite +
          '</td><td> ' +
          jsonData[x].Saajan_tili +
          '</td><td> ' +
          jsonData[x].Summa +
        //muistutuksena: muuttuja ei tykkää ä-kirjaimesta sarakkeen nimessä
          '</td></tr>'
                 
              ;
      }
      data += '</table>';
      document.getElementById('results').innerHTML = data;
    }
  };
  xhttp.send();
}