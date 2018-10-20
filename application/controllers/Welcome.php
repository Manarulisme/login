<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
 -->

 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Welcome extends CI_Controller {
  public function __construct() {
   parent::__construct();

   $this->load->database();
   $this->load->helper('url');

   $this->load->library('grocery_CRUD');
  }

  public function _example_output($output = null) {
   $this->load->view('welcome_message.php',$output);
  }
  
  public function index() {
    $crud = new grocery_CRUD();

    $crud->set_table('nama_tabel');
    $crud->set_subject('Data');

    $output = $crud->render();

    $this->_example_output($output);
  }
 }
?>