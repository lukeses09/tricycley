<?php

  if(!isset($_SESSION))
  { session_start(); }

  if( !isset($_SESSION["tricycley_username"]) || !isset($_SESSION["tricycley_level"]) )
  {

    if(isset($_SESSION))
    {
      // remove all session variables
      session_unset();

      // destroy the session
      session_destroy();
    } ?>

    <script type="text/javascript">
      window.location="../../view/master/login.php";
    </script>

  <?php
  }
  else {
		if($_SESSION["tricycley_level"]=="user"){
	    ?>
				<script type="text/javascript">window.location="../../view/master/500.php";
				</script>
			<?php

		}// end if
		else if($_SESSION["tricycley_level"]=="admin"){
			$tricycley_username = $_SESSION["tricycley_username"];
			$tricycley_level = $_SESSION["tricycley_level"];
			// $tricycley_module = $_SESSION["tricycley_module"];

			if(isset($_SESSION['session_group']) ){
				$session_group = $_SESSION['session_group'];
				$session_group_name = $_SESSION['session_group_name'];
			}
			else{
				$session_group = '';
				$session_group_name = '';
			}

		}//end elsif
    ?>


 <?php } ?>
