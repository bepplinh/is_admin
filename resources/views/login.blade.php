<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            max-width: 400px; /* Giới hạn chiều rộng */
            width: 100%;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="login-container">
        <h3 class="text-center mb-4">Sign In</h3>
        <form method="POST" action="{{ route('actionLogin') }}">
            @csrf
            <!-- Email input -->
            <div class="mb-3">
                <label for="form2Example1" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" />
            </div>

            <!-- Remember me & Forgot password -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31">Remember me</label>
                </div>
                <a href="#" class="text-primary">Forgot password?</a>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary w-100">Sign in</button>

            <!-- Register link -->
            <div class="text-center mt-3">
                <p>Not a member? <a href="#" class="text-primary">Register</a></p>
            </div>
        </form>
    </div>

</body>
</html>
