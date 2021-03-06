<?php

/**
 * var/scripts/bootstrap.php
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Server
 * @package   Appserver
 * @author    Tim Wagner <tw@appserver.io>
 * @author    Bernhard Wick <bw@appserver.io>
 * @copyright 2014 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://github.com/appserver-io/appserver
 * @link      http://www.appserver.io
 */

// load composer namespaces and add them to the include path
$paths = array();
$namespaces = require APPSERVER_BP . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'composer' . DIRECTORY_SEPARATOR . 'autoload_namespaces.php';
$namespaces = array_merge($namespaces, require APPSERVER_BP . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'composer' . DIRECTORY_SEPARATOR . 'autoload_psr4.php');
foreach ($namespaces as $namespace) {
    $paths = array_merge($paths, $namespace);
}

// set the new include path
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $paths));

// define application servers base dir
define('SERVER_BASEDIR', APPSERVER_BP . DIRECTORY_SEPARATOR);

// query whether we've a composer autoloader defined or not
if (!file_exists($autoloaderFile = SERVER_BASEDIR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php')) {
    throw new \Exception(sprintf('Can\' find default autoloader %s', $autoloaderFile));
}

// define the autoloader file
define('SERVER_AUTOLOADER', $autoloaderFile);

// initialize the composer autoloader
require $autoloaderFile;
