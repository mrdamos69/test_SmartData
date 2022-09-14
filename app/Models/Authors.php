<?php

namespace App\Models;

class Authors
{
    private mixed $author_name_;

    public function __construct($author_name_)
    {
        $this->author_name_ = $author_name_;
    }

    /**
     * @return mixed
     */
    public function getAuthorName()
    {
        return $this->author_name_;
    }

    /**
     * @param mixed $author_name_
     */
    public function setAuthorName(mixed $author_name_): void
    {
        $this->author_name_ = $author_name_;
    }
}
