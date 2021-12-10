<html>
    <head>
        <title>Lista</title>
    </head>
    <body>
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