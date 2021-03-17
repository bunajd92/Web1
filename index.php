<?php

//phpinfo();

// KONSTANTET

define("MY_SITE", "Web 2021");
echo MY_SITE ;

echo "<br>";
echo "</br>";

//echo constant ('MY_SITE');

# Variablat
 $numer = 89 ;

var_dump($numer);// int

$numer_float = 89.98; //float
$numer_double = 89.99008; //double
$str= "ky eshte nje strig"; // string 
$vlere_null= null ; //vlere bosh
$is_true = true ;// boolean
$arr = [1,2,3] ; //array


echo "<pre>";
var_dump($arr);
//print_r($arr);
echo "</pre>";


//STINGS

$str ="Hello World!";

echo strlen($str); // nxjerr nr e karktereve 
echo'<br>';
echo '</br>';
echo str_word_count($str); // kthen numrin e fjaleve 
//echo str_replace("Hello","Morning",$str);// zevendeso fjalen ne string , nese nk e gjen nk e ndryshon 

echo'<br>';
echo '</br>';

//KONKATENIMI


$emri ="John";   
echo 'Emri im eshte $emri'.$emri.'.';
echo'<br>';
echo "Emri im eshte $emri";


// cikli for 

// for($i=1; $i<=100; $i++){
   // echo'<br>';
   // echo $i ;
    //  echo'<br>';
  
    //if($i%5 == 0){

      // echo "shumfish" ;
 ///   }
//}

// cikli for per array 

//$size= count($arr) ;

//for($i=0; $i<$size; $i++){


   // echo $arr[$i];
//}

echo'<br>';
$numrat=[1,2,3,4,5];
$numrat2=[4,6,2,8,6,3];

foreach ($numrat2 as $celesi=>$numri){

    $hapi = $celesi + 1;
    echo "$celesi : $numri. Hapi i  $hapi<br>";
}
 
//Ushtrim: Mbush nje array me numrat 5-1

echo'<br>';

$arr_2 = [];

for($i=0; $i<5; $i++){

    $arr_2[$i] = 5 - $i;

}

var_dump($arr_2);

echo'<br>';


print_r($arr_2);

// associative arrays



$assoc=array(

    "Peter"=> 28,
    "Ann"=>18,
    "John"=>23,
);

echo "<pre>";
var_dump($assoc);
echo "<pre>";

foreach ($assoc as $name => $age) {

    echo"$name is $age years old. <br>";
}

echo'<br>';

$colors = array(

    "Red"=>"#ff0000",
    "Green"=>"#00ff00",
    "Blue"=>"#0000ff",

);

foreach ($colors as $color => $value) {
    
    echo " <span style= 'color:$value'>$color</span> code  is  <span style= 'color:$color'>$value</span>. <br>";

    
}

//ushtrime

/*1.jepet nje array , fshi nje element nga array dhe me pas afisho arrayn me celsa te normalizuar 

*/


echo'<br>';

$numer_array =[3,18,23,6];


echo "<pre>";
var_dump($numer_array);
echo "<pre>";

unset($numer_array[2]);
unset($colors["Red"]);


echo "<pre>";
print_r($numer_array);
echo "<pre>";

echo "<pre>";
print_r($colors);
echo "<pre>";

$x=array_values($numer_array);
$y=array_values($colors);

echo "<pre>";
print_r($x);
echo "<pre>";


echo "<pre>";
print_r($y);
echo "<pre>";


// ushtrimi2

echo reset ($colors);

// ushtrimi 3

// sort(array_name)

echo "<pre>";
print_r($assoc);
echo "<pre>";
echo" rend rrites sipas  vleres";



echo "<pre>";
print_r($assoc);
echo "<pre>";


ksort($assoc);
echo "rend rrites sipas celsit";
echo "<pre>";
print_r($assoc);
echo "<pre>";


arsort($assoc);
echo "rend zbrites sipas vleres";


echo "<pre>";
print_r($assoc);
echo "<pre>";

krsort($assoc);
echo "rend zbrites sipas celsit";

echo "<pre>";
print_r($assoc);
echo "<pre>";

// ushtrim 4

$temp_str = "28,31,-2,-16,19,43,12,14,16,-4,-10,12,8,36";

$temp_array= explode(',', $temp_str);

echo "<pre>";
print_r($temp_array);
echo "<pre>";


// temperatura mesatare 5 me te voglat e 5 me te medhajat 

$temp_total=0.0;
$temp_size= count($temp_array);


foreach($temp_array as $v){

    $temp_total +=$v;
}

$avg_temp =$temp_total/$temp_size ;

asort($temp_array);
echo "<pre>";
print_r($temp_array);
echo "<pre>";

$temp_array=array_values ($temp_array);
echo "<pre>";
print_r($temp_array);
echo "<pre>";
echo"5temp me te uleta: <br>";

for($i=0; $i<5 ;$i++){

    echo $temp_array[$i] .'<br>' ;

}

echo"5 temp me te larta :<br>";

for($i=$temp_size-1; $i>$temp_size-6 ;$i--){

    echo $temp_array[$i]. '<br>' ;

} 


$a=6;
$b=4;
$c=88;
$d=16;

function max_1($a,$b){

      if($a>$b){
      return$a;}

    else return $b;

}

$max_1=max_1($a,$b);
$max_2=max_1($max_1,$c);
$max_3=max_1($max_2,$d);

echo"<br> numri me i madhe eshte:  <br>";
echo $max_3;


//  shuma 

function gjejShumen($a,$b){
    $shuma =0;

    if($a>$b){

        for($i=$b;$i<=$a;$i++){

            $shuma = $shuma +$i;
        }
    }
    else {
        for($i=$a;$i<=$b;$i++){

            $shuma = $shuma +$i;
        }
       
    }

    return $shuma;
}


$x =gjejShumen(12,10);

echo" <br> shuma e numrave nga 8-10 eshte : ";
echo $x;



// DATE //

// date(format,timestamp)-->kthen 

echo "<pre>";

$today=date('D, F d, Y h:i:s A');

echo" <br> data e sotme eshte ".$today ;
echo "<pre>";

$time=time();

echo" <br>".$time ;
echo "<pre>";

echo date('D, F d, Y h:i:s A',$time);
echo "<pre>";

$timestamp= mktime (15,20,33,40,2014);
echo "<pre>";

var_dump($timestamp);

echo "<pre>";

echo date('l',$timestamp);  // sherben si kalendar 

$timestamp_2 = mktime(0,0,0, date("m")+20,date('d'),date('Y'));

var_dump($timestamp_2);

echo "<br>".date('l',$timestamp_2); 
















?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>MY_SITE</title>
</head>
<body>

<?php

 echo "<h1>Pershendetje!</h1>" ;



    ?>
</body>
</html>