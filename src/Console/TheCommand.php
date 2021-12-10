<?php declare(strict_types=1);


namespace App\Console;


use OldApp\Repository\BarRepo;
use OldApp\Repository\FooRepo;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TheCommand extends Command
{

    protected static $defaultName = 'check_this';
    protected static $defaultDescription = 'checking some things';

    public function __construct(private FooRepo $foo_repo, private BarRepo $bar_repo)
    {
        parent::__construct(self::$defaultName);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->bar_repo->whoAmI());
        $output->writeln($this->foo_repo->whoAmI());

        return self::SUCCESS;
    }


}
