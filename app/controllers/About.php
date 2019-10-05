<?php 

class About extends Controller {

	public function index($nama = 'Azhar', $pekerjaan = 'mahasiswa', $umur = 23)
	{

		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur ;
		$data['judul'] = 'About Me';
		$this->view('templates/header', $data);
		$this->view('templates/footer');
		$this->view('about/index', $data);
	}

	public function page()
	{
		$data['judul'] = 'page';
		$this->view('about/page');
		$this->view('templates/header', $data);
		$this->view('templates/footer');
	}
}

 ?>