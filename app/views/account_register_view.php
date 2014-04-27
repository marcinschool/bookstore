<?php include('header.php'); ?>
    <div id="content" class="mid">
    	<div class="register">
    		<h3>Rejestracja</h3>
            <form method="POST">
			    <table>
			    	<tr><td>Imie</td><td><input type="text" name="imie"></td></tr>
			    	<tr><td>Nazwisko</td><td><input type="text" name="nazwisko"></td></tr>
			    	<tr><td>Email</td><td><input type="text" name="email"></td></tr>
			    	<tr><td>Hasło</td><td><input type="password" name="haslo"></td></tr>
			    	<tr><td>Powtórz Hasło</td><td><input type="password" name="haslo2"></td></tr>
			    	<tr><td>Kim jestes:</td><td><select name="rola"><option value="1">Klient</option><option value="2">Hurtownik</option></select></td></tr>
			    	<tr><td colspan="2"><input class="btn btn-success" type="submit" name="register" value="Rejestruj"></td></tr>
			    </table>
		    </form>
<?php 
		    if(isset($success))
		    	echo '<div class="alert alert-success">'.$success.'</div>'; 
			if(isset($error))
		    	echo '<div class="alert alert-error">'.$error.'</div>'; 
?>
		</div>
    </div>

<?php include('footer.php'); ?>