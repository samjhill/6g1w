<div class="navbar">
	<div class="navbar-inner">
	  <a class="brand" href="#">6G1W</a>
	  <ul class="nav">
		<li><a href="index.php" <?php if ($currentPage=="Home") echo "class=\"active\""; ?>><i class="fa fa-home fa-fw"></i>Home</a></li>
		<li><a href="dictionary.php" <?php if ($currentPage=="Dictionary") echo "class=\"active\""; ?>><i class="fa fa-book fa-fw"></i> Dictionary</a></li>
		<li><a href="tutorials.php" <?php if ($currentPage=="Tutorials") echo "class=\"active\""; ?>><i class="fa fa-pencil-square fa-fw"></i>Tutorials</a></li>
		<li><a href="quizzes.php" <?php if ($currentPage=="Quizzes") echo "class=\"active\""; ?>><i class="fa fa-question fa-fw"></i>Quizzes</a></li>
		<li><a href="gallery.php" <?php if ($currentPage=="Gallery") echo "class=\"active\""; ?>><i class="fa fa-question fa-fw"></i>Gallery</a></li>
		<li><a href="about.php" <?php if ($currentPage=="About") echo "class=\"active\""; ?>><i class="fa fa-group fa-fw"></i>About</a></li>
	  </ul>
	</div>
</div>