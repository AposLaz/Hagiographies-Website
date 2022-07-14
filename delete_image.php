<?php 
	session_start();

	require_once('config.php');

	// prepei na tsekareis an o xrhsths einai sundedemenos. Alliws opoiosdhpote mporei na diagrapsei fwtografies
	if(!$_SESSION['loggedin']) {
		header('location: index.php');
		return;
	}

	// den xriazetai to file_delete, afou exis ta dedomena hdh sthn database
	if(isset($_GET['delID'])  ) 
	{
		// edw mporeis na fas sql injection. Vazoume mysqli_real_escape_string
		$delID = mysqli_real_escape_string($link, $_GET['delID']);

		$sql = sprintf("SELECT * FROM images WHERE ID = %d", $delID);

		// synhthws kalutera einai na mh deixneis to mysqli_error an tuxon prokypsei error
		// epeidh polles fores to error mporei na emfanisei user kai password apo th database
		$result = mysqli_query($link, $sql) or die('There was an error'); // mysqli_error($link)

		if(mysqli_num_rows($result) > 0)
		{
			while($obj = mysqli_fetch_object($result))
			{

				// gia na diagrapseis to arxeio, pairnoume to file name apo th database
				unlink(sprintf('images_marios/%s', $obj->image_name));

				// afou exoume parei to onoma kai diagrapsoume to arxeio, to diagrafoume ki ap thn database
				// an to diagrafame prwta apo thn database meta den tha mporousame na paroume to file name

				$sqlDel = sprintf('DELETE FROM images WHERE ID = %d', $delID);
				$result_d = mysqli_query($link, $sqlDel) or die('There was an error'); // mysqli_error($link)

				if($result_d)
				{
					header("Location: gallery.php#images_show");
				}
			}
		}
	}

?>