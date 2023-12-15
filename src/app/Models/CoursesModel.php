<?php
namespace App\Models;

use CodeIgniter\Model;

class CoursesModel extends Model
{
   protected $table = 'view_courses';
   public function getDataCourse()
   {
      return $this->findAll();
   }

   public function getDataCourseById($id)
   {
      return $this->where(['id' => $id])->first();
   }

   // creating new course by inserting list of data and returning the id of the new course
   public function createCourse($data)
   {
      $this->db->table('course')->insert($data);
      return $this->db->insertID();
   }


}
