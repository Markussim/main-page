function search() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("search_results").innerHTML;
      var jsonObj = JSON.parse(this.response);
      myFunction(jsonObj);
    }
  };
  xhttp.open("GET", "https://marksism.space/search_api.php?search_box=skola", true);
  xhttp.send();
}

function myFunction(arr) {
  if (arr.length >= 1) {
    var out = "";
    var i;
    for (i = 0; i < arr.length; i++) {
      out += '<a href="' + arr[i].ActualLink + '">' +
        arr[i].SiteName + '</a><br>' + arr[i].Description + '<br><br>';
    }
    document.getElementById("search_results").innerHTML = out;
  } else {
    document.getElementById("search_results").innerHTML = "No results";
  }
}