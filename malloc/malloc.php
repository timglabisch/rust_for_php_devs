<?php

# sudo dtrace -n 'pid$target::malloc:entry' -c "php malloc.php"

function foo() {
    return "fooooo";
}

echo "------------------------\n";
sleep(2);

while(true) {
    $a = foo();
    sleep(0.5);
}
