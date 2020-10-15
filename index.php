<?php
//this line makes PHP behave in a more strict way
declare(strict_types=1);
ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);

//we are going to use session variables so we need to enable sessions
session_start();








/*flow
visitor writes input in fields (class Post???)
which will be saved last message on top (class Postloader)

store the messages in a file on your system (file_put_contents()
json_encode() or serialize() to convert your array to a string to store.
*/
require 'form-view.php';
require 'style.css';
require 'Post.php';
require 'Postloader.php'
?>