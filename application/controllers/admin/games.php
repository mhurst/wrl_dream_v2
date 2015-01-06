<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Games extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("game_model");
    }

    public function listAllGames() {
        $data['games'] = $this->game_model->listGame();

        $this->template->load('admin/application', 'admin/game/list_all.php', $data);
    }
}
