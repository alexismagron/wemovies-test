<?php

namespace App\Domain\Entity\Pageable;

interface PageableInterface
{
    public function getCurrentPage(): int;

    public function setCurrentPage(int $currentPage): self;

    public function getTotalPages(): int;

    public function setTotalPages(int $totalPages): self;
}
