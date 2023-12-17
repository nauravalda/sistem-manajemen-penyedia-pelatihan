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
    public function getCourseScheduleRepetitions($id)
    {
        // selecting all schedule  by a course_id
        $data = $this->db->table($this->scheduleTable)->where("course_id", $id)->get()->getResultArray();

        $result = [];
        foreach ($data as $item) {
            $datetime = new \DateTime($item['datetime']);

            $inserted = false;
            foreach ($result as &$group) {
                if ($datetime->diff(new \DateTime($group['start_date']))->days == 7 || $datetime->diff(new \DateTime($group['end_date']))->days == 7) {
                    $group['repetition']++;
                    $inserted = true;
                    if ($datetime < new \DateTime($group['start_date'])) {
                        $group['start_date'] = $datetime->format('Y-m-d');
                    } else if ($datetime > new \DateTime($group['end_date'])) {
                        $group['end_date'] = $datetime->format('Y-m-d');
                    }
                    break;
                }
            }

            if (!$inserted) {
                $newGroup = [
                    'day' => $datetime->format('l'), // Day in text
                    'time' => $datetime->format('H:i:s'), // Time
                    'start_date' => $datetime->format('Y-m-d'), // Start date
                    'end_date' => $datetime->format('Y-m-d'), // End date
                    'repetition' => 1, // Initial count
                ];
                $result[] = $newGroup;
            }
        }

        return $result;
    }
}