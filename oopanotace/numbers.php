<?php
class numbersLavicka{
    static public function roundLavicka($zaokrouhli) {
        return round($zaokrouhli);
        
    }
   static public function ceilLavicka($zaokrouhlinahoru) {
       return ceil($zaokrouhlinahoru);
   }
   static public function floorLavicka($zaokrouhlidolu) {
       return floor($zaokrouhlidolu);
   }
   static public function sqrtLavicka($druhaodmocnina) {
       return sqrt($druhaodmocnina);
   }
   static public function powLavicka($mocnina,$mocnitel) {
       return pow($mocnina, $mocnitel);
   }
   static public function sinLavicka($uhel) {
       return sin($uhel);
   }
   static public function cosLavicka($uhel) {
       return cos($uhel);
}
static public function tanLavicka($uhel) {
       return tan($uhel);
}
static public function asinLavicka($zcislanauhel) {
       return asin($zcislanauhel);
   }
   static public function acosLavicka($zcislanauhel) {
       return acos($zcislanauhel);
}
static public function atanLavicka($zcislanauhel) {
       return atan($zcislanauhel);
}
static public function fmodLavicka($zaklad,$delitel) {
    return fmod($zaklad, $delitel);
}
static public function maxLavicka($pole) {
    return max($pole);
}
static public function minLavicka($pole) {
    return min($pole);
}
static public function absLavicka($abscislo) {
    return abs($abscislo);
}
static public function odecitaniLavicka($a,$b) {
    return $a-$b;
}
static public function scitaniLavicka($a,$b) {
    return $a+$b;
}
static public function deleniLavicka($a,$b) {
    return $a/$b;
}
static public function nasobeniLavicka($a,$b) {
    return $a*$b;
}
static public function number_formatLavicka($formatuje) {
    return number_format($formatuje);
}
}
$zaokrouhli = 3.36;
$zaokrouhlinahoru = 7.45;
$zaokrouhlidolu = 6.65;
$druhaodmocnina = 16;
$mocnina = 4;
$mocnitel = 3;
$uhel = 90;
$zcislanauhel = 45;
$zaklad = 20 ;
$delitel = 4;
$pole  = array ('1','4','6','8','10','12','16','25','69');
$abscislo = 52.13;
$a = 7;
$b = 3;
$formatuje = 11;
var_dump(numbersLavicka::roundLavicka($zaokrouhli)); 
var_dump(numbersLavicka::ceilLavicka($zaokrouhlinahoru));
var_dump(numbersLavicka::floorLavicka($zaokrouhlidolu));
var_dump(numbersLavicka::sqrtLavicka($druhaodmocnina));
var_dump(numbersLavicka::powLavicka($mocnina, $mocnitel));
var_dump(numbersLavicka::sinLavicka($uhel));
var_dump(numbersLavicka::cosLavicka($uhel));
var_dump(numbersLavicka::tanLavicka($uhel));
var_dump(numbersLavicka::asinLavicka($zcislanauhel));
var_dump(numbersLavicka::acosLavicka($zcislanauhel));
var_dump(numbersLavicka::atanLavicka($zcislanauhel));
var_dump(numbersLavicka::fmodLavicka($zaklad, $delitel));
var_dump(numbersLavicka::maxLavicka($pole));
var_dump(numbersLavicka::minLavicka($pole));
var_dump(numbersLavicka::absLavicka($abscislo));
var_dump(numbersLavicka::odecitaniLavicka($a, $b));
var_dump(numbersLavicka::scitaniLavicka($a, $b));
var_dump(numbersLavicka::deleniLavicka($a, $b));
var_dump(numbersLavicka::nasobeniLavicka($a, $b));
var_dump(numbersLavicka::number_formatLavicka($formatuje));

?>
