<?php
$servername = "localhost";
$username = "ignitesynergy_detail_user";
$password = "detail_user";
$dbname = "ignitesynergy_details";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $email=$_POST["email"];
    $name=$_POST["name"];
    $event=$_POST["event"];
    $contact=$_POST["contact"];
    if($event == 'Athletics'){
			$meter100= $_POST["meter100radio"];
			if($meter100=="Yes"){
					$pevents100=$_POST["pevents100"];
	
					$pevents100Detail=array();
					for($i=0,$j=0;$j< $pevents100; $j++,$i+=2){
						$n="p100name".$j;
						$pevents100Detail[$i] = $_POST[$n];
						$c="p100contact".($j);
						$pevents100Detail[$i+1] = $_POST[$c];
					}

					$event1="100mrace";
    	
			}
			else{
					$pevents100=0;

				}
			$meter200= $_POST["optradio200"];
			if($meter200=="Yes"){
					$pevents200=$_POST["pevents200"];
					$pevents200Detail=array();
					for($i=0,$j=0;$j< $pevents200; $j++,$i+=2){
						$n="p200name".$j;
						//echo $_POST[$n]."\n";
						$pevents200Detail[$i] = $_POST[$n];
						$c="p200contact".($j);
						$pevents200Detail[$i+1] = $_POST[$c];
					}

					$event2="200mrace";
			}
			else{
					$pevents200=0;
				}
			$meter400= $_POST["optradio400"];
			if($meter400=="Yes"){
					$pevents400=$_POST["pevents400"];
					$pevents400Detail=array();
					for($i=0,$j=0;$j< $pevents400; $j++,$i+=2){
						$n="p400name".$j;
						//echo $_POST[$n]."\n";
						$pevents400Detail[$i] = $_POST[$n];
						$c="p400contact".($j);
						$pevents400Detail[$i+1] = $_POST[$c];
					}

				$event3="400mrace";
			}
			else{
					$pevents400=0;
				}
			$meter800= $_POST["optradio800"];
			if($meter800=="Yes"){
					$pevents800=$_POST["pevents800"];
					$pevents800Detail=array();
					for($i=0,$j=0;$j< $pevents800; $j++,$i+=2){
						$n="p800name".$j;
						//echo $_POST[$n]."\n";
						$pevents800Detail[$i] = $_POST[$n];
						$c="p800contact".($j);
						$pevents800Detail[$i+1] = $_POST[$c];
					}

				$event4="800mrace";
			}
			else{
					$pevents800=0;
				}
			$meter1500= $_POST["optradio1500"];
			if($meter1500=="Yes"){
					$pevents1500=$_POST["pevents1500"];
					$pevents1500Detail=array();
					for($i=0,$j=0;$j< $pevents1500; $j++,$i+=2){
						$n="p1500name".$j;
						//echo $_POST[$n]."\n";
						$pevents1500Detail[$i] = $_POST[$n];
						$c="p1500contact".($j);
						$pevents1500Detail[$i+1] = $_POST[$c];
					}

					$event5="1500mrace";
			}
			else{
					$pevents1500=0;
				}
			$meter4100= $_POST["optradio4_100"];
			if($meter4100=="Yes"){
					$pevents4100=$_POST["pevents4_100"];
					$pevents4_100Detail=array();
					for($i=0,$j=0;$j< $pevents4100; $j++,$i+=2){
							$n="p4_100name".$j;
							//echo $_POST[$n]."\n";
							$pevents4_100Detail[$i] = $_POST[$n];
							$c="p4_100contact".($j);
							$pevents4_100Detail[$i+1] = $_POST[$c];
					}

				$event6="4*100mrace";
			}
			else{
					$pevents4100=0;
				}
			$meter4200= $_POST["optradio4_200"];
			if($meter4200=="Yes"){
					$pevents4200=$_POST["pevents4_200"];
					$pevents4_200Detail=array();
					for($i=0,$j=0;$j< $pevents4200; $j++,$i+=2){
							$n="p4_200name".$j;
							//echo $_POST[$n]."\n";
							$pevents4_200Detail[$i] = $_POST[$n];
							$c="p4_200contact".($j);
							$pevents4_200Detail[$i+1] = $_POST[$c];
					}

				$event7="4*200mrace";
			}
			else{
					$pevents4200=0;
				}
			$long= $_POST["optradiolong"];
			if($long =="Yes"){
						$peventslong=$_POST["peventslong"];
						$peventslongDetail=array();
						for($i=0,$j=0;$j< $peventslong; $j++,$i+=2){
							$n="plongname".$j;
							//echo $_POST[$n]."\n";
							$peventslongDetail[$i] = $_POST[$n];
							$c="plongcontact".($j);
							$peventslongDetail[$i+1] = $_POST[$c];
						}

					$event8="LongJump";
			}
			else{
					$peventslong=0;
				}
			$short= $_POST["optradioshort"];
			if($short =="Yes"){
					$peventsshort=$_POST["peventsshort"];
					$peventsshortDetail=array();
					for($i=0,$j=0;$j< $peventsshort; $j++,$i+=2){
						$n="pshortname".$j;
						//echo $_POST[$n]."\n";
						$peventsshortDetail[$i] = $_POST[$n];
						$c="pshortcontact".($j);
						$peventsshortDetail[$i+1] = $_POST[$c];
					}

				$event9="ShortPut";
			}
			else{
					$peventsshort=0;
				}
	
		$stmt = $conn->prepare("INSERT INTO ignitesynergy_details.User(email,name,event,contact,meter100,p100,meter200,p200,meter400,p400,meter800,p800,meter1500,p1500,meter4100,p4100,meter4200,p4200,longJump,plong,shortPut,pshort) 
    	VALUES (:email,:name,:event,:contact,:meter100,:p100,:meter200,:p200,:meter400,:p400,:meter800,:p800,:meter1500,:p1500,:meter4100,:p4100,:meter4200,:p4200,:longJump,:long,:shortPut,:short)");
    	$stmt->bindParam(':email', $email);
    	$stmt->bindParam(':name', $name);
    	$stmt->bindParam(':event', $event);
    	$stmt->bindParam(':contact', $contact);
	    $stmt->bindParam(':meter100', $meter100);
	    $stmt->bindParam(':p100', $pevents100);
	    $stmt->bindParam(':meter200', $meter200);
	    $stmt->bindParam(':p200', $pevents200);
	   	$stmt->bindParam(':meter400', $meter400);
	   	$stmt->bindParam(':p400', $pevents400);
	  	$stmt->bindParam(':meter800', $meter800);
	  	$stmt->bindParam(':p800', $pevents800);
		$stmt->bindParam(':meter1500', $meter1500);
		$stmt->bindParam(':p1500', $pevents1500);
		$stmt->bindParam(':meter4100', $meter4100);
		$stmt->bindParam(':p4100', $pevents4100);
		$stmt->bindParam(':meter4200', $meter4200);
		$stmt->bindParam(':p4200', $pevents4200);
		$stmt->bindParam(':longJump', $long);
		$stmt->bindParam(':long', $peventslong);
		$stmt->bindParam(':shortPut', $short);
		$stmt->bindParam(':short', $peventsshort); 	   
    }
    else{
				$other="Yes";
				$pevents=$_POST["pevents"];
				$peventsDetail=array();
				for($i=0,$j=0;$j< $pevents; $j++,$i+=2){
						$n="peventsname".$j;
						//echo $_POST[$n]."\n";
						$peventsDetail[$i] = $_POST[$n];
						$c="peventscontact".($j);
						$peventsDetail[$i+1] = $_POST[$c];
		
				}

		$stmt = $conn->prepare("INSERT INTO ignitesynergy_details.User(email,name,event,contact,pevent) 
    	VALUES (:email,:name,:event,:contact,:pevent)");
		$stmt->bindParam(':email', $email);
    	$stmt->bindParam(':name', $name);
    	$stmt->bindParam(':event', $event);
    	$stmt->bindParam(':contact', $contact);
		$stmt->bindParam(':pevent', $pevents);


	 }
//echo "Executing";
	if( $stmt->execute()){
		//echo "sucess";
	    //	$stmt1 = $conn->prepare("INSERT INTO ignitesynergy_details.Participants(UniqueId,name,contact,event) 
    //	VALUES (:uid,:pname,:pcontact1,:pevent1)");
    


	    		include("PHPMailer/mail.php");
				$cch=$conn->lastInsertId()+1000;
				$stmt12 = $conn->prepare("UPDATE ignitesynergy_details.User SET UniqueId ="$cch+" where email='"+$email+"'");
				$stmt12->execute();
				if($pevents100!=0){
						
				for($i=0,$j=0;$j< $pevents100; $i+=2,$j++){
				$stmt1 = $conn->prepare("INSERT INTO ignitesynergy_details.Participants(UniqueId,name,contact,event) 
    			VALUES (:uid,:pname1,:pcontact1,:pevent1)");
					
				$stmt1->bindParam(':uid',$cch);
				//echo $cch;
				  $stmt1->bindParam(':pevent1',$event1);  	
				//echo $event1;
				$stmt1->bindParam(':pname1',$pevents100Detail[$i]);
				//echo $pevents100Detail[$i];
				$stmt1->bindParam(':pcontact1',$pevents100Detail[$i+1]);
				//echo $pevents100Detail[$i+1];
		   		 $stmt1->execute();
		   				       
		   		 }
			}//end of if
			if($pevents200!=0){
						
				for($i=0,$j=0;$j< $pevents200; $i+=2,$j++){
				$stmt2 = $conn->prepare("INSERT INTO ignitesynergy_details.Participants(UniqueId,name,contact,event) 
    			VALUES (:uid,:pname1,:pcontact1,:pevent1)");
					
				$stmt2->bindParam(':uid',$cch);
				//echo $cch;
				  $stmt2->bindParam(':pevent1',$event2);  	
				//echo $event1;
				$stmt2->bindParam(':pname1',$pevents200Detail[$i]);
				//echo $pevents100Detail[$i];
				$stmt2->bindParam(':pcontact1',$pevents200Detail[$i+1]);
				//echo $pevents100Detail[$i+1];
		   		 $stmt2->execute();
		   				       
		   		 }
			}//end of if
			if($pevents400!=0){
						
				for($i=0,$j=0;$j< $pevents400; $i+=2,$j++){
				$stmt3 = $conn->prepare("INSERT INTO ignitesynergy_details.Participants(UniqueId,name,contact,event) 
    			VALUES (:uid,:pname1,:pcontact1,:pevent1)");
					
				$stmt3->bindParam(':uid',$cch);
				//echo $cch;
				  $stmt3->bindParam(':pevent1',$event3);  	
				//echo $event1;
				$stmt3->bindParam(':pname1',$pevents400Detail[$i]);
				//echo $pevents100Detail[$i];
				$stmt3->bindParam(':pcontact1',$pevents400Detail[$i+1]);
				//echo $pevents100Detail[$i+1];
		   		 $stmt3->execute();
		   				       
		   		 }
			}//end of if
			if($pevents800!=0){
						
				for($i=0,$j=0;$j< $pevents800; $i+=2,$j++){
				$stmt4 = $conn->prepare("INSERT INTO ignitesynergy_details.Participants(UniqueId,name,contact,event) 
    			VALUES (:uid,:pname1,:pcontact1,:pevent1)");
					
				$stmt4->bindParam(':uid',$cch);
				//echo $cch;
				  $stmt4->bindParam(':pevent1',$event4);  	
				//echo $event1;
				$stmt4->bindParam(':pname1',$pevents800Detail[$i]);
				//echo $pevents100Detail[$i];
				$stmt4->bindParam(':pcontact1',$pevents800Detail[$i+1]);
				//echo $pevents100Detail[$i+1];
		   		 $stmt4->execute();
		   				       
		   		 }
			}//end of if
			if($pevents1500!=0){
						
				for($i=0,$j=0;$j< $pevents1500; $i+=2,$j++){
				$stmt5 = $conn->prepare("INSERT INTO ignitesynergy_details.Participants(UniqueId,name,contact,event) 
    			VALUES (:uid,:pname1,:pcontact1,:pevent1)");
					
				$stmt5->bindParam(':uid',$cch);
				//echo $cch;
				  $stmt5->bindParam(':pevent1',$event5);  	
				//echo $event1;
				$stmt5->bindParam(':pname1',$pevents1500Detail[$i]);
				//echo $pevents100Detail[$i];
				$stmt5->bindParam(':pcontact1',$pevents1500Detail[$i+1]);
				//echo $pevents100Detail[$i+1];
		   		 $stmt5->execute();
		   				       
		   		 }
			}//end of if

			if($pevents4100!=0){
						
				for($i=0,$j=0;$j< $pevents4100; $i+=2,$j++){
				$stmt6 = $conn->prepare("INSERT INTO ignitesynergy_details.Participants(UniqueId,name,contact,event) 
    			VALUES (:uid,:pname1,:pcontact1,:pevent1)");
					
				$stmt6->bindParam(':uid',$cch);
			//	echo $cch;
				  $stmt6->bindParam(':pevent1',$event6);  	
				//echo $event1;
				$stmt6->bindParam(':pname1',$pevents4_100Detail[$i]);
				//echo $pevents100Detail[$i];
				$stmt6->bindParam(':pcontact1',$pevents4_100Detail[$i+1]);
				//echo $pevents100Detail[$i+1];
		   		 $stmt6->execute();
		   				       
		   		 }
			}//end of if

			if($pevents4200!=0){
						
				for($i=0,$j=0;$j< $pevents4200; $i+=2,$j++){
				$stmt7 = $conn->prepare("INSERT INTO ignitesynergy_details.Participants(UniqueId,name,contact,event) 
    			VALUES (:uid,:pname1,:pcontact1,:pevent1)");
					
				$stmt7->bindParam(':uid',$cch);
				//echo $cch;
				  $stmt7->bindParam(':pevent1',$event7);  	
				//echo $event1;
				$stmt7->bindParam(':pname1',$pevents4_200Detail[$i]);
				//echo $pevents100Detail[$i];
				$stmt7->bindParam(':pcontact1',$pevents4_200Detail[$i+1]);
				//echo $pevents100Detail[$i+1];
		   		 $stmt7->execute();
		   				       
		   		 }
			}//end of if

			if($peventslong!=0){
						
				for($i=0,$j=0;$j< $peventslong; $i+=2,$j++){
				$stmt8 = $conn->prepare("INSERT INTO ignitesynergy_details.Participants(UniqueId,name,contact,event) 
    			VALUES (:uid,:pname1,:pcontact1,:pevent1)");
					
				$stmt8->bindParam(':uid',$cch);
				//echo $cch;
				  $stmt8->bindParam(':pevent1',$event8);  	
				//echo $event1;
				$stmt8->bindParam(':pname1',$peventslongDetail[$i]);
				//echo $pevents100Detail[$i];
				$stmt8->bindParam(':pcontact1',$peventslongDetail[$i+1]);
				//echo $pevents100Detail[$i+1];
		   		 $stmt8->execute();
		   				       
		   		 }
			}//end of if

			if($peventsshort!=0){
						
				for($i=0,$j=0;$j< $peventsshort; $i+=2,$j++){
				$stmt9 = $conn->prepare("INSERT INTO ignitesynergy_details.Participants(UniqueId,name,contact,event) 
    			VALUES (:uid,:pname1,:pcontact1,:pevent1)");
					
				$stmt9->bindParam(':uid',$cch);
				//echo $cch;
				  $stmt9->bindParam(':pevent1',$event9);  	
			//	echo $event1;
				$stmt9->bindParam(':pname1',$peventsshortDetail[$i]);
				//echo $pevents100Detail[$i];
				$stmt9->bindParam(':pcontact1',$peventsshortDetail[$i+1]);
				//echo $pevents100Detail[$i+1];
		   		 $stmt9->execute();
		   				       
		   		 }
			}//end of if

			if($other=="Yes"){
				echo "in other";		
				for($i=0,$j=0;$j< $pevents; $i+=2,$j++){
				$stmt10 = $conn->prepare("INSERT INTO ignitesynergy_details.Participants(UniqueId,name,contact,event) 
    			VALUES (:uid,:pname1,:pcontact1,:pevent1)");
					
				$stmt10->bindParam(':uid',$cch);
				echo $cch;
				  $stmt10->bindParam(':pevent1',$event);  	
				echo $event;
				$stmt10->bindParam(':pname1',$peventsDetail[$i]);
				echo $peventsDetail[$i];
				$stmt10->bindParam(':pcontact1',$peventsDetail[$i+1]);
				echo $peventsDetail[$i+1];
		   		 $stmt10->execute();
		   				       
		   		 }
			}//end of if*/
				//echo email("$email",$name,"Testing mail","PHPMailer/realestate/index.php",$cch);
    			

	    	
        $email=$_POST["email"];
    $name=$_POST["name"];
    $event=$_POST["event"];
    $contact=$_POST["contact"];
    
    $student_one = array("email"=>$email, "name"=>$name,"event"=>$event, "contact"=>$contact); 
    
	 echo email("synergy@igdtuw.ac.in",$name,$student_one,"PHPMailer/realestate/index2.php",$cch);
    
	      
	    
        $_SESSION['varname'] = "success";
        echo "<script> location.href='success.php?user_no=$cch'; </script>";
        exit;
   	 }
    	else
     	{
        	$_SESSION['varname'] = "failiure";
       		echo "<script> location.href='failiure.html'; </script>";
        	exit;
     	}   
        

    }

catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>
