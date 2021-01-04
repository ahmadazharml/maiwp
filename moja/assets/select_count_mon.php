<?php

	$stmt15 = $conn->prepare("SELECT COUNT(mon) AS jan12 FROM case_period WHERE mon = 'January' AND tot_hrs < 12"); 

	$stmt15->execute(); 

	$row15 = $stmt15->fetch();
						
	extract($row15);
	
	
	$stmt16 = $conn->prepare("SELECT COUNT(mon) AS jan24 FROM case_period WHERE mon = 'January' AND tot_hrs <= 24"); 

	$stmt16->execute(); 

	$row16 = $stmt16->fetch();
						
	extract($row16);


	$stmt17 = $conn->prepare("SELECT COUNT(mon) AS jan48 FROM case_period WHERE mon = 'January' AND tot_hrs <= 48"); 

	$stmt17->execute(); 

	$row17 = $stmt17->fetch();
						
	extract($row17);
	
	
	$stmt18 = $conn->prepare("SELECT COUNT(mon) AS jan48o FROM case_period WHERE mon = 'January' AND tot_hrs > 48"); 

	$stmt18->execute(); 

	$row18 = $stmt18->fetch();
						
	extract($row18);	
	


	$stmt19 = $conn->prepare("SELECT COUNT(mon) AS feb12 FROM case_period WHERE mon = 'February' AND tot_hrs <= 12"); 

	$stmt19->execute(); 

	$row19 = $stmt19->fetch();
						
	extract($row19);


	$stmt20 = $conn->prepare("SELECT COUNT(mon) AS feb24 FROM case_period WHERE mon = 'February' AND tot_hrs <= 24"); 

	$stmt20->execute(); 

	$row20 = $stmt20->fetch();
						
	extract($row20);
	
	
	$stmt21 = $conn->prepare("SELECT COUNT(mon) AS feb48 FROM case_period WHERE mon = 'February' AND tot_hrs <= 48"); 

	$stmt21->execute(); 

	$row21 = $stmt21->fetch();
						
	extract($row21);	
	
	
	$stmt21 = $conn->prepare("SELECT COUNT(mon) AS feb48o FROM case_period WHERE mon = 'February' AND tot_hrs > 48"); 

	$stmt21->execute(); 

	$row21 = $stmt21->fetch();
						
	extract($row21);	
	

	$stmt22 = $conn->prepare("SELECT COUNT(mon) AS mar12 FROM case_period WHERE mon = 'March' AND tot_hrs <= 12"); 

	$stmt22->execute(); 

	$row22 = $stmt22->fetch();
						
	extract($row22);
	
	
	$stmt23 = $conn->prepare("SELECT COUNT(mon) AS mar24 FROM case_period WHERE mon = 'March' AND tot_hrs <= 24"); 

	$stmt23->execute(); 

	$row23 = $stmt23->fetch();
						
	extract($row23);


	$stmt24 = $conn->prepare("SELECT COUNT(mon) AS mar48 FROM case_period WHERE mon = 'March' AND tot_hrs <= 48"); 

	$stmt24->execute(); 

	$row24 = $stmt24->fetch();
						
	extract($row24);
	
	
	$stmt25 = $conn->prepare("SELECT COUNT(mon) AS mar48o FROM case_period WHERE mon = 'March' AND tot_hrs > 48"); 

	$stmt25->execute(); 

	$row25 = $stmt25->fetch();
						
	extract($row25);	
	
	//echo $jan48;

	$stmt26 = $conn->prepare("SELECT COUNT(mon) AS apr12 FROM case_period WHERE mon = 'April' AND tot_hrs <= 12"); 

	$stmt26->execute(); 

	$row26 = $stmt26->fetch();
						
	extract($row26);



	$stmt27 = $conn->prepare("SELECT COUNT(mon) AS apr24 FROM case_period WHERE mon = 'April' AND tot_hrs <= 24"); 

	$stmt27->execute(); 

	$row27 = $stmt27->fetch();
						
	extract($row27);
	
	
	$stmt28 = $conn->prepare("SELECT COUNT(mon) AS apr48 FROM case_period WHERE mon = 'April' AND tot_hrs <= 48"); 

	$stmt28->execute(); 

	$row28 = $stmt28->fetch();
						
	extract($row28);
	

	$stmt29 = $conn->prepare("SELECT COUNT(mon) AS apr48o FROM case_period WHERE mon = 'April' AND tot_hrs > 48"); 

	$stmt29->execute(); 

	$row29 = $stmt29->fetch();
						
	extract($row29);	
	
	
	
	
	$stmt30 = $conn->prepare("SELECT COUNT(mon) AS may12 FROM case_period WHERE mon = 'May' AND tot_hrs <= 12"); 

	$stmt30->execute(); 

	$row30 = $stmt30->fetch();
						
	extract($row30);


	$stmt31 = $conn->prepare("SELECT COUNT(mon) AS may24 FROM case_period WHERE mon = 'May' AND tot_hrs <= 24"); 

	$stmt31->execute(); 

	$row31 = $stmt31->fetch();
						
	extract($row31);
	
	
	$stmt32 = $conn->prepare("SELECT COUNT(mon) AS may48 FROM case_period WHERE mon = 'May' AND tot_hrs <= 48"); 

	$stmt32->execute(); 

	$row32 = $stmt32->fetch();
						
	extract($row32);
	

	$stmt33 = $conn->prepare("SELECT COUNT(mon) AS may48o FROM case_period WHERE mon = 'May' AND tot_hrs > 48"); 

	$stmt33->execute(); 

	$row33 = $stmt33->fetch();
						
	extract($row33);
	
	
	
	
	
	$stmt34 = $conn->prepare("SELECT COUNT(mon) AS jun12 FROM case_period WHERE mon = 'June' AND tot_hrs <= 12"); 

	$stmt34->execute(); 

	$row34 = $stmt34->fetch();
						
	extract($row34);	
	

	$stmt35 = $conn->prepare("SELECT COUNT(mon) AS jun24 FROM case_period WHERE mon = 'June' AND tot_hrs <= 24"); 

	$stmt35->execute(); 

	$row35 = $stmt35->fetch();
						
	extract($row35);
	
	
	$stmt36 = $conn->prepare("SELECT COUNT(mon) AS jun48 FROM case_period WHERE mon = 'June' AND tot_hrs <= 48"); 

	$stmt36->execute(); 

	$row36 = $stmt36->fetch();
						
	extract($row36);
	

	$stmt37 = $conn->prepare("SELECT COUNT(mon) AS jun48o FROM case_period WHERE mon = 'June' AND tot_hrs > 48"); 

	$stmt37->execute(); 

	$row37 = $stmt37->fetch();
						
	extract($row37);	
	
	

	
	$stmt38 = $conn->prepare("SELECT COUNT(mon) AS jul12 FROM case_period WHERE mon = 'July' AND tot_hrs <= 12"); 

	$stmt38->execute(); 

	$row38 = $stmt38->fetch();
						
	extract($row38);	
	

	$stmt39 = $conn->prepare("SELECT COUNT(mon) AS jul24 FROM case_period WHERE mon = 'July' AND tot_hrs <= 24"); 

	$stmt39->execute(); 

	$row39 = $stmt39->fetch();
						
	extract($row39);
	
	
	$stmt40 = $conn->prepare("SELECT COUNT(mon) AS jul48 FROM case_period WHERE mon = 'July' AND tot_hrs <= 48"); 

	$stmt40->execute(); 

	$row40 = $stmt40->fetch();
						
	extract($row40);
	

	$stmt41 = $conn->prepare("SELECT COUNT(mon) AS jul48o FROM case_period WHERE mon = 'July' AND tot_hrs > 48"); 

	$stmt41->execute(); 

	$row41 = $stmt41->fetch();
						
	extract($row41);	
	
	
	
	$stmt42 = $conn->prepare("SELECT COUNT(mon) AS aug12 FROM case_period WHERE mon = 'August' AND tot_hrs <= 12"); 

	$stmt42->execute(); 

	$row42 = $stmt42->fetch();
						
	extract($row42);	
	

	$stmt43 = $conn->prepare("SELECT COUNT(mon) AS aug24 FROM case_period WHERE mon = 'August' AND tot_hrs <= 24"); 

	$stmt43->execute(); 

	$row43 = $stmt43->fetch();
						
	extract($row43);
	
	
	$stmt44 = $conn->prepare("SELECT COUNT(mon) AS aug48 FROM case_period WHERE mon = 'August' AND tot_hrs <= 48"); 

	$stmt44->execute(); 

	$row44 = $stmt44->fetch();
						
	extract($row44);
	

	$stmt45 = $conn->prepare("SELECT COUNT(mon) AS aug48o FROM case_period WHERE mon = 'August' AND tot_hrs > 48"); 

	$stmt45->execute(); 

	$row45 = $stmt45->fetch();
						
	extract($row45);	
	
	
	
	
	$stmt46 = $conn->prepare("SELECT COUNT(mon) AS sep12 FROM case_period WHERE mon = 'September' AND tot_hrs <= 12"); 

	$stmt46->execute(); 

	$row46= $stmt46->fetch();
						
	extract($row46);	
	

	$stmt47 = $conn->prepare("SELECT COUNT(mon) AS sep24 FROM case_period WHERE mon = 'September' AND tot_hrs <= 24"); 

	$stmt47->execute(); 

	$row47 = $stmt47->fetch();
						
	extract($row47);
	
	
	$stmt48 = $conn->prepare("SELECT COUNT(mon) AS sep48 FROM case_period WHERE mon = 'September' AND tot_hrs <= 48"); 

	$stmt48->execute(); 

	$row48 = $stmt48->fetch();
						
	extract($row48);
	

	$stmt49 = $conn->prepare("SELECT COUNT(mon) AS sep48o FROM case_period WHERE mon = 'September' AND tot_hrs > 48"); 

	$stmt49->execute(); 

	$row49 = $stmt49->fetch();
						
	extract($row49);	
	
	
	
	$stmt50 = $conn->prepare("SELECT COUNT(mon) AS oct12 FROM case_period WHERE mon = 'October' AND tot_hrs <= 12"); 

	$stmt50->execute(); 

	$row50= $stmt50->fetch();
						
	extract($row50);	
	

	$stmt51 = $conn->prepare("SELECT COUNT(mon) AS oct24 FROM case_period WHERE mon = 'October' AND tot_hrs <= 24"); 

	$stmt51->execute(); 

	$row51 = $stmt51->fetch();
						
	extract($row51);
	
	
	$stmt52 = $conn->prepare("SELECT COUNT(mon) AS oct48 FROM case_period WHERE mon = 'October' AND tot_hrs <= 48"); 

	$stmt52->execute(); 

	$row52 = $stmt52->fetch();
						
	extract($row52);
	

	$stmt53 = $conn->prepare("SELECT COUNT(mon) AS oct48o FROM case_period WHERE mon = 'October' AND tot_hrs > 48"); 

	$stmt53->execute(); 

	$row53 = $stmt53->fetch();
						
	extract($row53);
	
	
	
	$stmt54 = $conn->prepare("SELECT COUNT(mon) AS nov12 FROM case_period WHERE mon = 'November' AND tot_hrs <= 12"); 

	$stmt54->execute(); 

	$row54= $stmt54->fetch();
						
	extract($row54);	
	

	$stmt55 = $conn->prepare("SELECT COUNT(mon) AS nov24 FROM case_period WHERE mon = 'November' AND tot_hrs <= 24"); 

	$stmt55->execute(); 

	$row55 = $stmt55->fetch();
						
	extract($row55);
	
	
	$stmt56 = $conn->prepare("SELECT COUNT(mon) AS nov48 FROM case_period WHERE mon = 'November' AND tot_hrs <= 48"); 

	$stmt56->execute(); 

	$row56 = $stmt56->fetch();
						
	extract($row56);
	

	$stmt57 = $conn->prepare("SELECT COUNT(mon) AS nov48o FROM case_period WHERE mon = 'November' AND tot_hrs > 48"); 

	$stmt57->execute(); 

	$row57 = $stmt57->fetch();
						
	extract($row57);
	
	
	
	$stmt58 = $conn->prepare("SELECT COUNT(mon) AS dec12 FROM case_period WHERE mon = 'December' AND tot_hrs <= 12"); 

	$stmt58->execute(); 

	$row58 = $stmt58->fetch();
						
	extract($row58);	
	

	$stmt59 = $conn->prepare("SELECT COUNT(mon) AS dec24 FROM case_period WHERE mon = 'December' AND tot_hrs <= 24"); 

	$stmt59->execute(); 

	$row59 = $stmt59->fetch();
						
	extract($row59);
	
	
	$stmt60 = $conn->prepare("SELECT COUNT(mon) AS dec48 FROM case_period WHERE mon = 'December' AND tot_hrs <= 48"); 

	$stmt60->execute(); 

	$row60 = $stmt60->fetch();
						
	extract($row60);
	

	$stmt61 = $conn->prepare("SELECT COUNT(mon) AS dec48o FROM case_period WHERE mon = 'December' AND tot_hrs > 48"); 

	$stmt61->execute(); 

	$row61 = $stmt61->fetch();
						
	extract($row61);