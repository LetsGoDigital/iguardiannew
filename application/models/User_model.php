<?php

class User_model extends CI_Model {

    Public function __construct() {
        parent::__construct();
    }

    public function get_single_user($where = array(),$what="*") {
        $this->db->select($what);
        $this->db->from("users");
        $this->db->where($where);
        $query = $this->db->get();
        return $query->row();
    }

    public function insblog($data) {
        $this->db->insert('tbl_blog', $data);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function getblog() {
        $query = $this->db->query("select * from tbl_blog order by blog_id desc ");
        return $query->result();
    }

    public function getpass() {
        $query = $this->db->query("select * from tbl_user where first_name='Jayesh'");

        if ($query->num_rows() == 1) {
            return $query->row('password');
        } else {
            return 0;
        }
    }

    public function getcmnt($id) {
        $query = $this->db->query("select * from tbl_blog where blog_id='$id'");
        return $query->result();
    }

    public function inscmnt($data) {
        $this->db->insert('tbl_blog_comments', $data);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

}

?>