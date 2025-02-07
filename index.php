<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="header-section">
    <h1 class="hello" style="font-family:cursive">Online Voting System</h1>
    <hr>
    </div>

    <div class="body-section">

    <h2>Login</h2>
    <form action="api/login.php" method="POST">
       
        <input type="text" name="mobile" id="voter_id" required placeholder="Enter Your Mobile Number">
        <br><br>
        <input type="password" name="password" id="password" required placeholder="Enter Your Password">
        <br><br>
            <select id="dropdown" name="role">
                <option value="1">Voter</option>
                <option value="2">Candidate</option>
            </select>
            <br>
            <br>
            <br>
        <button type="submit" id="submit">Login</button>
        <p>Don't Have account register here         <a href="http://localhost/web%20apps/voting-system/routes/register.html">Register</a>
        </p>
    </form>
    </div>
</body>
</html>