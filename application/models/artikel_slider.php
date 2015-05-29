<?php
Class artikel_slider extends CI_Model
{
  function get_newest_article()
  {
    $this -> db -> select('*');
    $this -> db -> from('infografik');
    $this-> db->join('image_inforgrafik', 'infografik.id_info_grafik = image_inforgrafik.id_info_grafik');
    $this -> db -> where('ID_INFO_GRAFIK', '80002');
    $this -> db -> limit(1);

    $query = $this -> db -> get();

    if($query -> num_rows() == 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }
}
?>