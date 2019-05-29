<?php

// including the database connection file
include_once("db/SqlHelper.php");

$sqlHelper = new SqlHelper();

if (isset($_POST['update'])) {

    $songId = filter_input(INPUT_POST, 'songId', FILTER_SANITIZE_SPECIAL_CHARS);
    $songSlug = filter_input(INPUT_POST, 'songSlug', FILTER_SANITIZE_SPECIAL_CHARS);
    $songTitle = filter_input(INPUT_POST, 'songTitle', FILTER_SANITIZE_SPECIAL_CHARS);
    $songAlbum = filter_input(INPUT_POST, 'songAlbum', FILTER_SANITIZE_SPECIAL_CHARS);
    $songYear = filter_input(INPUT_POST, 'songYear', FILTER_SANITIZE_SPECIAL_CHARS);

    //updating the table
    $result = $sqlHelper->execute("UPDATE songs SET song_slug='$songSlug', song_title='$songTitle', song_album='$songAlbum', song_year='$songYear' WHERE song_id=$songId");

    //redirectig to the display page. In our case, it is index.php
    header("Location: index.php");
}