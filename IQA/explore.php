<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style1.css">
    <title>||QUESTION ANALYZER||</title>
  </head>
  <body>
    <hr>
    <header>
      <div class="head">
        <a href="index.html" class="logo"><strong>QUESTION ANALYSIS</strong></a>
        <nav id="nav">
          <a href="index.html" class="panel">Home</a>
          <a href="explore.php" class="panel">Explore</a>
          <a href="contact.html" class="panel">Contact</a>
        </nav>
      </div>
    </header>
    <main>
      <div class="choose">
        <form action="test.php" method="POST">
          <label for="C">Company</label>
          <input id="C" type="text" name="company">
          <label for="T">Topic</label>
          <input id="T" type="text" name="topic">
          <input type="submit" name="submit">
        </form>
      </div>
    </main>
  </body>
</html>
