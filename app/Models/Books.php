<?php

namespace App\Models;

class Books {
    private mixed $book_name_;
    private $book_size_;
    private Authors $book_author_;

    public function __construct($book_name, $book_author, $book_size) {
        $this->book_name_ = $book_name;
        $this->book_author_ = $book_author;
        $this->book_size_ = $book_size;
    }

    /**
     * @return mixed
     */
    public function getBookName() {
        return $this->book_name_;
    }

    /**
     * @param mixed $book_name_
     * @return Books
     */
    public function setBookName($book_name_) {
        $this->book_name_ = $book_name_;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBookSize()
    {
        return $this->book_size_;
    }

    /**
     * @param mixed $book_size_
     */
    public function setBookSize($book_size_): void
    {
        $this->book_size_ = $book_size_;
    }

    /**
     * @return Authors
     */
    public function getBookAuthor(): Authors
    {
        return $this->book_author_;
    }

    /**
     * @param Authors $book_author_
     */
    public function setBookAuthor(Authors $book_author_): void
    {
        $this->book_author_ = $book_author_;
    }
}
