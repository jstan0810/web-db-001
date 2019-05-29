<?php
// including the database connection file
include_once("db/SqlHelper.php");
$sqlHelper = new SqlHelper();

//getting id from url
//$id = $sqlHelper->escape_string($_GET['id']);
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

//selecting data associated with this particular id
$result = $sqlHelper->getData("SELECT song_id, song_slug, song_title, song_album, song_year FROM songs WHERE song_id=$id");

foreach ($result as $res) {
    $songId = $res['song_id'];
    $songSlug = $res['song_slug'];
    $songTitle = $res['song_title'];
    $songAlbum = $res['song_album'];
    $songYear = $res['song_year'];
}
?>
<html>
    <head>	
        <title>Edit Song</title>
    </head>

    <body>
        <a href="index.php">Home</a>
        <br/><br/>
        <form name="song-edit-form" method="post" action="song-edit-action.php">
            <table border="0">
                <tr> 
                    <td>Song ID</td>
                    <td><?php echo $songId; ?></td>
                </tr>
                <tr> 
                    <td>Song Slug</td>
                    <td><input type="text" name="songSlug" value="<?php echo $songSlug; ?>"></td>
                </tr>
                <tr> 
                    <td>Song Title</td>
                    <td><input type="text" name="songTitle" value="<?php echo $songTitle; ?>"></td>
                </tr>
                <tr> 
                    <td>Song Album</td>
                    <td><input type="text" name="songAlbum" value="<?php echo $songAlbum; ?>"></td>
                </tr>
                <tr> 
                    <td>Song Year</td>
                    <td><input type="text" name="songYear" value="<?php echo $songYear; ?>"></td>
                </tr>
                <tr>
                    <input type="hidden" name="songId" value="<?php echo $songId; ?>">
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>