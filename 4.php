<?php
// 1から4の間の乱数を代入
$animal = random_int(1, 4);

// $animal の値に応じて出力
switch ($animal) {
    case 1:
        echo "犬";
        break;
    case 2:
        echo "猫";
        break;
    case 3:
        echo "うさぎ";
        break;
    case 4:
        echo "ハムスター";
        break;
    default:
        echo "不明な動物";
        break;
}
?>
