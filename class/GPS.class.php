<?php

class GPS
{
    public $name, $title;
    
    public function sayHello()
    {
        return "Привет, ".$this->name;
    }
    
    function getTitle()
    {
        echo "Имя страницы: ".$this->title;
    }
    /* ниже пишем свои функции*/
    function newFunctionByMikeSVB()
    {
        return  "Моя новая функция ";
    }
    function afterForkByMikeSVB()
    {
        return  "После форка";
    }
    
}

?>
