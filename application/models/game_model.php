<?php
/**
 * Game Model
 *
 * @package WRL Dream system
 * @author Matthew Hurst:piznac
 *
 */
class Game_model extends CI_Model {

    public function addGame($name) {
        $this->db->insert('game', $name);
    }

    public function editGame($id, $name) {
        $this->db->where('id', $id);
        $this->db->update('game', $name);
    }

    public function listGame($options = array()) {
        if (!empty($options)) {
            foreach ($options as $key => $value) {
                $this->db->where($key, $value);
            }

            $query = $this->db->get('game');

            return $query->result();
        }

        $query = $this->db->get('game');

        return $query->result();
    }

    public function deleteGame($ids = array()) {
        if (!empty($ids)) {
            foreach ($ids as $value) {
                $this->db->where('id', $value);
            }

            $this->db->delete('mytable');
        }

        return false;
    }
}
