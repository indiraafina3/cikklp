<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Read
 *
 * @package     Controllers
 * @subpackage  null
 * @category    Controllers
 * @author      Guilherme Gatti
 * @link        null
 */
/**
 * 
 */

class Suratpeng extends CI_Controller {

	/**
	 * Construct of CI_Controller
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function __construct()
	{
	
		/**
		 * Instead the construct of CI_Controller
		 */
		parent::__construct();


	}

	/**
	 * Index of the read page
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function index()
	{

		/**
		 * Save in a variable the third segment of the url
		 *
		 * @var string $segment  Select the third segment of the url
		 */


		/**
		 * Read the user in the table using the index_model
		 *
		 * @var array $query  Read a specific user
		 */

		
		/**
		 * Save the query result in a new variable
		 *
		 * @var array $data  Create a key and save all the results
		 */
		

		/**
		 * Load all the views and send the data variable
		 */

		$data = $this->mymodel->Get_sp();
		$this->load->view('daftarsp', array('data' => $data ));//array('data' => $data ));

		// $data = $this->mymodel->GetMahasiswa();
		// $this->load->view('lihatmhs', array('data' => $data ));
	}

}
