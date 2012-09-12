<?php 

class News extends CI_model{
  public function __construct() {
          parent::__construct();
      }
   
      public function record_count() {
          return $this->db->count_all("News");
      }
   
      public function fetch_countries($limit, $start) {
          $this->db->limit($limit, $start);
          $query = $this->db->get("News");
   
          if ($query->num_rows() > 0) {
              foreach ($query->result() as $row) {
                  $data[] = $row;
              }
              return $data;
          }
          return false;
     }
}