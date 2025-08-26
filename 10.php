<?php
// 割引を適用する関数を作成
function applyDiscount($price, $discount) {
    // 割引額を計算し、割引後の金額を返す
    return $price - ($price * ($discount / 100));
}

// 関数を呼び出して、戻り値を受け取る
$discountedPrice = applyDiscount(2000, 20);

// 結果を表示
echo $discountedPrice . "円";
?>
