 <!DOCTYPE html>

<html lang="cs">
      <head>
          <title>
              
            Jakub Jakoubek ZT2A 
              
          </title>
          <meta charset="utf-8">
    </head>
    
    <body>
        <form action="index.php"> 
        <input name ="username" type ="text" value="ahoj">
        <input name ="password" type ="password" value="ahoj"><br>
                <hr>                
        
        <br>
        
        <input type ="radio" name="studuje" value = "1" > studuje<br>
        <input type ="radio" name="studuje" value = "0" checked>nestuduje<br><br>
        <hr> 
        <input type ="radio" name="pohlaví" value = "0" >muž<br>
        <input type ="radio" name="pohlaví" value = "1" >žena<br>
        <input type ="radio" name="pohlaví" value = "2" checked >buzerant<br>
        <input type ="radio" name="pohlaví" value = "3" >žena s penisem<br>
        <input type ="radio" name="pohlaví" value = "4" >neznámé<br>
        <input type ="radio" name="pohlaví" value = "5" >neurčité<br>
        <br><br>
        <input type ="checkbox"name="sites"value="facebook">Facebook
        <input type ="checkbox"name="sites"value="instagram">Instagram
        <input type ="checkbox"name="sites"value="skype">Snapchat
        <br><br>        <br> <hr>

        <select name="vaha"> 
            <option value="0"selected>
            <option value="1">1-5</option>
            <option value="2">5-20</option>
            <option value="3">20-50</option>
            <option value="4">50-75</option>
                <option value="5">75-100</option>
                 <option value="6">100-125</option>
                  <option value="7">125-150</option>
                   <option value="8">150-175</option>
                    <option value="9">175-200</option>
                  
            
            
        </select>
        vaha
        
        <br><br>
        <hr>

        
        <input type ="file" name="foto">
        </form>


<br>


<?PHP>
 <?PHP echo date ('H:i:s');?>

<br><br><br>

<?PHP echo "Ahoj"?>

<br><br>
<?PHP $jmeno="Jakub Jakoubek"; echo $jmeno; ?>

<br>
<?PHP

$a = 9;
echo"<br>";
$b = 4;

echo "<br>";

echo $a+$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a-$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a*$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a/$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a+=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a-=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a*=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a/=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a==$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a!=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a>$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a<$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a||$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a&b;

echo "<br>";


?>



    </body>
</html>