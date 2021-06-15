<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>About Yaritza A.</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/dist/main.css">
  </head>
  <body>
  <body style="background-color: #D3D3D3"> 

    <div id="Wrapper">
        <nav class="top-nav">
            <!-- <a href="index.html" class="pull-left" href="/">"favicon-16x16.png"</a> -->
            <ul role="navigation">
                <li><a href="index.php">Home</a></li>
                <li><a href="resume.php">Resume</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

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

