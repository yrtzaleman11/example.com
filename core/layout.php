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
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Yaritza A.</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  </head>
  <body style="background-color: #5F9EA0"> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/dist/main.css">
  </head>
  <body>
  <body style="background-color: #D3D3D3"> 
  
  <!-- Navbar content -->
</nav>
  <div class="row">      
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/example.com/public/index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="http://localhost/example.com/public/resume.php">Resume</a>
        <a class="nav-link" href="http://localhost/example.com/public/contact.php">Contact</a>
        <a class="nav-link" href="http://localhost/example.com/public/register.php">Register</a>
        <a class="nav-link" href="http://localhost/example.com/public/users/index.php">Users</a>
        <a class="nav-link disabled" href="http://localhost/example.com/public/posts/" tabindex="-1" aria-disabled="true">Post</a>
      </div>
    </div>
  </div>
</nav>
<li class="nav-item">
<?php if(!empty($_SESSION['user']['id'])): ?>
<a class="nav-link" href="http://localhost/example.com/public/logout.php">Logout</a>
 <?php else: ?>
<a class="nav-link <?php echo active('login.php'); ?>" href="http://localhost/example.com/public/login.php">Login</a>
  <?php endif; ?>
   </li>
   </div>
            </div>
            </nav>
            <div id="Content">
                <?php echo $content; ?>
            </div>
            <div id="Sidebar">
              <div id="AboutMe">
                <div class="header">Hello, Yaritza A.</div>
                <img class="avatar" src="https://s.gravatar.com/avatar/f8a45276bb23b3cd72fe7533b7bad4d2?s=80" alt="My Avatar" class="img-circle">
              </div>
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

