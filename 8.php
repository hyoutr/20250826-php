<?php
// 国名と首都名の連想配列を作成
$capitals = [
    "日本" => "東京",
    "アメリカ" => "ワシントンD.C.",
    "フランス" => "パリ"
];

// 配列のすべての要素を表示
foreach ($capitals as $country => $capital) {
    echo $country . "の首都は" . $capital . "です<br>";
}
?>
