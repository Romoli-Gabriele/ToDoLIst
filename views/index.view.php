<?php require "partials/head.php" ?>
    <h1>Lista cose da fare:</h1>

    <form method="POST" action="/add-new">
        <input type="text" name="descrizione" placeholder="descrizione">
        <button type="submit">Invia</button>
    </form>

    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li><?php echo $task->descrizione();
                if ($task->terminata) {
                    echo "&#10004";
                } else {
                    echo "<b>da Fare</b>";
                }
                ?>
            </li>
        <?php endforeach ?>
    </ul>
<?php require "partials/footer.php"; ?>