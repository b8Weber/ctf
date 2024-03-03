<?php
error_reporting(0);
highlight_file(__FILE__);
// flag.php
class teacher{
    public $name;
    public $rank;
    private $salary;
    public function __construct($name,$rank,$salary = 10000){
        $this->name = $name;
        $this->rank = $rank;
        $this->salary = $salary;
    }
}

class classroom{
    public $name;
    public $leader;
    public function __construct($name,$leader){
        $this->name = $name;
        $this->leader = $leader;
    }
    public function hahaha(){
        if($this->name != 'one class' or $this->leader->name != 'ing' or $this->leader->rank !='department'){
            return False;
        }
        else{
            return True;
        }
    }
}

class school{
    public $department;
    public $headmaster;
    public function __construct($department,$ceo){
        $this->department = $department;
        $this->headmaster = $ceo;
    }
    public function IPO(){
        if($this->headmaster == 'ong'){
            echo "Pretty Good ! Ctfer!\n";
            echo new $_POST['a']($_POST['b']);
        }
    }
    public function __wakeup(){
        if($this->department->hahaha()) {
            $this->IPO();
        }
    }
}

if(isset($_GET['d'])){
    unserialize(base64_decode($_GET['d']));
}
?>