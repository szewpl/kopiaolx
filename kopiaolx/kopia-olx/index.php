<?php
    #zadanie 1
    echo "<h1>Zadanie 1</h1>";
    function maks($x,$y,$z){
        return max($x,$y,$z);
    }
    echo maks(4,2,7);

    #zadanie 2
    echo "<h1>Zadanie 2</h1>";
    function ktoraCwiartka($x,$y){
        if ($x>0 && $y>0) {
            return 1;
        }else if($x<0 && $y>0){
            return 2;
        }else if($x<0 && $y<0){
            return 3;
        }else if($x>0 && $y<0){
            return 4;
        }else if($x==0 && $y==0){
            return 0;
        }
    }
    echo ktoraCwiartka(-2,4);

    #zadanie 3a
    echo "<h1>Zadanie 3a</h1>";
    function zamiana($a,$b){
        $tmp = $a;
        $a = $b;
        $b = $tmp;
        echo $a." ".$b;
    }
    zamiana(2,5);

    #zadanie 3b
    echo "<h1>Zadanie 3b</h1>";
    function zamianazujemna($a,$b){
        if($a<0 || $b<0){
            $tmp = $a;
            $a = $b;
            $b = $tmp;
            echo $a." ".$b;
        }else{
            echo "zle dane";
        }
    }
    zamianazujemna(-7,5);

    #zadanie 3c
    echo "<h1>Zadanie 3c</h1>";
    function zamianazparzysta($a,$b){
        if($a%2==0 && $b%2==1 || $b%2==0 && $a%2==1){
            $tmp = $a;
            $a = $b;
            $b = $tmp;
            echo $a." ".$b;
        }else{
            echo "zle dane";
        }
    }
    zamianazparzysta(11,6);

    #zadanie 4a
    echo "<h1>Zadanie 4a</h1>";
    function sum($min,$max){
        $suma=0;
        for($i=$min;$i<=$max;$i++){
            $suma +=$i;
        }
        return $suma;
    }
    echo sum(2,5);

    #zadanie 4b
    echo "<h1>Zadanie 4b</h1>";
    function sumparzyste($min,$max){
        $suma=0;
        for($i=$min;$i<=$max;$i++){
            if($i%2==0)
            $suma +=$i;
        }
        return $suma;
    }
    echo sumparzyste(2,6);

    #zadanie 4c
    echo "<h1>Zadanie 4c</h1>";
    function sumpanierzyste($min,$max){
        $suma=0;
        for($i=$min;$i<=$max;$i++){
            if($i%3==0)
            $suma +=$i;
        }
        return $suma;
    }
    echo sumpanierzyste(2,6);

    #zadanie 5
    echo "<h1>Zadanie 5</h1>";
    function sumaAr($n,$r){
        $suma=1;
        for($i=1;$i<=$n;$i++){
            $suma +=$i+$r;
        }
        return $suma;
    }
    echo sumaAr(1,2);

    #zadanie 6
    echo "<h1>Zadanie 6</h1>";
    function sumaGeom($n,$il){
        $suma=1;
        for($i=1;$i<=$n;$i++){
            $suma +=$i*$il;
        }
        return $suma;
    }
    echo sumaGeom(1,2);

    #zadanie 7
    echo "<h1>Zadanie 7</h1>";
    function avgRand($n,$min,$max){
        $suma=0;
        $liczby = array();
        for($i=0;$i<$n;$i++){
            $liczby[$i]=rand($min,$max);
        }
        $suma = array_sum($liczby)/count($liczby);
        return $suma;
    }
    echo avgRand(2,2,5);

    #zadanie 8
    echo "<h1>Zadanie 8</h1>";
    function quadrEq($a,$b,$c){
        $delta = pow($b,2)-4*($a)*($c);
        if($delta>0){
            $x1 = (-$b-sqrt($delta))/2*$a;
            $x2 = (-$b+sqrt($delta))/2*$a;
            return "x1: ".$x1." ,x2: ".$x2;
        }else if($delta==0){
            $x0=-$b/2*$a;
            return "x0: ".$x0;
        }else if($delta<0){
            return "Delta jest mniejsza niz 0";
        }
    }
    echo quadrEq(1,4,1);
?>