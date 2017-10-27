<?php

namespace AlexanderZabornyi\AdapterTest;

class Kindle implements EBookInterface
{
    private $totalPages = 100;
    private $page = 1;

    /**
     * Перевенуть страницу
     */
    public function pressNext()
    {
        $this->page++;
    }

    /**
     * Разблокировать
     */
    public function unlock()
    {
    }

    /**
     * Вернуть текущую страницу и общее количество страниц
     *
     * @return array
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}