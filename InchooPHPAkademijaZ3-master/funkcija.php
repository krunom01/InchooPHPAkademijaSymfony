<?php
    /*  $k - pocetak reda
        $m - kraj reda
        $l - pocetak stupca
        $n - kraj stupca
        $i - okidač
    */
function tablica($m, $n, &$a) //koristenje pointera unutar funkcije kako bi $a i izvan funkcije imao novu vrijednost
{
    $k = 0;
    $l = 0;
    $broj=1;

    while ($k < $m && $l < $n) //prvi red
    {
        for ($i = $l; $i < $n; ++$i)
        {
            $a[$k][$i]=$broj;
            $broj++;
        }
        $k++;
        for ($i = $k; $i < $m; ++$i) // zadnji red
        {
            $a[$i][$n - 1]=$broj;
            $broj++;
        }
        $n--;
        if ($k < $m)
        {
            for ($i = $n - 1; $i >= $l; --$i)
            {
                $a[$m - 1][$i]=$broj;
                $broj++;
            }
            $m--;
        }
        if ($l < $n)
        {
            for ($i = $m - 1; $i >= $k; --$i)
            {
                $a[$i][$l]=$broj;
                $broj++;
            }
            $l++; 
        }     
    }
}
$a=array(array()); //definiranje niza
tablica($red, $stupac, $a);
echo "<table>";
for($i=0;$i<count($a);$i++){
    echo "<tr>";
    for($j=0;$j<count($a[0]);$j++){
        echo "<td>" . $a[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";


 