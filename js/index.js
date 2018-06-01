function showSuggestion(str) {
  // console.log(str);
  if (str.length == 0) {
    document.getElementById('output').innerHTML = '';
  }else {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('output').innerHTML = this.responseText;
      }
    }
    xhr.open('GET', 'suggest.php?q='+str, true);
    xhr.send();
  }
}
