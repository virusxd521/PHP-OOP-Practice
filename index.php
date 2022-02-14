<?php
    require_once "./Author.php";
    require_once "./Song.php";
    require_once "./Album.php";
    


    // Author part
    $john_image = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.letras.com%2Fjohn-lennon%2F&psig=AOvVaw1ueOaaDWk2U2c99APeNpay&ust=1644918329165000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJCMwLr0_vUCFQAAAAAdAAAAABAD";
    

    // Array of songs just for testing
    $songs_arr = ["Give Peace a Chance", "Instant Karma", "Working Class Hero", "God"];

    // Author object
    $john = new Author("John", $john_image, $songs_arr, 1700);
    // Adding songs array into the object
    $john->songs = [$imagine = new Song("Imagine"), $imagine = new Song("Stand by me"), $woman =  new Song("Woman")];


    $first_album = new Album($songs_arr);


include "./view.php";