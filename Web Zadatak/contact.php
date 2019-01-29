<!doctype html>
<html lang="hr">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="stranica">
		<meta name="keywords" content="stranica">
		<meta name="author" content="Dominik Cumbaj">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact</title>
		<link rel="shortcut icon" type="image/x-icon" href="favico.ico">
		<link href="styles.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<header>
		<div class="navigation">
		<a href="index.php"><img src="images/valve.png" alt="Banner"></a>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="gallery.php">Gallery</a></li>
			</ul>
		</nav>
		</div>
	</header>
	</body>
	<main>
	<div class="frame">
		<h1> Contact Form</h1>
		<iframe src="<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43043.98841943081!2d-122.20898118718961!3d47.60184241318687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906bcfa3a66041%3A0xbacf5482ead00765!2sBellevue%2C+WA%2C+USA!5e0!3m2!1sen!2shr!4v1548796304467" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div><br />
	
		<div class="form">
		<form action="send.php" method="post">
				<label for="fname">First Name *</label>
				<input type="text" id="first_name" name="first_name" placeholder="Your name.." required>

				<label for="lname">Last Name *</label>
				<input type="text" id="last_name" name="last_name" placeholder="Your last name.." required>
				
				<label for="lname">Your E-mail *</label>
				<input type="text" id="email" name="email" placeholder="example@mail.com" required>

				<label for="country">Country *</label>
				<select id="country" name="country" required>
				  <option value="">Select</option>
				  <option value="BE">Belgium</option>
				  <option value="HR">Croatia</option>
				  <option value="LU">Luxembourg</option>
				  <option value="HU">Hungary</option>
				</select>

				<label for="subject">Subject</label>
				<textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

				<input type="button" name="submit" value="Submit">
		</form>
		</div>

	</main>
	<div class="footer">
	<footer><p>Copyright &copy; 2019 Dominik Cumbaj.<a href="https://github.com/Dcumbaj/Web-Aplikacije.git"><img 	src="images/Git.png" title="GitHub" alt="GitHub" target="_blank"></a></p> 
	</footer>
	</div>
</html>