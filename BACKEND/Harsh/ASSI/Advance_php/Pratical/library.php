<?php

// Interface for basic library operations
interface LibraryOperations {
    public function addItem($item);
    public function listItems();
}

// Base class for a Library
class Library implements LibraryOperations {
    protected $items = []; // Protected property to store library items

    // Implement addItem method
    public function addItem($item) {
        $this->items[] = $item;
        echo "Item added to library: {$item->getTitle()}<br>";
    }

    // Implement listItems method
    public function listItems() {
        echo "<h3>Library Items:</h3>";
        foreach ($this->items as $item) {
            echo $item . "<br>";
        }
    }
}

// Class for a Book (uses magic methods)
class Book {
    private $title;
    private $author;
    private $year;

    // Constructor to initialize book details
    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    // Magic __get method to access private properties
    public function __get($name) {
        return $this->$name ?? "Property does not exist.";
    }

    // Get book title (for library use)
    public function getTitle() {
        return $this->title;
    }

    // Magic __toString method for string representation
    public function __toString() {
        return "{$this->title} by {$this->author} ({$this->year})";
    }
}

// Subclass for managing digital library
class DigitalLibrary extends Library {
    private $maxDownloads;

    public function __construct($maxDownloads) {
        $this->maxDownloads = $maxDownloads;
    }

    // Override addItem to enforce max limit
    public function addItem($item) {
        if (count($this->items) >= $this->maxDownloads) {
            echo "Cannot add more items. Download limit reached.<br>";
        } else {
            parent::addItem($item);
        }
    }
}

// Example Usage

// Create a library
$library = new Library();
$library->addItem(new Book("1984", "George Orwell", 1949));
$library->addItem(new Book("To Kill a Mockingbird", "Harper Lee", 1960));
$library->listItems();

// Create a digital library with a download limit
$digitalLibrary = new DigitalLibrary(1);
$digitalLibrary->addItem(new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925));
$digitalLibrary->addItem(new Book("Moby Dick", "Herman Melville", 1851)); // Will exceed limit
$digitalLibrary->listItems();

?>
