<?php

namespace App\Domain\Entity;

use JMS\Serializer\Annotation\Type;

class Movie
{
    private int $id;
    private string $title;
    private string $overview;

    #[Type("DateTimeInterface<'Y-m-d'>")]
    private \DateTimeInterface $releaseDate;
    private float $voteAverage;
    private int $voteCount;
    private string $posterPath;
    private bool $video;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getOverview(): string
    {
        return $this->overview;
    }

    public function setOverview(string $overview): self
    {
        $this->overview = $overview;
        return $this;
    }

    public function getVoteAverage(): float
    {
        return $this->voteAverage;
    }

    public function setVoteAverage(float $voteAverage): self
    {
        $this->voteAverage = $voteAverage;
        return $this;
    }

    public function getReleaseDate(): \DateTimeInterface
    {
        return $this->releaseDate;
    }
    public function setReleaseDate(\DateTimeInterface $releaseDate): self
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    public function getVoteCount(): int
    {
        return $this->voteCount;
    }

    public function setVoteCount(int $voteCount): self
    {
        $this->voteCount = $voteCount;
        return $this;
    }

    public function getPosterPath(): string
    {
        return $this->posterPath;
    }

    public function setPosterPath(string $posterPath): self
    {
        $this->posterPath = $posterPath;
        return $this;
    }

    public function isVideo(): bool
    {
        return $this->video;
    }

    public function setVideo(bool $video): self
    {
        $this->video = $video;
        return $this;
    }
}
