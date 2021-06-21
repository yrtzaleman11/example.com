<?php
require '../../config/keys.php';
require '../../core/db_connect.php';
require '../../core/session.php';
checkSession();

//Build the page metadata
$meta = [];
$meta['description'] = "Users Yaritza A's User List";
$meta['keywords'] = "users, Yaritza, A user list";

$content="<h1>Yaritza A's Users</h1>";
$stmt = $pdo->query('SELECT * FROM users');

while($row = $stmt->fetch()){
  $content .= "<div><a href=\"view.php?id={$row['id']}\">{$row['first_name']} {$row['last_name']}</a></div>";
}

$content .= "<br><hr><div><a href=\"add.php\">New User</a></div><br>";

require '../../core/layout.php'; 