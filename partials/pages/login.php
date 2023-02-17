<?php

if(isset($_POST['submit'])):
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE `username` = '$login' AND `password`= '$password'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
// initialize cookies for the logged in user
    setcookie("user", $user['id'], time()+3600*12, "/");
    header("Location: /");
endif;
?>

<div class="row justify-content-center">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Welcome</h4>
                <p class="card-description text-center">
                    Please login.
                </p>
                <form method="POST" class="forms-sample">
                    <div class="form-group">
                        <label for="inputLogin">Login</label>
                        <input type="text" name="login" class="form-control" id="inputLogin" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword"
                            placeholder="Password">
                    </div>
                    <!-- <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Remember me
                        </label>
                    </div> -->
                    <input type="submit" name="submit" class="btn btn-primary mr-4" value="Login">
                    <!-- <button type="submit" name="submit" class="btn btn-primary mr-2" >Login</button> -->
                    <!-- <button class="btn btn-light">Cancel</button> -->
                </form>
            </div>
        </div>
    </div>
</div>
