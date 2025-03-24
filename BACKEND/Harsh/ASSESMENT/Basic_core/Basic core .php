<?php
session_start();
$password = "admin123";  // Default password
// Check for login
if (!isset($_SESSION['logged_in'])) {
    $_SESSION['logged_in'] = false;
}
// Password input
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['password'])) {
    if ($_POST['password'] === $password) {
        $_SESSION['logged_in'] = true;
    } else {
        echo "Invalid Password!";
    }
}
// If not logged in, show login form
if (!$_SESSION['logged_in']) {
    echo "<form method='POST'>
            Enter password: <input type='password' name='password'/>
            <input type='submit' value='Login'/>
          </form>";
    exit;
}
// If logged in, show the main menu
echo "<h1>Main Menu</h1>
      1. Add Books <br/>
      2. Delete Book <br/>
      3. Search Book <br/>
      4. View Book List <br/>
      5. Edit Book Record <br/>
      6. Change Password <br/>
      7. Close Application <br/>
      <form method='POST'>
        Enter your choice: <input type='number' name='choice'/>
        <input type='submit' value='Submit'/>
      </form>";
// Handle menu choices
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['choice'])) {
    switch ($_POST['choice']) {
        case 1:
            addBook();
            break;
        case 2:
            deleteBook();
            break;
        case 3:
            searchBook();
            break;
        case 4:
            viewBookList();
            break;
        case 5:
            editBook();
            break;
        case 6:
            changePassword();
            break;
        case 7:
            session_destroy();
            exit("Application Closed");
            break;
        default:
            echo "Invalid Choice";
            break;
    }
}
// Initialize book array
if (!isset($_SESSION['books'])) {
    $_SESSION['books'] = [];
}
// Function to add a book
function addBook() {
    echo "<form method='POST'>
            Category: <input type='text' name='category' required/><br/>
            Book ID: <input type='text' name='id' required/><br/>
            Book Name: <input type='text' name='name' required/><br/>
            Author: <input type='text' name='author' required/><br/>
            Quantity: <input type='number' name='quantity' required/><br/>
            Price: <input type='number' name='price' required/><br/>
            <input type='submit' value='Add Book'/>
          </form>";
    
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])) {
        $book = [
            "category" => $_POST['category'],
            "id" => $_POST['id'],
            "name" => $_POST['name'],
            "author" => $_POST['author'],
            "quantity" => $_POST['quantity'],
            "price" => $_POST['price']
        ];
        array_push($_SESSION['books'], $book);
        echo "Book Added!";
    }
}
// Function to delete a book
function deleteBook() {
    echo "<form method='POST'>
            Enter Book ID to delete: <input type='text' name='id' required/><br/>
            <input type='submit' value='Delete Book'/>
          </form>";
    
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])) {
        $bookID = $_POST['id'];
        foreach ($_SESSION['books'] as $index => $book) {
            if ($book['id'] == $bookID) {
                unset($_SESSION['books'][$index]);
                echo "Book Deleted!";
                return;
            }
        }
        echo "Book not found!";
    }
}
// Function to search a book
function searchBook() {
    echo "<form method='POST'>
            Search by ID: <input type='text' name='id'/><br/>
            Search by Name: <input type='text' name='name'/><br/>
            <input type='submit' value='Search'/>
          </form>";
    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $id = $_POST['id'] ?? null;
        $name = $_POST['name'] ?? null;
        
        foreach ($_SESSION['books'] as $book) {
            if (($id && $book['id'] == $id) || ($name && $book['name'] == $name)) {
                echo "Book Found: " . print_r($book, true);
                return;
            }
        }
        echo "Book not found!";
    }
}
// Function to view the book list
function viewBookList() {
    if (empty($_SESSION['books'])) {
        echo "No books available!";
    } else {
        foreach ($_SESSION['books'] as $book) {
            echo "Category: {$book['category']}, ID: {$book['id']}, Name: {$book['name']}, Author: {$book['author']}, Qty: {$book['quantity']}, Price: {$book['price']}<br/>";
        }
    }
}
// Function to edit a book
function editBook() {
    echo "<form method='POST'>
            Enter Book ID to edit: <input type='text' name='id' required/><br/>
            <input type='submit' value='Edit Book'/>
          </form>";
    
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])) {
        $bookID = $_POST['id'];
        foreach ($_SESSION['books'] as $index => $book) {
            if ($book['id'] == $bookID) {
                echo "<form method='POST'>
                        Category: <input type='text' name='category' value='{$book['category']}' required/><br/>
                        Book Name: <input type='text' name='name' value='{$book['name']}' required/><br/>
                        Author: <input type='text' name='authorq' value='{$book['author']}' required/><br/>
                        Quantity: <input type='number' name='quantity' value='{$book['quantity']}' required/><br/>
                        Price: <input type='number' name='price' value='{$book['price']}' required/><br/>
                        <input type='submit' value='Update Book'/>
                      </form>";
                if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['name'])) {
                    $_SESSION['books'][$index] = [
                        "category" => $_POST['category'],
                        "id" => $bookID,
                        "name" => $_POST['name'],
                        "author" => $_POST['author'],
                        "quantity" => $_POST['quantity'],
                        "price" => $_POST['price']
                    ];
                    echo "Book Updated!";
                }
                return;
            }
        }
        echo "Book not found!";
    }
}
// Function to change password
function changePassword() {
    global $password;
    echo "<form method='POST'>
            Enter Old Password: <input type='password' name='old_password' required/><br/>
            Enter New Password: <input type='password' name='new_password' required/><br/>
            <input type='submit' value='Change Password'/>
          </form>";
    
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['old_password'], $_POST['new_password'])) {
        if ($_POST['old_password'] == $password) {
            $password = $_POST['new_password'];
            echo "Password successfully changed!";
        } else {
            echo "Old password incorrect!";
        }
    }
}
?>
