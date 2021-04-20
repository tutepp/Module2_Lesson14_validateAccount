<?php
function myAccount($str){
    $regular = '/^[_a-z0-9]{6,}$/';
    if (preg_match($regular,$str)){
        echo("Account hop le");
    }
    else
        echo("Account khong hop le");
}
echo "123abc_ :"." ";
myAccount('123abc_');
echo "</br>";
echo "_abc123:"." ";
myAccount('a_abc123');
echo "</br>";
echo ".@:"." ";
myAccount('.@');
echo "</br>";
echo "12345:"." ";
myAccount('12345');
echo "</br>";
echo "abcdefg:"." ";
myAccount('abcdefg');