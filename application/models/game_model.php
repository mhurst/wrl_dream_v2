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
        $this->db->insert('game', array('gameName' => $name));
    }

    public function editGame($id, $options = array()) {
        $this->db->where('id', $id);
        $this->db->update('game', $options);
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

    public function deleteGame($ids) {
        if (!empty($ids)) {
            foreach ($ids as $id) {
                $this->db->where('id', $id);
                $this->db->update('game', array('active' => 0));
            }
        }

        return false;
    }
}
