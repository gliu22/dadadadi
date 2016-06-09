window.onload = init;

function init(){
    var select = document.getElementById("fruit");
    select.onchange = getData;
}

function getData(e){
    var str = e.target.value;
    request = new XMLHttpRequest();
    var url  = "data.php?fruit=" + str;
    request.onreadystatechange = function(){
        if (request.readyState == 4 && request.status == 200) {
            document.getElementById("wrap").innerHTML = request.responseText;
        }
    };
    request.open("GET",url,true);
    request.send(null);
}
