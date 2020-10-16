<?php
//this line makes PHP behave in a more strict way
declare(strict_types=1);
ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);
require 'form-view.php';
require 'Post.php';
require 'Postloader.php';

//we are going to use session variables so we need to enable sessions
session_start();

function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

whatIsHappening();

// define variables and set to empty values

$title = $message = $name ="";
$date = "";



/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = test_input($_POST["title"]);
    $date = test_input($_POST["date"]);
    $message = test_input($_POST["message"]);
    $name = test_input($_POST["name"]);
}*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = ($_POST["title"]);
    $date = ($_POST["date"]);
    $message = ($_POST["message"]);
    $name = ($_POST["name"]);

    //hier controleren of $date een date is en opslaan als datum

}
    /*function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data); //todo Sicco will explain why this don't work
        return $data;
    }*/


$guest = new Post($title, $message, $name);
if(!isset($_POST["title"])){
    //$title->getTitle();
    //var_dump($title);
}
if(!isset($_POST["date"])){
    //$date->getDate();
    //var_dump($title);
}
if(!isset($_POST["message"])){
    //$title->getMessage();
    //var_dump($title);
}
if(!isset($_POST["name"])){
    //$title->getName();
    //var_dump($title);
}

    /*<form
        method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    </form>
      ?>*/

/*flow
visitor writes input in fields (class Post???)
which will be saved last message on top (class Postloader)

store the messages in a file on your system (file_put_contents()
json_encode() or serialize() to convert your array to a string to store.
*/

?>