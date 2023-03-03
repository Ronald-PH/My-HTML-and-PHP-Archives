function image() {
    var imgoption = document.getElementById("image").value;
    var imgoutput = document.getElementById("img-output");
    var imgfilter = document.getElementById("img-filter");
    imgoutput.style.background = "url("+ imgoption +")";
    imgfilter.style.background = "linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)), url("+ imgoption +")";
}
function filter() {
    var filteroption = document.getElementById("filter").value;
    var imgoption = document.getElementById("image").value;
    var imgfilter = document.getElementById("img-filter");
    imgfilter.style.background = ""+filteroption+", url("+imgoption+")";
}
