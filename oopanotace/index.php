<?php

//abstraktní trida ustredny a v ni protected $napetí
abstract class  ustredny_Andrej_Lavicka{

    protected $napeti_Andrej_Lavicka;
    /**
     * paramert muze byt jen float
     * kontrola = float
     * kdyz se cte take to same
 */
    public function setNapeti_Andrej_Lavicka(float $napeti_Andrej_Lavicka):float{
        $this->napeti_Andrej_Lavicka = $napeti_Andrej_Lavicka;
    }
    //precte napeti
    public function getNapeti_Andrej_Lavicka() : float {
        return $this-> napeti_Andrej_Lavicka;
    }
}
// trida ustredna dedi do abs tridy ustredny
class  ustredna_Andrej_Lavicka extends ustredny_Andrej_Lavicka{
   public $Napeti_Andrej_Lavicka= 15;

   //nastaveni konstanty type
   const TYPE ="12";
}
//trida iustredna dedi interface od abs tridy ustredny
interface iustredna_Andrej_Lavicka extends ustredny_Andrej_Lavicka{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Andrej_Lavicka);
}

//pres vardummp bude vypsana hodnota v type a hodnotu napeti na ustredne
 var_dump (ustredna_Andrej_Lavicka::TYPE);
 var_dump (ustredna_Andrej_Lavicka::Napeti_Andrej_Lavicka);
?>