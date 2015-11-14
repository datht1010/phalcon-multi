<?php
use Phalcon\Mvc\Application;

$application = new Application($di);
$application->registerModules([
    'hello' => [
        'className' => 'Multiphalcon\Hello\Module',
        'path'      => APPLICATION_PATH.'/hello/Module.php'
    ],
    'chapter03' => [
        'className' => 'Multiphalcon\Chapter03\Module',
        'path'      => APPLICATION_PATH.'/chapter03/Module.php'
    ]
]);

echo $application->handle()->getContent();
