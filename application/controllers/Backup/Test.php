

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_m');
		$this->load->helper(array('form', 'url'));
		$this->load->model('content_m');
	}
	public function index()
	{
		// $editor = file_get_contents('assets/temp_data/pdf.html', true);
		$dom=new DOMDocument();
		// $dom->load("test/text.txt");
		$dom->load("test/text.xml");

		$root=$dom->documentElement; // This can differ (I am not sure, it can be only documentElement or documentElement->firstChild or only firstChild)
		// die(print_r($root));
		$nodesToDelete=array();

		$markers=$root->getElementsByTagName('Listing');
		// $markers=$root->getElementsByTagName('System');

		// Loop trough childNodes
		foreach ($markers as $marker) {
		    $type=$marker->getElementsByTagName('Acreage')->item(0)->textContent;
		    // $title=$marker->getElementsByTagName('title')->item(0)->textContent;
		    // $address=$marker->getElementsByTagName('address')->item(0)->textContent;
		    // $latitude=$marker->getElementsByTagName('latitude')->item(0)->textContent;
		    // $longitude=$marker->getElementsByTagName('longitude')->item(0)->textContent;

		    // Your filters here

		    // To remove the marker you just add it to a list of nodes to delete
		    $nodesToDelete[]=$type;
		}

		// You delete the nodes
		// foreach ($nodesToDelete as $node) $node->parentNode->removeChild($node);

		// echo $dom->saveXML();
		// $dom->save("test/1.xml");
		print_r($nodesToDelete);
	}
}
