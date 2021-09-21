<?php include 'templates/header.php' ?>		

<?php

  if (isset($_POST['submit'])) {

  	// check title
  	if (empty($_POST['title'])) {
  		echo "Please enter title";
  	} else {
  		echo htmlspecialchars($_POST['title']);
  	}

  	// check email
  	if (empty($_POST['email'])) {
  		echo "An email is required";
  	} else {
  		echo htmlspecialchars($_POST['email']);
  	}

  	// check post
  	if (empty($_POST['post'])) {
  		echo "Enter your post please";
  	} else {
  		echo htmlspecialchars($_POST['post']);
  	}
  }

?>


<div class="py-20">  
	<div class="container mx-auto px-4 md:px-20">
    <form action="add.php" method="post" class="bg-blue-100 p-8 rounded-md w-4/12 mx-auto">
		  <label for="title">Title</label>
		  <br>
		  <input class="p-4 border border-blue-100 rounded-full w-full mb-4" type="text" name="title" placeholder="enter title" />
		  <label for="email">Email</label>
		  <br>
		  <input class="p-4 border border-blue-100 rounded-full w-full mb-4" type="email" name="email" placeholder="enter email" />
		  <label for="post">Post</label>
		  <br>
		  <input class="p-4 border border-blue-100 rounded-full w-full" type="text" name="post" placeholder="enter post here"/>
		  <input type="submit" name="submit" class="p-2 w-full rounded-full bg-blue-500 hover:bg-blue-400 cursor-pointer mt-4">
		</form>
  </div>
</div>
		
		
<?php include 'templates/footer.php' ?>