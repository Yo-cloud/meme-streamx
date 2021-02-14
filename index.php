<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $caption = $_POST['caption'];
    $url = $_POST['url'];
   
    $sql = "INSERT INTO `trip`.`trip` (`name`, `caption`, `url`, `dtm`) VALUES ('$name', '$caption', '$url', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

   
      $sql = "SELECT name  , caption , url FROM trip";
      $result = mysqli_query($con ,$result);
      
      if ($result->num_column > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo " " . $row["name"]. " " . $row["caption"]. " " . $row["url"]. "<br>";
        }
      } else {
        echo "0 results";
      }
      $sql = "SELECT * FROM trip WHERE id<=100 ORDER BY time DESC"; 
      $result = $mysqli->query($sql); 
      $mysqli->close();  
    
    }
        
 
    // Close the database connection
      ?>
      







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styleo.css">
    
    <title>memepage</title>
    <style>
    div{
        center align;
  
    }
    body{
        background-image: url("https://images.unsplash.com/photo-1567427013953-88102117053a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80");
  background-repeat:no-repeat;
    }
    .container{
    max-width: 80%; 
    padding: 34px; 
    margin: auto;
}

.container h1 ,p{
    text-align: center;
    font-family: 'Sriracha', cursive;
    font-size: 40px;
    background-color: pink;
}
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    
font-family: 'Roboto', sans-serif;
}
input, textarea{
    
    border: 2px solid black;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 80%;
    margin: 11px 0px;
    padding: 7px;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.btn{
    color: white;
    background: purple;
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
}

.bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.6;
}
.submitMsg{ 
    color: green;
}
label{
    left align;
    padding:2px;
    margin: 0px;
    
      color: #4d0066;
			font-size: 20px;
		
}
input[type=text]{
			  width: 60%;
  			padding: 7px;
  			border-bottom: 1px solid red;
  			border-radius: 7px;
  			box-sizing: border-box;
  			margin-top: 6px;
  			margin-bottom: 10px;
  			border-color: grey;
  			resize: vertical;
  		}	
  		input[type=submit] {
        background-color: #5c0099;
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 20px;
    } 
    input[type=submit]:hover {
        background-color: #c61aff;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
		input[type=URL]{
			 width: 40%;
  			padding: 7px;
  			border-bottom: 1px solid #f5f5f5;
  			border-radius: 7px;
  			box-sizing: border-box;
  			margin-top: 6px;
  			margin-bottom: 16px;
  			border-color: grey;
  			resize: vertical;			
		}
    img{
      width: 200px;
      height: 150px;
      text-align: center;
    }
    .row{
      margin-left: 150px;
    }
    .row > div{
      border: 2px dashed #8600b3;
      border-radius: 5px;
      margin-left: 5px;
      margin-top: 5px;
      font-family: Bradley Hand, cursive;
    }



<?php
// define variables and set to empty values
$nameErr = $captionErr = $websiteErr = "";
$name = $caption = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["url"])) {
    $url = "";
  } else {
    $url = test_input($_POST["url"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
      $urlErr = "Invalid URL";
    }
  }
  if (empty($_POST["caption"])) {
    $caption = "";
  } else {
    $caption = test_input($_POST["caption"]);
  }
}
?>





    </style>
</head>
<link rel="stylesheet" href="xmeme/css.php">
<body>
    <div class="container">   
    <centre><h1>MEME JUNCTION</h1></centre>
    <p>ready for a meme war?  <p>
    
    <form action="back.php" method="post">
    <label for="name">Meme Owner</label>
            <input type="text" name="name" id="name" placeholder="Enter your full name">
            <label for="caption"><left>Caption </left> </label>
            <input type="text" name="Caption" id="Caption" placeholder="Be creative with the caption">
            <label for="url">Meme URL</label>
            <input type="text" name="URL" id="URl" placeholder="Enter URL of your meme here">

            <button class="btn">Submit Meme</button> 
        </form>
        <div class="container">
      <div class="row">

         </div>
  </div>
    <script src="index.js"></script>
    <?php 

if($insert == true){
echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us in the meme war. </p>";
}

    ?>
</body>
</html>