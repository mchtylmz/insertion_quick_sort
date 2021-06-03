# PHP Sort Algorithm

## Numbers

```php
<?php
$numbers = [71, 55, 65, 85, 75, 60, 90];
?>
```

## Insertion Sort Algorithm

```php
<?php
function insertionSort(&$arr, $n)
{
    for ($i = 1; $i < $n; $i++)
    {
        $key = $arr[$i];
        $j = $i-1;

        while ($j >= 0 && $arr[$j] > $key)
        {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }

        $arr[$j + 1] = $key;
    }
}


function printArray(&$arr, $n)
{
    for ($i = 0; $i < $n; $i++)
        echo $arr[$i]." ";
    echo "\n";
}


$numbers = [71, 55, 65, 85, 75, 60, 90];
$n = sizeof($numbers);
insertionSort($numbers, $n);
printArray($numbers, $n);


?>
```


## Quick Sort Algorithm

```php
<?php
$b = QuickSort([71, 55, 65, 85, 75, 60, 90], 0, 7);

for ($i = 0; $i < count($b); $i++) {
	echo $b[$i] . ' ';
}

function QuickSort($dizi, $sol, $sag){
    $p = $dizi[$sag - 1];
    $i = $sol;
    $j = $sag - 2;

    if ($sag - $sol > 2){
        while ($i < $j){
            while ($dizi[$i] < $p) { $i++; }
            while ($j > 0 && $dizi[$j] > $p) { $j--; }
            if ($i < $j){
                $temp = $dizi[$i];
                $dizi[$i++] = $dizi[$j];
                $dizi[$j--] = $temp;
            }
        }
    }

    if ($p < $dizi[$i]){
        $temp = $dizi[$i];
        $dizi[$i] = $dizi[$sag - 1];
        $dizi[$sag - 1] = $temp;
    }

    if($i - $sol > 1)
        $dizi = QuickSort($dizi, $sol, $i);

    if($sag - ($i+1) > 1)
        $dizi = QuickSort($dizi, $i + 1, $sag);

    return $dizi;
}

?>

```

## Help Sources

- [w3resource 3](https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-3.php)
- [w3resource 1](https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-1.php)
- [geeksforgeeks / PHP](https://www.geeksforgeeks.org/hard/php/)
