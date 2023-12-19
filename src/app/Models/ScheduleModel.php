<?php
namespace App\Models;

use CodeIgniter\Model;

class ScheduleModel extends Model
{
    protected $table = 'schedule';
    protected $course = 'course';
    public function getDataSchedule()
    {
        return $this->findAll();
    }

    // getting course schedule with specific id where the date is greater than today, group by date, and limiting the number of date to num_day
    public function getCourseSchedule($id, $num_day)
    {
        $today = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM schedule WHERE course_id = $id AND datetime >= '$today' GROUP BY datetime LIMIT $num_day");
        return $query->getResultArray();
    }

    // getting course schedule with specific provider_id where the date is greater than today, group by date, and limiting the number of date to num_day
    public function getProviderSchedule($id, $num_day)
    {
        $today = date('Y-m-d');
        $query = $this->db->query("SELECT DATE_FORMAT(datetime, '%d %M %Y') AS date, DATE_FORMAT(datetime, '%H:%i') AS time, name, locations FROM schedule JOIN course ON schedule.course_id = course.id WHERE provider_id = $id AND datetime >= '$today' GROUP BY datetime ORDER BY datetime LIMIT $num_day");
        return $query->getResultArray();
    }

    // getting schedule day, first occurrence, number of repetition by weekly interval, using course id
    public function getCourseScheduleRepetitions($id)
    {
        // selecting all schedule  by a course_id
        $data = $this->where("course_id", $id)->doFindAll();

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

    // creating new schedule by inserting start datetime, abd repetitioning it by adding interval of 7 days for n times
    public function createSchedule($id, $start, $n)
    {
        $query = $this->db->query("INSERT INTO schedule (course_id, datetime) VALUES ($id, '$start')");
        for ($i = 1; $i < $n; $i++) {
            $query = $this->db->query("INSERT INTO schedule (course_id, datetime) VALUES ($id, DATE_ADD('$start', INTERVAL $i WEEK))");
        }
    }

    public function deleteSchedule($id)
    {
        $this->db->table($this->table)->delete(['course_id' => $id]);
    }
}