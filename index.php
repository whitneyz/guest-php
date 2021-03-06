<?php
//this line makes PHP behave in a more strict way
declare(strict_types=1);
ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);
session_start();

require 'Post.php';
require 'Postloader.php';

//we are going to use session variables so we need to enable sessions


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

$title = $message = $name = "";
$date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["title"])) {
        $titleErr = "title required";
    } else {
        $title = ($_POST["title"]); //=validation
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["message"])) {
        $titleErr = "message required";
    } else {
   $message = ($_POST["message"]); //=validation
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["name"])) {
        $titleErr = "name required";
    } else {
        $name= ($_POST["name"]); //=validation
    }
}

$titleErr = $messageErr = $nameErr = "";


$guest = new Post($title, $message, $name);
$MyJson = json_encode($guest);

file_put_contents("posts.json", $MyJson);


/*if(!isset($_POST["date"])){
    //$date->getDate();
    //var_dump($title);

if (!isset($_POST["message"])) {
    $messageErr = "message required";
} else {
    ($_POST["message"]);

    //var_dump($message);
}
if (!isset($_POST["name"])) {
    $nameErr = "name required";
} else {
    ($_POST["name"]);

    //var_dump($name);
}*/

/*<form
    method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
</form>
  ?>

/*flow
visitor writes input in fields (class Post???)
which will be saved last message on top (class Postloader)

store the messages in a file on your system (file_put_contents()
json_encode() or serialize() to convert your array to a string to store.
*/

//1. json post uitlezen and display (latest first)
//2. if posted form validation
//3. save in Json (datastructure array) bij v omgekeerd uitlezen

require 'form-view.php';
