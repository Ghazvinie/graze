<?php
require dirname(__FILE__).'/dbconnect.class.php';

class Test extends DBConnect{
    
    public function getAll(){
        $sql = "SELECT * FROM account";
        $results = $this->connectToDb()->query($sql);
        $results->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $results->fetch()){
            echo $row['id']."<br/>\n";
        }
    }
};