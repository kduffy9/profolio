document.addEventListener("DOMContentLoaded", function() {
var whiteDonut = document.getElementById("white");
var chocDonut = document.getElementById("choc");
var pinkDonut = document.getElementById("pink");

whiteDonut.addEventListener("mouseover", function () {
    whiteDonut.className = "white";
});
whiteDonut.addEventListener("mouseout", function () {
    whiteDonut.className = "";
});
chocDonut.addEventListener("mouseover", function () {
    chocDonut.className = "choc";
});
chocDonut.addEventListener("mouseout", function () {
    chocDonut.className = "";
});
pinkDonut.addEventListener("mouseover", function () {
    pinkDonut.className = "pink";
});
pinkDonut.addEventListener("mouseout", function () {
    pinkDonut.className = "";
});
});