<?php
session_start();

$username = "";
$password = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', 'password', 'Activities');

if (isset($_POST['signup'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $college = mysqli_real_escape_string($db, $_POST['college']);
    $rnumber = mysqli_real_escape_string($db, $_POST['rnumber']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
        $enc_password = md5($password);
        $sql = "INSERT INTO student_table (name, email, password, college, rollnumber) VALUES ('$username', '$email', '$password', '$college', '$rnumber');";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        $query = "SELECT * FROM student_table WHERE email = '$email' AND password = '$password';";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $_SESSION['student_id'] = $row["id"];;
        header("Location:home.php");
    }
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
        $enc_password = md5($password);
        $query = "SELECT * FROM student_table WHERE email = '$email' AND password = '$password';";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row["name"];
            $_SESSION['student_id'] = $row["id"];;
            $_SESSION['success'] = "You are now logged in";
            header("Location:home.php");
        } else {
            array_push($errors, "wrong username or password combination");
        }
    }
}

if (isset($_POST['create'])) {
    $coursename = mysqli_real_escape_string($db, $_POST['coursename']);
    $category = mysqli_real_escape_string($db, $_POST['category']);
    $topics = mysqli_real_escape_string($db, $_POST['topics']);
    $deadline = mysqli_real_escape_string($db, $_POST['deadline']);
    $percent = mysqli_real_escape_string($db, $_POST['percent']);
    if (empty($coursename)) {
        array_push($errors, "Coursename is required");
    }
    if (empty($category)) {
        array_push($errors, "Category is required");
    }
    if (empty($topics)) {
        array_push($errors, "Topics is required");
    }
    if (empty($deadline)) {
        array_push($errors, "Deadline is required");
    }
    if (empty($percent)) {
        $percent = 0;
    }
    if (count($errors) == 0) {
        $student_id =  $_SESSION['student_id'];
        $sql_create1 = "INSERT INTO activity_table (course_name, category, topics, deadline, percentage_completed, student_id) VALUES ('$coursename', '$category', '$topics', '$deadline', '$percent', '$student_id');";
        mysqli_query($db, $sql_create1);
        header("Location:home.php");
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("Location:loginpage.php");
}

if (isset($_POST['delete'])) {
    $activity_id = mysqli_real_escape_string($db, $_POST['delete']);
    $query = "DELETE FROM activity_table WHERE activity_id = $activity_id;";
    $result = mysqli_query($db, $query);
    header("Location:home.php");
}
