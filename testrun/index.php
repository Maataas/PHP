<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<p>KINTAMIEJI IR SĄLYGOS</p>";
    echo "<p>1uzd</p>";
   

    ////Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį : 

    $name = "Matas";
    $lastname = "Maciulis";
    $gimimas = 1998;
    $currentyear = 2023;

    echo "<p>As esu " . $name  . " " .  $lastname . "." .  " Man yra " . ($currentyear - $gimimas) . " metai.</p>";


    echo "<hr>";
    echo "<p>2uzd</p>";
   
   

    //Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.

    $num2 = rand(0,4);
    $num3 = rand(0,4);

    echo "<p>" . $num2 . " " . $num3 . "</p>";

     if($num2 != 0 && $num3 != 0) {
         if($num3 > $num2) {
           echo (round($num3 / $num2 * 100) / 100);
        }else {
            echo round($num2 / $num3, 2);
        }
     }else {
         echo "Dalyba is nulio negalima";
     }

    echo "<hr>";
    echo "<p>3uzd</p>";

    //Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

    $rand1 = rand(0,25);
    $rand2 = rand(0,25);
    $rand3 = rand(0,25);

    echo "<p>" . $rand1 . " " . $rand2 . " " . $rand3 . "</p>";

    if (($rand1 >= $rand2 && $rand1 <= $rand3 || $rand1 <= $rand2 && $rand1 >= $rand3)) {
        echo "<p>" . $rand1 . "</p>";
    }
    if (($rand2 >= $rand1 && $rand2 <= $rand3 || $rand2 <= $rand1 && $rand2 >= $rand3)) {
        echo "<p>" . $rand2 . "</p>";
    }
    if (($rand3 >= $rand2 && $rand3 <= $rand1 || $rand3 <= $rand2 && $rand3 >= $rand1)) {
        echo "<p>" . $rand3 . "</p>";
    };

    echo "<hr>";
    echo "<p>4uzd</p>";

    //Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 

    $rand41 = rand(0,10);
    $rand42 = rand(0,10);
    $rand43 = rand(0,10);

    echo "<p>" . $rand41 . " " . $rand42 . " " . $rand43 . "</p>";

    if ($rand41 + $rand42 > $rand43 && $rand41 + $rand43 > $rand42 && $rand42 + $rand43 > $rand41) {
        echo "Trikampis galimas";
    }else
        echo "Trikampis negalimas";

        echo "<hr>";
        echo "<p>5uzd</p>";

        //Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
        //reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).


        $rand51 = rand(0,2);
        $rand52 = rand(0,2);
        $rand53 = rand(0,2);
        $rand54 = rand(0,2);

        echo "<p>" . $rand51 . " " . $rand52 . " " . $rand53 . " " . $rand54 . "</p>";

        $count0 = 0;
        $count1 = 0;
        $count2 = 0;

        if ($rand51 == 0){
            $count0++;
        }

        if ($rand52 == 0){
            $count0++;
        }

        if ($rand53 == 0){
            $count0++;
        }

        if ($rand54 == 0){
            $count0++;
        }

        if ($rand51 == 1){
            $count1++;
        }

        if ($rand52 == 1){
            $count1++;
        }

        if ($rand53 == 1){
            $count1++;
        }

        if ($rand54 == 1){
            $count1++;
        }

        if ($rand51 == 2){
            $count2++;
        }

        if ($rand52 == 2){
            $count2++;
        }

        if ($rand53 == 2){
            $count2++;
        }

        if ($rand54 == 2){
            $count2++;
        }

        echo "<p>" . $count0 . $count1 . $count2 . "</p>";

        echo "<hr>";
        echo "<p>6uzd</p>";

        //Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

        $rand61 = rand(1,6);

        if ($rand61 == 1) {
            echo "<h1>" . $rand61 . "</h1>";
        }
        if ($rand61 == 2) {
            echo "<h2>" . $rand61 . "</h2>";
        }
        if ($rand61 == 3) {
            echo "<h3>" . $rand61 . "</h3>";
        }
        if ($rand61 == 4) {
            echo "<h4>" . $rand61 . "</h4>";
        }
        if ($rand61 == 5) {
            echo "<h5>" . $rand61 . "</h5>";
        }
        if ($rand61 == 6) {
            echo "<h6>" . $rand61 . "</h6>";
        }
        
        echo "<hr>";
        echo "<p>7uzd</p>";

        //Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 

        $rand71 = rand(-10,10);
        $rand72 = rand(-10,10);
        $rand73 = rand(-10,10);

        echo "<p>" . $rand71 . " " . $rand72 . " " . $rand73 . "</p>";

        if ($rand71 < 0) {
            echo "<h1> <font color=green' size='6pt'>$rand71</font> </h1>";
        }
        if ($rand71 > 0) {
            echo "<h1> <font color=blue' size='6pt'>$rand71</font> </h1>";
        }
        if ($rand71 == 0) {
            echo "<h1> <font color=red' size='6pt'>$rand71</font> </h1>";
        }
        if ($rand72 < 0) {
            echo "<h1> <font color=green' size='6pt'>$rand72</font> </h1>";
        }
        if ($rand72 > 0) {
            echo "<h1> <font color=blue' size='6pt'>$rand72</font> </h1>";
        }
        if ($rand72 == 0) {
            echo "<h1> <font color=red' size='6pt'>$rand72</font> </h1>";
        }
        if ($rand73 < 0) {
            echo "<h1> <font color=green' size='6pt'>$rand73</font> </h1>";
        }
        if ($rand73 > 0) {
            echo "<h1> <font color=blue' size='6pt'>$rand73</font> </h1>";
        }
        if ($rand73 == 0) {
            echo "<h1> <font color=red' size='6pt'>$rand73</font> </h1>";
        }

        echo "<hr>";
        echo "<p>8uzd</p>";

        //Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

        $rand81 = rand(5,3000);

        echo "<p>" . $rand81 . "</p>";

        if ($rand81 >= 1000 && $rand81 < 2000) {
            echo ($rand81 * 0.97);
        }
        if ($rand81 >= 2000) {
            echo ($rand81 * 0.96);
        }
        if ($rand81 < 1000) {
            echo $rand81;
        }


        echo "<hr>";
        echo "<p>STRINGAI</p>";
        echo "<p>1 uzd</p>";

        //Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.

        $name1 = "Leonardas";
        $lastname1 = "Dikaprio";

        if (strlen($name1) < strlen($lastname1)) {
            echo $name1;
        }else {
            echo $lastname1;
        }

        echo "<hr>";
        echo "<p>2uzd</p>";

        //Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

        $name1 = "Leonardas";
        $lastname1 = "Dikaprio";

        echo "<p>" . strtoupper($name1) ." " . strtolower($lastname1) . "</p>";

        echo "<hr>";
        echo "<p>3uzd</p>";

        //Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

        $name1 = "Leonardas";
        $lastname1 = "Dikaprio";
        $ini = substr($name1,0,1) . " " . substr($lastname1,0,1);

        echo "<p>" . substr($name1,0,1) . " " . substr($lastname1,0,1) . "</p>";

        echo "<hr>";
        echo "<p>4uzd</p>";

        //Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

        $name1 = "Leonardas";
        $lastname1 = "Dikaprio";

        $ini2 = substr($name1,-3,3) . " " . substr($lastname1,-3,3);

        echo substr($name1,-3,3) . substr($lastname1,-3,3);

        echo "<hr>";
        echo "<p>5uzd</p>";


        //Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

        $kint = "An American in Paris";
        $ats = str_ireplace("A", "*", $kint);
        echo $ats;

        echo "<hr>";
        echo "<p>6uzd</p>";

        //Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

        $kint = "An American in Paris";
        $ats = substr_count(strtolower($kint), "a");
        echo "<p>" . $ats . "</p>";

        echo "<hr>";
        echo "<p>7uzd</p>";

        //Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

        $string = "An American in Paris";
        








        


        











    


        
        


    


    



        
            
     

    



    


 



    ?>
</body>
</html>