<?php
/**
 * Class moveFiles
 */
class moveFiles {
    var $strFrom = null;
    var $strTo = null;
    var $blnDebug = false;

    public function __construct(){

    }

    public function __destruct(){

    }

    /**
     * @return bool
     */
    public function move(){
        if(file_exists($this->strFrom) && file_exists($this->strTo)){
            $resFromDir = opendir($this->strFrom);

            while($strFilename = readdir($resFromDir)){
                echo('move '.$this->strFrom.DIRECTORY_SEPARATOR.$strFilename.' -> '.$this->strTo.DIRECTORY_SEPARATOR.$strFilename.PHP_EOL);
                //rename($this->strFrom.DIRECTORY_SEPARATOR.$strFilename,$this->strTo.DIRECTORY_SEPARATOR.$strFilename);
            }

            return true;
        }

        return false;
    }
}
?>