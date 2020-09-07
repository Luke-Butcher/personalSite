<?php
$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
    if($_POST["submit"]) {
        $recipient="luke@lukebutcher.net";
        $subject="contact form";
        $sender=$_POST["Name"];
        $senderEmail=$_POST["Email"];
        $message=$_POST["Message"];

        $mailBody="name: $sender\nEmail: $senderEmail\n\n$message";

        mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="5;url=<?=$previous ?>">
<link href="style.css" rel="stylesheet" title="Default">

<title>Luke Butcher</title>

</script>
</head>
<body>

<main class="flex-container">
<nav class="flex-item header">

      <ul class="nav">
        <li><a class="nav" href="index.html">Home</a></li>
        <li><a class="nav" href="curriculumvitae.html">Curriculum Vitae</a></li>
        <li><a class="nav" href="projects.html">Projects</a></li>
        <li><a class="nav active" href="contact.php">Contact Me</a></li>
        <li> <a class="medianav"  href="https://github.com/Luke-Butcher"  target="_blank">
              <img src = "media/github-10-24.png"
                alt="GitHub icon" /> </a>
        <li> <a class="medianav"  href="https://www.linkedin.com/in/luke-butcher-4a45b968/" target="_blank">
                <img src = "media/linkedin-5-24.png"
                alt="LinkedIn icon" /> </a>
      </ul>

  </nav>
  <nav class="sidenavbtn">
  <span aria-label="Open side navigation" class="openbtn" onclick="openNav()">|||</span>
</nav>
  <nav class="sidenav">
    <nav id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.html">Home</a>
      <a href="curriculumvitae.html">Curriculum Vitae</a>
      <a href="projects.html">Projects</a>
      <a href="contact.php">Contact Me</a>

      <a class="medianav"  href="https://github.com/Luke-Butcher"  target="_blank">
           <img src = "media/github-10-24.png"
             alt="GitHub icon" /> </a>
      <a class="medianav"  href="https://www.linkedin.com/in/luke-butcher-4a45b968/" target="_blank">
             <img src = "media/linkedin-5-24.png"
             alt="LinkedIn icon" /> </a>

    </nav>
  </nav>


  <section class="flex-item main">
<h1>Thank you ! Your message has been sent </h1>


  </section>

    <footer class="flex-item footer">
      </footer>

<script>

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}


function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</main>
</body>
</html>
