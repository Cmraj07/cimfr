<!DOCTYPE html>
<html>
<head>
<?php  include "header.php"; ?>
  <title>Registration Form</title>
  <style>
    /* CSS styles for the gate pass form */
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      padding: 20px;
      background-color: white;
    }

    h1 {
      text-align: center;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      color: orangered;
    }

    .img-deb {
      float: left;
    }

    form {
      max-width: 400px;
      margin: 20px auto;
    }

    label,
    input {
      display: block;
      margin-bottom: 10px;
      color: black;
    }

    input[type="submit"] {
      background-color: green;
      color: white;
      padding: 12px 22px;
      border: 10px;
    }

    #output {
      max-width: 400px;
      margin: 20px auto;
      padding: 10px;
      background-color: white;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    #output p {
      margin-bottom: 5px;
    }

    #output strong {
      font-weight: bold;
    }
  </style>
</head>

 
<body style="background-color: white;">
<img class="img-deb" src="https://upload.wikimedia.org/wikipedia/en/d/d9/Central_Institute_of_Mining_and_Fuel_Research_Logo.png" alt="cimfr image" width="150" height="130" >


  <h1><u>Registration Form</u></h1>
  


  <form id="gatepassForm" action="submit.php" method="post">
    <label for="VisitorName">Visitor Name:</label>
    <input type="text" name="VisitorName" id="visitorName">

    <label for="VisitorMobile">Mobile:</label>
    <input type="number" name="VisitorMobile" id="Mobile">

    <label for="VisitorAadhar">Aadhar:</label>
    <input type="number" name="VisitorAadhar" id="Aadhar">

    <label for="VisitorAddress">Address:</label>
    <input type="text" name="VisitorAddress" id="Address">

    <label for="VisitorStatus">Status:</label>
    <input type="enum" name="VisitorStatus" id="Status">

    <label for="VisitorCompany">Company:</label>
    <input type="text" name="VisitorCompany" id="Company">

    <label for="VisitorPurpose">Purpose of Visit:</label>
    <input type="text" name="VisitorPurpose" id="visitorPurpose">

    <input type="submit" value="Submit">
  </form>

  <div id="output"></div>

  <script>
    // Handle form submission
    document.getElementById("gatepassForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent form from submitting and refreshing the page

      // Retrieve form values
      var visitorName = document.getElementById("visitorName").value;
      var Mobile = document.getElementById("Mobile").value;
      var Aadhar = document.getElementById("Aadhar").value;
      var Address = document.getElementById("Address").value;
      var Status = document.getElementById("Status").value;
      var Company = document.getElementById("Company").value;
      var visitorPurpose = document.getElementById("visitorPurpose").value;

      // Display the output
      var outputElement = document.getElementById("output");
      outputElement.innerHTML = `
        <p><strong>Visitor Name:</strong> ${visitorName}</p>
        <p><strong>Mobile:</strong> ${Mobile}</p>
        <p><strong>Aadhar:</strong> ${Aadhar}</p>
        <p><strong>Address:</strong> ${Address}</p>
        <p><strong>Status:</strong> ${Status}</p>
        <p><strong>Company:</strong> ${Company}</p>
        <p><strong>Purpose of Visit:</strong> ${visitorPurpose}</p>
      `;
    });
  </script>
</body>
<?php include "footer.php"; ?>
</html>
