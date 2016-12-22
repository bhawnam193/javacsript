<script>
    function sum()
    {
        var a=document.getElementById('t1').value;
        var b=document.getElementById('t2').value;
        var c=parseInt(a)+parseInt(b);
        document.getElementById('t3').value=c;
    }
    function sum1()
    {
        var a=parseInt(document.getElementById('t1').value);
        var b=parseInt(document.getElementById('t2').value);
        var c=a+b;
        document.getElementById('t3').value=c;
    }
    function clear_rec()
    {
        document.getElementById('t1').value="";
        document.getElementById('t2').value="";
        document.getElementById('t3').value="";
        document.getElementById('t1').focus();
    }
    function mul()
    {
        var a=parseInt(document.getElementById('t1').value);
        var b=parseInt(document.getElementById('t2').value);
        var c=parseInt(a)*parseInt(b);
        document.getElementById('t3').value=c;
    }
    function div()
    {
        var a=parseInt(document.getElementById('t1').value);
        var b=parseInt(document.getElementById('t2').value);
        var c=parseInt(a)/parseInt(b);
        document.getElementById('t3').value=c;
    }
</script>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="js2.php" method="POST">
            <b>first no.:</b><input type="text"id="t1"/><br>
            <b>sec.num:</b><input type="text"id="t2"/><br>
            <b>result:</b><input type="text"id="t3"/><br>
            <input type="button" value="sum" onclick="sum()"/>
            <input type="button" value="mul" onclick="mul()"/>
            <input type="button" value="div" onclick="div()"/>
            <input type="button" value="clear" onclick="clear_rec()"/>
        </form>
    </body>
</html>
