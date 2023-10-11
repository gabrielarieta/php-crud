<?php 

require_once $_SERVER['DOCUMENT_ROOT'].'\connection.php';

class BaseDao {

    private $connection;
    private $tableName;

    public function __construct($tableName) {
        $this->connection = new Connection();
        $this->tableName = $tableName;
    }

    public function insert($attributes) {
        $data = array_values($attributes);
        $sql = "INSERT INTO {$this->tableName} (". implode(",", array_keys($attributes)) .") \n
        VALUES (". str_repeat('?,', sizeof($attributes) - 1) ."?)";
        return $this->connection->createOrUpdate($sql, $data);
    }

    public function update($attributes) {
        $sql = "UPDATE {$this->tableName} SET ";
        $data = [];
        foreach($attributes as $key => $value) {
            if( !next( $attributes ) ) {
                $sql .= $key ."=?";
            } else {
                $sql .= $key ."=?, ";
            }
            $data[] = $value;
        }

        $sql .= " WHERE id = ". $attributes['id'];
        return $this->connection->createOrUpdate($sql, $data);
    }

    public function delete($id) {
        $sql = "DELETE FROM {$this->tableName} WHERE id={$id}";
        return $this->connection->delete($sql);
    }

    public function customSelect($sql) {
        return $this->connection->query($sql);
    }

    public function customUpdate($sql, $data) {
        return $this->connection->createOrUpdate($sql, $data);
    }

    public function listAll() {
        $sql = "SELECT * FROM {$this->tableName}";
        return $this->connection->query($sql);
    }

    public function findById($id) {
        $sql = "SELECT * FROM {$this->tableName} WHERE id = {$id}";
        return $this->connection->query($sql);
    }
}