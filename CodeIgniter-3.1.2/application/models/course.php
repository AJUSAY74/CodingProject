<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model {

     public function get_all_courses()
     {
         return $result = $this->db->query("SELECT * FROM courses ORDER BY courses.id DESC")->result_array();
     }

     public function add_course($course_info)
     {
        return $result = $this->db->query("INSERT INTO courses (Course_Name, Description, Date_Added) VALUES (?, ?, NOW())", array($course_info['Course_Name'], $course_info['Description']));
     }

     public function get_specific_course($course_id)
     {

      return  $result = $this->db->query("SELECT * FROM courses WHERE id = ?", $course_id)->row();
     }

     public function remove_course($course_id)
     {
        return $result = $this->db->query("DELETE FROM courses WHERE id = ?", $course_id);
     }

}
