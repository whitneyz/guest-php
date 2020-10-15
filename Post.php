<?php
declare(strict_types=1);

class Post
{   //attributes/properties
    private string  $title; //should it be array instead of title
    private DateTimeImmutable $date;
    private string  $message;
    private string $name;

    /**
     * @param Text $text
     */
    public function __construct( string $title, DateTimeImmutable $date, string $message, string $name)
    {
        $this->title = $title;
        $this->date = $date;
        $this->message = $message;
        $name->name = $name;
    }

    /**
     * @return Title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return Message
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }

    /**
     * @return Name
     */
    public function getName(): string
    {
        return $this->name;
    }

}


// getter will return private property
// setter will change private property
//post = single entity one message/ handles single message at a time
