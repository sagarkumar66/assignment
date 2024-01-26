<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function index(){
		if(isset($_POST['ajax'])){
			$this->load->helper('url');
			$url = 'https://timesofindia.indiatimes.com/rssfeeds/-2128838597.cms?feedtype=json';
			$jsonData = file_get_contents($url);
			$dataArray = json_decode($jsonData, true);

			$data = [];
			foreach ($dataArray['channel']['item'] as $key => $value) {
				$data[$key][] = $value['title'];
				$data[$key][] = date('d-m-Y H:i', strtotime($value['pubDate']));
				$data[$key][] = '<a href='.$value['link'].' target="_blank"><i class="fa fa-external-link"></i></a>';
			}
			echo json_encode(['data' => $data]);die;
		}
		$this->load->view('index.php');
	}
}
