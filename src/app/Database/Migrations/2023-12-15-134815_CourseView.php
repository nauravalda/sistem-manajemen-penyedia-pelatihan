<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CourseView extends Migration
{
    public function up()
    {

        $sql = "
            CREATE VIEW view_courses AS
            SELECT
                course.id AS id,
                course.name AS name,
                course.url_img AS url_img,
                course.what_you_will_learn AS what_you_will_learn,
                course.course_content AS course_content,
                course.desc AS `desc`,
                course.price AS price,
                course.tags AS tags,
                course.locations AS locations,
                course.provider_id AS provider_id,
                user.name AS provider_name
            FROM
                (course JOIN user ON (course.provider_id = user.id))
        ";
        
        $this->db->query($sql);
    }

    public function down()
    {
        $this->db->query("DROP VIEW view_courses");
    }
}
