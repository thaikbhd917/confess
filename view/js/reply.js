
function reply(loadContents) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            loadContents(this.responseText);
        }
    };
    xmlhttp.open("POST", "reply.php?", true);
    xmlhttp.send();
}