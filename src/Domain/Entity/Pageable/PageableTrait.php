<?php

namespace App\Domain\Entity\Pageable;

use JMS\Serializer\Annotation\SerializedName;

trait PageableTrait
{
    #[SerializedName('page')]
    private int $currentPage;

    private int $totalPages;

    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }

    public function setCurrentPage(int $currentPage): self
    {
        $this->currentPage = $currentPage;
        return $this;
    }

    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    public function setTotalPages(int $totalPages): self
    {
        $this->totalPages = $totalPages;
        return $this;
    }
}
