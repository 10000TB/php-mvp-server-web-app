<?php
//require_once '../application/init.php';


//$app = new App();



/**
 * Integrated from:
 * HUGE
 * @link https://github.com/panique/huge
 * @license http://opensource.org/licenses/MIT MIT License
 *
 * ChyWaWa Index
 *
 */

// auto-loading the classes (currently only from application/libs) via Composer's PSR-4 auto-loader
// later it might be useful to use a namespace here, but for now let's keep it as simple as possible
require '../vendor/autoload.php';

// start our application
$app = new Application();
