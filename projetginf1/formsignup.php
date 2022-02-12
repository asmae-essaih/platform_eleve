<!DOCTYPE HTML>
<html>

<head>
</head>

<body>
    <h1> LISTE DES ELEVES </h1>
    <table align="center">

        <form action="signup.php" method="post" enctype="multipart/form-data">
            <div>
                login :
                <input type="text" name="login" required><br>
            </div>
            <div>
                Mot de passe:
                <input type="password" name="passwd" required><br>
            </div>
            <div>
                NOM :
                <input type="text" name="name" required><br>
            </div>
            <div>
                Prenom:
                <input type="text" name="prenom" required><br>
            </div>
            <div>
                FILIERE:
                <input type="text" name="filiere" required><br>
            </div>

            <div>
                <input type="file" name="image" required>
            </div>
            <div>
                <input type="submit" name="signup" value="sign up">
            </div>

            <br>

        </form>
    </table>

</body>

</html>