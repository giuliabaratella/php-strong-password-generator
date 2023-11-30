<?php
include __DIR__ . "/partials/header.php";

if (isset($_GET["password-length"]) && $_GET["password-length"] !== '') {
    $password = generatePassword();
    if ($password !== 'error') {
        $_SESSION["password"] = $password;
        header('Location: password.php');
    }

}


?>

<main class="container">

    <div id="pw-generator" class="mb-3">
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
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="char-repeat" id="char-repeat" value="no">
                    <label class="form-check-label" for="flexRadioDefault2">
                        No
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="0" id="letters" name="allowed[]">
                    <label class="form-check-label" for="letters">
                        Lettere
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="numbers" name="allowed[]">
                    <label class="form-check-label" for="numbers">
                        Numeri
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="2" id="symbols" name="allowed[]">
                    <label class="form-check-label" for="symbols">
                        Simboli
                    </label>
                </div>
            </div>

            <div class="col-4">
                <button type="submit" class="btn btn-primary mb-3">Invia</button>
                <button type="reset" class="btn btn-dark mb-3">Annulla</button>

            </div>
        </form>
    </div>
    <?php if (isset($password) && $password === 'error') { ?>
        <div class="alert alert-danger">
            Attenzione! Se desideri solo numeri non ripetuti, imposta un numero di caratteri inferiore a 10.
        </div>
    <?php } ?>
</main>


</body>

</html>