<?php

namespace App\UI\Form;

use App\Domain\Repository\GenreRepositoryInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GenreForm extends AbstractType
{
    public function __construct(
        private readonly GenreRepositoryInterface $genreRepository
    ) {}

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'genres',
            ChoiceType::class,
            [
                'choices' => $this->genreRepository->listGenres()->getGenres(),
                'choice_label' => 'name',
                'choice_value' => 'id',
                'multiple' => true,
                'expanded' => true,
            ]
        );
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
