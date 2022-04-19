<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Select Dropdown Example in PHP</title>
  <style>
      body{
          background-repeat:no-repeat;
          background-size:cover;
      }
    .container {
      max-width: 350px;
      margin: 10px auto;
      text-align: center;
    }
    input[type="submit"] {
      margin-bottom: 20px;
      width:100px;
      height:30px;
      background-color:#FF9933;

    }
    .select-block {
      width: 300px;
      top:20px;
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
</head>
<body background="images\backx.jpeg">
<a class="button" href="client1.php" style="background-color: rgb(255,237,143);"  rel="noreferrer noopener">Back</a>
  <div class="container mt-5">

    <form action="search.php" method="post" class="mb-3">
        <pre>
      <div class="select-block">
        <select name="State">
          <option value="" disabled selected>Select State</option>
          <option value="Uttar_Pradesh">Uttar Pradesh</option>
          <option value="Andhra_Pradesh">Andhra Pradesh</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Himachal_Pradesh">Himachal Pradesh</option>
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
<pre>
      <div class="select-block">
        <select name="Type">
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
      <input style="color:white;" type="submit" name="submit" vlaue="Choose options">
    </form>
  
  </div>
</body>
</html>