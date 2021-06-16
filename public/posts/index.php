<?php
require '../../config/keys.php';
require '../../core/db_connect.php';

$meta=[];
$meta['title']="Yaritza's Blog";

$content="<h1>MicroTrains Posts</h1>";
$stmt = $pdo->query('SELECT * FROM posts');

while($row = $stmt->fetch()){
$content .= "<div><a href=\"view.php?slug={$row['slug']}\">{$row['title']}</a></div>";
}

$content .= "<br><hr><div><a href=\"add.php\">New Post</a></div><br>";

require '../../core/layout.php';