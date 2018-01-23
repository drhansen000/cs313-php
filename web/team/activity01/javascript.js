function myFunction() 
{
    window.alert("Hello! I am an alert box!");
}
function changeFirstDiv()
{
    var divColor = document.getElementById("firstDiv").value;
    document.getElementById("first").style.backgroundColor = divColor;
}