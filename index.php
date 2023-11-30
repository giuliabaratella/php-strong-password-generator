<?php
include __DIR__ . "/partials/header.php";

if (isset($_GET["password-length"]) && $_GET["password-length"] !== '') {
    $password = generatePassword();
    $_SESSION["password"] = $password;
    header('Location: password.php');
    // var_dump($_SESSION["password"]);
}


?>

<main class="container">

    <div id="pw-generator">
        <form class="row g-3" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <div class="col-6">
                <label for="password-length">Lunghezza password:</label>
            </div>
            <div class="col-6">
                <input type="number" class="form-control" id="password-length" name="password-length" min="3" max="15">
            </div>
            <div class="col-6">
                <label for="char-repeat">Consenti ripetizioni di uno o più caratteri:</label>
            </div>
            <div class="col-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="char-repeat" id="char-repeat" value="yes"
                        checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="char-repeat" id="char-repeat" value="no">
                    <label class="form-check-label" for="flexRadioDefault2">
                        No
                    </label>
                </div>
            </div>

            <div class="col-4">
                <button type="submit" class="btn btn-primary mb-3">Invia</button>
                <button type="reset" class="btn btn-dark mb-3">Annulla</button>

            </div>
        </form>
    </div>
</main>


</body>

</html>