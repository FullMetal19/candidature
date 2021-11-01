<?php
/* template name:sc_per_connexion */
session_start();
get_header();
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous"
    >
    <title>Login</title>
</head>
<body class="container mt-3" >
    <div class="row w-100 mt-3 my-auto">
        <div class="col-6 mx-auto my-auto">
            <form action="http://localhost/candidature/code_per/verification_per_connexion.php" method="POST" >
                <div class="mb-3">
                    <label for="matricule" class="form-label">Matricule</label>
                    <input type="text" name="matricule" class="form-control" id="Matricule" aria-describedby="matriculeHelp">
                    <!-- <div id="matriculeHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="mot_de_passe" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-success">Submit</button>
                </form>


        </div>

    </div>
    
    
</body>
</html>