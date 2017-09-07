<?php
class ParentClass {
    public $var4 = 'public';
}
class MyClass extends ParentClass
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';

    protected $protected = 'protected var';
    private   $private   = 'private var';

    function iterateVisible() {
        echo "MyClass::iterateVisible:\n";
        foreach ($this as $key => $value) {
            print "$key => $value\n";
        }
    }

}

$class = new MyClass();

echo "[".$class instanceof stdClass."]";
//
//foreach($class as $key => $value) {
//    print "$key => $value\n";
//}
//echo "\n";
//
//
//$class->iterateVisible();
//
