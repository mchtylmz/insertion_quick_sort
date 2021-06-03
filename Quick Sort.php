<?php
$b = QuickSort([71, 55, 65, 85, 75, 60, 90], 0, 7);

//Ekrana yaz
for ($i = 0; $i < count($b); $i++) {
	echo $b[$i] . ' ';
}

// @parametreler dizi, index(0), diziuzunluk
function QuickSort($dizi, $sol, $sag){
	// Pivot olarak son elemanı seç
    $p = $dizi[$sag - 1];
    $i = $sol;
    $j = $sag - 2;

    if ($sag - $sol > 2){
        while ($i < $j){
            // Sol kısımdaki eleman pivot elemandan büyükse seç
            while ($dizi[$i] < $p) { $i++; }

            // Sağ kısımdaki eleman pivot elemandan küçükse seç
            while ($j > 0 && $dizi[$j] > $p) { $j--; }

            if ($i < $j){
                $temp = $dizi[$i];
                $dizi[$i++] = $dizi[$j];
                $dizi[$j--] = $temp;
            }
        }
    }

    // Pivot elemanı karşılaştır ve yer değiştir
    if ($p < $dizi[$i]){
        $temp = $dizi[$i];
        $dizi[$i] = $dizi[$sag - 1];
        $dizi[$sag - 1] = $temp;
    }

    // Solda eleman varsa
    if($i - $sol > 1)
        $dizi = QuickSort($dizi, $sol, $i);

    // Sağda eleman varsa
    if($sag - ($i+1) > 1)
        $dizi = QuickSort($dizi, $i + 1, $sag);

    return $dizi;
}

?>
