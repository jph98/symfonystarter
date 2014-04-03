<?php

include __DIR__ . "/vendor/autoload.php";
 
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
 
$container = new ContainerBuilder();
$loader = new YamlFileLoader($container, new FileLocator(__DIR__));
$loader->load('services.yml');

echo "<br><b>Services.yml Contents</b><br/>";
$lines = file('services.yml');
foreach ($lines as $line) {
    $line = str_replace(" ", "&nbsp;", $line);
    echo $line . "<br/>";
}
echo "<br/><br/>";

echo "<b>Call trace</b><br/>"; 
$msg = $container->get('app')->hello();
echo "Message returned was " . $msg;
