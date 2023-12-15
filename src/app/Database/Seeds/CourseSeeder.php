<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'provider_id' => 1,
                'name' => 'The Complete Python Bootcamp From Zero to Hero in Python',
                'url_img' => NULL,
                'desc' => 'Learn Python like a Professional Start from the basics and go all the way to creating your own applications and games',
                'price' => 50000,
                'tags' => '#PythonBootcamp #PythonProgramming #LearnPython #CodingBootcamp #ProgrammingCourse',
                'locations' => 'Jalan Mawar Indah VIII No. 15, RT 03/RW 07, Kelurahan Kebonwaru, Kecamatan Batununggal, Bandung',
            ],
            [
                'id' => 2,
                'provider_id' => 1,
                'name' => 'Full Stack Developer Bootcamp',
                'url_img' => NULL,
                'desc' => 'Intensive bootcamp covering front-end and back-end development.',
                'price' => 150000,
                'tags' => 'Full Stack, Web Development, Coding',
                'locations' => 'Online',
            ],
            [
                'id' => 3,
                'provider_id' => 2,
                'name' => 'Data Science Bootcamp',
                'url_img' => NULL,
                'desc' => 'Learn data analysis, machine learning, and data visualization.',
                'price' => 20000,
                'tags' => 'Data Science, Machine Learning, Analytics',
                'locations' => 'Online',
            ],
            [
                'id' => 4,
                'provider_id' => 3,
                'name' => 'UX/UI Design Bootcamp',
                'url_img' => NULL,
                'desc' => 'Focuses on user experience (UX) and user interface (UI) design principles.',
                'price' => 180000,
                'tags' => 'UX/UI Design, User Experience, UI Prototyping',
                'locations' => 'Online',
            ],
            [
                'id' => 5,
                'provider_id' => 4,
                'name' => 'Digital Marketing Bootcamp',
                'url_img' => NULL,
                'desc' => 'Learn digital marketing strategies, SEO, and social media marketing.',
                'price' => 170000,
                'tags' => 'Digital Marketing, SEO, Social Media Marketing',
                'locations' => 'Online',
            ],
            [
                'id' => 6,
                'provider_id' => 2,
                'name' => 'Cybersecurity Bootcamp',
                'url_img' => NULL,
                'desc' => 'Covers cybersecurity principles, ethical hacking, and network security.',
                'price' => 220000,
                'tags' => 'Cybersecurity, Ethical Hacking, Network Security',
                'locations' => 'Online',
            ],
            [
                'id' => 7,
                'provider_id' => 1,
                'name' => 'Cloud Computing Bootcamp',
                'url_img' => NULL,
                'desc' => 'Introduction to cloud technologies, AWS, and cloud infrastructure.',
                'price' => 190000,
                'tags' => 'Cloud Computing, AWS, Cloud Infrastructure',
                'locations' => 'Online',
            ],
            [
                'id' => 8,
                'provider_id' => 1,
                'name' => 'Mobile App Development Bootcamp',
                'url_img' => NULL,
                'desc' => 'Learn to develop mobile applications for iOS and Android.',
                'price' => 160000,
                'tags' => 'Mobile App Development, iOS, Android',
                'locations' => 'Online',
            ],
        ];

        // Memasukkan data ke dalam tabel 'course'
        $this->db->table('course')->insertBatch($data);
    }
}