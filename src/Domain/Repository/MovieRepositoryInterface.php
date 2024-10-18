<?php

namespace App\Domain\Repository;

use App\Domain\Entity\Movie;
use App\Domain\Entity\MovieList;

interface MovieRepositoryInterface
{
    /** @return MovieList */
    public function discoverMovies(): MovieList;
}
