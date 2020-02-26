<?php 
    session_start();
    require_once("loginservice.php");
    $loginService = loginService::getInstance();

    if ($loginService->checkToken($_GET["token"] == true)) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
    <form name="changepass-form" action="controller.php" method="post">
                <input type="hidden" name="token" value=<?php echo($_GET["token"]); ?>>
                <input type="password" name="resetpass" required/>
                <input type="password" name="resetpass-re" required/>
                <input type="submit" name="resetpass-button" value="Change password"/>
        </form>
    </body>
</html>
<?php 
    } else { 
        echo("This token does not exist or has been expired.Please request again");
    }
?>