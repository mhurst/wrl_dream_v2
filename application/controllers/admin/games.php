<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Games extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("game_model");
    }

    public function listAllGames() {
        $data['games'] = $this->game_model->listGame(array('active' => 1));

        $this->template->load('admin/application', 'admin/game/list_all.php', $data);
    }

    public function addGame() {
    	$this->template->load('admin/application', 'admin/game/add_game_form.php');
    }

    public function createGame() {
    	$name = $this->input->post('game-name');

    	$this->game_model->addGame($name);

    	redirect("admin/listgames");
    }

    public function editGame($id) {
    	$data['game'] = $this->game_model->listGame(array('active' => 1, 'id' => $id));
    	$this->template->load('admin/application', 'admin/game/edit_game_form.php', $data);
    }

    public function updateGame() {
    	$name = $this->input->post('game-name');
    	$id = $this->input->post('id');

    	$this->game_model->editGame($id, array('gameName' => $name));

    	redirect("admin/listgames");
    }

    public function removeGame($id) {

    	$ids = array('id' => $id);
    	$this->game_model->deleteGame($ids);

    	redirect("admin/listgames");
    }
}
