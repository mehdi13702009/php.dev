<?php
//for($i=0;$i<20;$i++){

//echo "<h1>$i</h1>";
//};
echo "<table style='border:1px solid #ddd;'>";

echo "<tr style='border:1px solid #ddd;'>";

for ($i=1;$i<=4;$i++){

    $r=rand(0,255);
    $g=rand(0,255);
    $b=rand(0,255);


    echo "<td style='border:1px solid #ddd; background-color: rgb($r,$g,$b)'>$i</td>";



}


echo "</tr>";

echo "</table>";