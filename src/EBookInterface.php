<?php

namespace AlexanderZabornyi\AdapterTest;

interface EBookInterface
{
    public function unlock();

    public function pressNext();

    public function getPage(): array;
}