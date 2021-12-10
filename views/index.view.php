<html>
    <head>
        <title>Lista</title>
    </head>
    <body>
        <a href="/about">About Us</a>
        <h1>Lista cose da fare:</h1>
        <ul>
        <?php foreach($tasks as $task) : ?>
            <li><?php echo "$task->descrizione ";
            if($task->terminata){echo "&#10004";
            }else{echo "<b>da Fare</b>";}  
            ?>
            </li>
        <?php endforeach ?>
        </ul>
    </body>
</html>