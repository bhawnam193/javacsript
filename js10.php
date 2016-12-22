<?php
$eno=$en=$ed=$es="";
$enoerr=$enerr=$ederr=$eserr=$err=$suc="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["t1"]))
    {
        $enoerr="missing!<br>";
        $err=1;
    }
 else 
  {
  $eno=$_POST["t1"];   
 }
 if(empty($_POST["t2"]))
 {
     $enerr="missing!<br>";
     $err=1;
 }
 else
 {
     $en=$_POST["t2"];
 }
 if(empty($_POST["t3"]))
 {
     $ederr="missing!<br>";
     $err=1;
 }
 else 
     {
     $ed=$_POST["t3"];
 }
 if(empty($_POST["t4"]))
 {
     $eserr="missing!<br>";
     $err=1;
 }
 else 
     {
     $es=$_POST["t4"];
 }
 if($err=="")
     $suc='form submitted!!';
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="js10.php" method="POST">
            <b>empno :</b><input type="text" name="t1"/><br>
            <?php echo $enoerr;?>
            <b>name :</b><input type="text" name="t2"/><br>
            <?php echo $enerr;?>
            <b>address :</b><input type="text" name="t3"/><br>
            <?php echo $ederr;?>
            <b>salary :</b><input type="text" name="t4"/><br>
        <?php echo $eserr;?>
            <?php echo $suc;?>
            <input type="submit" value="submit" name="b1"/><br>
        </form>
    </body>
</html>
