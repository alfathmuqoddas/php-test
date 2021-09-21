<?php include 'templates/header.php' ?>		

<?php
  $errors = array('email' => '', 'title' => '', 'post' => '' );

  if (isset($_POST['submit'])) {

  	// check email
  	if (empty($_POST['email'])) {
  		$errors['email'] = "Please enter email <br />"; 
  	} else {
  		$email = $_POST['email'];
  		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$errors['email'] = 'email must be valid';
  		}
  	}

  	// check title
  	if (empty($_POST['title'])) {
  		$errors['title'] = "An title is required <br />";
  	} else {
  		$title = $_POST['title'];
  		if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
  			$errors['title'] = 'Title must only contain text and spaces';
  		}
  	}

  	// check post
  	if (empty($_POST['post'])) {
  		$errors['post'] = "Enter your post please <br />";
  	} else {
  		$post = $_POST['post'];
  		if (!preg_match('/^[a-zA-Z\s]+$/', $post)) {
  			$errors['post'] = 'Post must be comma separated list';
  		}
  	}
  }

?>


<div class="py-20">  
	<div class="container mx-auto px-4 md:px-20">
    <form action="add.php" method="post" class="bg-blue-100 p-8 rounded-md w-4/12 mx-auto">
		  <label for="title">Title</label>
		  <br>
		  <input class="p-4 border border-blue-100 rounded-full w-full" type="text" name="title" placeholder="enter title" />
		  <div class="text-red-500 mb-4"><?php echo $errors['title']; ?></div>
		  <label for="email">Email</label>
		  <br>
		  <input class="p-4 border border-blue-100 rounded-full w-full" type="email" name="email" placeholder="enter email" />
		  <div class="text-red-500 mb-4"><?php echo $errors['email']; ?></div>
		  <label for="post">Post</label>
		  <br>
		  <input class="p-4 border border-blue-100 rounded-full w-full" type="text" name="post" placeholder="enter post here"/>
		  <div class="text-red-500 mb-4"><?php echo $errors['post']; ?></div>
		  <input type="submit" name="submit" class="p-2 w-full rounded-full bg-blue-500 hover:bg-blue-400 cursor-pointer mt-4">
		</form>
  </div>
</div>
		
		
<?php include 'templates/footer.php' ?>