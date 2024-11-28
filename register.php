<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gradient Background */
        body {
            background: #222;;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }

        /* Card Design */
        .register-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            color: #fff;
        }

        .register-card h2 {
            font-size: 1.8rem;
            font-weight: 600;
        }

        .register-card .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: #fff;
        }

        .register-card .form-control:focus {
            background: rgba(255, 255, 255, 03);
            color: #fff;
            box-shadow: none;
        }

        .register-card .btn-primary {
            background: #2575fc
            border: none;
            font-weight: bold;
            transition: all 0.3s;
        }

        .register-card .btn-primary:hover {
            background: #6a11cb;
        }

        .register-card a {
            color: #fff;
            text-decoration: underline;
        }

        .register-card p {
            margin-top: 20px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="register-card text-center">
        <h2>Regristasi akun kamu disini ya </h2>
        <p></p>
        <form action="./backend/register.php" method="post" class="mt-4">
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <div class="mb-3">
                <input type="password" name="confirm" class="form-control" placeholder="Confirm your password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <p class="mt-3">
            Udah punya account ? <a href="index.php">Login Disini</a>
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
