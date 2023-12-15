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
                'what_you_will_learn' => 'Python fundamentals, data structures, OOP concepts, web development with Django, etc.',
                'course_content' => '1. Introduction to Python
                             2. Data Structures
                             3. Object-Oriented Programming
                             4. Web Development with Django
                             5. Scientific Computing with NumPy
                             6. Data Visualization with Matplotlib',
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
                'what_you_will_learn' => 'HTML, CSS, JavaScript, React, Node.js, MongoDB, etc.',
                'course_content' => '1. Front-End Development
                             2. Back-End Development
                             3. Full Stack Development',
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
                'what_you_will_learn' => 'Data analysis, machine learning, data visualization, etc.',
                'course_content' => '1. Introduction to Data Science
                             2. Data Analysis
                             3. Machine Learning
                             4. Data Visualization',
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
                'what_you_will_learn' => 'UX/UI design principles, user research, UI prototyping, etc.',
                'course_content' => '1. Introduction to UX/UI Design
                             2. User Research
                             3. UI Prototyping
                             4. UI Design',
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
                'what_you_will_learn' => 'Digital marketing strategies, SEO, social media marketing, etc.',
                'course_content' => '1. Introduction to Digital Marketing
                             2. SEO
                             3. Social Media Marketing
                             4. Digital Marketing Strategies',
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
                'what_you_will_learn' => 'Cybersecurity principles, ethical hacking, network security, etc.',
                'course_content' => '1. Introduction to Cybersecurity
                             2. Ethical Hacking
                             3. Network Security',
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
                'what_you_will_learn' => 'Introduction to cloud technologies, AWS, cloud infrastructure, etc.',
                'course_content' => '1. Introduction to Cloud Computing
                             2. AWS
                             3. Cloud Infrastructure',
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
                'what_you_will_learn' => 'Mobile app development, iOS, Android, etc.',
                'course_content' => '1. Introduction to Mobile App Development
                             2. iOS
                             3. Android',
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