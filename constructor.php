<!DOCTYPE html>
<html>
<head>
    <title>Constructor</title>
<body>
<?php
    
    class Book {
        var $title;
        var $collection;
        var $author;
        var $number;
        var $pages;
        var $anthology;

        function __construct($title, $collection, $author, $number, $pages) {
            $this->title = $title;
            $this->collection = $collection;
            $this->author = $author;
            $this->number = $number;
            $this->pages = $pages;
        }

        function isArray(){
            if(is_array($this->author)) {
                return "true";
            } else {
                return "false";
            }
        }
    }

    $book1 = new Book("12 Inframondi", "Urania", "[Swanwick, Reynolds, Burke, Rosenblum, Rucker, altri]", "1609", "238");
    echo $book1->isArray(); //non funziona mmmh
    


?>
</body>

</html>