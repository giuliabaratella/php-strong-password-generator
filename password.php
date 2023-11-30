<?php
include __DIR__ . "/partials/header.php";

?>

<main class="container">
    <?php if (isset($_SESSION["password"])) { ?>
        <div class="alert alert-primary">
            La tua password è
            <span class="fw-bold">
                <?php echo $_SESSION["password"] ?>
            </span>
        </div>
    <?php } ?>
    <div class="text-center">
        <button class="btn btn-primary">
            <a href="index.php" class="text-white">Ritorna alla home</a>
        </button>
    </div>
</main>


</body>

</html>