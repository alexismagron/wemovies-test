<?php

namespace App\Infrastructure\TmdbApi\Model;

class Request
{
    public const FILTER_INCLUDE_VIDEO = 'include_video';

    public static function create(
        string $path,
        string $method = 'GET'
    ): self {
        return (new self($path, $method));
    }

    public function __construct(
        private string $path,
        private string $method,
        private array $query = []
    ) {}

    public function includeVideo(): self {
        $this->query['language'] = 'fr_FR';

        return $this;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getQuery(): array
    {
        return $this->query;
    }
}
