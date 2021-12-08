<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {
	public $viewFolder = "";

	public function index()
	{
		$this->load->view('anasayfa');
	}

	public function yemek_list(){
					$viewData = new stdClass();
	        $this->load->model("yemek_model");

	        $viewData->yemek_list = $this->yemek_model->get_all(
	            array(
	                "isActive"  => 1
	            ),  "rank DESC"
	        );


	        $this->load->view('yemek',$viewData);

	    }


public function yemekdetay($url){
		if($url != "") {

			$viewData = new stdClass();

			$this->load->model("yemek_model");
			$yemek = $this->yemek_model->get(
                array(
                    "isActive"  => 1,
                    "url"       => $url
                ), "rank ASC"
            );
			if($yemek){
				$viewData->yemek = $yemek;
				$this->load->view('detay/yemekyazi',$viewData);
		  }
			else {
				// code...
			}
		}
			else {
				// code...
			}

}

public function bakim_list(){
				$viewData = new stdClass();
				$this->load->model("bakim_model");

				$viewData->bakim_list = $this->bakim_model->get_all(
						array(
								"isActive"  => 1
						),  "rank DESC"
				);


				$this->load->view('bakim',$viewData);

		}


public function bakimdetay($url){
	if($url != "") {

		$viewData = new stdClass();

		$this->load->model("bakim_model");
		$bakim = $this->bakim_model->get(
							array(
									"isActive"  => 1,
									"url"       => $url
							), "rank ASC"
					);
		if($bakim){
			$viewData->bakim = $bakim;
			$this->load->view('detay/bakimyazi',$viewData);
		}
		else {
			// code...
		}
	}
		else {
			// code...
		}

}


public function elisi_list(){
				$viewData = new stdClass();
				$this->load->model("elisi_model");

				$viewData->elisi_list = $this->elisi_model->get_all(
						array(
								"isActive"  => 1
						),  "rank DESC"
				);


				$this->load->view('elisi',$viewData);

		}


public function elisidetay($url){
	if($url != "") {

		$viewData = new stdClass();

		$this->load->model("elisi_model");
		$elisi = $this->elisi_model->get(
							array(
									"isActive"  => 1,
									"url"       => $url
							), "rank ASC"
					);
		if($elisi){
			$viewData->elisi = $elisi;
			$this->load->view('detay/elisiyazi',$viewData);
		}
		else {
			// code...
		}
	}
		else {
			// code...
		}

}

public function sosyalaktivite_list(){
				$viewData = new stdClass();
				$this->load->model("sosyalaktivite_model");

				$viewData->sosyalaktivite_list = $this->sosyalaktivite_model->get_all(
						array(
								"isActive"  => 1
						),  "rank DESC"
				);


				$this->load->view('sosyalaktivite',$viewData);

		}


public function sosyalaktivitedetay($url){
	if($url != "") {

		$viewData = new stdClass();

		$this->load->model("sosyalaktivite_model");
		$sosyalaktivite = $this->sosyalaktivite_model->get(
							array(
									"isActive"  => 1,
									"url"       => $url
							), "rank ASC"
					);
		if($sosyalaktivite){
			$viewData->sosyalaktivite = $sosyalaktivite;
			$this->load->view('detay/sosyalaktiviteyazi',$viewData);
		}
		else {
			// code...
		}
	}
		else {
			// code...
		}

}

}
