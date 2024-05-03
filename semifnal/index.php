<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation System</title>
    <style>
         header {
            background-color: #3C0008; /* Dark maroon background */
            color: white; /* White text */
            padding: 15px; /* Padding for spacing */
            font-family: "Century Gothic", serif; /* Font style */
            font-size: 24px; /* Font size for the header */
            display: flex; /* Use Flexbox for alignment */
            justify-content: space-between; /* Evenly distribute content */
            align-items: center; /* Align items vertically */
        }

        /* Styling for the navigation bar inside the header */
        .nav {
            text-align: right; /* Align navigation to the right */
            padding: 10px; /* Padding for spacing */
            position: absolute; /* Position to the right side */
            top: 20px; /* Align to the top */
            right: 0; /* Align to the right */
        }

        .nav a {
            color: white; /* White text for links */
            text-decoration: none; /* No underline */
            padding: 0 10px; /* Horizontal padding */
        }

        .nav a:hover {
            text-decoration: underline; /* Underline on hover */
        }
        .logo {
            height: 60px; /* Increase height for a larger logo */
            width: auto; /* Maintain aspect ratio */
            margin-right: 20px; /* Add some space to the right of the logo */
        }

        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://i.pinimg.com/originals/83/9e/fe/839efe28d4e47810182789ead59a1ceb.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333;
        }

        .welcome-container {
            height: calc(100vh - 100px); /* Full height minus header */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            width: 100%;
        }

        .welcome-message {
            font-size: 48px;
            font-weight: bold;
            text-transform: uppercase;
            color: #5C4033;
            font-family: 'Bodoni MT Black', serif;
            text-shadow: 2px 2px white;
        }

        .sub-message {
            font-size: 17px;
            font-style: italic;
            color: black;
            font-family: 'Book Antiqua';
            font-weight: bold;
        }

        .reserve-button {
            padding: 10px 40px;
            background-color: #3C0008;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            text-transform: uppercase;
            font-weight: bold;
        }
        /* Add a gap between the button and the sub-message */
        .button-gap {
        height: 20px; /* Adjust the gap size to your preference */
}

        .reserve-button:hover {
            background-color: #006400;
            font-weight: bold;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(245, 245, 220, 0.7);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            display: none;
        }

        .back-button {
            position: absolute;
            top: 90px;
            left: 10px;
            background-color: transparent;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: white;
            font-size: 50px;
        }
        .back-button:hover {
            color:orange;
            font-weight: bold;
            font-size:55px;
        }
        .spacer {
    width: 90px; /* Adjust the width to create a gap */
    display: inline-block; /* Keep inline layout */
}

        .admin-button { 
            position: absolute;
            top: 10px;
            right: 10px;  
            background-color: transparent;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: white;
            font-family: Century Gothic;
        }
        .admin-button:hover {
            color: #FFA500;
            font-weight: bold;
            font-size:26px;
        }


        .admin-gap {
    margin-left: 20px; /* Adjust margin to create a gap between elements */
}

.modallogin-content {
    background: #f5f5dc; /* Light background color */
    padding: 20px; /* Padding inside the modal */
    border-radius: 8px; /* Rounded corners */
    text-align: left; /* Align text to the left */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Shadow for depth */
    max-width: 350px; /* Maximum width for the modal */
    position: relative; /* Positioning for absolute children */
}

.modallogin-close {
    cursor: pointer; /* Pointer cursor on hover */
    font-size: 24px; /* Font size */
    background: transparent; /* Transparent background */
    border: none; /* No border */
    color: black; /* Font color */
    position: absolute; /* Position relative to the parent */
    top: 10px; /* Distance from the top */
    right: 10px; /* Distance from the right */
}


h2 {
            font-size: 25px; /* Font size for heading */
            text-align: center;
            color: maroon;
            font-family: "Bodoni MT Black", serif;
            padding: 10px;
           
            border-radius: 8px;
            margin: 0; /* No additional margins */
        }

        input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

 /* Custom message container for pop-up messages */
 .message-container {
            display: none; /* Initially hidden */
            position: fixed; /* Fixed positioning */
            top: 50%; /* Center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -50%); /* Center the container */
            background-color: #f5f5dc; /* Background color */
            padding: 20px; /* Padding */
            border-radius: 8px; /* Rounded corners */
            text-align: center; /* Center text */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Shadow for depth */
            z-index: 100; /* Ensure it's on top */
        }

        /* OK button styling inside the custom message */
        .ok-button {
            padding: 10px 20px; /* Padding */
            background-color: #3C0008; /* Background color */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            color: white; /* Text color */
            text-transform: uppercase; /* Uppercase text */
            cursor: pointer; /* Cursor for hover effect */
            transition: background-color 0.3s; /* Smooth transition */
        }

        .ok-button:hover {
            background-color: #006400; /* Change color on hover */
        }

        /* Control the width of the password input field */
        #admin-username,
        #admin-password {
            width: 80%;
            max-width: 200px;
            min-width: 100px;
        }
         /* Parent container with flexbox, aligning content to the right */
         .formlogin-group {
            display: flex; /* Enable flexbox */
            justify-content: flex-end; /* Align content to the right */
            align-items: center; /* Align content vertically */
           
        }

         /* Styling for the login button */
         .reserve-button1 {
            padding: 10px 10px; /* Padding for a larger button */
            background-color: #3C0008; /* Dark background */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            color: white; /* White text */
            font-size: 5px; /* Font size */
            text-transform: uppercase; /* Uppercase text */
            cursor: pointer; /* Pointer cursor */
            transition: background-color 0.3s; /* Smooth transition on hover */
            text-align: center; /* Center text within the button */
            width: 100%; /* Half of the parent container */
            
        }

        .reserve-button1:hover {
            background-color: #006400;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        label {
            display: inline-block;
            width: 120px;
            font-weight: bold;
        }

        input[type="text"], input[type="tel"], select, input[type="date"] {
            width: calc(100% - 130px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"], input[type="reset"] {
            padding: 10px 100px;
            background-color: #3C0008;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #006400;
            font-weight: bold;
        }

        input[type="reset"]:hover {
            background-color: #8B0000;
            font-weight: bold;
        }

        .reset-btn {
            position: absolute;
            top: 0;
            right: 0;
        }
        

        .reservation-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            z-index: 100;
        }

        .modal-content {
            background: #f5f5dc;
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 500px;
            text-align: left;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .modal-header {
            background: #3C0008;
            text-align: left;
            color: white;
            font-family: "Century Gothic", serif;
            font-size: 24px;
            padding: 10px; /* Adding padding to keep it consistent */
            border-radius: 8px;
            font-weight: bold;

        }
        .modal-body {
            padding: 10px;
            font-family: Century Gothic;
            font-size: 15px;
        }

        .modal-footer {
            text-align: right;
            margin-top: 10px;
        }

        .modal-close {
            cursor: pointer;
            font-size: 40px;
            background: transparent;
            border: none;
            color: white;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        h1 {
            text-align: center;
            font-family: "Bodoni MT Black", serif;
            color:black;

        }
    </style>
</head>
<header>
<img class="logo" src="Wedding Monogram Line Art Wreath Logo.png" alt="Glams Reservation Hotel">
        <div class="nav"> <!-- Navigation section -->
        <button class="admin-button" onclick="openAdminModal()">Admin</button>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <div class="spacer"></div> <!-- Spacer div to create a gap -->
            
</header>
<body>
    

    <div class="reservation-modal" id="adminLoginModal">
        <div class="modallogin-content">
            <button class="modallogin-close" onclick="closeAdminModal()">⤬</button>
            <h2>Admin Login</h2>
            <div class="modallogin-body"> 
            <div class="button-gap"></div>
                <form id="adminLoginForm" onsubmit="handleAdminLogin(event)">
                    <div class="formlogin-group">
                        <label for="admin-username">Username:</label>
                        <input type="text" id="admin-username" required>
                    </div>
                    <div class="button-gap"></div>
                    <div class="formlogin-group">
                        <label for="admin-password">Password:</label>
                        <input type="password" id="admin-password" required>
                    </div>
                    <div class="button-gap"></div>
                    <div class="formlogin-group">
                        <!-- Login button with applied styles -->
                    <input type="submit" value="Login" class="reserve-button1"> <!-- Submit button styled for login -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="welcome-container">
        <div class="welcome-message">WELCOME TO GLAMS HOTEL</div>

        <div class="button-gap"></div>

        <div class="sub-message">
            The goal isn't just to keep your guests coming back,<br>
            but to turn them into fans who recommend your hotel to others.<br>
            Being kind and polite is key to making sure guests leave happy.
        </div>

        <div class="button-gap"></div>

        <button class="reserve-button" onclick="toggleReservationForm()">CLICK TO RESERVE</button>
    </div>

    <style>
    /* Center the placeholder text within the select field */
    select {
        text-align: left;
        text-align-last: center; /* Default for other browsers, allowing left alignment for selected items */
        margin: auto; /* Centers the field itself */
    }
</style>

    <div class="container" id="reservationForm">
    <button class="back-button" onclick="goBack()">🡐</button>

        <h1>GLAMS HOTEL RESERVATION SYSTEM</h1>

        <form action="submit_record.php" method="post" id="reservationFormContent">

            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" required>
            </div>

            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" required>
            </div>

            <div class="form-group">
                <label for="bday">Birthday:</label>
                <input type="date" id="bday" name="bday" required>
            </div>

            <div class="form-group">
                <label for="contact_no">Contact No:</label>
                <input type="tel" id="contact_no" name="contact_no" pattern="[0-9]{11}" required>
            </div>

            <div class="form-group">
    <label for="region">Region:</label>
    <select id="region" name="region">
    <option value="" disabled selected>Select Region</option>
        <option value="Region 1">Region 1</option>
        
    </select>
</div>

<div class="form-group">
    <label for="province">Province:</label>
    <select id="province" name="province">
    <option value="" disabled selected>Select Province</option>
        <option value="Ilocos Norte">Ilocos Norte</option>
        <option value="Ilocos Sur">Ilocos Sur</option>
        <option value="La Union">La Union</option>
        <option value="Pangasinan">Pangasinan</option>
    </select>
</div>


<div class="form-group">
    <label for="city_municipality">City/Municipality:</label>
    <select id="city_municipality" name="city_municipality">
    <option value="" disabled selected>Select City/Municipality</option>
        <option value="Laoag City">Laoag City</option>
        <option value="Bacarra">Bacarra</option>
        <option value="Bangui">Bangui</option>
        <option value="Dingras">Dingras</option>
        <option value="Paoay">Paoay</option>
        <!-- Options will be dynamically populated using JavaScript -->
    </select>
</div>

<div class="form-group">
    <label for="barangay">Barangay:</label>
    <select id="barangay" name="barangay">
        <option value="" disabled selected>Select Barangay</option>
        <option value="Barangay 1 (Pob.)">Barangay 1 (Pob.)</option>
        <option value="Barangay 2 (Pob.)">Barangay 2 (Pob.)</option>
        <option value="Barangay 3 (Pob.)">Barangay 3 (Pob.)</option>
        <option value="Barangay 4 (Pob.)">Barangay 4 (Pob.)</option>
        <option value="Bungon">Bungon</option>
        <option value="Caunayan">Caunayan</option>
        <option value="Imelda">Imelda</option>
        <option value="Acosta">Acosta</option>
        <option value="Baoa East">Baoa East</option>
        <option value="Banban">Banban</option>
       

        <!-- Options will be dynamically populated using JavaScript -->
    </select>
</div>


<div class="form-group">
    <label for="postal_code">Postal Code:</label>
    <select id="postal_code" name="postal_code">
    <option value="" disabled selected>Select Postal Code</option>
        <option value="2900">2900</option>
        <option value="2906">2906</option>
        <option value="2916">2916</option>
        <option value="2920">2920</option>
        <!-- Options will be dynamically populated using JavaScript -->
    </select>
</div>

            <div class="form-group">
                <label for="type">Reservation Type:</label>
                <select id="type" name="type" required>
                <option value="" disabled selected>please select reservation type</option>
                    <option value="Reserved">Reserved</option>
                    <option value="Paid Reservation">Paid Reservation</option>
                    <option value="On the Spot">On the Spot</option>

                </select>

            </div>
            <div class="form-group">
                <label for="available_rooms">Available Rooms:</label>
                <select id="available_rooms" name="available_rooms" required>
                <option value="" disabled selected>please select available rooms</option>
                    <option value="Z001">Z001 1st floor</option>
                    <option value="Z002">Z002 2nd floor</option>
                    <option value="Z003">Z003 3rd floor</option>
                    <option value="Z004">Z004 3rd floor</option>
                    <option value="Z005">Z005 3rd floor</option>

                </select>

            </div>

            <div class="form-group">
                <label for="room_type">Room Type:</label>
                <select id="room_type" name="room_type" required>
                <option value="" disabled selected>please select room type</option>
                    <option value="Double Room">Double Room</option>
                    <option value="Single Room">Single Room</option>
                    <option value="Deluxe Room">Deluxe Room</option>
                    <option value="Quad Room">Quad Room</option>

                </select>
            </div>

            <div class="form-group">
                <label for="check_in">Check-In Date:</label>
                <input type="date" id="check_in" name="check_in" required>
            </div>

            <div class="form-group">
                <label for="check_out">Check-Out Date:</label>
                <input type="date" id="check_out" name="check_out" required>
            </div>

            

            <div class="form-group">
                <label for="price">Room Price:</label>
                <input type="text" id="price" required readonly>
            </div>

            <div class="form-group">
                <label for="total_payment">Total Payment:</label>
                <input type="text" id="total_payment" required>
            </div>

            <div class="form-group">
                <label for="payment_method">Payment Method:</label>
                <select id="payment_method" name="payment_method" required>
                <option value="" disabled selected>please select payment method</option>
                    <option value="Cash">Cash</option>
                    <option value="Gcash">Gcash</option>
                    <option value="PayPal">PayPal</option>
                    <option value="Credit Card">Credit Card</option>

                </select>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset" class="reset-btn">
            </div>
        </form>
    </div>
    <div class="reservation-modal" id="reservationModal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal()">⤬</button>
            <div class="modal-header">Reservation Details</div>
            <div class="modal-body" id="modalBody"></div>
            <div class="modal-footer">
                <button class="reserve-button" onclick="confirmPayment()">Confirm Payment</button>
            </div>
        </div>
    </div>

    <div class="message-container" id="messageContainer">
        <p id="messageText">Default message</p> <!-- Default message text -->
        <button class="ok-button" onclick="closeMessage()">OK</button> <!-- OK button to close the message -->
    </div>

    

    <script>
    function toggleReservationForm() {
        var welcomeContainer = document.querySelector(".welcome-container");
        var reservationForm = document.getElementById("reservationForm");

        welcomeContainer.style.display = "none";
        reservationForm.style.display = "block";
    }

    function goBack() {
        var welcomeContainer = document.querySelector(".welcome-container");
        var reservationForm = document.getElementById("reservationForm");

        welcomeContainer.style.display = "flex";
        reservationForm.style.display = "none";
    }

    function closeModal() {
        document.getElementById("reservationModal").style.display = "none";
    }

    function openModal() {
        document.getElementById("reservationModal").style.display = "flex";
    }

    document.getElementById("reservationFormContent").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form submission to display modal with reservation details

        var modalBody = document.getElementById("modalBody");
        var form = event.target;

        var reservationDetails = `
 Name:                     ${form.name.value}
 Address:                  ${form.address.value}
 Contact No:               ${form.contact_no.value}
 Reservation Type:         ${form.type.value}
 Available Rooms:          ${form.available_rooms.value}
 Check-In Date:            ${form.check_in.value}
 Check-Out Date:           ${form.check_out.value}
 Room Type:                ${form.room_type.value}
 Payment Method:           ${form.payment_method.value}
 ------------------------------------------------------
 <strong style="font-size: 20px;">Total Payment:            ${form.total_payment.value.toLocaleString()}</strong>`;

    modalBody.innerHTML = `<pre>${reservationDetails}</pre>`; // Preserve formatting and bold the total payment
    openModal(); // Open the modal to show the details for confirmation

    
});

    function getCurrentDate() {
        var now = new Date();
        var year = now.getFullYear();
        var month = (now.getMonth() + 1).toString().padStart(2, '0');
        var day = now.getDate().toString().padStart(2, '0');

        return year + '-' + month + '-' + day;
    }

    document.getElementById("check_in").setAttribute("min", getCurrentDate());
    document.getElementById("check_in").value = getCurrentDate();
    document.getElementById("check_out").setAttribute("min", getCurrentDate());

    function calculateTotalPayment() {
        var checkInDate = new Date(document.getElementById("check_in").value);
        var checkOutDate = new Date(document.getElementById("check_out").value);

        if (checkOutDate > checkInDate) {
            var diffTime = Math.abs(checkOutDate - checkInDate);
            var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

            var roomType = document.getElementById("room_type").value;
            var priceMapping = {
                "Single Room": 3500,
                "Double Room": 7000,
                "Deluxe Room": 15000,
                "Quad Room": 12500
            };

            var pricePerDay = priceMapping[roomType];
            var totalPayment = pricePerDay * diffDays;

            document.getElementById("total_payment").value = totalPayment.toLocaleString();
        }
    }

    // Automatically update price based on room type
    document.getElementById("room_type").addEventListener("change", function() {
        var roomType = this.value;
        var price = document.getElementById("price");

        var priceMapping = {
            "Single Room": "3,500",
            "Double Room": "7,000",
            "Deluxe Room": "15,000",
            "Quad Room": "12,500"
        };

        price.value = priceMapping[roomType].toLocaleString();
        calculateTotalPayment();
    });

    document.getElementById("check_out").addEventListener("change", calculateTotalPayment);

    document.getElementById("reservationFormContent").addEventListener("submit", function (event) {
        var contactNo = document.getElementById("contact_no").value;
        var regex = /^[0-9]{11}$/;

        if (!regex.test(contactNo)) {
            alert("Invalid contact number. It must contain 11 digits.");
            event.preventDefault();
        }
        
        var checkInDate = new Date(document.getElementById("check_in").value);
        var checkOutDate = new Date(document.getElementById("check_out").value);

        if (checkOutDate <= checkInDate) {
            alert("Check-Out date must be later than Check-In date.");
            event.preventDefault();
        }
    });

     // Function to open the admin login modal
     function openAdminModal() {
            document.getElementById("adminLoginModal").style.display = "flex";
        }

        // Function to close the admin login modal
        function closeAdminModal() {
            document.getElementById("adminLoginModal").style.display = "none";
        }

        // Handle the admin login form submission
        function handleAdminLogin(event) {
            event.preventDefault(); // Prevent default form submission
            var username = document.getElementById("admin-username").value;
            var password = document.getElementById("admin-password").value;

            console.log("Admin login attempted with:", { username, password });

            // Add additional logic for admin authentication here, if needed

            closeAdminModal(); // Close the modal after login attempt
        }
        function toggleReservationForm() {
    var welcomeContainer = document.querySelector(".welcome-container");
    var reservationForm = document.getElementById("reservationForm");
    var adminLoginModal = document.getElementById("adminLoginModal");

    // Hide admin login modal
    adminLoginModal.style.display = "none";

    // Show reservation form
    welcomeContainer.style.display = "none";
    reservationForm.style.display = "block";
}
function closeLoginModal() {
    document.querySelector('.modallogin-content').style.display = 'none'; /* Hide modal */
}

function closeMessage() {
    document.getElementById('messageContainer').style.display = 'none'; /* Hide the message container */
}
function clearLoginFields() {
    document.getElementById("admin-username").value = ""; // Clear username field
    document.getElementById("admin-password").value = ""; // Clear password field
}
function handleAdminLogin(event) {
    event.preventDefault(); /* Prevent default form submission */

    const username = document.getElementById('admin-username').value; /* Capture username */
    const password = document.getElementById('admin-password').value; /* Capture password */

    if (username === "asd" && password === "asd") { /* Example valid login */
        document.getElementById('messageText').innerText = "Login successful!"; /* Set success message */
        document.getElementById('messageContainer').style.display = 'block'; /* Show message container */
        closeLoginModal(); /* Hide the login modal if successful */
        clearLoginFields(); // Clear the fields after successful login
    } else {
        document.getElementById('messageText').innerText = "Invalid credentials. Please try again."; /* Error message */
        document.getElementById('messageContainer').style.display = 'block'; /* Show message container */
        // Do not close the login modal, allowing the user to try again
        // Keep the login modal open, allowing the user to correct the input
        clearLoginFields(); // Clear the fields to force re-entry
    }
   
  


}
    </script>
</body>
</html>
