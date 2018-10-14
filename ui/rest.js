function Tilitapahtumat() {
  var url = 'http://jukkajauhiainen.ipt.oamk.fi/~t8pito01/htyo_verkkopankki/api/tilitapahtumat.php';
  var xhttp = new XMLHttpRequest();
  xhttp.open('GET', url, true);
  var jsonData = '1';
  var data = '<table border="10">';
  data += '<tr><th>Pvm</th><th>Saaja</th><th>Viite</th><th>Saajan tilinumero</th><th>Selite</th><th>Summa</th></tr>';
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      jsonData = JSON.parse(xhttp.responseText);
      for (x in jsonData) {
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
          jsonData[x].Summa +//muistutuksena: muuttujaei tykkää ä-kirjaimesta sarakkeen nimessä
          '</td></tr>'
              
              
              
              ;
      }
      data += '</table>';
      document.getElementById('results').innerHTML = data;
    }
  };
  xhttp.send();
}