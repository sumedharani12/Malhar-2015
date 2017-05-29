<?php
include('session.php');
?>
<nav id="nav">
							<ul>
								<li>Welcome : <i><?php echo $login_session; ?></i></li>
								<li><a href="index.php">Home</a></li>
								<li><a href="prof.php">Dashboard</a></li>
								<li><a href="logout.php">Logout</a></li>

							</ul>
						</nav>