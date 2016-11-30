<?php
class Event_model extends CI_Model {
 
    function __construct()
    {       
        parent::__construct();
    }
 
    function gets(){
		return $this->db->query("SELECT * as cnt FROM g4_write_trip as a ORDER BY a.wr_id DESC")->result();
    }

    function get($event_id){
		$this->db->select('wr_id');
        $this->db->select('wr_subject');
        $this->db->select('wt_content');
        $this->db->select('UNIX_TIMESTAMP(wr_datetime) AS created');
        return $this->db->get_where('event', array('id'=>$event_id))->row();
    }
 
    function add($title, $description){
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('topic',array(
            'title'=>$title,
            'description'=>$description
        ));
        return $this->db->insert_id();
    }
}
?>
