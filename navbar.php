<?php include 'siteURL.php'; ?>
 <div class="navbar-fixed">
 	 <nav >
    <div class="nav-wrapper">
      <a href="<?=$URL?>" class="brand-logo">Jobs</a>

      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="newjob.php">New Job</a></li>
        <li><a href="myjobs.php">My Jobs</a></li>
        <?php
        	if (isset($_SESSION['user']) ){ ?>
          <li><a href="logout.php">Log out</a></li>
          <li class="truncate">
            <a href="" style="color: black">user: <?=$_SESSION['user_name']?></a></li>
			<?php } else { ?>
          <li><a href="login.php">Sig in</a></li>
          <li><a href="newuser.php">Sig up</a></li>

        	<?php } ?>
      </ul>
    </div>
  </nav>
 </div>