<?php

namespace AlexanderZabornyi\AdapterTest;

interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}