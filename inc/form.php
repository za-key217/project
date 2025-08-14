<?php

$errors = [
    'firstnameerror' => '',
    'lastnameerror' => '',
    'emailerror' => ''
];
if (isset($_POST['submit'])) {
    $firstname =    mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname =     mysqli_real_escape_string($conn, $_POST['lastname']);
    $email =        mysqli_real_escape_string($conn, $_POST['email']);

    if (empty($firstname)) {
        $errors['firstnameerror'] = 'First Name is empty';
    }
    if (empty($lastname)) {
        $errors['lastnameerror'] = 'Last Name is empty';
    }
    if (empty($email)) {
        $errors['emailerror'] = 'Email is empty';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //للتأكد من أنه email
        $errors['emailerror'] = 'Email is wrong';
    }
    if (!array_filter($errors)) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $sql = "INSERT INTO users(firstname, lastname, email)
        VALUES ('$firstname', '$lastname', '$email')";
        if (mysqli_query($conn, $sql)) {
            header('Location:' . $_SERVER['PHP_SERVER']);
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}
?>