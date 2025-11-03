<?php

//class parent
class ParentClass {
    public function get_lastestpost() {
        $data = 'This is from ParentClass';
        return $data;
    }
}

//class child

class turunan extends ParentClass {
    public function get_lastestpost() {
        //overriding
        $data = parent::get_lastestpost();
        $data2 = ' and This is from ChildClass. ';
        //overloading
        $uppercase = strtoupper($data);
        $tanggal = date('d-m-Y');
        return $uppercase .'<br>'. $data2 . '<br>' . $tanggal;
    }
}

$parent = new ParentClass();
echo $parent->get_lastestpost();
echo "<br>";
$parent = new turunan();
echo $parent->get_lastestpost();