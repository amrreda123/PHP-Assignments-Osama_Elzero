<?php
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];


foreach($money as $name => $salaly){
    echo "The Name Is $name And I Need $salaly Pound From Him" . "<br>";
    
}
// Output
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"