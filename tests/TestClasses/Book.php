<?php

namespace Spatie\Fractalistic\Test\TestClasses;

class Book
{
    public string $id;
    public string $title;
    public string $yr;
    public ?Publisher $publisher = null;
    public ?Author $author = null;

    public function __construct(
        string $id,
        string $title,
        string $yr
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->yr = $yr;
    }

    public function publisher(): ?Publisher
    {
        return $this->publisher;
    }

    public function author(): ?Author
    {
        return $this->author;
    }
}
