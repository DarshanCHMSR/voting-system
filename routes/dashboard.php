<?php
session_start();
if (!isset($_SESSION['data'])) {
    header("location: ../",);
}
$data = $_SESSION['data'];
$groupdata = $_SESSION['groupsdata'];
if (isset($_GET['logout'])) {
    session_destroy();
    header("location: ../");
}
if ($_SESSION['data']['status'] == 0) {
    $status = '<b style="color:red">Not Voted</b>';
} else {
    $status = '<b style="color:green">Voted</b>';
}

if (isset($_GET['back'])) {
    header("location: ../");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard Online voting System</title>
    <link rel="stylesheet" href="../css/dashboard.css">

</head>

<body>
    <a href="logout.php">
        <button type="submit" id="submit" style="margin:20px">Logout</button></a>
    <a href="../"><button type="submit" id="submit" style="float:right; margin:20px">Back</button></a>
    <div class="mainsection">
        <div class="header-section">
            <center>
            <h1>Online Voting System</h1>
            </center>
            <hr>
        </div>

        <div class="profile">
            <center>
                <img src="../uploads/<?php echo $data['photo']; ?>" alt="profile" style="height: 100px;width: 100px;">
            </center>
            <br><br>
            <b>Name:</b><?php echo $data['name']; ?><br><br>
            <b>Mobile:</b><?php echo $data['mobile']; ?><br><br>
            <b>Address:</b><?php echo $data['address']; ?><br><br>
            <b>Status:</b><?php echo $status ?><br><br>

        </div>
        <div class="group">
            <?php
            if ($_SESSION['groupsdata']) {
                for ($i = 0; $i < count($groupdata); $i++) {
            ?>
                    <div>
                        <img src="../uploads/<?php echo $groupdata[$i]['photo']; ?>" alt="group" style="height: 100px;width: 100px; float: right;">
                        <b>Group Name:</b><?php echo $groupdata[$i]['name']; ?><br><br>
                        <b>Votes:</b><?php echo $groupdata[$i]['votes']; ?><br><br>
                        <form action="../api/vote.php" method="post">
                            <input type="hidden" name="gvotes" value="<?php echo $groupdata[$i]['votes']; ?>">
                            <input type="hidden" name="gid" value="<?php echo $groupdata[$i]['id']; ?>">
                            <?php
                            if ($_SESSION['data']['status'] == 1) {
                            ?>
                                <input type="submit" name="votebtn" value="Voted" id="votedbtn" disabled>
                            <?php
                            } else {
                            ?>
                                <input type="submit" name="votebtn" value="Vote" id="votebtn">
                            <?php
                            }
                            ?>
                        </form>
                    </div>
                    <hr>
            <?php
                }
            } else {
            }

            ?>
        </div>
    </div>
</body>

</html>