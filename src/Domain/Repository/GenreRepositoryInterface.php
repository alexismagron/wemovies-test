<?php

namespace App\Domain\Repository;

use App\Domain\Entity\GenreList;

interface GenreRepositoryInterface
{
    public function listGenres(): GenreList;
}
