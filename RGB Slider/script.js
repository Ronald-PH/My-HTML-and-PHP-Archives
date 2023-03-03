function colors() {
    var red = document.getElementById("red").value;
    var green = document.getElementById("green").value;
    var blue = document.getElementById("blue").value;
    var output = document.getElementById("output");
    var data = document.getElementById("data");
    output.style.background = "rgb("+ red +","+green+","+blue+")";
    data.innerHTML = "rgb("+ red +","+green+","+blue+")";
}
