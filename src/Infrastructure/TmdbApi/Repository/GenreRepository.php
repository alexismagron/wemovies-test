<?php

namespace App\Infrastructure\TmdbApi\Repository;

use App\Domain\Entity\GenreList;
use App\Domain\Repository\GenreRepositoryInterface;
use App\Infrastructure\TmdbApi\Driver\ApiDriver;

class GenreRepository implements GenreRepositoryInterface
{
    public function __construct(
       private ApiDriver $driver
    ) {}

    public function listGenres(): GenreList
    {
        return $this->driver->listGenres();
    }
}
