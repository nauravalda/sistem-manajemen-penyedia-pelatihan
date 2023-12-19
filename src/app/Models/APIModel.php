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

    // getting course schedule with specific id where the date is greater than today, group by date, and limiting the number of date to num_day
    public function getCourseSchedule($id, $num_day)
    {
        $id = implode(',', $id);
        log_message('info', 'Course id: ' . $id[0]);
        $today = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM schedule WHERE course_id IN ($id) AND datetime >= '$today' GROUP BY datetime LIMIT $num_day");
        return $query->getResultArray();
    }

    // get schedule by list of course id
    public function getDataScheduleByCourseId($id, $num_day)
    {
        $today = date('Y-m-d');
        return $this->db->query("SELECT DATE_FORMAT(datetime, '%d %M %Y') AS date, DATE_FORMAT(datetime, '%H:%i') AS time, name, locations FROM schedule JOIN course ON schedule.course_id = course.id WHERE course_id IN ($id) AND datetime >= '$today' GROUP BY date ORDER BY datetime LIMIT $num_day")->getResultArray();
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

    public function searchDataCourse($searchQuery, $courseList)
    {
        // searching by name ignoring case
        log_message('info', 'Search query: [' . $searchQuery . '] in ' . $courseList);


        // if the course list is empty, search in all courses
        if ($courseList == 'none') {
            log_message('info', 'Searching in all courses');
            $result = $this->db->table($this->viewTable)->like('LOWER(name)', strtolower($searchQuery), 'both')->get()->getResultArray();

            // return $this->db->table($this->viewTable)->get()->getResultArray();
        } else {
            log_message('info', 'Searching in selected courses');
            // converting into list of course id
            $courseList = explode(',', $courseList);
            $result = $this->db->table($this->viewTable)->like('LOWER(name)', strtolower($searchQuery), 'both')->whereIn('id', $courseList)->get()->getResultArray();
        }
    }
}