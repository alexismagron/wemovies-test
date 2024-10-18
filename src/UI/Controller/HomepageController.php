<?php

namespace App\UI\Controller;

use App\Domain\Repository\MovieRepositoryInterface;
use App\UI\Form\GenreForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/', name: 'homepage')]
class HomepageController extends AbstractController
{
    public function __construct(
        private MovieRepositoryInterface $movieRepository,
        private FormFactoryInterface $formFactory
    ) {}

    public function __invoke(Request $request) {
        $genreForm = $this->formFactory->create(GenreForm::class);
        $movieList = $this->movieRepository->discoverMovies();

        return $this->render(
            'pages/homepage.html.twig',
            [
                'movie_list' => $movieList,
                'genre_form' => $genreForm->createView(),
            ]
        );
    }
}
