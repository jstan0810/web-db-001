<?php
//including the database connection file
include_once("db/SqlHelper.php");

$sqlHelper = new SqlHelper();

//fetching data 
$query = "SELECT song_id, song_slug, song_title, song_album, song_year FROM songs";
$result = $sqlHelper->getData($query);
?>

<html>
    <head>	
        <title>Homepage</title>
    </head>

    <body>
        <table width='80%' border=0>

            <tr bgcolor='#CCCCCC'>
                <td>Song ID</td>
                <td>Song Slug</td>
                <td>Song Title</td>
                <td>Song Album</td>
                <td>Song Year</td>
                <td>Actions</td>
            </tr>
            <?php
                // while($res = mysqli_fetch_array($result)) { 		
                foreach ($result as $key => $res) {
                    $songId = $res['song_id'];
                    echo "<tr>";
                    echo "<td>" . $res['song_id'] . "</td>";
                    echo "<td>" . $res['song_slug'] . "</td>";
                    echo "<td>" . $res['song_title'] . "</td>";
                    echo "<td>" . $res['song_album'] . "</td>";
                    echo "<td>" . $res['song_year'] . "</td>";
                    echo "<td><a href='song-edit.php?id=$songId'>Edit</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>