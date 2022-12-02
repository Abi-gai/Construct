<?php
    //Initialize form fields

    $email = $password = '';
    $pageTitle = 'Login';

    //Form error messages
    $form_validation_notif = "✔";
    $dberrors = 'Connection to your server may have been servered. Please contact the site admin';
    $errors = array('email' => '', 'password' => '', 'formerrors' =>'', 'dberrors' =>'');
    $errors_form = "Please correct the form errors";
    $error_email = "A valid email is required. ";
    $error_pass = "Please enter a valid password - Password must contain letters only";

    //Form submission validation
    if(isset($_POST['submit'])){
        htmlspecialchars($_POST['email']);
        htmlspecialchars($_POST['password']);

        //Form validations
        if(empty($_POST['email'])){
            $errors['email'] = $error_email;
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = $error_email;
            }
        }

        if(empty($_POST['password'])){
            $errors['password'] = $error_pass;
        }else{
            $password = $_POST['password'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $password)){
                $errors['password'] = $error_pass;
            }
        }

        if(array_filter($errors)){
            $errors['formerrors' ] = $errors_form;
        }else{
            $errors['formerrors'] = $form_validation_notif;
            header('Location: ../../dashboard/index.php');
        }

        //Hosted database
        $host='us-cdbr-east-05.cleardb.net';
        $cleardb_url = pass_url(getenv('CLEARDB_DATABASE_URL'));
        $cleardb_server = $cleardb_url['host'];
        $cleardb_username = $cleardb_url['user'];
        $cleardb_password = $cleardb_url['password'];

        $cleardb_db = substr($cleardb_url['path'], 1);

        $active_group = 'default';
        $query_builder = TRUE;
        $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

        //lOCAL Database connections
    //     $conn = mysqli_connect('localhost', 'testadmin', '@this.admin7', 'tree_cutting_service');
    //     if(!$conn){
    //         echo $dberrors . mysqli_connect_error();
    //     }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" type="text/css" href="./login.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <main>
        <div class="login-form-container">
            <h2 class="welcome-message">L O G I N</h2>
            <img src="../../commons/img/icons/iconmonstr-key-2.svg" alt="login-icon" class="login-ico" id="login-icon"/>
            <span style="color: green; font-size: 12px; margin: 5px 0px; font-style: italic"><?php echo $errors['dberrors']?></span>
            <span style="color: green; font-size: 12px; margin: 5px 0px; font-style: italic"><?php echo $errors['formerrors']?></span>
            <form action="index.php" method="POST">
                <label for="email">Email</label>
                <input name="email" type="email" value="<?php echo htmlspecialchars($email)?>" class="user-name" id="username" placeholder="Login mail here..." title="Email"/>
                <span style="color: red; font-size: 12px; margin: 5px 0px;"><?php echo $errors['email']?></span>
                
                <label for="password">Password</label>
                <input name="password" type="password" value="<?php echo htmlspecialchars($password)?>" class="user-pass" id="password" placeholder="Password here..." title="password"/>
                <span style="color: red; font-size: 12px;"><?php echo $errors['password']?></span>
                <button type="submit" name="submit" value="submit" class="submit-btn">Login</button>

                <a class="link" href="../signup">Don't have an account ? Sign up here...</a>
                <a class="link" href="../../index.php">
                    <i style="font-size:24px" class="fa">&#xf015;</i>
                </a>
            </form>
        </div>

    </main>
</body>

</html>