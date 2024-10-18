<?php

namespace App\Domain\Entity;

use JMS\Serializer\Annotation\Type;

class GenreList
{
    #[Type('array<App\Domain\Entity\Genre>')]
    private array $genres;

    public function getGenres(): array
    {
        return $this->genres;
    }

    public function setGenres(array $genres): self
    {
        $this->genres = $genres;
        return $this;
    }
}
