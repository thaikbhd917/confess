
function paging(offset) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contents").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "paging.php?offset="+offset, true);
    xmlhttp.send();
}