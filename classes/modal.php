<?php

class Modal extends Dbh{

    protected function selectData($variablename) {
    	
        $sql = "SELECT * FROM members WHERE firstname = ?";
        $query = $this->conn()->prepare($sql);
        $query->execute([$variablename]);

        $fetch = $query->fetch();
        return $fetch;
        
    }

    protected function updateData($col1, $col2, $col3) {

        $sql = "UPDATE table_name SET column_1 = ?, column_2 = ? WHERE column_3 =?";
        $query = $this->conn()->prepare($sql);
        $query->execute([$col1, $col2, $col3]);

    }

}