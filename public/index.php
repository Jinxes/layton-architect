<?php
/**
 * Layton-Architect
 * 
 * A recommendation architecture for `layton` php framework.
 * 
 * @author Jinxes
 * @link https://github.com/Jinxes/layton-architect
 */
// define('ROOT_DIR', dirname(dirname(__FILE__)));

require(__DIR__ . '/../vendor/autoload.php');

$app = new \Layton\App();

require(__DIR__ . '/../config/routes.php');


(new \Layton\Accept($app))->send();
