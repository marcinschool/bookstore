<?php include('header.php'); ?>
    <div id="content" class="mid">
	    <div id="menu">
	    	<h3>Gatunki</h3>
	    	<ul>
<?php
	foreach($gatunki as $gatunek)
	{
		echo '<li><a href="?gatunek='.$gatunek->id_gatunku.'">'.$gatunek->nazwa.'</a></li>';
	}
?>
			</ul>
	    </div>
	    <div id="items">
			<h3>Produkty</h3>
	    </div>
    </div>
<?php include('footer.php'); ?>