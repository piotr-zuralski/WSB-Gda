<?php

for ($i = 0; $i <= 100; $i += 2) {
    echo $i . PHP_EOL;
}

for($i = 0; $i <= 100; ++$i) { 
    if ($i % 2) {
        continue;
    }
    echo $i . PHP_EOL;
}
