<?php
$marks =[85,94,38,58,95];

$sum=0;
for($i=0; $i<count($marks); $i++){
    $sum+=$marks[$i];
}
$avg=$sum/count($marks);
echo "Average mark: ".$avg;
?>