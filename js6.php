<script>
     function ValData()
     {
        var u=document.getElementById('txtuname').value;
       var p=document.getElementById('txtupass').value;
        var cp=document.getElementById('txtconpass').value;
       var m="";
       s=true;
       if(u=="" || u==null)
           {
               m+="username required !<br>";
               s=false;
           }
           if(p=="" || p==null)
               {
                  m+="password required !<br>";
                  s=false;
               }
               if(cp=="" || cp==null)
                   {
                       m+="confirm password required !<br>";
                       s=false;
                   }
                   if(p!=cp)
                       {
                           m+="pasword and confirm password must be same !<br>";
                           s=false;
                       }
                       if(!(p.length>=6 && p.length<=12))
                           {
                               m+="password length must be 6 to 12 chars long !<br>";
                               s=false;
                           }
                           document.getElementById('msg').innerHTML=m;
                           return s;
     }
</script>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="js12.php" method="POST" onsubmit="return ValData()">
            <table border="5">
                <tr>
                    <td>username:</td>
                    <td><input type="text" id="txtuname"/></td>
                 </tr>
                 <tr>
                     <td>password:</td>
                     <td><input type="password" id="txtupass"/></td>
                 </tr>
                 <tr>
                     <td>confirm password:</td>
                     <td><input type="password" id="txtconpass"/></td>
                 </tr>
                 <tr>
                     <td colspan="2">
                         <input type="submit" value="login" id="btnlogin"/>
                     </td>
                 </tr>
                 
                     <td id="msg"/>
        </form>
    </body>
</html>
