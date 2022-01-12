<?php
class queryBuilder
{
    public $pdo;
    function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    function selectAll($table, String $intoClass)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
    function insertTask($table, $task){
        $sql = "insert into {$table} (descrizione, terminata) values('{$task['descrizione']}', {$task['terminata']})";
        //var_dump(die($sql));
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
}
