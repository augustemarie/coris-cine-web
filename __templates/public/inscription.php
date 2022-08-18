<?php require(BASE_DIR . '/__templates/public/partials/header.php'); ?>

<body>
<div class="flex">
    <div class="signin_bloc">
        <div class="signin-content">
            <div class="filter">
                <div class="contenaire-signin">
                    <h1>Bienvenue </h1></br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Neque tincidunt nunc elit interdum sociis.
                    </p></br>

                    <p>Vous ne possédez pas de compte ?</p></br>

                    <a href="connexion.php" class="custom-button-ins">Connectez-vous</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="login_bloc">
        <div class="login-content">
            <div class="conteneur-login">
                <h1 class="text"> Creation de compte</h1></br>
                <h4>Ou servez-vous de votre email pour vous inscrire</h4></br>
                <form method="POST" action="<?= $_SERVER['REQUEST_URI'] ?>">
                    <input type="text" class="my_input" name="firstName" placeholder="firstName"></br>
                    <input type="text" class="my_input" name="lastName" placeholder="lastName"></br>
                    <input type="email" class="my_input" name="email" placeholder="email"></br>
                    <input type="phone" class="my_input" name="phoneNumber" placeholder="phoneNumber"></br>
                    <input type="password" class="my_input" name="password" placeholder="password"></br>

                    <button type="submit" class="custom-button">Inscription</button>
                </form>
            </div>
        </div>
    </div>

</body>

<?php require(BASE_DIR . '/__templates/public/partials/footer.php'); ?>
