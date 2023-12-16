<?php
namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
   protected $table = 'course';
   public function getAllCourse()
   {
      return $this->findAll();
   }

   public function getCourseById($id)
   {
      return $this->where(['id' => $id])->first();
   }
}