
<?php
class Book {
    private $title;
    private $availableCopies;

    public function __construct ($title, $availableCopies)
    {
        $this->title = $title;
        $this->$availableCopies = $availableCopies;
    }
    public function get_title ()
    {
        return $this->title;
    }

    public function get_availableCopies ()
    {
        return $this->availableCopies;
    }
    public function borrow_book ()
    {

    }

    public function return_book ()
    {
        
    }
}

class Member {
    private $name;
}