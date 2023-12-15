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
}
