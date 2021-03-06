<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in - Curda Corp</title>
    <link type="iamge/x-icon" rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div id="container">

        <header>
            <!-- <div class="logo">
                <img src="images/Small-Goku-240x300.png" class="logo" alt="logo" width=70px height=70px>
            </div> -->
            <h1>Curda Corp</h1> 
        </header>
        <main class="curda">
            <div id="section">
                <form action = "controllers/login.php" method = "POST">
                    <div>
                        <label for="username">Usuario</label>
                        <input type="text" name="username" class="text-input" required>
                    </div>
                    <div>
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" class="text-input" required>
                    </div>
                    <div class="btn">
                        <button type="submit" class="primary-btn">Iniciar Sesion</button>
                        <button type="reset" class="secondary-btn">Cancelar</button>
                    </div>
                </form>
                    <div class="or">
                        <hr class="bar">
                        <span>OR</span>
                        <hr class="bar">
                    </div>
                <a href="register" class="third-btn">Create Account</a>
            </div>
        </main>
        <footer id="main-footer">
            <p> Curda Corp, CA  - Rif J-0124578693 © 2019</p>
        </footer>
    </div>
</body>
</html>