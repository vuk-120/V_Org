			<nav class="main_menu">
				<?php 
					if((isset($_SESSION['success']) && $_SESSION['success'] == true))
					{

						$user_shit = $_SESSION['name'];
						$sub_user_shit = strtoupper(substr($user_shit, 0, 1));

						echo
						"
							<ul class='menuLeft'>
								<li>
									<h1>
										<a href='home.php'>V_</a>
									</h1>
								</li>
							</ul>
							
							<ul class='menuMiddle'>
								<li>
								<a href='home.php' style='padding-left: 15%; padding-top: 14%; padding-bottom: 10%;'>V_main
								<i class='fa fa-caret-down fa-2x' style='padding-left: 5%; padding-top: 10%;'></i></a>
									<ul>
				
										<li>
											<a href='home.php?explore=java'>V_java</a>
										</li>
										<li>
											<a href='home.php?explore=python'>V_python</a>
										</li>
										<li>
											<a href='home.php?explore=AI'>V_AI</a>
										</li>
									</ul>
								</li>
							</ul>

							<ul class='menuRight'>
								<li style='padding-top: 7%;' id='user_letter'>"; ?> <?php echo "$sub_user_shit"; ?>
								<?php  
									 echo "
									<ul style='font-size: 15px;'>
										<li>
											<a href='profile.php?userId='{$_SESSION['name']}'>Profile</a>
										</li>
										<li>
											<a href='writepost.php'>Write post</a>
										</li>
										<li>
											<a href='help.php'>Help</a>
										</li>
										<li>
											<a href='logOffProcess.php'>Sign out</a>
										</li>
									</u>
								</li>
							</ul>
						";
					}
				 ?>	
			</nav>
