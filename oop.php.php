<?php

//trida ktera je abstraktni ustredny a v ni protected $napetí
abstract class  ustredny_Andrej_Lavicka{

    protected $napeti_Andrej_Lavicka;
    //nastavi napeti
    public function setNapeti_Andrej_Lavicka($napeti_Andrej_Lavicka){
        $this->napeti_Andrej_Lavicka = $napeti_Andrej_Lavicka;
    }
    //precte napeti
    public function getNapeti_Andrej_Lavicka() {
        return $this-> napeti_Andrej_Lavicka;
    }
}
// trida ustredna se dedi do abstraktni tridy ustredny
class  ustredna_Andrej_Lavicka extends ustredny_Andrej_Lavicka{
   public $Napeti_Andrej_Lavicka= 15;
   //nastavi konstanty type
   const TYPE ="12";
}
//trida iustredna dedi interface od abstraktni tridy ustredny
interface iustredna_Andrej_Lavicka extends ustredny_Andrej_Lavicka{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Andrej_Lavicka);
}

//pres vardummp vypise hodnotu v type a hodnotu ustrednoveho napeti
 var_dump (ustredna_Andrej_Lavicka::TYPE);
 var_dump ($Napeti_Andrej_Lavicka);
?>