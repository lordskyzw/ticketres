<html>
    <head><title>MAPVIEW</title></head>
    <style>
#fm2{
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: #6B5B95;
    
    box-shadow: 6px 6px 6px 6px black;
    
}

#fm1{
    background-color: #FF6F61;

    box-shadow: 6px 6px 6px 6px blue;
    
}
body{
    background-image: url(b2.jpg);
    display: block;
    background-repeat: no-repeat;
}

#report{
    height: 20%;
    
    box-shadow: 6px 6px 6px 6px black;
}
        </style>
        <header>BUS LOCATIONS</header>
            <body>
                <div>
                <iframe src = "buslist.php" name = "mainframe" id = "fm1" > </iframe>
           
           
                <iframe scr = "billboard.php" name = "secndaryframe" id = "fm2"> </iframe> 
</div>
<div><br>
    <form method = "post">
        <input type = "textarea" placeholder = "queries" id = "report">
        <input type = "submit" value = "submit" name = "submit">
        <a href = "#home"> edit billboard </a>

</form>
</div>
</body>

</html>