	<form action="" method="get">
		<input type="text" name="username">
		<button name="submit">Validate</button>
	</form>
	<?php
		if (isset($_GET['user'])) {
			$user = $_GET['password'];
			if(preg_match('/^[a-zA-Z_.]{8}$/', $user)) {
    			echo "$VALID";
			}
				else {
   			 echo "$TIDAK VALID";
			}	
		}
	?>