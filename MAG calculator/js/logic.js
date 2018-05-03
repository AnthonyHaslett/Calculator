//Just proof that i could implement AJAX to do the PHP request, but it would be over kill in this situation
function results(operator) {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("results").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("POST", "../Controller/processing.php?", operator,  true);
    xhttp.send();
}

