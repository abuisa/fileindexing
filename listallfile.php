<?php

  	session_start();
	//include_once ('conf.php');
	include_once ('pagin.php');
  	header('Content-Type: text/html; charset=utf-8');
//---------------
#if (isset($_POST["cr"])){$_SESSION["cr"] = $_POST["cr"];}
#if ($_SESSION["cr"] !== NULL){$cr = $_SESSION["cr"];}
//-------------------------
	function cc($cx){
	  return('<label class="cr">'.$cx.'</label>');
	} 
		//=========================

?>
<html>
<head>
  <title>Grep File</title>

    <!-- <link href="pagination.css" rel="stylesheet" type="text/css" /> -->
	<!--pagination-css-->
	<!-- <link href="grey.css" rel="stylesheet" type="text/css" /> -->
	<!--pagination-css-->
	<link href="pagination.css" rel="stylesheet" type="text/css" />
	<link href="grey.css" rel="stylesheet" type="text/css" />
<style>
	//=====Untuk TABEL STYLE======
	table, td, th {    
		border: 0px solid #ddd;
		text-align: left;
	}
	table {	
			padding:10px;
			border-collapse: collapse;
			width: 100%;	
	}
	th, td {
			/*padding: 12px;*/
			padding: 3px;
			vertical-align: top;
			border-bottom: 1px solid #ddd;
	}
	.xa {
		cursor: pointer; cursor: hand;
	}

	#myBtn {
	  display: none;
	  position: fixed;
	  bottom: 15px;
	  right: 20px;
	  z-index: 99;
	  border: none;
	  outline: none;
	  background-color: gray;
	  opacity:0.3;
	  color: black;
	  cursor: pointer;
	  padding: 10px;
	  border-radius: 7px;
	}

	#myBtn:hover {
	  	background-color: darkgray;
		opacity:0.8;
	}
	.hsl{
		font-weight: bold;
		color: blue;
	}
	.cr{
		color: red;
		font-weight: bolder;
	}
	.pgn {
	  text-align: center;
	}
</style>
<script>
//--- TAMBAHAN UNTUK BUTTON  GO-TO-TOP ----
	//========Ini Fungsi Untuk Show Button go-to-top========

	window.onscroll = function() {scrollFunction()};
	
	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		    document.getElementById("myBtn").style.display = "block";
		} else {
		    document.getElementById("myBtn").style.display = "none";
		}
	}
	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}

</script>
</head>
<body link="#00CC00">

<!-- ========================================== -->

<form method="POST" action="listallfile.php">
	<b>Cari Text : </b>
	<input type="text" id="nomor" name="sc" value="" placeholder="type string here" style="height: 24px; width: 260px;"> 
	<input type="text" id="nor" name="nor" value="" placeholder="30 Rows" style="height: 24px; width: 60px;"> 
	<button name="bsc" onclick="openInNewTab()">Cari !/Show</button>
</form>


<?php

	if ((isset($_POST['bsc'])) || (isset($_GET['page'])))
	{
		if (isset($_POST["sc"])){$_SESSION["sc"] = $_POST["sc"];}
		if ($_SESSION["sc"] !== NULL){$sc = $_SESSION["sc"];}
		if (isset($_POST["nor"])){$_SESSION["nor"] = $_POST["nor"];}
	}
	if ((isset($_POST['bsc'])) || (isset($_GET['page'])))
	{


//--- START HERE -------------------------------------------------------------		
			#cari($sc);
			
		  	global $link;
			$tb = 'tfilelist';
			$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
			
			if (!empty($_SESSION["nor"])){
				$limit = $_SESSION["nor"];
			}else {
				$limit = 30;
			}			
			$startpoint = ($page * $limit) - $limit;
			

			$sc = $_SESSION["sc"] ;
			$cr = str_replace(' ', '%', $sc);
			$statement = "`$tb` WHERE (flist LIKE '%$cr%' OR hash LIKE '%$cr%' OR addt LIKE '%$cr%' OR ket LIKE '%$cr%') ORDER BY flist ASC ";				

			#echo 'PAGE : '.$page;

			$i = ($limit * $page) - $limit;
			$sql = "SELECT * FROM {$statement} LIMIT {$startpoint} , {$limit}";
			$query = mysqli_query($link, $sql);

			echo '<div><label class="pgn">'.pagination($statement,$limit,$page).'</label><div>';
			echo "<table>";
			/*echo '	<tr bgcolor="darkgray"><td>ID</td>
					<td> <b>File Location</b></td>
					<td> <b>MD5 Hash</b>
					</td><td>Date</td><td>KET</td></tr>';*/
			echo '	<tr bgcolor="darkgray"><td>ID</td>
					<td> <b>File Location</b></td>
					<td> <b>MD5 Hash</b></td></tr>';

			while ($row = mysqli_fetch_assoc($query)) {
			//-----------------------------------------------------
				$fl0 = $row['id'];
				$fl1 = $row['flist'];
				$fl2 = $row['hash'];
				$fl3 = $row['addt'];
				$fl4 = $row['ket'];
			  //--------------------------
			  $i = $i+1;
			if (!empty($cr)){
				$cr = str_replace('%', ' ', $cr);
				$acr = explode(' ', $cr);
				$jm=count($acr);
		
			  //---------MEWARNAI STRING YANG DICARI---------------------
			  for ($x = 0; $x < $jm; $x++)
			  {
				  $fl0 = str_ireplace($acr[$x], cc($acr[$x]), $fl0);
				  $fl1 = str_ireplace($acr[$x], cc($acr[$x]), $fl1);
				  $fl2 = str_ireplace($acr[$x], cc($acr[$x]), $fl2);
				  $fl3 = str_ireplace($acr[$x], cc($acr[$x]), $fl3);
				  $fl4 = str_ireplace($acr[$x], cc($acr[$x]), $fl4);
			  }
			//------------TAMPILKAN DATA -----------------	
			}
			/*
			  echo'
			  <tr>
				<td>  '.$fl0.'</td>
				<td> '.$fl1.'</td>
				<td> '.$fl2.'</td>
				<td>'.$fl3.'</td>
				<td>'.$fl4.'</td>
			  </tr>';
			*/
			//--------- TAMPILKAN DATA HANYA DUA BARI --------------	
			  echo '<tr>
				<td>  '.$i.'</td>
				<td> '.$fl1.'</td>
				<td> '.$fl2.'</td>
			  </tr>';	 
			}

//--- END HERE -------------------------------------------------------------		
#		echo '<tr bgcolor="darkgray"><td colspan="5"><center><b> --- END --- </b></center></td></tr>';
		echo '<tr bgcolor="darkgray"><td colspan="3"><center><b> --- END --- </b></center></td></tr>';
		echo "</table>";

	}
	

?>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</body>
</html>
