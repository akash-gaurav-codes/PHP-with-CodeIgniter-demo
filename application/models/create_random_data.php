<?php

// this code will generate 100 random Person records
// and insert them into the database

//Please set the correct login credentials for the database

$fnames = array('Arjun', 'Brijesh', 'Chandra', 'Disha', 'Esha', 'Farhan', 'Garima', 'Harish', 'Indra', 'Joy');

$lnames = array('Verma', 'Sharma', 'Singh', 'Mathur', 'Makkar', 'Goyal', 'Yadav', 'Mehara', 'Malhotra', 'Thakur');


$link = mysqli_connect("localhost", "codeigniter", "codeigniter", "meraDB");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}



foreach ($fnames as $f){
	foreach ($lnames as $l) { 
		 $name = $f.' '.$l;
		 $email = lcfirst($f).'.'.lcfirst($l).'@example.xyz';
        
        $date = rand(1970,2017)."-".rand(1,12)."-".rand(1,28);
		$sql = "INSERT INTO `Person` (`id`, `name`, `email`, `date_joined`) VALUES (NULL, '".$name."', '".$email."', '".$date."');";

		echo $date;

		mysqli_query($link, $sql) or die(mysqli_error($link));

printf ("New Record has id %d.\n", mysqli_insert_id($link));

		
	}
}

mysqli_close($link);

?>