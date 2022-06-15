function displayCurrentDate(){
    setInterval(displayDate,1000);
}

function displayDate(){
    var x = new Date;
    document.getElementById("date").innerHTML = x;
}