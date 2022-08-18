<?php require(BASE_DIR . '/__templates/public/partials/header.php'); ?>


<body>
<div class="flex">

    <div class="login_bloc">
        <div class="login-content">
            <h1 class="text"> Connectez-vous</h1></br>
            <form method="POST" action="<?= $_SERVER['REQUEST_URI'] ?>">
                <input type="text" name="username" class="my_input" placeholder="Your email"></br>
                <input type="password" name="password" class="my_input" placeholder="Your password"></br>

                <button class="custom-button" type="submit"> Connectez-vous </button>
            </form>



        </div>
    </div>

    <div class="signin_bloc">
        <div class="signin-content">
            <div class="filter">
                <div class="contenaire-signin">
                    <h1>Vous revoila</h1></br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Neque tincidunt nunc elit interdum sociis.
                    </p></br>

                    <p>Vous ne possédez pas de compte ?</p></br>

                    <a href="inscription.php" class="custom-button-ins">Inscrivez-vous</a>
                </div>
            </div>


        </div>
    </div>

</div>



</body>


<?php require(BASE_DIR . '/__templates/public/partials/footer.php'); ?>
