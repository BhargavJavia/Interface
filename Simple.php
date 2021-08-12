<?php
    interface a
    {
        function add($a,$b);
    }

    interface b
    {
        function sub($c,$d);
    }

    class c implements a,b 
    {
        public function add ($e,$f){
            echo $e + $f;
        }

        public function sub ($g,$h){
            echo $g - $h;
        }
    }

    $obj=new c();
    $obj->add(20,10);
    echo "/n";
    $obj->sub(20,5);
?>