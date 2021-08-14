<?php

return \StubsGenerator\Finder::create()
    ->in('vendor/wp-phpunit/wp-phpunit')
    ->notPath('includes/phpunit6')
    ->notPath('includes/phpunit7')
    ->notPath('includes/install.php')
    ->sortByName()
;
