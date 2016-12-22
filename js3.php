<script>
    function abc()
    {
        var t=document.getElementById('t1').value;
        var s=t.split(" ");
        var d=" ";
        if(s.length==1)
            {
                d=t.charAt(0).toUpperCase()+t.substr(1).toLowerCase();
            }
            if(s.length==2)
                {
                    d=t.charAt(0).toUpperCase()+".";
                    var c=t.indexOf(" ");
                    d+=t.charAt(c+1).toUpperCase()+t.substr(c+2).toLowerCase();
                }
                if(s.length==3)
                    {
                        d=t.charAt(0).toUpperCase()+".";
                        var c=t.indexOf(" ")
                        d+=t.charAt(c+1).toUpperCase()+".";
                        var c1=t.lastIndexOf(" ");
                        d+=t.charAt(c1+1).toUpperCase()+t.substr(c1+2).toLowerCase();
                    }
                    document.getElementById('p1').innerHTML=d;
    }
</script>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="js3.php" method="POST">
            <b>enter string:</b><input type="text"id="t1"/><br>
            <input type="button" value="result" onclick="abc()"/><br>
            <p id="p1"/>
        </form>
    </body>
</html>
