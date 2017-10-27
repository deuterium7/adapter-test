<?php

namespace AlexanderZabornyi\AdapterTest\Tests;

use AlexanderZabornyi\AdapterTest\Book;
use AlexanderZabornyi\AdapterTest\EbookAdapter;
use AlexanderZabornyi\AdapterTest\Kindle;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleWithEbookAdapter()
    {
        $kindle = new Kindle();
        $book = new EbookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }
}