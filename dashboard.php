<!DOCTYPE html>
<html>
<head>
<?php include "header.php" ?>
    <title>Visitor Management Dashboard</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    #dashboard {
        display: flex;
        justify-content: space-around;
        margin-top: 50px;
    }

    .card {
        background-color: #f1f1f1;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        width: 200px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, background-color 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        background-color: #ddd;
    }

    .card h2 {
        margin-top: 0;
    }

    .tabs {
        margin-top: 50px;
        text-align: center;
    }

    .tab {
        background-color: #f1f1f1;
        border: none;
        color: #333;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        margin-right: 10px;
        transition: background-color 0.3s, color 0.3s;
    }

    .tab:hover {
        background-color: #ddd;
        color: #555;
    }

    .tabContent {
        display: none;
        margin-top: 20px;
    }

    /* Styling for the active tab */
    .tab.active {
        background-color: #333;
        color: #fff;
    }

    /* Styling for the active tab content */
    .tabContent.active {
        display: block;
    }
</style>

</head>
<body>
<img  class="img-deb" src="https://upload.wikimedia.org/wikipedia/en/d/d9/Central_Institute_of_Mining_and_Fuel_Research_Logo.png" alt="cimfr image" width="150" height="130" style="float: left;">
    <h1>Visitor Management Dashboard</h1>

    <div id="dashboard">
        <div class="card">
            <h2>Current Visitors</h2>
            <p id="currentVisitors">Loading...</p>
        </div>

        <div class="card">
            <h2>Total Registered Visitors</h2>
            <p id="registeredVisitors">Loading...</p>
        </div>

        <div class="card">
            <h2>Total Gate Passes Issued</h2>
            <p id="gatePassesIssued">Loading...</p>
        </div>
    </div>

    <div class="tabs">
        <button class="tab" onclick="openTab('generatePass')">Generate Gate Pass</button>
        <button class="tab" onclick="openTab('activePass')">View Active Pass</button>
        <button class="tab" onclick="openTab('reports')">Generate Reports</button>
    </div>

    <div id="generatePass" class="tabContent">
        <a href="reg.php"><h2>Generate Gate Pass</h2></a>
        <!-- Form for generating gate pass -->
    
    </div>

    <div id="activePass" class="tabContent">
        <h2>Active Passes</h2>
        <!-- Display active passes -->
        
    </div>

    <div id="reports" class="tabContent">
        <h2>Generate Reports</h2>
        <!-- Form for generating reports -->
        
    </div>

    <script>
        
        function openTab(tabName) {
            var i, tabContent;

            // Hide all tab content
            tabContent = document.getElementsByClassName("tabContent");
            for (i = 0; i < tabContent.length; i++) {
                tabContent[i].style.display = "none";
            }

            // Show the selected tab content
            document.getElementById(tabName).style.display = "block";
        }

        // Fetch and update dashboard data
        function updateDashboardData() {
            // Simulated data for demonstration
            var currentVisitors = 0;
            var registeredVisitors = 0;
            var gatePassesIssued = 0;

            // Update the dashboard with fetched data
            document.getElementById("currentVisitors").textContent = currentVisitors;
            document.getElementById("registeredVisitors").textContent = registeredVisitors;
            document.getElementById("gatePassesIssued").textContent = gatePassesIssued;
        }

        // Update dashboard data on page load
        updateDashboardData();
    </script>








<style>
        /* ... previous CSS styles ... */

        /* Additional CSS styles for search form and registration form */
        .searchForm {
            margin-top: 50px;
            text-align: center;
        }

        .searchForm input[type="text"] {
            padding: 10px;
            font-size: 16px;
        }

        .searchForm button {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .registrationForm {
            display: none;
            margin-top: 20px;
            text-align: center;
        }

        .registrationForm input[type="text"],
        .registrationForm input[type="email"] {
            padding: 10px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .registrationForm button {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
<body>
    <!-- ... previous HTML code ... -->

    <div class="searchForm">
        <input type="text" id="aadharInput" placeholder="Enter Aadhar Number" />
        <button onclick="searchVisitor()">Search</button>
    </div>

    <div id="gatePassForm" class="registrationForm">
        <h2>Gate Pass Details</h2>
        <!-- Form for feeding gate pass details -->
        <!-- ... -->
    </div>

    <div id="registrationForm" class="registrationForm">
    <a href="reg.php"><h2>Registration Form</h2></a>
        <!-- Form for visitor registration -->
        <!-- ... -->
    </div>

    <script>
        // Function to search visitor by Aadhar number
        function searchVisitor() {
            var aadharNumber = document.getElementById("aadharInput").value;

            // Simulated check if visitor is registered
            var isRegistered = checkRegistration(aadharNumber);

            if (isRegistered) {
                document.getElementById("gatePassForm").style.display = "block";
                document.getElementById("registrationForm").style.display = "none";
            } else {
                document.getElementById("gatePassForm").style.display = "none";
                document.getElementById("registrationForm").style.display = "block";
            }
        }

        // Simulated check if visitor is registered
        function checkRegistration(aadharNumber) {
            // Simulated registered Aadhar numbers
            var registeredAadharNumbers = ["123456789012", "987654321098", "456789012345"];

            // Check if the given Aadhar number is registered
            return registeredAadharNumbers.includes(aadharNumber);
        }
    </script>



    
     <?php  include "footer.php" ?>
</body>
</html>
