<!DOCTYPE HTML>
<html>
<head>
<style>
	body{
          background-repeat:no-repeat;
          background-size:cover;
      }
.error {color: #FF0000;}

.container {
    
     margin-left:0px;
      text-align: center;
    }
    input[type="submit"] {
      margin-bottom: 20px;
    }
    .select-block {
      width: 300px;
	  top:10px;
	 position: relative;
    }
    select {
      width: 100%;
      height: 50px;
      font-size: 100%;
      font-weight: bold;
      cursor: pointer;
      border-radius: 0;
      background-color: #1A33FF;
      border: none;
      border: 2px solid #1A33FF;
      border-radius: 4px;
      color: white;
      appearance: none;
      padding: 8px 38px 10px 18px;
      -webkit-appearance: none;
      -moz-appearance: none;
      transition: color 0.3s ease, background-color 0.3s ease, border-bottom-color 0.3s ease;
    }
    /* For IE <= 11 */
    select::-ms-expand {
      display: none;
    }
    .selectIcon {
		top: 7px;
      right: 15px;
      width: 30px;
      height: 36px;
      padding-left: 5px;
      pointer-events: none;
      position: absolute;
      transition: background-color 0.3s ease, border-color 0.3s ease;
    }
    .selectIcon svg.icon {
      transition: fill 0.3s ease;
      fill: white;
    }
    select:hover,
    select:focus {
      color: #000000;
      background-color: white;
    }
    select:hover~.selectIcon,
    select:focus~.selectIcon {
      background-color: white;
    }
    select:hover~.selectIcon svg.icon,
    select:focus~.selectIcon svg.icon {
      fill: #1A33FF;
    }

</style>
<title>SignUp</title>
<link rel="stylesheet" type="text/css" href="cssfile.css">
</head>
<body background="images/shop2.jpeg">

<?php
include 'datab.php';
//define variables and set them to empty values
$fname = $lname = $uname = $pwd = $email = "";

$errfname = $erruname = $errpwd = $erremail = $errdob ="";
$msg="";
echo "<link rel='stylesheet' type='text/css' src='cssfile.css'>";
if(isset($_POST['upload'])){
	$dob=$_FILES["dob"]["name"];
	$tempname=$_FILES["dob"]["tmp_name"];
	$folder="dbimg/".$dob;


}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{	
	$err = false;
	if(empty($_POST["fname"]))
	{
		$errfname="Title is required";
		$err = true;
	}
	else
	{
		$fname = $_POST["fname"];
	}
	
	$lname = test_input($_POST["lname"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$lname)) 
		{
  			$errlname = "Only letters and white space allowed"; 
  			$err = true;
		}
	
	if(empty($_POST["uname"]))
	{
		$erruname="Type is required";
		$err = true;
	}
	else
	{
		$uname = $_POST["uname"];
	}

	if(empty($_POST["pwd"]))
	{
		$errpwd="Password is required";
		$err = true;
	}
	else
	{
		$pwd = $_POST["pwd"];
	}

	if(empty($_POST["email"]))
	{
		$erremail="State is required";
		$err = true;
	}
	else
	{
		$email = $_POST["email"];
	}
	



	if(!$err){
		
$sql = "INSERT INTO shop_register (Title,Type,social_media_link,City,State,Image)
VALUES ('$fname','$uname','$pwd','$lname','$email','$dob')";
//$result = mysqli_query($conn,$sql);

if (mysqli_query($conn, $sql)) 
{
   if(move_uploaded_file($tempname,$folder)){
	   $msg="Image uploaded successfully";
   }
   else{
	   $msg="Image failed to upload";

   }

    echo "<b style='color:white; font-size:40px;'><h3>New record created successfully</h3></b>";
} else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

}
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>

	 <div style="margin-left:25%; background-color:transparent; opacity:5px;" id="login">

	 <h1 style="margin-left:50px; color:blue;">Sign Up.</h1>
	 <p><span class="error" style="margin-left:50px;">* required field.</span></p>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
	

		<p><input type="text" style="margin-left:50px;" name="fname" placeholder="Title" id="text"><span class="error">*<?php echo $errfname;?></p>

	

		<pre>
      <div class="select-block">
        <select name="uname">
          <option value="" disabled selected>Select Product Type</option>
          <option value="Crafts">Crafts</option>
          <option value="Home_Decor">Home Decor</option>
          <option value="Accessories">Accessories</option>
          <option value="Food_&_Beverages">Food & Beverages</option>
          <option value="Books">Books</option>
		  <option value="Ayurveda">Ayurveda</option>
        </select>
        <div class="selectIcon">
          <svg focusable="false" viewBox="0 0 104 128" width="25" height="35" class="icon">
            <path d="m2e1 95a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm14 55h68v1e1h-68zm0-3e1h68v1e1h-68zm0-3e1h68v1e1h-68z"></path>
          </svg>
        </div>
      </div>
</pre>

		<p><input type="url" style="margin-left:50px;" name="pwd" placeholder="social Media Link" id="text"><span class="error">*<?php echo $errpwd;?></p>

		<p><input type="text" style="margin-left:50px;" name="lname" placeholder="City" id="text"></p>

	
		<pre>
      <div class="select-block">
        <select name="email">
          <option value="" disabled selected>Select State</option>
          <option value="Uttar_Pradesh">Uttar Pradesh</option>
          <option value="Andhra_Pradesh">Andhra Pradesh</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Himachal_Pradesh">Himachal Pradesh</option>
          <option value="Madhya_Pradesh">Madhya Pradesh</option>
		  <option value="New_Delhi">New Delhi</option>
		  <option value="Karnataka">Karnataka</option>
		  <option value="Maharashtra">Maharashtra</option>
		  <option value="Goa">Goa</option>
		  <option value="Rajasthan">Rajasthan</option>
		  <option value="Tamil_Nadu">Tamil_Nadu</option>
		  <option value="West_Bengal">West Bengal</option>
		  <option value="Jammu_&_Kashmir">Jammu & Kashmir</option>
		  <option value="Uttarakhand">Uttarakhand</option>
		  <option value="Punjab">Punjab</option>
		  <option value="Haryana">Haryana</option>
		  <option value="Orissa">Orissa</option>
		  <option value="Bihar">Bihar</option>
		  <option value="Jharkhand">Jharkhand</option>
		  <option value="Kerala">Kerala</option>
        </select>
        <div class="selectIcon">
          <svg focusable="false" viewBox="0 0 104 128" width="25" height="35" class="icon">
            <path d="m2e1 95a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm14 55h68v1e1h-68zm0-3e1h68v1e1h-68zm0-3e1h68v1e1h-68z"></path>
          </svg>
        </div>
      </div>
</pre>


		<p><input type="file" style="margin-left:50px;" name="dob" placeholder="Product Image" value=""/></p>
<div><button type="submit" style="margin-left:50px;" name="upload">UPLOAD</button></div>
		
		<p><button style="margin-left:50px;" type="submit" class="buttonp" >Sign up!</button></p>
	
	</form>
	<p style="margin-left:50px;">Have an Account?</p>
<p><a href="my.html" style="margin-left:50px;" >Click here to return to previous page</a></p>
</div>



</body>
</html>