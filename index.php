<!DOCTYPE html>
<html>
<head>
    <title>Login and Registration System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Login and Registration System</h1>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
    <form action="register.php" method="post">
        <h2>Register</h2>
        <label for="firstname">Firstname:</label>
        <input type="text" id="firstname" name="firstname"><br><br>
        <label for="lastname">Lastname:</label>
        <input type="text" id="lastname" name="lastname"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone"><br><br>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday"><br><br>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>