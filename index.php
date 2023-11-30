<?php
include __DIR__ . "/partials/header.php";

if (isset($_GET["password-length"]) && $_GET["password-length"] !== '') {
    $password = generatePassword();
    // var_dump($password);
}


?>

<main class="container">
    <?php if (isset($password)) { ?>
        <div class="alert alert-primary">
            La tua password è
            <span class="fw-bold">
                <?php echo $password ?>
            </span>
        </div>
    <?php } ?>
    <div id="pw-generator">
        <form class="row g-3" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <div class="col-6">
                <label for="password-length">Lunghezza password:</label>
            </div>
            <div class="col-6">
                <input type="number" class="form-control" id="password-length" name="password-length" min="3" max="15">
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