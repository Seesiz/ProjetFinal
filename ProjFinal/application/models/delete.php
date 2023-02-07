<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Model {
    public function DEL($tableName, $col, $val){
        $this->db->query(sprintf("DELETE FROM %s WHERE %s=%s", $tableName, $col, $this->db->escape($val)));
    }
}
