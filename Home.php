
<?php
	include 'header.php';
?>


<?php
	
	if(isset($_SESSION['uid']))
	{
		if(isset($_SESSION['admin']))
			{
				header("Location: admin.php");
			}
		else
		{
			echo "Hi ".$_SESSION['uid'];
			echo "You are login successfully";
			include "createteam.php";
			
		}
	
	}
	else
	{
		echo "you are not logged in!";
		

	}
?>
<h4 class="headerfont" > Welcome to BPL Cricket Fantasy !!!</h4>
<img class="bpl" src="images/bpl.jpg" width="800" alt="BPL Gallery"/>
<p class="pera">
	Fantasy cricket is a part of the Fantasy Sports genre. It is an online game where you create a virtual team of real cricket players and score points depending on how your chosen players perform in real life matches. To win a tournament, you must work towards attaining the maximum points and the No. 1 rank on the leader-board. We want to adopt this concept for BPL.
</p>

</body>


</html>