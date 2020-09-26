function search() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("search_results").innerHTML;
            var jsonObj = JSON.parse(this.response);
            myFunction(jsonObj);
        }
    };
    xhttp.open("GET", "https://search.marksism.space/?limit=8&search=" + document.getElementById('search_box_form').value, true);
    xhttp.send();
}

function search_onload() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("search_results").innerHTML;
            var jsonObj = JSON.parse(this.response);
            myFunction(jsonObj);
        }
    };
    var url = getURLParameter('search_box');
    if (url == null) {
        url = "";
    }
    document.getElementById("search_box_form").value = url;
    xhttp.open("GET", "https://search.marksism.space/?limit=8&search=" + url, true);
    xhttp.send();
}

function search_field() {
    if (document.getElementById('search_box_form').value.length > 0) {
        if (history.replaceState) {
            window.history.replaceState("object or string", document.getElementById('search_box_form').value, "/?search_box=" + document.getElementById('search_box_form').value);
        } else {
            document.location.href = "?search=" + document.getElementById('search_box_form').value;
        }
    } else {
        console.log("The search is zero");
        if (history.replaceState) {
            window.history.replaceState("object or string", document.getElementById('search_box_form').value, "/");
        } else {
            document.location.href = "/";
        }
    }
}

function myFunction(arr) {
    if (arr.length >= 1) {
        var out = "";
        var i;
        for (i = 0; i < arr.length; i++) {
            out += '<a href="' + arr[i].link + '">' + arr[i].siteName + '</a><br>' + arr[i].description + '<br><br>';
        }
        document.getElementById("search_results").innerHTML = out;
    } else {
        document.getElementById("search_results").innerHTML = "No results";
    }
}

function getURLParameter(name) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
}

console.log("Hmm")