<script>
    function abc()
    {
        var t=document.getElementById('t1').value;
        var ln=t.length;
        var d=" ";
        for(var i=ln-1;i>=0;i--)
            {
                d+=t.charAt(i);
            }
            document.getElementById("p1").innerHTML=d;
    }
</script>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="js4.php" method="POST">
            <b>enter string</b>
            <input type="text"id="t1"/>
            <br>
            <input type="button"value="result"onclick="abc()"/>
            <br>
            <p id="p1"/>
        </form>
    </body>
</html>
