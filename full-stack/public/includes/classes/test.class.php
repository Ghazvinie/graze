<?php
require dirname(__FILE__) . '/dbconnect.class.php';

class Test extends DBConnect {

    public function getAll() {
        $sql = "SELECT * FROM account";
        $results = $this->connectToDb()->query($sql);
        $results->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $results->fetch()) {
            echo $row['id'] . "<br/>\n";
        };
    }

    public function getAllStatement($id) {
        $sql = "SELECT * FROM account WHERE id = ?";
        $statement = $this->connectToDB()->prepare($sql);
        $statement->execute([$id]);
        $idResults = $statement->fetchAll();
        foreach ($idResults as $id) {
            echo $id['id'] . "<br/>\n";
        }
    }
}
