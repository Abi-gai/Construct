<?php
    $pageTitle = 'User Dashboard';
    $currentDate = '19-11-2021';
    define('MESSAGE', 'Welcome');

    $exampleMail = 'Please enter a valid e-mail. Eg: tcs@mail.com';
    $phoneNumber = '0200000000';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $pageTitle ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../styles/style.css"/>

</head>
<body>
    <nav>            
        <img class="logo" src="../../images/logo.png" alt="Logo"/>
        <div class="nav-links">
            <a href=""><i class="material-icons" style="font-size:24px">&#xe871;</i><span>Dashboard</span></a>
            <a href=""><i style="font-size:24px" class="fa">&#xf0c0;</i><span>Users</span></a>
            <a href=""><i style="font-size:24px" class="fa">&#xf0f7;</i><span>Building requests</span></a>
        </div>
        </div>
        <a class="logout" href=""><i style="font-size:32px" class="fa">&#xf08b;</i></a>

    </nav>
    <main>
        <section class="main-top-section">
            <h2 class="welcome-message"><?php echo $pageTitle?></h2>
            <a href=""><i style="font-size:32px" class="fa">&#xf2bd;</i></a>
        </section>
        <div class="dashboard-items">
            <div class="item">
                <i class="fa" style="font-size:94px">&#xf073;</i>
                <span>Today</span>
                <!-- <span class="item-description" id="today">Data here</span> -->
            </div> 
            <div class="item">
                <i style="font-size:94px" class="fa">&#xf0f7;</i>
                <span class="item-description">Featured</span>
            </div> 
        </div>
    </main>
</body>
<script>
  var baseDate = new Date().toISOString().split("T")[0];
  document.getElementById("today").innerText = baseDate;
</script>
</html>

<!--credits-----
icons by iconmonstr.com
Photo by Karolina Grabowska from Pexels
Photo by Khari Hayden from Pexels
-->