<?php

namespace AlexanderZabornyi\AdapterTest;

class Book implements BookInterface
{
    private $page;

    /**
     * Открыть книгу
     */
    public function open()
    {
        $this->page = 1;
    }

    /**
     * Перевернуть страницу
     */
    public function turnPage()
    {
        $this->page++;
    }

    /**
     * Вернуть номер страницы
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
}