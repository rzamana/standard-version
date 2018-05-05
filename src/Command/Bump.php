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

namespace StandardVersion\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Command for symfony console
 *
 * Register the basic command line operations that we want!
 */
class Bump extends Command
{
    /**
     * StandardVersion:Bump Configuration
     *
     * Configuration Method to register on Symfony Console
     **/
    protected function configure()
    {
        $this
            ->setName('bump')
            ->setDescription('Bump composer.json version.')
            ->setHelp('This command allows you to easily bump your composer.json version.')
    ;
    }

    /**
     * StandardVersion:Bump Execution
     *
     * Console execution of the bump version
     *
     * @param InputInterface  $input  the interface implemented by all input classes
     * @param OutputInterface $output the interface implemented by all Output classes
     **/
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('[Standard Version] Bump');
    }
}
