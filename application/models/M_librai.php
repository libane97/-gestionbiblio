<?php 

 
 class M_librai extends CI_model
 {

   public $idl;
   public $nom;
   public $adress;
    public function liste()
    {
    	return $this->db->select('*')->from('lib')->get()->result();
    }
   
      public function addmysql()
  			{
  				if (empty($this->idl)==TRUE) {
  					 $this->db->insert('lib',$this);
  				}
  				 else{
  				 	  $this->db->UPDATE('lib',$this,array('idl' => $this->idl));
  				 }
  				 if ($this->db->affected_rows()==TRUE) 
						return TRUE;
					else
						return FALSE;
  			}

  	public function get_record()
	{
		return $this->db->select('*')
		->from('lib')
		->where('idl',$this->idl)
		->get()
		->row();
	}

	public function delete()
	{
		return $this->db->delete('lib',array('idl' => $this->idl));
		if ($this->db->affected_rows()==true) {
				return true;
		}else{
			return  false;
		}
		
	}

 }


 ?>