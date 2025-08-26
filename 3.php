<?php
// -5 から 40 の間の乱数を代入
$temperature = random_int(-5, 40);

// 乱数に基づいてメッセージを出力
if ($temperature >= 30) {
    echo "真夏日です";
} elseif ($temperature >= 15) {
    echo "過ごしやすい気温です";
} else {
    echo "肌寒いです";
}
?>
