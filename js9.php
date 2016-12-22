<script>
    function ValData()
    {
        var t=document.getElementById('d1');
        var s=true;
        if(t.selectedIndex==0)
            {
                s=false;
                alert('select Age!');
            }
            return s;
    }
</script>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="js9.php" method="POST" onsubmit="return ValData()">
            <b>Age:</b>
            <select id="d1">
                <option value="0">select Age</option>
                <option value="1">0-10</option>
                <option value="2">11-20</option>
                <option value="3">21-30</option>
            </select><br>
            <input type="submit" value="submit"/>
        </form>
    </body>
</html>
