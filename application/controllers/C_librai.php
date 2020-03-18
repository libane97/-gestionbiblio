<?php 
 
 /**
  * 
  */
 class C_librai extends CI_Controller
 {

 	public function __construct()
     	{
     	   parent::__construct();
     	    if (empty($this->session->id)==true)
               header('location:'.site_url('C_acceuil'));
     	   $this->load->model('M_librai','ml');
     	}

    		public function index()
     	{    
     		$resulte = $this->ml->liste();
     		$data_vue['donne'] = $resulte;
     		$data_vue['titre'] ="Les libraire";
     		$data['vue_a_charger']='V_librai';
     		$data['data_vue']=$data_vue;
     		$this->load->view('template',$data);
     	}


     	   public function ajout()
   	     {
   	      
     	   $data_vue['titre']="Ajout un libraire";
  		   $data['vue_a_charger']="V_librai_from";
  		   $data['data_vue']=$data_vue;
		   $this->load->view('template',$data);

   	     }

     	public function ajouter()
     	{
     		  if(empty($this->input->post('idl'))==false){
			  $this->ml->idl=$this->input->post('idl');
			  }
     		$this->ml->nom=$this->input->post('nom');
            $this->ml->adress=$this->input->post('adress');
		  	$reponse=$this->ml->addmysql();
		    if ($reponse==true ) 
                     $key=1;
                   else
                     $key=0;

                     if (empty($this->input->post('idl'))==false) {
                       header("location:".site_url("C_librai/index?key=$key"));
                     }else{
                       header("location:".site_url("C_librai/ajout?key=$key"));
                     }
     	}


	public function modif(){
			//var_dump($_GET);
			
			$this->ml->idl=$_GET['id'];
			$row=$this->ml->get_record();
			//var_dump($row);
			$data_vue['titre']="Modification libraire";
			$data_vue['row']=$row;
			$data['vue_a_charger']="V_librai_from";
			$data['data_vue']=$data_vue;
			$this->load->view('template',$data);

		} 

		public function delete(){
		//var_dump($_GET);
		
		$this->ml->idl=$_GET['id'];
		$reponse=$this->ml->delete();
		if ($reponse==true) {
			header("location:".site_url('C_librai'));
		}
		//var_dump($row);
		
	}



 }



 ?>