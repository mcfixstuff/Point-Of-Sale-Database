<!DOCTYPE html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .account-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .account-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .account-input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .account-button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="account-container">
        <h2>Create Account</h2>
        <form action="valid_test.php" method="post">
            <input type="text" name="username" placeholder="Username" class="account-input" required>
            <input type="password" name="password" placeholder="Password" class="account-input" required>
            <button type="submit" class="account-button">Sign up now</button>
        </form>
    </div>
</body>
</html>
