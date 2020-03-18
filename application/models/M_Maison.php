<?php 

 
 class M_Maison extends CI_model
 {

   public $idm;
   public $nom;
   public $adress;
    public function liste()
    {
    	return $this->db->select('*')->from('Maison')->get()->result();
    }

      public function addmysql()
  			{
  				if (empty($this->idm)==TRUE) {
  					 $this->db->insert('Maison',$this);
  				}
  				 else{
  				 	  $this->db->UPDATE('Maison',$this,array('idm' => $this->idm));
  				 }
  				 if ($this->db->affected_rows()==TRUE) 
						return TRUE;
					else
						return FALSE;
  			}

  	public function get_record()
	{
		return $this->db->select('*')
		->from('Maison')
		->where('idm',$this->idm)
		->get()
		->row();
	}

	public function delete()
	{
		return $this->db->delete('Maison',array('idm' => $this->idm));
		if ($this->db->affected_rows()==true) {
				return true;
		}else{
			return  false;
		}
		
	}

 }


 ?>