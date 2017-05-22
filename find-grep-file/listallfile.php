<html>
<head>
  <title>Grep File</title>
<style>
	//=====Untuk TABEL STYLE======
	table, td, th {    
		border: 0px solid #ddd;
		text-align: left;
	}
	table {
			border-collapse: collapse;
			width: 100%;	
	}
	th, td {
			/*padding: 12px;*/
			padding: 3px;
			vertical-align: top;
			border-bottom: 1px solid #ddd;
	}
	a {
		cursor: pointer; cursor: hand;
	}
	.divtable {
		padding-top: 1cm;
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
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<!-- ========================================== -->
<!--

-->
<form method="POST" action="listallfile.php">
	<b>Cari Text : </b><input type="text" id="nomor" name="sc" value="" placeholder="type string here" style="height: 24px; width: 260px;"> &nbsp; 
	<button name="bsc" onclick="openInNewTab()">Cari !</button>
	</form>
<table>

<?php

	if (isset($_POST['bsc']))
	{
		$sc  = $_POST['sc'];

		echo '<tr bgcolor="darkgray"><td> <b>File Location</b></td><td> <b>MD5 Hash</b></td></tr>';
		#$output1 = shell_exec("grep -i ".$sc." filelist.x ");
		# $output1 = shell_exec("grep -i ".$sc." filelist.x |awk '{print `<tr><td>`$0`</td></tr>`}' ");
		$output1 = shell_exec("./cari.sh ".$sc);
		$jumlah = shell_exec("./hcari.sh ".$sc);
		#$warnaout = str_replace($sc,'<label class="hsl">'.$sc.'</label>',$output1);
		echo "Text yang dicari: <b>".$sc."</b>, hasil: <b>".$jumlah."</b> baris";
		#echo "Jumlah : <b>".$jumlah."</b>"; 
		#echo "Jumlah : ".count($output1);
		#var_dump($output1);
		#$addlnk = str_replace('<tr><td> ','<tr><td><a href="file://',$warnaout);	
		#$addlnk = str_replace('<tr><td> ','<tr><td><a href="file://',$output1);
		#$addlnk = str_replace('<bts>','" target="_blank">',$addlnk);
		#$addlnk = str_replace('</td><td>','</a></td><td>',$addlnk);
		#echo "<pre>$addlnk</pre>";
		echo "$output1";
	}
	
	#cho "========= END ================";
	echo '<tr bgcolor="darkgray"><td colspan="2"><center><b> --- END --- </b></center></td></tr>';
	#print_r("<pre>$output</pre>");
	echo "</table>";
?>


</body>
</html>
