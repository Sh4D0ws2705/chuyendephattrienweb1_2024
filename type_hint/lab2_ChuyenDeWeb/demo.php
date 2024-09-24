<?php
declare(strict_types = 1);

require_once ('A.php');
require_once ('B.php');
require_once ('C.php');
require_once ('I.php');

Class Demo {
    public I $i;
    
    public function typeAReturnA():A  {
        echo __FUNCTION__."<br>";
        return new A;
    }
    public function typeAReturnB():A  {
        echo __FUNCTION__."<br>";
        return new B;
    } 
    public function typeAReturnC():A {
        echo __FUNCTION__."<br>";
        return new C;
    }
    public function typeAReturnI():A {
        echo __FUNCTION__."<br>";
        $this->i = new A();
        return $this->i;    
    }
    public function typeAReturnNull() {
        echo __FUNCTION__."<br>";
        return null;
    }



    public function typeBReturnA():B  {
        echo __FUNCTION__."<br>";
        return new A;
    }
    public function typeBReturnB():B  {
        echo __FUNCTION__."<br>";
        return new B;
    } 
    public function typeBReturnC():B {
        echo __FUNCTION__."<br>";
        return new C;
    }
    public function typeBReturnI():B {
        echo __FUNCTION__."<br>";
        $this->i = new B();
        return $this->i;    
    }
    public function typeBReturnNull() {
        echo __FUNCTION__."<br>";
        return null;
    }



    public function typeCReturnA():C  {
        echo __FUNCTION__."<br>";
        return new A;
    }
    public function typeCReturnB():C  {
        echo __FUNCTION__."<br>";
        return new B;
    } 
    public function typeCReturnC():C {
        echo __FUNCTION__."<br>";
        return new C;
    }
    public function typeCReturnI():C {
        echo __FUNCTION__."<br>";
        $this->i = new C();
        return $this->i;    
    }
    public function typeCReturnNull() {
        echo __FUNCTION__."<br>";
        return null;
    }



    public function typeIReturnA():I  {
        echo __FUNCTION__."<br>";
        return new A;
    }
    public function typeIReturnB():I  {
        echo __FUNCTION__."<br>";
        return new B;
    } 
    public function typeIReturnC():I {
        echo __FUNCTION__."<br>";
        return new C;
    }
    public function typeIReturnI():I {
        echo __FUNCTION__."<br>";
        $this->i = new C();
        return $this->i;    
    }
    public function typeIReturnNull() {
        echo __FUNCTION__."<br>";
        return null;
    }



    public function typeNullReturnA()  {
        echo __FUNCTION__."<br>";
        return new A;
    }
    public function typeNullReturnB()  {
        echo __FUNCTION__."<br>";
        return new B;
    } 
    public function typeNullReturnC() {
        echo __FUNCTION__."<br>";
        return new C;
    }
    public function typeNullReturnI() {
        echo __FUNCTION__."<br>";
        $this->i = new I();
        return $this->i;    
    }
    public function typeNullReturnNull() {
        echo __FUNCTION__."<br>";
        return null;
    }
}
class RunDemo {
    public I $i;
    public Demo $demo;

    public function __construct() {
        $this->$demo = new Demo();
    }
}

?>