<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curda Corp</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link type="iamge/x-icon" rel="shortcut icon" href="../images/curda.png">
</head>
<body>
    <div id = "container">
        <header>
            <h1>Curda Corp</h1>
        </header>
        <main class="curda">
            <div id="section">
                <form action="/register" class="" method="POST">
                    <h1 class="">Registro</h1>
                    <h2 class="">Datos de la Cuenta</h2>
                    <label for="username">Usuario</label>
                        <input type="text" name="username" required class="text-input">
                    <label for="password">Contraseña</label>
                        <input type="password" name="password" required class="text-input">
                    <label for="password2">Repetir Contraseña</label>
                        <input type="password" name="password2" required  class="text-input">
                    <label for="email">Email</label>
                        <input type="email" name="email" required class="text-input">
                    <h2 class="row">Datos Personales</h2>
                    <label for="first_name">Nombre</label>
                        <input type="text" name="first_name" id="" required class="text-input">
                    <label for="first_last_name">Apellido</label>
                        <input type="text" name="last_name" id="" required class="text-input">
                    <label for="">Sexo</label>
                    <select name="sex" id="" required class="text-input">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                    </select>
                    <label for="phone_number">Teléfono</label>
                        <input type="text" name="phone_number" id="" required class="text-input">
                    <label for="id">Cédula</label>
                        <input type="text" name="identity_number" id="" required class="text-input">
                    <label for="Nationality">Nacionalidad</label>
                        <input type="ratio" name="nationality" id="" value="Venezolano" required class="text-input">
                        <input type="ratio" name="nationality" id="" value="Extranjero" required class="text-input">
                    <label for="city">Ciudad</label>
                    <select name="city" id="" required class="text-input">
                        <option value="Guasdalito">Guasdalito</option>
                        <option value="Carache">Carache</option>
                        <option value="Alta Gracias de Orituco">Alta Gracia de Orituco</option>
                    </select>
                    <div class="form-btn">
                        <button type="submit" class="primary-btn">Registrar</button>
                        <button type="reset" class="primary-btn">Cancelar</button> <br/>
                    </div>
                </form>
                <div class="or">
                    <hr class="bar">
                    <span>OR</span>
                    <hr class="bar">
                </div>
                <div class="flecha">
                    <a title="Flecha" href="/" class="row"><img src="https://cdn.discordapp.com/attachments/507751715903111168/552649762088681503/147.png" alt="Flecha" /></a>
                </div>
        </main>
        <footer>
            <p>Curda Corp, CA  - Rif J-0124578693 © 2019</p>
        </footer>
</div>
</body>
</html>