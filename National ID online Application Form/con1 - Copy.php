<?php


function OpenCon()
 {
 

 
$con = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('project')

	$id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$othername = $_POST['othername'];
	$phone = $_POST['phone'];
	$passportnumber = $_POST['passportnumber'];
	$placeofissue = $_POST['placeofissue'];
	$dateofissue = $_POST['dateofissue'];
	$authority = $_POST['authority'];
	$license = $_POST['license'];
	$tax = $_POST['tax'];
	$gender = $_POST['gender'];
	$pobirth = $_POST['pobirth'];
	$bdate = $_POST['bdate'];
	$tribe = $_POST['tribe'];
	$clan = $_POST['clan'];
	$occupation = $_POST['occupation'];
	$profession = $_POST['profession'];
	$education = $_POST['education'];
	$marital = $_POST['marital'];
	$postal = $_POST['postal'];
	$residential = $_POST['residential'];
	$village = $_POST['village'];
	$parish = $_POST['parish'];
	$subcounty = $_POST['subcounty'];
	$county = $_POST['county'];
	$district = $_POST['district'];
	$country = $_POST['country'];
	$fname = $_POST['fname'];
	$flname = $_POST['flname'];
	$foname = $_POST['foname'];
	$fpobirth = $_POST['fpobirth'];
	$fbdate = $_POST['fbdate'];
	$mname = $_POST['mname'];
	$mlname = $_POST['mlname'];
	$moname = $_POST['moname'];
	$mpobirth = $_POST['mpobirth'];
	$mbdate = $_POST['mbdate'];
	
	$sql = "INSERT INTO `application` (`id`, `fldfirstname`, `fldlastname`, `fldothername`, `fldphone`, `fldpassportnumber`, `fldplaceofissue`, `flddateofissue`, `fldauthority`, `fldlicense`, `fldtax`, `fldgender`, `fldpobirth`, `fldbdate`, `fldtribe`, `fldclan`, `fldoccupation`, `fldprofession`, `fldeducation`, `fldmarital`, `fldpostal`, `fldresidential`, `fldvillage`, `fldparish`, `fldsubcounty`, `fldcounty`, `flddistrict`, `fldcountry`, `fldfname`, `fldflname`, `fldfoname`, `fldfpobirth`, `fldfldfbdate`, `fldfldmname`, `fldfldmlname`, `fldmoname`, `fldmpobirth`, `fldmbdate`)
			VALUES ('0', '$firstname', '$lastname', '$othername', '$phone', '$passportnumber', '$placeofissue', '$dateofissue', '$authority', '$license', '$tax', '$gender', '$pobirth', '$bdate', '$tribe', '$clan', '$occupation', '$profession', '$education', '$marital', '$postal', '$residential', '$village', '$parish', '$subcounty', '$county', '$district', '$country', '$fname', '$flname', '$foname', '$fpobirth', '$fbdate', '$mname', '$mlname', '$moname', '$mpobirth', '$mbdate');"
	
	if($con){
		echo 'Succesful connected to the database';
	} else (
	die('Error');
 }
	
	
	
	
	/*$rs = mysqli_query($conn, $sql);

	if($rs)
	{
		echo "Form Submitted";
	}*/		
?>
