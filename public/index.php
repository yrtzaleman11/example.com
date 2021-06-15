<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./dist/css/main.css">
    <link rel="stylesheet" type="text/css" href="./dist/css/main.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">   
  <meta name="msapplication-square16x16logo" content="imagegoeshere/smalltile.png" />
  <meta name="msapplication-square32x32logo" content="imagegoeshere/mediumtile.png" />
  <meta name="description" content="Yaritza Aleman Resume">
  <meta name="keywords" content="receptionist,customer service,Scrum Master,Spanish,English">  
</head>
<body style="background-color: #2F4F4F"> 

  <header>
    <span class="logo>Yaritza Aleman"</span>
    <a id="toggleMenu">Menu<a></a>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="resume.html">Resume</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
<main><h1 style="border:2px solid coral;">Hello, and Welcome to my website</h1></main>






    <img class="avatar" src="https://s.gravatar.com/avatar/f8a45276bb23b3cd72fe7533b7bad4d2?s=80" 
        alt="YaritzaA.jpeg">    
 On my spare time I like to hangout with friends,learn new things but above all travel. 

    <b><p>Come learn about me any my accomplishments</p></b>
     <body>  
      </header>
    <p>I received by BA in Social Science in 2019 I am also certified in customer service and have recently obtain my Scrum Master Certification</p>
    <h2>Intresting Readings</h2>
    <ul>
        <li><a href="https://stackoverflow.com/questions/717012/how-can-a-deinterpretedveloper-learn-about-web-design">How can a developer learn about web design? [closed]</a></li>
        <li><a href=https://youtu.be/IbOyBIS57C0>Professional Web Design Process Explained in 5 minutes
        </a></li>
        <li><a href="https://youtu.be/vfqvzgkYYF0">Write BETTER Code! 7 Tips to Improve Your Programming Skills" </a></li>
    </ul>
 
    <script>

      var toggleMenu = document.getElementById('toggleMenu');
      var nav = document.querySelector('nav');
      toggleMenu.addEventListener(
        'click',
        function(){
          if(nav.style.display=='block'){
            nav.style.display='none';
          }else{
            nav.style.display='block';
          }
        }
      );
    </script>
    
  </body>
</html>