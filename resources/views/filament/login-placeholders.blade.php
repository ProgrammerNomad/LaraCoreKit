<!DOCTYPE html>
<html>
<head>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add placeholders to login form inputs
            setTimeout(function() {
                const emailInput = document.querySelector('input[type="email"]');
                const passwordInput = document.querySelector('input[type="password"]');
                
                if (emailInput) {
                    emailInput.setAttribute('placeholder', 'admin@laracorekit.com');
                }
                
                if (passwordInput) {
                    passwordInput.setAttribute('placeholder', 'Enter your password');
                }
            }, 100);
        });
    </script>
</head>
</html>
