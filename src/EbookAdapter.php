<?php

namespace AlexanderZabornyi\AdapterTest;

class EbookAdapter implements BookInterface
{
    protected $eBook;

    /**
     * Создаем адаптацию
     *
     * @param EBookInterface $eBook
     */
    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * Открыть книгу
     */
    public function open()
    {
        $this->eBook->unlock();
    }

    /**
     * Перевернуть страницу
     */
    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    /**
     * Адаптированный метод, возвращает текущую страницу
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}