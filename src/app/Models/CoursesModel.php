<?php
namespace App\Models;

use CodeIgniter\Model;

class CoursesModel extends Model
{
   protected $table = 'course';
   protected $table_view = 'view_courses';
   protected $allowedFields = ['id', 'provider_id', 'name', 'url_img', 'what_you_will_learn', 'course_content', 'desc', 'price', 'tags', 'locations'];
   public function getDataCourse()
   {
      // return all from course_view
      return $this->db->table($this->table_view)->get()->getResultArray();
   }

   public function getDataCourseById($id)
   {
      // return all from course_view where provider_id = $id
      return $this->db->table($this->table_view)->where(['id' => $id])->get()->getResultArray();
      
   }


   public function getDataCourseByProviderId($id)
   {
      // return all from course_view where provider_id = $id
      return $this->db->table($this->table_view)->where(['provider_id' => $id])->get()->getResultArray();
   }

   // creating new course by inserting list of data and returning the id of the new course
   public function createCourse($data)
   {
      $this->db->table('course')->insert($data);
      return $this->db->insertID();
   }

   public function updateCourse($id, $data)
   {
      $this->db->table('course')->update($data, ['id' => $id]);
   }

   public function deleteCourse($id)
   {
      // deleting image from uploads folder
      $course = $this->db->table('course')->where(['id' => $id])->get()->getResultArray();
      $img_url = $course[0]['url_img'];
      $img_name = explode('/', $img_url);
      $img_name = $img_name[count($img_name) - 1];
      unlink('./uploads/' . $img_name);
      
      // deleting course from database
      $this->db->table('course')->delete(['id' => $id]);
   }


}
