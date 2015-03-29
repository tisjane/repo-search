<?php include('header.php'); ?>

<h1>Hello <?php echo isset($name)?$name:''; ?></h1>

<h2>Find a repository</h2>
<form method='POST' action='/result'>
	<label>Name</label>
	<input name='name' placeholder='What repository do you want to look for?'>
	<input type='submit' value='Search'>
</form>

<?php include('footer.php'); ?>