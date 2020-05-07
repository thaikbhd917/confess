
function react(message_id, type, loadContents) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            loadContents(this.responseText);
        }
    };
    xmlhttp.open("GET", "react.php?message_id=" + message_id+ "&type=" + type, true);
    xmlhttp.send();
}