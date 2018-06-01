  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "data.php";
  var asynchronous = true;

  ajax.open(method, url, asynchronous);
  ajax.send();

  ajax.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var data = JSON.parse(this.responseText);
      console.log();
      var html = "";
      for (var a = 0; a < data.length; a++) {
        var name = data[a].name;
        var brand = data[a].brand;
        var price = data[a].price;
        var quantity = data[a].quantity;

        html += "<tr>";
        html += "<td>" +name+ "</td>";
        html += "<td>" +brand+ "</td>";
        html += "<td>" +price+ "</td>";
        html += "<td>" +quantity+ "</td>";
        html += "</tr>"
      }
      document.getElementById('data').innerHTML = html;
    }
  };
