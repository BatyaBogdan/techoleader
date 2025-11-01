<?php
class Model_users extends CI_Model{
    public function create_user($login, $password, $email){
        $sql = "INSERT INTO users (login, password, email) VALUES (?, ?, ?)";
        $return = $this->db->query($sql, array($login, $password, $email));
        return $return;
    }
    public function select_user($login, $password){
        $sql = "SELECT * from users where login = ? AND password = ?";
        $return = $this->db->query($sql, array($login, $password));
        return $return->row_array();
    }
    public function check_login($login){
        $sql = "SELECT * from users where login = ?";
        $return = $this->db->query($sql, $login);
        return $return;
    }
}
?>