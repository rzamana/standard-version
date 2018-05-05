<?php
/**
 * Application
 *
 * The principal file to run!
 *
 * (c) Rafael Z. Kineippe <rafael@zamana.com.br>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * PHP Version 7
 *
 * @category Principal
 * @package  StandardVersion
 * @author   Rafael Z. Kineippe <rafael@zamana.com.br>
 * @license  https://opensource.org/licenses/ISC ISC
 * @link     https://github.com/rzamana/standard-version
 */

/**
 * Including the autoload
 */
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();
$application->run();
