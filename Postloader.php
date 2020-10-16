<?php


class Postloader
{
    //array of posts
    private array $posts;

    //you can also make the method below a constructor
    public function loadAllPosts()
    {

        //open a file
        //jason decode it
        // json_decode ( string $json [, bool $assoc = NULL [, int $depth = 512 [, int $options = 0 ]]] ) : mixed
        //encode string and covert to array
        //loop over the data from the file
        //assign each entry to a post class ????
        //todo $data = json_encode(value: ' ');
        // foreach ($data AS $post) {
        //this->posts [] = new Post($post["title"]);
    }


    public function addPost(Post $post)
    {
        //add new message from user to the array
        //clear the old file I think from the last post???
        //json_encode to the file of the post array
    }
}

/*if (isset($pokName)) {
    $pokeIndex = file_get_contents("https://pokeapi.co/api/v2/pokemon/" . $pokName);
    $data = json_decode($pokeIndex, true);
    echo $data;
} else {
    $pokName = '';
}

    $whichPokemon = file_get_contents("https://pokeapi.co/api/v2/pokemon?offset=0&limit=20");
    $whichPokemonData = json_decode($whichPokemon, true);
*/

/*public function export() : array
{
    return [
        'title' => $this->title,
        'name' => $this->name,

    ];
}*/

// post loader = converting the file, saves message
// handles multiple posts at the same time, saves them to a file