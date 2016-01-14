<?php
class moveFiles {
    var $strFrom = null;
    var $strTo = null;
    var $blnDebug = false;

    public function __construct(){

    }

    public function __destruct(){

    }

    public function move(){
        if(file_exists($this->strFrom) && file_exists($this->strTo)){

        }

        return false;
    }
}
?>