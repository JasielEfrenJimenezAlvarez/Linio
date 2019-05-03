<?php
namespace App\Linio;

class Linio{
    public function printOneHundred(){
        for($i=1;$i<101;$i++){
            $m3 = $i%3;
            $m5 = $i%5;
            if($m3 == 0 && $m5 == 0){
                echo "Linianos<br>";
            }else if($m5 == 0){
                echo "IT<br>";
            }else if($m3 == 0){
                echo "Linio<br>";
            }else{
                echo "$i<br>";
            }
        }
    }
}
?>