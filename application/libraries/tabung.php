<?php

class tabung{
    function rumustabung($phi, $jari, $tinggi){
        $volume = $phi * $jari * $jari * $tinggi;;
        $l = 2 * $phi * $jari * ($jari + $tinggi);
        $ls = 2 * $phi * $jari * $tinggi;
        // echo "Volume tabung adalah " $volume;
        // echo "Luas permukaan tabung adalah " $l;
        // echo "Luas selimut adalah " $ls;
    }

}