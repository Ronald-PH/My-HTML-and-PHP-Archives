* {
    padding: 0;
    margin: 0;
}
body {
    background-color: rgb(10, 9, 9);
    display: flex;
    align-items: center;
    justify-content: center;;
}
#container {
    color: white;
    position: absolute;
    top: 20%;
}
#output {
    height: 320px;
    width: 460px;
    background-color: green;
    padding: 5px;
    display: flex;
}
#img-output {
    background: url(athena.jpg);
    width: 200px;
    height: 300px;
}
#img-filter {
    background: linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)), url(athena.jpg);
    width: 200px;
    height: 300px;
    margin-left: auto;
}
