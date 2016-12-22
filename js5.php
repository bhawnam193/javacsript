<script>
    function abc()
    {
        var amt=parseInt(document.getElementById('t1').value);
        var d="";
        var ones=Array("","one","two","three","four","five","six","seven","eight","nine","ten","eleven","tweleve","thirteen","forteen","fifteen","sixteen","seventeen","eighteen","ninteen")
        var tens=Array("","","twenty","thirty","fourty","fifty","sixty","seventy","eighty","ninty")
        var hunderds=Array("","one hundred","two hundred","three hundred","four hundred","fve hundred","six hundred","seven hundred","eight hundred","nine hundred")
        if(amt>0 && amt<20)
            {
                d=ones[amt];
            }
            if(amt>19 && amt<=99)
                {
                    var a1=Match.floor(amt/10);
                    d=tens[a1];
                    var a2=amt%10;
                    d+=" "+ones[a2];
                }
                if(amt>99 && amt<=999)
                    {
                        var a1=Match.floor(amt/100);
                        {
                            d=hundreds[a1];
                            var a2=amt%100;
                            if(a2>0 && a2<20)
                                {
                                    d+=" "+ones[a2];
                                }
                                else
                                    {
                                        var a3=Match.floor(a2/10);
                                        d+=" "+ "and" +" "+tens[a3];
                                        var a4=a2%10;
                                        d+=" "+ones[a4];
                                    }
                        }
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
        <form action="js5.php" method="POST">
            <b>enter amount</b><input type="text" id="t1"/><br>
            <input type="button" value="convert"onclick="abc()"/><br>
            <p id="p1"/>
        </form>
    </body>
</html>
