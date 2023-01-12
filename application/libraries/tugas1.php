<?php 

class tugas1
{

    function volume_tabung($tinggi,$jari2){
        $phi= 3.14;
        $volume = $phi*$jari2*$jari2*$tinggi;
        echo "phi :".$phi ."<br>";
        echo "jari2 :".$jari2 ."<br>";
        echo "tinggi :".$tinggi ."<br>";
        echo"Volume tabung adalah: ". $volume;

    

    }

}

?>