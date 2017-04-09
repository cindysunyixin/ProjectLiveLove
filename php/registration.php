<?php
$DB_USER = 'mylivelo_epicintentions';
$DB_PASSWORD = '5nmkQRr3v3WqIerKsJqt';
$DB_HOST = 'mylivelove.com';
$DB_NAME = 'mylivelo_mylivelove';
$dbc = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
//    $phonenumber= $_POST["phonenumber"];
//    $city= $_POST["city"];
//    $state= $_POST["state"];
//    $accounttype= $_POST["accounttype"];

//check if user exists//
$stmt = $dbc->prepare('SELECT * FROM accounts WHERE username = ?');
//s means string
$stmt->bind_param('s', $username);
//$query = "(SELECT * FROM accounts WHERE username= $username)";
$stmt->execute();
$response = $stmt->get_result();

//check length of response to see if there's a match
if ($response->num_rows == 0) {
    //Hash the password
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

    $user_created = true;

    //Insert into into database
    $stmt = $dbc -> prepare('INSERT INTO accounts(username, password, email) VALUES(?,?,?)');
    $stmt->bind_param('sss', $username, $hashed_pass, $email);

    if (!$stmt->execute()) {
        echo "here";
        $user_created = false;
    }

    $stmt = $dbc -> prepare('INSERT INTO users VALUES(?,?,?,1)');
    $stmt->bind_param('sss', $username, $firstname, $lastname);

    if (!$stmt->execute()) {
        $user_created = false;
    }

    if ($user_created) {
        echo "Account created successfully!";
    } else {
        echo "An error occurred during account creation. If this issue persists, please contact the administrator.";
    }

//    $accountinsert = "INSERT INTO accounts ($username, $password, $email)";
//    $userinsert = "INSERT INTO users ($username, $firstname, $lastname, 0";
//    $accountresult = mysqli_query($dbc, $accountinsert);
//    $userresult = mysqli_query($dbc, $userinsert);
//
//    if ($accountresult and $userresult) {
//        echo "Registration complete!";
//    }

} else {
    echo "User already exists!";
}



?> 