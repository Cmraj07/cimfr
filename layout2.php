<!DOCTYPE html>
<html>
<head>
    <title>Visitor Management Dashboard</title>
</head>

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
        
    </div>

    <div id="registrationForm" class="registrationForm">
    
        <a href="reg.php"><h2>Registration Form</h2></a>
        <!-- Form for visitor registration -->
        
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
</body>
</html>