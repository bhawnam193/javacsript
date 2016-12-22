<script>
    function ValData()
    {
        var t=document.getElementById('t1').value;
        var vdata="0123456789";
        var s=true;
        for(var i=0;i<t.length;i++)
            {
                var c=t.charAt(i);
                if(vdata.indexOf(c)==-1)
                    {
                        S=false;
                        alert('enter numbers only!');
                        document.getElementById('t1').value="";
                        document.getElementById('t1').focus();
                        break;
                    }
            }
            return S;
    }
</script>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="js7.php" method="POST" onsubmit="return ValData()">
            <b>empno</b><input type="text" id="t1"/><br>
            <input type="submit" value="submit" id="b1"/>
        </form>
    </body>
</html>
