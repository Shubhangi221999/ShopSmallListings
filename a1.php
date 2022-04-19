<DOCTYPE! html>
  <html>
    <head>
      <title>Tee Music School</title>
      <link rel="stylesheet" href="a2.css">
    </head>
    <body>

      <?php
      include 'datab.php';
      //define variables and set them to empty values
      $name = $mob = $comm = $email = "";
      
      $errfname = $erruname = $errpwd = $erremail = $errdob ="";
      $msg="";
     
     
      if ($_SERVER["REQUEST_METHOD"] == "POST")
      {	
        $err = false;
        if(empty($_POST["name"]))
        {
          $errfname="Name is required";
          $err = true;
        }
        else
        {
          $name = $_POST["name"];
        }
        
      
        
        if(empty($_POST["email"]))
        {
          $erruname="email is required";
          $err = true;
        }
        else
        {
          $email = $_POST["email"];
        }
      
        if(empty($_POST["mob"]))
        {
          $errpwd="Mobile number is required";
          $err = true;
        }
        else
        {
          $mob = $_POST["mob"];
        }
      
        if(empty($_POST["comm"]))
        {
          $erremail="feedback is required";
          $err = true;
        }
        else
        {
          $comm = $_POST["comm"];
        }
        
      
      
      
        if(!$err){
          
      $sql = "INSERT INTO feedback(name,email,mobile,comment)
      VALUES ('$name','$email','$mob','$comm')";
      //$result = mysqli_query($conn,$sql);
      
      if (mysqli_query($conn, $sql)) 
      {
         
      
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
      </div>
<div class="at"> <a style="background-color:yellow; color:Black;" href="index.html" class="st" target="_blank"><b>Home</b></a>
   
        </div> 
      <h1 id="title">How to support small local businesses?</h1>
      <p id="description"> Thank you for filling this form, we appreciate your honest feedback.</p>
       <form id="survey-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
          <label id="name-label" for="name"> Name:</label><br>
        <input id="name" name="name" type="text" placeholder="Enter your fullname"  required> <br><br>
        <label id="email-label" for="email"> E-mail:</label><br>
         
        <input id="email" name="email" type="email"  placeholder="Enter your email" required><br><br>
        <label id="number-label" name="email" for="number">Mobile Number:</label><br>
        <input id="number" type="number" name="mob" placeholder="Enter active mobile number" ><br><br>
        <p>Any comments or suggestions?</p>
        <textarea id="comment" name="comm"  rows="8" cols="40"> Enter your comments or suggestions here...</textarea><br>
        <button type="submit" id="submit">Submit</button>
          </form><br>
          <h3>
          <a href ="file:///C:/Users/lenovo/Documents/Terms%20and%20conditions.pdf" download="Terms and conditions">
            <button type="submit" id="submit">Terms and conditions</button>
          </a>
        </h3>
        <div class="boxed">
        <p><h4>Some popular links</h4></p>

<p><a class="solid" href="https://www.verizon.com/business/small-business-essentials/resources/10-ways-to-support-small-businesses/">https://www.verizon.com/business/small-business-essentials/resources/10-ways-to-support-small-businesses/</a></p>
<p><a class="double" href="https://www.springoath.org/">https://www.springoath.org/</a></p>
<p><a class="dotted" href="https://www.bigcommerce.com/blog/support-small-business/">https://www.bigcommerce.com/blog/support-small-business/</a></p>
<p><a class="dashed" href="https://blog.mass.gov/blog/consumer-advice/think-local-7-reasons-why-supporting-local-business-is-good-for-your-community/">https://blog.mass.gov/blog/consumer-advice/think-local-7-reasons-why-supporting-local-business-is-good-for-your-community/</a></p>

        </div>
        
    
      </body>
  </html>