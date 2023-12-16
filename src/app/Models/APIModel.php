<?php
namespace App\Models;

use CodeIgniter\Model;

class APIModel extends Model
{
    protected $userTable = 'user';
    protected $courseTable = 'course';
    protected $viewTable = 'view_courses';
    protected $scheduleTable = 'schedule';

    // return all from course_view
    public function getDataCourse()
    {
        return $this->db->table($this->viewTable)->get()->getResultArray();
    }

    // getting course with list of course id
    public function getDataCourseById($id)
    {
        return $this->db->table($this->viewTable)->whereIn('id', $id)->get()->getResultArray();
    }

    // get schedule by list of course id
    public function getDataScheduleByCourseId($id)
    {
        return $this->db->table($this->scheduleTable)->whereIn('course_id', $id)->get()->getResultArray();
    }

    // get schedule by list 
    public function getCourseScheduleDay($id)
    {
        $today = date('Y-m-d');
        $query = $this->db->query("SELECT DAYNAME(datetime) AS date, DATE_FORMAT(datetime, '%H:%i') AS time, COUNT(*) AS repetition FROM schedule WHERE course_id = $id GROUP BY date, time ORDER BY datetime ASC");
        return $query->getResultArray();
    }
}