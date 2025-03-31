<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .form-input:focus {
            border-color: #4F46E5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }

        .success-checkmark {
            width: 80px;
            height: 80px;
            margin: 0 auto;
            position: relative;
        }

        .success-checkmark .check-icon {
            width: 80px;
            height: 80px;
            position: relative;
            border-radius: 50%;
            box-sizing: content-box;
            border: 4px solid #4CAF50;
        }

        .success-checkmark .check-icon::before {
            top: 3px;
            left: -2px;
            width: 30px;
            transform-origin: 100% 50%;
            border-radius: 100px 0 0 100px;
        }

        .success-checkmark .check-icon::after {
            top: 0;
            left: 30px;
            width: 60px;
            transform-origin: 0 50%;
            border-radius: 0 100px 100px 0;
            animation: rotate-circle 4.25s ease-in;
        }

        .success-checkmark .check-icon::before,
        .success-checkmark .check-icon::after {
            content: '';
            height: 100px;
            position: absolute;
            background: #FFFFFF;
            transform: rotate(-45deg);
        }

        .success-checkmark .check-icon .icon-line {
            height: 5px;
            background-color: #4CAF50;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
        }

        .success-checkmark .check-icon .icon-line.line-tip {
            top: 46px;
            left: 14px;
            width: 25px;
            transform: rotate(45deg);
            animation: icon-line-tip 0.75s;
        }

        .success-checkmark .check-icon .icon-line.line-long {
            top: 38px;
            right: 8px;
            width: 47px;
            transform: rotate(-45deg);
            animation: icon-line-long 0.75s;
        }

        .success-checkmark .check-icon .icon-circle {
            top: -4px;
            left: -4px;
            z-index: 10;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            position: absolute;
            box-sizing: content-box;
            border: 4px solid rgba(76, 175, 80, 0.5);
        }

        .success-checkmark .check-icon .icon-fix {
            top: 8px;
            width: 5px;
            left: 26px;
            z-index: 1;
            height: 85px;
            position: absolute;
            transform: rotate(-45deg);
            background-color: #FFFFFF;
        }

        @keyframes rotate-circle {
            0% {
                transform: rotate(-45deg);
            }

            5% {
                transform: rotate(-45deg);
            }

            12% {
                transform: rotate(-405deg);
            }

            100% {
                transform: rotate(-405deg);
            }
        }

        @keyframes icon-line-tip {
            0% {
                width: 0;
                left: 1px;
                top: 19px;
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px;
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px;
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px;
            }

            100% {
                width: 25px;
                left: 14px;
                top: 46px;
            }
        }

        @keyframes icon-line-long {
            0% {
                width: 0;
                right: 46px;
                top: 54px;
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px;
            }

            84% {
                width: 55px;
                right: 0px;
                top: 35px;
            }

            100% {
                width: 47px;
                right: 8px;
                top: 38px;
            }
        }
    </style>
</head>

<body class="bg-gradient-to-br from-indigo-50 to-purple-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white rounded-xl shadow-xl overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 p-6 text-white">
            <div class="flex items-center justify-center">
                <i class="fas fa-calendar-check text-3xl mr-3"></i>
                <h1 class="text-2xl font-bold">Event Registration</h1>
            </div>
            <p class="text-center mt-2 text-indigo-100">Complete the form below to secure your spot</p>
        </div>

        <!-- Form Container -->
        <div class="p-6" id="formContainer">
            <form id="eventForm" action="submit_form.php" method="POST" class="space-y-5">
                <!-- Hidden field to store the event name -->
                <input type="hidden" id="eventName" name="eventName">

                <!-- Event Type Dropdown -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-700 border-b pb-2">Select Event Type</h3>
                    <div>
                        <label for="eventType" class="block text-sm font-medium text-gray-700 mb-1">Select Your Event
                            <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-calendar-day text-gray-400"></i>
                            </div>
                            <select id="eventType" name="eventType"
                                class="form-input w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none"
                                required>
                                <option value="" disabled selected>Select your event</option>
                                <option value="Anniversary Catering">Anniversary Catering</option>
                                <option value="Wedding Events">Wedding Events</option>
                                <option value="Birthday Party">Birthday Party</option>
                                <option value="Engagement">Engagement</option>
                                <option value="Thread Ceremony Catering">Thread Ceremony Catering</option>
                                <option value="House Warming">House Warming</option>
                            </select>
                        </div>
                        <p class="hidden text-red-500 text-xs mt-1" id="eventTypeError">Please select an event type</p>
                    </div>
                </div>

                <!-- URL Parameters Section -->
                <div class="space-y-4" id="urlParamsSection">
                    <h3 class="text-lg font-semibold text-gray-700 border-b pb-2">Event Information</h3>

                    <!-- Read-only field for the selected event -->
                    <div>
                        <label for="selectedEvent" class="block text-sm font-medium text-gray-700 mb-1">Selected
                            Event</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-calendar-alt text-gray-400"></i>
                            </div>
                            <input type="text" id="selectedEvent" name="selectedEvent"
                                class="form-input w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg bg-gray-100"
                                readonly>
                        </div>
                    </div>

                    <!-- Dynamic URL parameters will be added here -->
                    <div id="dynamicParams"></div>
                </div>

                <!-- Personal Information Section -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-700 border-b pb-2">Personal Information</h3>

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name <span
                                class="text-red-500">*</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <input type="text" id="name" name="name"
                                class="form-input w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none"
                                placeholder="John Doe" required>
                        </div>
                        <p class="hidden text-red-500 text-xs mt-1" id="nameError">Please enter your name</p>
                    </div>

                    <div>
                        <label for="mobile" class="block text-sm font-medium text-gray-700 mb-1">Mobile No <span
                                class="text-red-500">*</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-phone text-gray-400"></i>
                            </div>
                            <input type="tel" id="mobile" name="mobile"
                                class="form-input w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none"
                                placeholder="+1 (123) 456-7890" required>
                        </div>
                        <p class="hidden text-red-500 text-xs mt-1" id="mobileError">Please enter a valid mobile number
                        </p>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span
                                class="text-red-500">*</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="email" name="email"
                                class="form-input w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none"
                                placeholder="john@example.com" required>
                        </div>
                        <p class="hidden text-red-500 text-xs mt-1" id="emailError">Please enter a valid email address
                        </p>
                    </div>
                </div>

                <!-- Additional Information Section -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-700 border-b pb-2">Additional Information</h3>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <div class="relative">
                            <div class="absolute top-3 left-3 flex items-start pointer-events-none">
                                <i class="fas fa-comment text-gray-400"></i>
                            </div>
                            <textarea id="message" name="message" rows="4"
                                class="form-input w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none"
                                placeholder="Any special requests or comments?"></textarea>
                        </div>
                    </div>
                </div>

                <div class="flex items-center space-x-2 mt-4">
                    <input type="checkbox" id="terms" name="terms"
                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" required>
                    <label for="terms" class="text-sm text-gray-700">I agree to the <a href="#"
                            class="text-indigo-600 hover:text-indigo-800">terms and conditions</a></label>
                </div>
                <p class="hidden text-red-500 text-xs mt-1" id="termsError">You must agree to the terms and conditions
                </p>

                <div class="flex space-x-3 pt-4">
                    <button type="button" onclick="window.history.back()"
                        class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors flex-1">
                        <i class="fas fa-arrow-left mr-2"></i> Back
                    </button>
                    <button type="submit" id="submitBtn"
                        class="px-4 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-lg hover:from-indigo-700 hover:to-purple-700 transition-colors flex-1">
                        <i class="fas fa-paper-plane mr-2"></i> Submit
                    </button>
                </div>
            </form>
        </div>

        <!-- Success Message (Hidden by Default) -->
        <div id="successMessage" class="p-6 text-center hidden">
            <div class="success-checkmark">
                <div class="check-icon">
                    <span class="icon-line line-tip"></span>
                    <span class="icon-line line-long"></span>
                    <div class="icon-circle"></div>
                    <div class="icon-fix"></div>
                </div>
            </div>
            <h2 class="text-2xl font-bold text-gray-800 mt-4">Registration Successful!</h2>
            <p class="text-gray-600 mt-2">Thank you for registering for our event. We've sent a confirmation email with
                all the details.</p>
            <div class="mt-6">
                <button onclick="window.location.href='index.html'"
                    class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                    <i class="fas fa-home mr-2"></i> Return Home
                </button>
            </div>
        </div>
    </div>

    <script>
        // Function to get all query parameters from the URL
        function getAllQueryParams() {
            const urlParams = new URLSearchParams(window.location.search);
            const params = {};

            for (const [key, value] of urlParams.entries()) {
                params[key] = value;
            }

            return params;
        }

        // Function to create a readonly field for a parameter
        function createParamField(key, value) {
            // Skip the 'type' parameter as it's already handled separately
            if (key === 'type') return;

            const fieldId = `param_${key}`;

            // Create the field container
            const fieldDiv = document.createElement('div');

            // Create the label
            const label = document.createElement('label');
            label.setAttribute('for', fieldId);
            label.className = 'block text-sm font-medium text-gray-700 mb-1';
            label.textContent = key.charAt(0).toUpperCase() + key.slice(1).replace(/([A-Z])/g, ' $1'); // Convert camelCase to Title Case

            // Create the input wrapper for the icon
            const inputWrapper = document.createElement('div');
            inputWrapper.className = 'relative';

            // Create the icon container
            const iconDiv = document.createElement('div');
            iconDiv.className = 'absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none';

            // Create the icon
            const icon = document.createElement('i');
            icon.className = 'fas fa-tag text-gray-400';

            // Create the input field
            const input = document.createElement('input');
            input.type = 'text';
            input.id = fieldId;
            input.name = key;
            input.value = value;
            input.className = 'form-input w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg bg-gray-100';
            input.setAttribute('readonly', true);

            // Assemble the elements
            iconDiv.appendChild(icon);
            inputWrapper.appendChild(iconDiv);
            inputWrapper.appendChild(input);

            fieldDiv.appendChild(label);
            fieldDiv.appendChild(inputWrapper);

            return fieldDiv;
        }

        // When the document is loaded
        document.addEventListener('DOMContentLoaded', function () {
            // Get all URL parameters
            const params = getAllQueryParams();

            // Set the event name if available
            if (params.type) {
                document.getElementById('eventName').value = params.type; // Hidden field
                document.getElementById('selectedEvent').value = params.type; // Read-only field
            }

            // Create fields for all other parameters
            const dynamicParamsContainer = document.getElementById('dynamicParams');

            for (const key in params) {
                const fieldDiv = createParamField(key, params[key]);
                if (fieldDiv) {
                    dynamicParamsContainer.appendChild(fieldDiv);
                }
            }

            // If no parameters were found, hide the URL parameters section
            if (Object.keys(params).length === 0) {
                document.getElementById('urlParamsSection').style.display = 'none';
            }
        });

        // Form validation
        document.getElementById('eventForm').addEventListener('submit', function (e) {
            e.preventDefault();
            let isValid = true;

            // Validate name
            const name = document.getElementById('name');
            if (!name.value.trim()) {
                document.getElementById('nameError').classList.remove('hidden');
                name.classList.add('border-red-500');
                isValid = false;
            } else {
                document.getElementById('nameError').classList.add('hidden');
                name.classList.remove('border-red-500');
            }

            // Validate mobile (simple validation)
            const mobile = document.getElementById('mobile');
            if (!mobile.value.trim() || mobile.value.length < 10) {
                document.getElementById('mobileError').classList.remove('hidden');
                mobile.classList.add('border-red-500');
                isValid = false;
            } else {
                document.getElementById('mobileError').classList.add('hidden');
                mobile.classList.remove('border-red-500');
            }

            // Validate email
            const email = document.getElementById('email');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.value.trim() || !emailRegex.test(email.value)) {
                document.getElementById('emailError').classList.remove('hidden');
                email.classList.add('border-red-500');
                isValid = false;
            } else {
                document.getElementById('emailError').classList.add('hidden');
                email.classList.remove('border-red-500');
            }

            // Validate terms checkbox
            const terms = document.getElementById('terms');
            if (!terms.checked) {
                document.getElementById('termsError').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('termsError').classList.add('hidden');
            }

            // If form is valid, show success message
            if (isValid) {
                // Here you would normally submit the form data to the server
                // For this example, we'll just show the success message
                document.getElementById('formContainer').classList.add('hidden');
                document.getElementById('successMessage').classList.remove('hidden');

                // You can uncomment this to actually submit the form
                // this.submit();
            }
        });

        // Add input validation as user types
        document.getElementById('name').addEventListener('input', function () {
            if (this.value.trim()) {
                document.getElementById('nameError').classList.add('hidden');
                this.classList.remove('border-red-500');
            }
        });

        document.getElementById('mobile').addEventListener('input', function () {
            if (this.value.trim() && this.value.length >= 10) {
                document.getElementById('mobileError').classList.add('hidden');
                this.classList.remove('border-red-500');
            }
        });

        document.getElementById('email').addEventListener('input', function () {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (this.value.trim() && emailRegex.test(this.value)) {
                document.getElementById('emailError').classList.add('hidden');
                this.classList.remove('border-red-500');
            }
        });

        document.getElementById('terms').addEventListener('change', function () {
            if (this.checked) {
                document.getElementById('termsError').classList.add('hidden');
            }
        });

        document.getElementById('eventForm').addEventListener('submit', function (e) {
            e.preventDefault();

            fetch('submit_form.php', {
                method: 'POST',
                body: new FormData(this)
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === "success") {
                        console.log("Success:", data.message); // Console mein success message print hoga
                        document.getElementById('formContainer').classList.add('hidden');
                        document.getElementById('successMessage').classList.remove('hidden');
                    } else {
                        console.error("Error:", data.message); // Console mein error message print hoga
                        alert(data.message); // User ko error message dikhayein
                    }
                })
                .catch(error => {
                    console.error('Fetch Error:', error); // Fetch mein error aane par console mein print hoga
                });
        });
    </script>
</body>

</html>