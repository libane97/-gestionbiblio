<?php 

 
 class M_livre extends CI_model
 {

   public $idlv;
   public $numero;
   public $titre;
   public $auteurs;
   public $nbrp;
   public $prixe;
   public $idl;
   public $idm;
    public function liste()
    {
    	return $this->db->select('*')->from('livre')->get()->result();
    }

   	public function get_data()
  	{
  		$sql = "SELECT lv.*,l.nomL, m.nomM FROM 
  		livre lv, lib l, maison m
  		 where
  		    lv.idl=l.idl and lv.idm=m.idm";
  		$resulte=$this->db->query($sql)->result();
  		 return $resulte;

  	}


      public function addmysql()
  			{
  				if (empty($this->idlv)==TRUE) {
  					 $this->db->insert('livre',$this);
  				}
  				 else{
  				 	  $this->db->UPDATE('livre',$this,array('idlv' => $this->idlv));
  				 }
  				 if ($this->db->affected_rows()==TRUE) 
						return TRUE;
					else
						return FALSE;
  			}

  	public function get_record()
	{
		return $this->db->select('*')
		->from('livre')
		->where('idlv',$this->idlv)
		->get()
		->row();
	}

	public function delete()
	{
		return $this->db->delete('livre',array('idlv' => $this->idlv));
		if ($this->db->affected_rows()==true) {
				return true;
		}else{
			return  false;
		}
		
	}

 }


 ?>