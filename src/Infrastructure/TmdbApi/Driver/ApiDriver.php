<?php

namespace App\Infrastructure\TmdbApi\Driver;

use App\Domain\Entity\GenreList;
use App\Domain\Entity\MovieList;
use App\Infrastructure\TmdbApi\Model\Request;
use JMS\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiDriver
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private SerializerInterface $serializer
    ) {
    }

    public function discoverMovies(): MovieList {
        $request = Request::create('discover/movie')
            ->includeVideo();

        $response = $this->httpClient->request(
            $request->getMethod(),
            $request->getPath(),
            [
                'query' => $request->getQuery()
            ]
        );

        return $this->serializer->deserialize(
            $response->getContent(),
            MovieList::class,
            'json'
        );
    }

    public function listGenres(): GenreList {
        $request = Request::create('genre/movie/list');

        $response = $this->httpClient->request(
            $request->getMethod(),
            $request->getPath(),
            [
                'query' => $request->getQuery()
            ]
        );

        return $this->serializer->deserialize(
            $response->getContent(),
            GenreList::class,
            'json'
        );
    }
}
