<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="">
    <form id="registerForm" class="flex flex-column">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="name">Surname:</label>
        <input type="text" name="surname" id="surname" required>

        <label for="name">Username:</label>
        <input type="text" name="username" id="username" required>

        <label for="name">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="name">Password:</label>
        <input type="password" name="password" id="password" required>
    
    
        <button type="submit">Register</button>
    </form>

</div>
    
    <script>
        document.getElementById('registerForm').addEventListener('submit', function (e) {
            e.preventDefault();
    
            // Collect form data
            var formData = new FormData(this);
    
            // Send registration request to the Laravel backend
            fetch("{{ route('lawyer.register') }}", {
                method: "POST",
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
    
                // Handle registration response as needed
                if (data.token) {
                    // Registration successful, redirect or perform other actions
                } else {
                    // Registration failed, handle accordingly
                }
            })
            .catch(error => {
                console.error(error);
                // Handle registration error
            });
        });
    </script>
    
</body>
</html>