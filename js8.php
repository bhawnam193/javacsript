<script>
    function ValData()
    {
        var t=document.getElementsByName('r1');
        var s=false;
        for(var i=0;i<t.length;i++)
        {
            if(t[i].checked)
                {
                    s=true;
                }
        }
        if(s==false)
            alert('select one!');
        return s;
    }
</script>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="js8.php" method="POST" onsubmit="return ValData()">
            <b>Gender:</b>
            <input type="radio" name="r1" value="M"/> Male<br>
            <input type="radio" name="r1" value="F"/> Female<br>
            <input type="submit" value="submit"/>
        </form>
    </body>
</html>
