function next() {
    var ajaxRequest;
    console.log("in");
    ajaxRequest = new XMLHttpRequest();
    ajaxRequest.onreadystatechange = function() {

        if (ajaxRequest.readyState == 4 && this.status == 200) {
            var ajaxDisplay = document.getElementById('game');
            ajaxDisplay.innerHTML = ajaxRequest.responseText;
        }
    }
    var categ = document.getElementById('next').value;
    ajaxRequest.open("GET", "ghici.php?categ=" + categ, true);
    ajaxRequest.send();
}

function myTogglebtn() {
    var x = document.getElementById("raspuns");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }