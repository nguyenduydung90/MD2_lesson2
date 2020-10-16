<?php
function findMin($arr){
    $min=$arr[0];
    $index=null;
    for($i=1;$i<count($arr);$i++){
        if($min>$arr[$i]){
            $min=$arr[$i];
            $index=$i;
        }
    }return $index;
};
$arr1=array(6,3,5,1,9);
echo "Vị trí của phần tử nhỏ nhất là: ".findMin($arr1);
?>

