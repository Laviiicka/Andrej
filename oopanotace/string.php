<?php
/**
 * @author Andrej Lavicka
 */
class stringLavicka {
    // substr - vypise nam cast retezce
    static public function substrLavicka($retez,$odkudseZ) {
        return substr($retez, $odkudseZ);
}
// vlozi v retezci na prislusne misto string
static public function substr__replaceLavicka($txt,$whatCH,$begin) {
   return substr_replace($txt, $whatCH, $begin);
}
//nahradi  v retezci slovo
static public function strtrLavicka($sentence,$coNA,$whichCH) {
    return strtr($sentence, $coNA, $whichCH);
}
//vsechny pismena v rezezci budou velka
static public function strtoupperLavicka($vsechnoV) {
    return strtoupper($vsechnoV);
}
//vsechny budou malym pismenem
static public function strtolowerLavicka($vsechnoM) {
    return strtolower($vsechnoM);
}
//v retezci najde pozadovany retez posledni moznost
static public function strrposLavicka($odkudH,$coHleda) {
    return strrpos($odkudH, $coHleda);
}
//vyhleda presne zadany string v retezci
static public function strriposLavicka($odkudH,$exactlyhledam) {
   return strripos($odkudH, $exactlyhledam); 
}
//najde v retezci prvni shodu toho co hledam
static public function strposLavicka($odkudH,$coHleda) {
    return strpos($odkudH, $coHleda);
}
//vypise retezcovou delku
static public function strlenLavicka($tellL) {
    return strlen($tellL);
}
//najdu co hledam
static public function strchrLavicka($odkudH,$coHleda) {
    return strchr($odkudH, $coHleda);
}
// vyjme/nahradi promenne v poli
static public function str_replace($samoHl,$inthis,$tady) {
   return str_replace($samoHl, $inthis, $tady);
}
// zasifruje nam slovo
static public function md5Lavicka($msg) {
    return md5($msg);
}
//do pole nam neco vlozi
static public function implodeLavicka($wha,$whe ){
    return implode($wha, $whe);
}
//rozdeli to na substringy
static public function explodeLavicka($hranica,$stringS) {
    return explode($hranica, $stringS);
}
//prida slash pred ty charaktery
static public function addcslashesLavicka($inthisS,$roz) {
    return addcslashes($inthisS, $roz);
}
//vlozi do vety backslash
static public function addslashLavicka($stringS) {
    return addslashes($stringS);
}
// odebere nevhodne vety z retezce
static public function trimLavicka($out,$toP) {
    return trim($out, $toP);
}
//prvni pismeno ve vete bude velke
static public function ucfirstLavicka($sentence) {
    return ucfirst($sentence);
}
//vsechny slova budou napsana velkym pismenem
static public function ucwordsLavicka($sentence) {
    return ucwords($sentence);
}

}
$retez = "adsdasdasdasdasdgayfa";
$odkudseZ =6;
$txt="Martínek uz ma prime";
$whatCH="pomalu";
$begin= 15;
$sentence="vegani jsou hloupi lide";
$coNA ="krab";
$whichCH="deti";
$vsechnoV="pepa je z depa";
$vsechnoM="ZED JE NOOB CHAMP";
$odkudH ="112A3c1E512sad";
$coHleda= "112";
$exactlyhledam="sad";
$tellL= "Chci byt aspon mge za tyhle prazdniny";
$samoHl= array ('a','e','i','o','u','y');
$inthis="";
$tady="To je ale krasny den asi pujdu na workout";
$msg= "brokovnice";
$wha=",";
$whe= array ('narodnost','pohlavi','orientace','nabozenstvi');
$hranica = '""';
$stringS="delfin zralok kladivoun";
$inthisS="Nazdar jsem Mike Wazowski";
$roz= 'A..z';
$out="\a\aJsem GOLD IIII\a\a";
$toP="\a";

var_dump(stringLavicka::substrLavicka($retez, $odkudseZ));
var_dump(stringLavicka::substr__replaceLavicka($txt, $whatCH, $begin));
var_dump(stringLavicka::strtrLavicka($string, $coNA, $whichCH));
var_dump(stringLavicka::strtoupperLavicka($vsechnoV));
var_dump(stringLavicka::strtolowerLavicka($vsechnoM));
var_dump(stringLavicka::strrposLavicka($odkudH, $coHleda));
var_dump(stringLavicka::strriposLavicka($odkudH, $exactlyhledam));
var_dump(stringLavicka::strposLavicka($odkudH, $coHleda));
var_dump(stringLavicka::strlenLavicka($tellL));
var_dump(stringLavicka::strchrLavicka($odkudH, $coHleda));
var_dump(stringLavicka::str_replace($samoHl, $inthis, $tady));
var_dump(stringLavicka::md5Lavicka($msg));
var_dump(stringLavicka::implodeLavicka($wha, $whe));
var_dump(stringLavicka::explodeLavicka($hranica, $stringS));
var_dump(stringLavicka::addcslashesLavicka($inthisS, $roz));
var_dump(stringLavicka::addslashLavicka($stringS));
var_dump(stringLavicka::trimLavicka($out, $toP));
var_dump(stringLavicka::ucfirstLavicka($sentence));
var_dump(stringLavicka::ucwordsLavicka($sentence));




?>

