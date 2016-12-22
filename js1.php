<script>
    function abc()
    {
        var a,b,c;
        a=prompt('enter first no:');
        b=prompt('enter second no:');
        c=parseInt(a)+parseInt(b);
        document.write("sum :"+c);
    }
    function abc1()
    {
        var a,b,c;
        a=parseInt(prompt('enter first no.:'));
        b=parseInt(prompt('enter second no.:'));
        c=a+b;
        document.write("sum: "+c);
    }
</script>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
     <form action="js1.php" method="POST"/>
     <input type="button"value="result"onclick="abc()"/><br>
     <input type="button"value="result"onclick="abc1()"/><br>
    </body>
</html>
