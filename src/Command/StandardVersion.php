<?php
/**
 * (c) Rafael Z. Kineippe <rafael@zamana.com.br>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * PHP Version 7
 *
 * @category Principal
 *
 * @package  StandardVersion
 *
 * @author   Rafael Z. Kineippe <rafael@zamana.com.br>
 *
 * @license  https://opensource.org/licenses/ISC ISC
 *
 * @link     https://github.com/rzamana/standard-version
 */

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Command for symfony console
 *
 * Register the basic command line operations that we want!
 */
class StandardVersion extends Command
{
    /**
     * StandardVersion Configuration
     *
     * Configuration Method to register on Symfony Console
     **/
    protected function configure()
    {
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     **/
    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }
}
