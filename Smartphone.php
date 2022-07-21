<?php

class Smartphone
{
    protected $marka;
    protected $model;
    protected $memorija;
    protected $mreza;

    function __construct($ma,$mo,$me,$mr)
    {
        $this->setMarka($ma);
        $this->setModel($mo);
        $this->setMemorija($me);
        $this->setMreza($mr);
    }

    protected function setMarka($ma)
    {
        $this->marka = $ma;
    }
    protected function setModel($mo)
    {
        $this->model = $mo;
    }
    protected function setMemorija($me)
    {
        $this->memorija = $me;
    }
    protected function setMreza($mr)
    {
        $this->mreza = $mr;
    }
    public function getMarka()
    {
        return $this->marka;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getMemorija()
    {
        return $this->memorija;
    }
    public function getMreza()
    {
        return $this->mreza;
    }
    public function Ispis()
    {
        return $this->getMarka() . "-" . $this->getModel() . "-" . $this->getMemorija() . " [" . $this->getMreza() . "] \n";
    }


}


?>