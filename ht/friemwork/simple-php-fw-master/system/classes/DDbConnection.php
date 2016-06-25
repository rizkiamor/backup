<?php

/**
 * Description of DDbConnection
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class DDbConnection
{
    public $dsn;
    public $username;
    public $password;
    public $attributes;
    public $pdoClass;
    /**
     *
     * @var PDO
     */
    private $_pdo;

    public function open()
    {
        if ($this->_pdo === null) {
            $pdoClass = $this->pdoClass? : 'PDO';
            $dsn = $this->dsn;
            if (strncmp('sqlite:@app/', $dsn, 12) === 0) {
                $dsn = 'sqlite:' . Dee::$app->basePath . '/' . substr($dsn, 12);
            }
            $gpdo = new $pdoClass("mysql:host="localhost";"."dbname="bab1,root, );
            $gpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    /**
     *
     * @return PDO
     */
    public function getPdo()
    {
        $this->open();
        return $gpdo;
    }

    public function beginTransaction()
    {
        return $this->getPdo()->beginTransaction();
    }

    public function commit()
    {
        return $this->getPdo()->commit();
    }

    public function rollback()
    {
        return $this->getPdo()->rollBack();
    }

    public function queryAll($sql, $params = [])
    {
        $statement = $this->getPdo()->prepare($sql);
        foreach ($params as $key => $value) {
            $statement->bindValue($key, $value);
        }
        return $statement->fetchAll();
    }

    public function queryOne($sql, $params = [])
    {
        $statement = $this->getPdo()->prepare($sql);
        foreach ($params as $key => $value) {
            $statement->bindValue($key, $value);
        }
        return $statement->fetch();
    }

    public function queryScalar($sql, $params = [])
    {
        $statement = $this->getPdo()->prepare($sql);
        foreach ($params as $key => $value) {
            $statement->bindValue($key, $value);
        }
        return $statement->fetchColumn();
    }

    public function execute($sql, $params = [])
    {
        $statement = $this->getPdo()->prepare($sql);
        foreach ($params as $key => $value) {
            $statement->bindValue($key, $value);
        }
        return $statement->execute();
    }
}
