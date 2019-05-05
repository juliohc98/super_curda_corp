<?php


class QueryBuilder
{
    public $pdo;

    public function __construct(PDO $pdo)

    {
        $this->pdo = $pdo;
    }

    public function insert($table, $fields)

    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s);',
            $table,
            implode(', ', array_keys($fields)),
            ':' . implode(', :', array_keys($fields))
        );
        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($fields);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

//$query = new QueryBuilder(Connection::make($dsn, $user, $pass, $options));
