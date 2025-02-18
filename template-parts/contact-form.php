<?php
// File: wp-content/themes/your-theme/template-parts/contact-form.php
?>

<div class="contact-form-container">
    <!-- Contact Form -->
    <form action="/P6Foreheads/#wpcf7-f234-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
        <div style="display: none;">
            <input type="hidden" name="_wpcf7" value="234">
            <input type="hidden" name="_wpcf7_version" value="6.0.3">
            <input type="hidden" name="_wpcf7_locale" value="en_US">
            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f234-o1">
            <input type="hidden" name="_wpcf7_container_post" value="0">
            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
        </div>
        <!-- Name Field -->
        <div class="name-col">
            <label for="your-name">Your name *</label>
            <input type="text" name="your-name" id="your-name" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required w-100 p-12" required>
        </div>
        <!-- Phone & Email Fields -->
        <div class="grid-hero name-grid mt-15">
            <div class="name-col">
                <label for="your-contact-number">Phone Number *</label>
                <input type="tel" name="your-contact-number" id="your-contact-number" class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel w-100 p-12" required>
            </div>
            <div class="email-row">
                <label for="your-email">Your email *</label>
                <input type="email" name="your-email" id="your-email" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email w-100 p-12" required>
            </div>
        </div>
        <!-- Message Field -->
        <div class="message-col">
            <label for="your-message">Your message *</label>
            <textarea name="your-message" id="your-message" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required w-100 p-12" required></textarea>
        </div>
        <!-- Submit Button -->
        <div class="submit-btn-container">
            <input type="submit" value="Submit Message" class="wpcf7-form-control wpcf7-submit has-spinner btn-lg submit-btn rounded">
        </div>
    </form>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.wpcf7-form');
        const submitButton = form.querySelector('input[type="submit"]');

        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        const phonePattern = /^[0-9]{10}$/;

        function validateForm() {
            let valid = true;

            const nameField = form.querySelector('[name="your-name"]');
            const phoneField = form.querySelector('[name="your-contact-number"]');
            const emailField = form.querySelector('[name="your-email"]');
            const messageField = form.querySelector('[name="your-message"]');

            const errorMessages = form.querySelectorAll('.error-message');
            errorMessages.forEach(message => message.remove());

            if (nameField.value.trim() === '') {
                valid = false;
                showError(nameField, 'Name is required.');
            }

            if (phoneField.value.trim() === '') {
                valid = false;
                showError(phoneField, 'Phone number is required.');
            } else if (!phonePattern.test(phoneField.value.trim())) {
                valid = false;
                showError(phoneField, 'Please enter a valid phone number (10 digits).');
            }

            if (emailField.value.trim() === '') {
                valid = false;
                showError(emailField, 'Email is required.');
            } else if (!emailPattern.test(emailField.value.trim())) {
                valid = false;
                showError(emailField, 'Please enter a valid email address.');
            }

            if (messageField.value.trim() === '') {
                valid = false;
                showError(messageField, 'Message is required.');
            }

            submitButton.disabled = !valid;
            return valid;
        }

        function showError(inputField, message) {
            const errorMessage = document.createElement('span');
            errorMessage.classList.add('error-message');
            errorMessage.style.color = 'red';
            errorMessage.textContent = message;
            inputField.parentElement.appendChild(errorMessage);
        }

        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            if (validateForm()) {
                const formData = new FormData(form);

                // Send the form data to WordPress via AJAX
                fetch('/wp-admin/admin-ajax.php', { // WordPress admin-ajax URL
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Your message has been sent successfully!');
                            form.reset();
                        } else {
                            alert('There was an error sending the message. Please try again.');
                        }
                    })
                    .catch(error => {
                        alert('There was an error with the form submission. Please try again.');
                    });
            } else {
                console.log('Form is invalid');
            }
        });

        form.addEventListener('input', function() {
            validateForm();
        });
    });
</script>