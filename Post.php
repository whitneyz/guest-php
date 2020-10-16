<?php
declare(strict_types=1);

class Post
{   //attributes/properties
    private string  $title; //should it be array instead of title
    private DateTime $date;
    private string  $message;
    private string $name;

    /**
     * @param Text $text
     */
    public function __construct( string $title, string $message, string $name)
    {
        $this->title = $title;
        $this->date = new DateTime();
        $this->message = $message;
        $this->name = $name;
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
     * @return DateTime
     */
    public function getDate(): string
    {
        return $this->date->format("Y-m-d");
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
