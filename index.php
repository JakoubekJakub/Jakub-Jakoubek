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
            <input type ="radio" name="pohlaví" value = "3" >transvestita<br>
            <input type ="radio" name="pohlaví" value = "4" >neznámé<br>
            <input type ="radio" name="pohlaví" value = "5" >neurčité<br>
            <br><br>
            <input type ="checkbox"name="sites"value="facebook">FB
            <input type ="checkbox"name="sites"value="instagram">Ig
            <input type ="checkbox"name="sites"value="skype">Skype
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


        
        <?PHP echo date('H:i:s');
        ?>

        <br><br><br>

<?PHP echo "Ahoj" ?>

        <br><br>
<?PHP $jmeno = "Jakub Jakoubek";
echo $jmeno; ?>

        <br>
        <?PHP
        $text = "A soubezne linie se vcas rozesly, takze lidska pokoleni dnes neznaji system, v 
nemz by jedna samicka zabezpecovala mrdani, zatimco vybrana skupiny obyvatelstva zajistovala
zivobyti, a tak dal, protoze je samozrejme porad mozne, ze v budoucnu si zamrdame.Ano, je to vic 
nez kurva mozne.
Pred nekolika posranymi lety jsem jela vlakem z jihu Anglie do pochcanyho Yorku, kde se mi ctrtala 
moznost na picu zamestnani v knihovna.Ten den, nevsedne bohaty na zkurveny dojmy a posrany zazitky, se mi zapsal
do pochcany pameti predevsim proto, ze jsem behem pochcanych dvou dnu potkala dvě hovna, ktery vypadaji jako .";
        $vulgaArr = array("pochcany", "pica", "zkurveny", "zmrdy");

        var_dump(isValid2($text, $vulgaArr));

        function isValid2($text, $vulgarArr) {
            foreach ($vulgarArr as $word) {
                if (strpos($text, $word) !== FALSE) {
                    return TRUE;
                }
            }
        }
        $text1 = "nejsou stejny jako knihovna";
       $text1 = explode(" ", $text1);
                $vulgaArr = array("pochcany", "pica", "zkurveny", "zmrdy", "hovna");

        var_dump(isValid($text1, $vulgaArr));

        function isValid($text1, $vulgarArr) {
            foreach($text1 as $slova){
            foreach ($vulgarArr as $word1) {
                if ($slova === $word1) {
                    return TRUE;
                }
            }
                    }
                    return false;
                }
        
                
                
                
               
                
                /**
                 * @
                 * @param array $a
                 * @return boolean
                 */
             function Jakub(array $a){
                 return false ;
             }
                
                
                
                
                
                
                
                
                
            $a = 9;
            echo"<br>";
            $b = 4;

            echo "<br>";

            echo $a + $b;

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            echo $a - $b;

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            echo $a * $b;

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            echo $a / $b;

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            echo $a += $b;

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            echo $a -= $b;

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            echo $a *= $b;

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            echo $a /= $b;

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            echo $a == $b;

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            echo $a != $b;

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            echo $a > $b;

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            echo $a < $b;

            echo "<br>";
            $a = 9;
            echo"<br>";
            $b = 4;

            echo $a || $b;

            echo "<br>";
            $a = 9;
            echo"<br>";
            $b = 4;

            echo $a & $b;

            echo "<br>";

            $produkt = array("nazev" => "rohlík slaný",
                "typ" => "slaný",
                "váha" => "15g",
                "množství" => "5");
            var_dump($produkt);
            $produkt = array("nazev" => "rohlíh originál",
                "typ" => "originál",
                "váha" => "18g",
                "množství" => "2");
            var_dump($produkt);
            $produkt = array("nazev" => "houska slaná",
                "typ" => "slaný",
                "váha" => "5g",
                "množství" => "3");
            var_dump($produkt);
            $produkt = array("nazev" => "houska originál",
                "typ" => "originál",
                "váha" => "50g",
                "množství" => "1");
            var_dump($produkt);
            $produkt = array("nazev" => "kroasant salný",
                "typ" => "slaný",
                "váha" => "58g",
                "množství" => "2");
            var_dump($produkt);
            $produkt = array("nazev" => "kroasant originál",
                "typ" => "originál",
                "váha" => "52g",
                "množství" => "1");
            var_dump($produkt);
            $produkt = array("nazev" => "kroasant sýrový",
                "typ" => "sýrový",
                "váha" => "500g",
                "množství" => "57");
            var_dump($produkt);
            $produkt = array("nazev" => "koláč slaný",
                "typ" => "slaný",
                "váha" => "40g",
                "množství" => "3");
            var_dump($produkt);
            $produkt = array("nazev" => "koláč sladký",
                "typ" => "sladký",
                "váha" => "70g",
                "množství" => "5");
            var_dump($produkt);
            $produkt = array("nazev" => "koláč sýrový",
                "typ" => "sýrový",
                "váha" => "98g",
                "množství" => "12");
            var_dump($produkt);
            $produkt = array("nazev" => "jablečný koláč",
                "typ" => "jablečný",
                "váha" => "37g",
                "množství" => "98");
            var_dump($produkt);
            $produkt = array("nazev" => "koláč hruškový",
                "typ" => "hurškový",
                "váha" => "53g",
                "množství" => "9");
            var_dump($produkt);
            $produkt = array("nazev" => "koláč jahoda",
                "typ" => "jahodový",
                "váha" => "50g",
                "množství" => "9");
            var_dump($produkt);
            $produkt = array("nazev" => "koláč borůvka",
                "typ" => "borůvkový",
                "váha" => "80g",
                "množství" => "4");
            var_dump($produkt);
            $produkt = array("nazev" => "koláč s drobenkou",
                "typ" => "drobenkový",
                "váha" => "503g",
                "množství" => "7");
            var_dump($produkt);
            $produkt = array("nazev" => "koláč bez drbenky",
                "typ" => "bezdrobenkový",
                "váha" => "578g",
                "množství" => "3");
            var_dump($produkt);
            $produkt = array("nazev" => "koláč okurka",
                "typ" => "okurkový",
                "váha" => "590g",
                "množství" => "3");
            var_dump($produkt);
            $produkt = array("nazev" => "koláč špenátový",
                "typ" => "špenátový",
                "váha" => "534g",
                "množství" => "1");
            var_dump($produkt);
            $produkt = array("nazev" => "koláč mrkvový",
                "typ" => "mrkvový",
                "váha" => "520g",
                "množství" => "7");
            var_dump($produkt);
            $produkt = array("nazev" => "koláč paprikový",
                "typ" => "paprikový",
                "váha" => "598g",
                "množství" => "5");
            var_dump($produkt);
            $produkt = array("nazev" => "koláč veganský",
                "typ" => "veganský",
                "váha" => "523g",
                "množství" => "9");
            var_dump($produkt);


            echo currency(350.450, 'EUR', 2);
            echo "<br>";
            echo currency(48.200);

            function currency($price, $currency = "CZK", $precision = 2) {
                $price = round($price, $precision);
                $price = number_format($price, $precision) . ",-" . $currency;

                return $price;
            }

            echo "<br>";
            $promena = pow(3, 2);
            echo $promena;


//Práce s řetězcem
            $jmena = "Jan, jAnA, MaRiE, HonZA";
            var_dump($jmena);
            $jmena = str_replace("", ",", $jmena);
            var_dump($jmena);
            $jmena = str_replace(",,", ",", $jmena);
            var_dump($jmena);
            $jmena = str_replace("-", ",", $jmena);
            var_dump($jmena);
            $jmena = str_replace(";", ",", $jmena);
            $jmena = str_replace(",", ",", $jmena);
            var_dump($jmena);
            $jmena = strtolower($jmena);
            var_dump($jmena);
            $jmena = ucwords($jmena);
            var_dump($jmena);
            $jmena = explode(" ", $jmena);
            var_dump($jmena);
        
        ?>

    </body>
</html>