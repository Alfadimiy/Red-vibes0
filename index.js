window.onscroll = () => {
    if ((window.innerHeight = window.pageYOffset) >= document.body.offsetHeight) {

    }
}
history.back();
history.go(-1);

function myFunction()
{
    var un = document.forms["myForm"]["Uname"].value;
    var pw = document.forms["myForm"]["Pass"].value;
if(un=="imam" && pw=="07033032764")
{
    window.location.href="submit.html";
}
else{
    alert("Invalid Use deteils");
}
}