<?php
function FunctionEvenorOdd($str1)
{

echo strlen($str1).'<br/><br?>';
$length= strlen($str1). '<br/><br?>';
if($length%2==0)
{

    $Name='Ayrton';
    $stringcut=substr($str1,7);
    $d=$Name.$stringcut;
    echo $d;
    echo '<br/><br?>';
 
}
else 

{
    
$lname='Senna';
        /** @var type $substr */
        $stringcut=substr($str1,0,3);
 $d=$lname.$stringcut;
 echo $d;
  echo '<br/><br?>';
}
return $d;
}

$var1='Marc Marquez'   ;
FunctionEvenorOdd($var1) ;
$var2='JohnJacobAstors';
FunctionEvenorOdd($var2);

          
            



