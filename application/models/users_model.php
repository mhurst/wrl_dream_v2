<?php
/**
 * Users Model
 *
 * @package WRL Dream system
 * @author Matthew Hurst:piznac
 *
 */
class Users_model extends CI_Model {

    public function addUsers($options) {
        $this->db->insert('users', $options));
    }

    public function editUsers($id, $options = array()) {
        $this->db->where('id', $id);
        $this->db->update('users', $options);
    }

    public function listUsers($options = array()) {
        if (!empty($options)) {
            foreach ($options as $key => $value) {
                $this->db->where($key, $value);
            }
            $query = $this->db->get('users');

            return $query->result();
        }

        $query = $this->db->get('users');

        return $query->result();
    }

    public function deleteUsers($ids) {
        if (!empty($ids)) {
            foreach ($ids as $id) {
                $this->db->where('id', $id);
                $this->db->update('users', array('active' => 0));
            }
        }

        return false;
    }
}