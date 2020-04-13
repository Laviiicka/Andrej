<?php
abstract class StringsLavickaAndrej {
    protected static function substrLavickaAndrej($body){
    define($body, 'deset'); 
    }
    protected static function substr_replaceLavickaAndrej($change){
    define($change, 'lol'); 
    }
    protected static function strtrLavickaAndrej($fix){
    define($fix, 'Wilkomen php'); 
    }
    protected static function strtoupperLavickaAndrej($velkeP){
    define($velkeP, 'ja nekourim'); 
    }
    protected static function strtolowerLavickaAndrej($maleP){
    define($maleP, 'HELLO ich bin alza'); 
    }
    protected static function strrposLavickaAndrej($chooseif){
    define($chooseif, '213465897xcjhewtpaegylkm'); 
    }
    protected static function strriposLavickaAndrej($findex){
    define($findex, '420YZO'); 
    }
    protected static function strposLavickaAndrej($najdi){
    define($body, 'deset'); 
    }
    protected static function strlenLavickaAndrej ($count){
    define($count, 'HIROSHIMA'); 
    }
    protected static function strchrLavickaAndrej (); //same jak strstr 
    
    protected static function str_replaceLavickaAndrej ($deleteW){
    define($deleteW, array('hy','chy','ry','ty','ny')); 
    }
    protected static function md5LavickaAndrej($codePass){
    define($codePass, 'pear'); 
    }
    protected static function implodeLavickaAndrej($pasteD){
    define($pasteD, array('name','surname','street')); 
    }
    protected static function explodeLavickaAndrej($brokeST){
    define($brokeST, 'Nazdar Hi ola'); 
    }
    protected static function addcslashesLavickaAndrej($wrifrto){
    define($wrifrto, '10,20,30,40,50,60,70,80,90,100'); 
    }
    protected static function addslashesLavickaAndrej($pasteL){
    define($pasteL, 'MC´Donald'); 
    }
    protected static function trimLavickaAndrej($passC){
    define($passC, '\h\hshaco je noob\h\h'); 
    }
    protected static function ucfirstLavickaAndrej($firstB){
    define($firstB, 'janek  a pleshka'); 
    }
    protected static function ucwordsLavickaAndrej($evfiB){
    define($evfiB, 'martin a honza'); 
    }
}
class SringLavickaAndrej extends StringsLavickaAndrej{
    //nahradi string jinym stringem
    public static function substrLavickaAndrej() {
        parent::substrLavickaAndrej();
        return substr($body, null);
    }
    //nahradi dany vyraz od urcenego bitu
    public function substr_replaceLavickaAndrej($change) {
        return substr_replace($change, 'ccc', 0);
        }

   //zmeni urcene slovo na jine
    public function strtrLavickaAndrej($fix) {
       return  strtr($fix, 'Hallo', 'Ola');
    }
    //zmeni ve vete vsechno na velka pismena
    public function strtoupperLavickaAndrej($velkeP) {
       return  strtoupper($velkeP);
    }
    //zmeni ve vete vsechno na mala pismena
    public function strtolowerLavickaAndrej($maleP) {
       return  strtolower($maleP);
    }
    //urci zda je 7 od 9bitu dal
    public function strrposLavickaAndrej($chooseif) {
       return  strrpos($chooseif, '7',9);
    }
    //najde zda takova kombinace v rezeci je
    public function strriposLavickaAndrej($findex) {
       return  strripos($findex, 'YZ', 0);
    }
    //rekne jak dlouhy je retezec
    public function strlenLavickaAndrej($count) {
        return strlen($count);
    }
    //smaze pismena vbrana v retezci
    public function str_replaceLavickaAndrej($deleteW) {
       return  str_replace($deleteW, '', 'ola muchachos, am i right here?');
    }
    //koduje password
    public function md5LavickaAndrej($codePass) {
       return  md5($codePass, '420yyyeee4455321e');
    }
    // vlozi element z aray
    public function implodeLavickaAndrej($pasteD) {
       return  implode(',', $pasteD);
    }
    //rozlozi string na jednotlive stringy
    public function explodeLavickaAndrej($brokeST) {
       return  explode('', $brokeST);
    }
    //vypise retezec od do
    public function addcslashesLavickaAndrej($wrifrto) {
        return addcslashes($wrifrto, '\1...\7');
    }
    // vloží lomeno
    public function addslashesLavickaAndrej($pasteL) {
       return  addslashes($pasteL);
    }
    //vyjme cast retezce a zbytek promitne
    public function trimLavickaAndrej($passC) {
       return  trim($passC, '\h.');
    }
    //  první pismeno v celém retezci bude velke
    public function ucfirstLavickaAndrej($firstB) {
        return ucfirst($firstB);
    }
    //kazde prvni pismeno v kazdem slove velke
    public function ucwordsLavickaAndrej($evfiB) {
       return ucwords($evfiB);
    }
   }
echo 'StringsLavickaAndrej';
var_dump(StringLavickaAndrej::substrLavickaAndrej(points));
?>
