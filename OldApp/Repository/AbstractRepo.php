<?php declare(strict_types=1);


namespace OldApp\Repository;


abstract class AbstractRepo
{

    public function __construct(protected int $something)
    {
    }

    public function whoAmI(): string
    {
        return static::class . ' ' . $this->something;
    }

}
