<?php

declare(strict_types=1);

namespace App;

use OldApp\Repository\AbstractRepo;

class OldAppFactory
{

    public function factory(string $class): AbstractRepo
    {
        return new $class(\random_int(1, 1000));
    }

}
