<?php
namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model
{
    protected $table = 'image';
    // getting image path by course id last inserted and returning the path
    public function getImagePath($course_id)
    {
        $data = $this->where(['course_id' => $course_id])->first();
        return $data['url_img'];
    }

    // creating new image by inserting list of data
    public function createImage($data)
    {
        $this->db->table('image')->insert($data);
    }
}