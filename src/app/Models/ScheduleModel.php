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
        $query = $this->db->query("SELECT DATE_FORMAT(datetime, '%d %M %Y') AS date, DATE_FORMAT(datetime, '%H:%i') AS time, name, locations FROM schedule JOIN course ON schedule.course_id = course.id WHERE provider_id = $id AND datetime >= '$today' GROUP BY datetime LIMIT $num_day");
        return $query->getResultArray();
    }

    // getting course schedule day with number of repetition (sum of schedule in a day) by extracting the day and the hour from the date
    public function getCourseScheduleDay($id)
    {
        $today = date('Y-m-d');
        $query = $this->db->query("SELECT DAYNAME(datetime) AS day, HOUR(datetime) AS hour, COUNT(*) AS repetition FROM schedule WHERE course_id = $id GROUP BY day, hour ORDER BY datetime ASC");
        return $query->getResultArray();
    }

    // creating new schedule by inserting start datetime, abd repeating it by adding interval of 7 days for n times
    public function createSchedule($id, $start, $n)
    {
        $query = $this->db->query("INSERT INTO schedule (course_id, datetime) VALUES ($id, '$start')");
        for ($i = 1; $i < $n; $i++) {
            $query = $this->db->query("INSERT INTO schedule (course_id, datetime) VALUES ($id, DATE_ADD('$start', INTERVAL $i WEEK))");
        }
    }

}