<?php
require '../../config/keys.php';
require '../../core/db_connect.php';
require '../../core/session.php';
// checkSession();

//Build the page metadata
$meta = [];
$meta['description'] = "Posts Yaritza Post List";
$meta['keywords'] = "posts, Yaritza, post list";

$content="<h1>Yaritza A. Posts</h1>";
$stmt = $pdo->query('SELECT * FROM posts');

while($row = $stmt->fetch()){
  $content .= "<div><a href=\"view.php?slug={$row['slug']}\">{$row['title']}</a></div>";
}

$content .= "<br><hr><div><a href=\"add.php\">New Post</a></div><br>";

require '../../core/layout.php';