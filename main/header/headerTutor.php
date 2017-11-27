<html>
	<head>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>	
	</head>
	<!-- This is the Navbar -->
	<nav class="navbar navbar-default probootstrap-navbar">
    <div class="container">
      <div class="navbar-header">
        <div class="btn-more js-btn-more visible-xs">
          <a href="#"><i class="icon-dots-three-vertical "></i></a>
        </div>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
        </button>
        <a class="navbar-brand" href="/beyondclass/index.php" title="BeyondClass">BeyondClass</a>
      </div>
      <div id="navbar-collapse" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/beyondclass/index.php">Home</a></li>
          <li><a href="/beyondclas/about.php">About Us</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Stats</a>
            <ul class="dropdown-menu">
              <li><a href="/beyondclass/views/customNine.php">Failing Students</a></li>
              <li><a href="/beyondclass/views/customThree.php">Above Average Students</a></li>
              <li><a href="/beyondclass/views/customTwo.php">High Average Students</a></li>
              <li><a href="/beyondclass/views/customTen.php">Department Averages</a></li>
            </ul>
          </li>
          <li><a href="/beyondclass/contact.php">Contact</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $user;?></a>
            <ul class="dropdown-menu">
              <li><a href="/beyondclass/main/destroy.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</html>		