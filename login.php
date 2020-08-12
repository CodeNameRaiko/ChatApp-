<?php  

?>
 
 <!DOCTYPE html>
 <html>
 <head>
 <title>Re:Ply.org</title>
 <link href="https://fonts.googleapis.com/css?family=Quicksand|Varela+Round&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="style.css">
 </head>
 <body class="page">

 <header class="Landingheader">
 <a href="index.php">
 <img src="logo.svg" class="Logo" style="user-select:none;"> 
 </a>
 <nav>
 <ul>
 <li><a href="feat.php">Features</a></li>
  <li><a href="feed.php">Feedback</a></li>
 <li><a href="about.php">About Us</a></li>
 <li class="signIn"><a href="logIn.php" id="signInside">Sign Up</a></li>
 </ul>
 </nav>
 </header>

<div class="tab">
<h1 class="title">Sign In</h1>
<form action="handler.php">

<div class="grid">
<label class="name">Name</label> 
<input type="text" name="name" placeholder="Enter Name" required> 
</div>

<div class="grid">
<label class="email">Email</label> 
<input type="email" name="email" placeholder="Enter Email" required> 
</div>

<div class="grid">
<label class="password">Password</label> 
<input type="password" placeholder="Enter Password" required> 
</div>

<div class="grid">
<label class="age">Age</label>
<input type="number" name="age" placeholder="Enter Age" min="12" max="100" required>
</div>

<div>
<input type="submit" class="submit">
</div>

</div>
 </body>
 </html>
