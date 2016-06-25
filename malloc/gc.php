<?php

# sudo dtrace -n 'pid$target::malloc:entry' -c "php malloc.php"


ini_set('memory_limit', '16G');

class A {
    public $b;
}
class B {
    public $a;
}

#gc_disable();

for($i=0;$i<10000000;$i++) {
    $a = new A;
    $b = new B;
    $a->b = $b;
    $b->a = $a;
    #gc_collect_cycles();
}

echo memory_get_usage()."\n";