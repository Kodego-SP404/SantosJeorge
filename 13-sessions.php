<?php

if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    echo $username;

    if ($username == "jem" && $password == "password") {

    }

}

?>




<a href=" <?php echo $_SERVER['PHP_SELF']; ?>?name=Ryan$age=40"> CLICK</a>

<form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <div>
        <label for="username">username:</label>
        <input type="text" name="username" />
    </div>
    <br />
    <div>
        <label for="password">password:</label>
        <input type="text" name="password" />
    </div>

    <input type="submit" name="submit" value="submit" />
</form>