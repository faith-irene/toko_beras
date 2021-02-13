<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_auth extends CI_Model {


public function sign_up($data)
	{
		$this->db->insert('tbl_user', $data);
	}	

}

/* End of file Model_auth.php */
/* Location: ./application/models/Model_auth.php */