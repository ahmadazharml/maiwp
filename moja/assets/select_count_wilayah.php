<?php

	$stmt = $conn->prepare("SELECT * FROM asnaf"); 

	$stmt->execute(); 
						
	if ($stmt->rowCount() > 0) { 	

	$stmt12 = $conn->prepare("SELECT COUNT(parlimen) AS kualalumpur FROM asnaf WHERE parlimen < 13 OR parlimen = 'W.P Kuala Lumpur'"); 

	$stmt12->execute(); 

	$row12 = $stmt12->fetch();
						
	extract($row12);	
	
	
	$stmt13 = $conn->prepare("SELECT COUNT(parlimen) AS putrajaya FROM asnaf WHERE parlimen = 13 OR parlimen = 'W.P Putrajaya'"); 

	$stmt13->execute(); 

	$row13 = $stmt13->fetch();
						
	extract($row13);	
	
	
	$stmt14 = $conn->prepare("SELECT COUNT(parlimen) AS labuan FROM asnaf WHERE parlimen = 14 OR parlimen = 'W.P Labuan'"); 

	$stmt14->execute(); 

	$row14 = $stmt14->fetch();
						
	extract($row14);
	
	//echo "Kuala Lumpur: ". $kualalumpur;	
	
	//echo "Putrajaya: ". $putrajaya;	
	
	//echo "Labuan: ". $labuan;	
	
	
	$all = $kualalumpur + $putrajaya + $labuan;
	
	$kl = $kualalumpur / $all;
	
	$kualalumpur = number_format( $kl * 100, 2 );
	
	//echo $kualalumpur;
	
	$pjy = $putrajaya / $all;
	
	$putrajaya = number_format( $pjy * 100, 2 );
	
	//echo "PJY " . $putrajaya;
	
	$lab = $labuan / $all;
	
	$labuan = number_format( $lab * 100, 2 );
	
	//echo "Lab " . $labuan;
	}else{
		
		//
		
	}