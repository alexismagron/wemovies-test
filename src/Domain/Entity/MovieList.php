<?php

namespace App\Domain\Entity;



use App\Domain\Entity\Pageable\PageableInterface;
use App\Domain\Entity\Pageable\PageableTrait;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class MovieList implements PageableInterface
{
    use PageableTrait;

    #[SerializedName('results')]
    #[Type('array<App\Domain\Entity\Movie>')]
    private array $movies;

    public function getMovies(): array
    {
        return $this->movies;
    }

    public function setMovies(array $movies): self
    {
        $this->movies = $movies;
        return $this;
    }
}
