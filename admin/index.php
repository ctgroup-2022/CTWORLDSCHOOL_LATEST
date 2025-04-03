<?php
// Start the session
session_start();
?>

<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="css/style.css" />

  <title>Admin Login </title>

</head>



<body>

<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="https://ctworld.in/">Return home</a></div>
				<div class="contact">
                <form action="userInit.php" method="post">
						<h3>Log In</h3>
						<input type="text" placeholder="USERNAME" name="username" id="username">
						<input type="password" placeholder="PASSWORD" name="password" id="password">
						<button type="submit" name="submit" id="submit" class="submit">Log In</button>
                </form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h5></h5>
				</div>	
			</div>
		</div>
	</section>
   
    <center>

      <div class="">

        <p class="text-white" id="copyright">&copy; 2024 <a href="#" target="_blank">Aryana Software Development

            Cell</a>. All

          rights reserved</p>

      </div>

    </center>

  </div>

</body>



</html>