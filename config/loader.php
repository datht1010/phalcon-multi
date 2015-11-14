<?php
$loader = new \Phalcon\Loader();
$loader->registerClasses([
    'Multiphalcon\Vendor\Zendvn\Filter\Addlink'          => APPLICATION_PATH.'/vendor/zendvn/filter/addlink.php',
    'Multiphalcon\Vendor\Zendvn\Filter\Removecircumflex' => APPLICATION_PATH.'/vendor/zendvn/filter/removecircumflex.php',
    'Multiphalcon\Vendor\Zendvn\Filter\Purifier'         => APPLICATION_PATH.'/vendor/zendvn/filter/purifier.php',
]);

$loader->registerPrefixes([
    'HTMLPurifier'      =>  LIBRARY_PATH.'/HTMLPurifier'
]);
$loader->register();