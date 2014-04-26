<?php include('header.php'); ?>
    <div id="content" class="mid">
    	<div class="register">
    		<h3>Logowanie</h3>
            <form method="POST">
			    <table>
			    	<tr><td>Email</td><td><input type="text" name="email"></td></tr>
			    	<tr><td>Hasło</td><td><input type="text" name="haslo"></td></tr>
			    	<tr><td colspan="2"><input class="btn btn-success" type="submit" name="login" value="Zaloguj"></td></tr>
			    </table>
		    </form>
		    <?php
		    	if(isset($error))
		    		echo '<div class="alert alert-error">'.$error.'</div>'; 
		    ?>
		</div>
    </div>

<?php include('footer.php'); ?>