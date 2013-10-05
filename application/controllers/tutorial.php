<?php 
class Tutorial extends CI_Controller{

	public function inicio(){
		/*$this->load->view('inicio');*/
		$data['title']='Inicio';
		$data['main_content']='inicio';/*aqui cargando la pagina dinamicamente dentro del contenedor del index*/
		$this->load->view('includes/main_template',$data);

	}
	public function acercade(){
		/*$this->load->view('acercade');*/
		$data['title']='Acerca de';
		$data['main_content']='acercade';/*aqui cargando la pagina dinamicamente dentro del contenedor del index*/
		$this->load->view('includes/main_template',$data);

	}
	public function servicios(){
		/*$this->load->view('servicios');*/
		$data['title']='Servicios';
		$data['main_content']='servicios';/*aqui cargando la pagina dinamicamente dentro del contenedor del index*/
		$this->load->view('includes/main_template',$data);

	}
	public function contacto(){
		/*$this->load->view('contacto');*/
		$data['title']='Contacto';
		$data['main_content']='contacto';/*aqui cargando la pagina dinamicamente dentro del contenedor del index*/
		$this->load->view('includes/main_template',$data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

?>