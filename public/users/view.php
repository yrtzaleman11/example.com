
<?php
require '../../config/keys.php';
require '../../core/db_connect.php';
require '../../core/session.php';
checkSession();

$input = filter_input_array(INPUT_GET);

$id = preg_replace("/[^a-z0-9-]+/","",$input['id']);

$stmt = $pdo->prepare("SELECT * FROM users WHERE id=:id");
$stmt->execute(['id'=>$id]);
$row = $stmt->fetch();

// $meta=[];
// $meta['title']=$row['title'];
// $meta['description']=$row['meta_description'];
// $meta['keywords']=$row['meta_keywords'];

$content=<<<EOT
<h1>{$row['first_name']} {$row['last_name']}</h1>
{$row['email']}
<hr>
<div>
<a class="btn btn-link" href="edit.php?id={$row['id']}">Edit</a>
<a class="btn btn-link" href="delete.php?id={$row['id']}">Delete</a>
<br><br>
</div>
EOT;

require '../../core/layout.php';