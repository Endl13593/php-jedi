<?php

class Facebook
{
    public function createPost()
    {
        return new Post();
    }
}

class Post
{
    private $author;
    private $message;

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
        return $this;
    }
}