<?php
for ($x = 1; $x <= 100; $x++) {
    if($x % 15 == 0){
        echo "TigaLima <br>";
    }else if($x % 5 == 0){
        echo "Lima <br>";
    }else if($x % 3 ==0){
        echo "Tiga <br>";
    }else{
        echo "$x <br>";
    }
}
?>
