<?php require_once 'ti.php' ?>
<html>
<head>
<meta charset="UTF-8">
<style>
#header {
    background-color:black;
    color:white;
    height:38%;
    text-align:center;
    padding:5px;
    width: 97.4%;
    font-family: arial;
    background-image: url(img/FrutaportadaFix.png);
    background-attachment: fixed;
    background-size: 98.5% 40%;
    background-repeat: no-repeat; 

}
body { 
    background:lightgray;
    font-family: arial;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    font-family: arial;
}

li {
    float: left;
    font-family: arial;
}

ul a:link, ul a:visited {
    display: block;
    width: 290px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: black;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
    font-family: arial;
}

ul a:hover, ul a:active {
    background-color: gray;
    font-family: arial;
}
td, th {
    font-size: 1em;
    border: 1px solid black;
    padding: 3px 7px 2px 7px;
    font-family: arial;
}
th {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: black;
    color: #ffffff;
    font-family: arial;
}
tr.alt td {
    color: #000000;
    background-color: #EAF2D3;
    font-family: arial;
}
#nav {
    line-height:50px;
    background-color:black;
    height:90%;
    width:50%;
    float:left;
    padding:0px;	   
    font-family: arial;   
}
#section {
    background-color:lightgray;
    width: 80%;
    float:left;
    padding:50px;	 	
    font-family: arial; 
}
#footer {
    background-color:black;
    height:4%;
    width: 97.5%;
    color:white;
    clear:both;
    padding:5px;
    font-family: arial;
}
div.fixed {
    position: fixed;
    bottom: 0;
    right: 0;
    border: 3px solid;
    font-family: arial;
}
#text {
    color:black;
    position:relative;
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
    animation: mymove 10s infinite;
    font-family: arial;
}
/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    from {left: 0%;}
    to {left: 100%;}
}

</style>
</head>
<body>

<div id="header">
</div>

<ul>
    <li><a href="menu.php">Inicio<br></a></li>
    <li><a href="menu-clientes.php">Clientes<br></a></li>
    <li><a href="menu-pedidos.php">Pedidos<br></a></li>
    <li><a href="menu-frutas.php">Fruta<br></a></li>
    <li><a href="menu-especies.php">Especies<br></a></li>
</ul>

<div id="section">
<?php startblock('main') ?>
<?php endblock() ?>
</div>

<div id="footer">
    <marquee>LaFruteria</marquee>
</div>

</body>
</html>