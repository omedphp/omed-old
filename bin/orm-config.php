<?php

/*
 * This file is part of the Omed project.
 *
 * (c) Anthonius Munthi <https://itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver;
use Doctrine\ORM\Mapping\UnderscoreNamingStrategy;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\ResolveTargetEntityListener;

// replace with file to your own project bootstrap
// require_once 'bootstrap.php';

// replace with mechanism to retrieve EntityManager in your app
$dbParams = [
    'url' => 'postgres://northwind:northwind@localhost:5432/northwind?version=13',
];
$namespaces = [
    __DIR__.'/../src/Component/User/Resources/doctrine' => 'Omed\\Component\\User\\Model',
    __DIR__.'/../src/Component/Employee/Resources/doctrine' => 'Omed\\Component\\Employee\\Model',
    __DIR__.'/../src/Component/Customer/Resources/doctrine' => 'Omed\\Component\\Customer\\Model',
];
$driver        = new SimplifiedXmlDriver($namespaces);
$config        = new Configuration();
$config->setMetadataDriverImpl($driver);
$config->setProxyDir(sys_get_temp_dir().'/omed/doctrine/proxy');
$config->setProxyNamespace('Omed\\Proxies');
$config->setAutoGenerateProxyClasses(false);

// naming strategy
$strategy = new UnderscoreNamingStrategy();
$config->setNamingStrategy($strategy);
$entityManager = EntityManager::create($dbParams, $config);

$rtel = new ResolveTargetEntityListener();
$rtel->addResolveTargetEntity(
    Omed\Contracts\Employee\EmployeeInterface::class,
    Omed\Component\Employee\Model\Employee::class,
    []
);
$rtel->addResolveTargetEntity(
    Omed\Contracts\Customer\CustomerInterface::class,
    Omed\Component\Customer\Model\Customer::class,
    []
);
$entityManager->getEventManager()->addEventSubscriber($rtel);

return ConsoleRunner::createHelperSet($entityManager);
