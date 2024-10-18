<?php

namespace App\Infrastructure\TmdbApi\Repository;

use App\Domain\Entity\MovieList;
use App\Domain\Repository\MovieRepositoryInterface;
use App\Infrastructure\TmdbApi\Driver\ApiDriver;

class MovieRepository implements MovieRepositoryInterface
{
    public function __construct(
        private ApiDriver $driver
    ) {}

    public function discoverMovies(): MovieList
    {
        return $this->driver->discoverMovies();
    }
}
