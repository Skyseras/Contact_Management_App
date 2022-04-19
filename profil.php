<?php
require_once('userFunctionDb.php');
session_start();
if(empty($_SESSION["name"])) {
        header('location:login.php');
    }
  $user = new user();
  $user->SetId($_SESSION['id']);
  $res=$user->Select();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Contact Management App</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="contact.php">Contact List</a>
            <div class="d-flex justify-content-center align-items-center">
                <a class="nav-link active text-muted hov" href="profil.php"><?= $_SESSION['name']?></a>
                <a class="nav-link active text-muted hov" href="contact.php">Contacts</a>
                <a class="nav-link active text-muted hov" href="action.php?&req=logout">Logout</a>
            </div>
        </div>
    </nav>
    <main>
        <div class="d-flex justify-content-center align-items-center">
            <div class="bg-light p-5 m-5 w-100">
                <h1 class="mb-5">Welcome, <?= $_SESSION['name']?>!</h1>
                <h4>Your profile:</h4>
                <div class="row px-3 border-top border-dark mt-4 pt-3">
                    <p class="col-sm-3 mb-0 p-1">Username:</p>
                    <p class="col-sm-9 mb-0 p-1"><?= $_SESSION['name']?></p>
                </div>
                <div class="row px-3 border-top border-dark mt-4 pt-3">
                    <p class="col-sm-3 mb-0 p-1">Signup date:</p>
                    <p class="col-sm-9 mb-0 p-1"><?= date(DATE_RFC2822), strtotime($res['date_inscription']) ?></p>
                </div>
                
                <div class="row px-3 border-top border-dark mt-4 pt-3">
                    <p class="col-sm-3 mb-0 p-1">Last login:</p>
                    <p class="col-sm-9 mb-0 p-1"><?= $_SESSION['datelog']?></p>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>