<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("users_model");
    }

    public function listAllUsers() {
        $data['users'] = $this->users_model->listUserse(array('active' => 1));

        $this->template->load('admin/application', 'admin/users/list_all.php', $data);
    }

    public function addUsers() {
    	$this->template->load('admin/application', 'admin/users/add_users_form.php');
    }

    public function createUsers() {
    	$options = array();

    	$this->users_model->addUsers($options);

    	redirect("admin/listusers");
    }

    public function editUsers($id) {
    	$data['game'] = $this->users_model->listGame(array('active' => 1, 'id' => $id));
    	$this->template->load('admin/application', 'admin/game/edit_users_form.php', $data);
    }

    public function updateUsers() {
    	$options = array();
    	$id = $this->input->post('id');

    	$this->users_model->editUsers($id, $options));

    	redirect("admin/listusers");
    }

    public function removeUsers($id) {

    	$ids = array('id' => $id);
    	$this->users_model->deleteUsers($ids);

    	redirect("admin/listusers");
    }
}
