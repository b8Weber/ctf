<?php  
highlight_file(__FILE__);
class Flag{//flag.php  
    public $secret;  
    public function __tostring(){  
        if(isset($this->secret)){  
            echo file_get_contents($this->secret); 
            echo "<br>";
        return ("good");
        }  
    }  
}  
?>