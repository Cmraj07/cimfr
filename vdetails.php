<!DOCTYPE html>
<html>
<head>
<?php  include "header.php"; ?>
  <title>Visitor Pass</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    
    h1 {
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      color: orangered;
      text-decoration: underline;
    }
    
    form {
      width: 300px;
      margin: 0 auto;
    }
    
    label {
      display: block;
      margin-bottom: 5px;
    }
    
    input[type="text"],
    select,
    input[type="date"] {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }
    
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
  
</head>
<body style="background-color: white;">

<img class="img-deb" src="https://upload.wikimedia.org/wikipedia/en/d/d9/Central_Institute_of_Mining_and_Fuel_Research_Logo.png" alt="cimfr image" width="150" height="130" style="float: left;" >

<h1><u><center>Visitor Pass</u></h1> </center> 
  
    <form>
      <label for="VisitorName">Name:</label>
      <input type="text" name="VisitorName" id="VisitorName"><br><br>
  
      <label for="selector">Gender:</label>
      <select name="Gender" id="selector">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
      </select><br><br>
  
      <label for="VisitorPurpose">Purpose:</label>
      <input type="text" name="VisitorPurpose" id="VisitorPurpose"><br><br>
  
      <label for="VisitingTo">Visiting To:</label>
      <input type="text" name="VisitingTo" id="VisitingTo"><br><br>
  
      <label for="datepicker">Date:</label>
      <input type="date" name="dateicker" id="datepicker"><br><br>
  
      <input type="submit" value="Submit">
    </form>
  </center>
  
  <?php include "footer.php" ?>
</body>
</html>
