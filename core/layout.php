<!-- Set session in php -->
<?php
function active($name){
  $current = $_SERVER['REQUEST_URI'];
  if($current === $name){
    return 'active';
  }

  return null;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
<!-- Add sanitized content -->
  <?php if(!empty($meta)): ?>

<?php if(!empty($meta['title'])): ?>
  <title><?php echo $meta['title']; ?></title>
<?php endif; ?>

<?php if(!empty($meta['description'])): ?>
  <meta name="description" content="<?php echo $meta['description']; ?>">
<?php endif; ?>

<?php if(!empty($meta['keywords'])): ?>
  <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
<?php endif; ?>

<?php endif; ?>
<!-- End sanitized content -->

      <meta charset="UTF-8">

      <title>About Yaritza A.</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/dist/main.css">
  </head>
  <body>
  <body style="background-color: #D3D3D3"> 
  <div class="row">
            <div id="Content">
                <?php echo $content; ?>
            </div>
            <div id="Sidebar">
              <div id="AboutMe">
                <div class="header">Hello, Yaritza A.</div>
                <img class="avatar" src="https://s.gravatar.com/avatar/f8a45276bb23b3cd72fe7533b7bad4d2?s=80" alt="My Avatar" class="img-circle">
              </div>
            </div>
        </div>

    <div id="Wrapper">
        <nav class="top-nav">
            <!-- <a href="index.html" class="pull-left" href="/">"favicon-16x16.png"</a> -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="http://localhost/example.com/public/index.php">Home</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/example.com/public/resume.php">Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/example.com/public/contact.php">Contact</a>
          </li>
            <a class="nav-link dropdown-toggle" href="http://localhost/example.com/public/register.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Register
              <li class="nav-item">
            <a class="nav-link" href="http://localhost/example.com/public/posts/">Contact</a>
            <li class="nav-item">
            <a class="nav-link" href="http://localhost/example.com/public/contact.php">Contact</a>
            <li class="nav-item">
            <a class="nav-link" href="http://localhost/example.com/public/contact.php">Contact</a>
            <li class="nav-item">
            <a class="nav-link" href="http://localhost/example.com/public/contact.php">Contact</a>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="http://localhost/example.com/public/posts/">Post</a>
              <a class="dropdown-item" href="http://localhost/example.com/public/users/index.php">Users</a>
           <a class="dropdown-item" href="http://localhost/example.com/public/logout.php">Logout</a>
           <a class="dropdown-item" href="http://localhost/example.com/public/login.php">Login</a>
            </div>

        
        <div id="Footer" class="clearfix">
            <small>&copy; 2021 - MyAwesomeSite.com</small>
            <ul role="navigation">
                <li><a href="terms.html">Terms</a></li>
                <li><a href="privacy.html">Privacy</a></li>
            </ul>
        </div>
    </div>

  </body>

</html>

