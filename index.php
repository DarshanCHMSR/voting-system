<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="header-section">
    <h1>Online Voting System</h1>
    <hr>
    </div>
    <div class="body-section">
    <form>
       
        <input type="text" name="voter_id" id="voter_id" required placeholder="Enter Your Mobile Number">
        <br><br><br>
        <input type="password" name="password" id="password" required placeholder="Enter Your Password">
        <br><br><br>
        
          
            <select value="voter">
                <option value="voter">Voter</option>
                <option value="candidate">Candidate</option>
            </select>
        <button type="submit">Login</button>
        <p>Don't Have account register here</p>
        <a href="http://localhost/web%20apps/voting-system/routes/register.html">Register</a>
    </form>
    </div>
</body>
</html>