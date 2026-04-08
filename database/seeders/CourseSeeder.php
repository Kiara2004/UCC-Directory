<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'code' => 'IT101',
                'name' => 'Introduction to Programming',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Fundamental programming concepts including variables, data types, control structures, and functions using Python.',
            ],
            [
                'code' => 'IT102',
                'name' => 'Web Development Basics',
                'credits' => 3,
                'prerequisites' => 'IT101',
                'description' => 'Learn HTML, CSS, and JavaScript to create responsive websites and user interfaces.',
            ],
            [
                'code' => 'IT201',
                'name' => 'Object-Oriented Programming',
                'credits' => 4,
                'prerequisites' => 'IT101',
                'description' => 'Master OOP principles including classes, inheritance, polymorphism, and design patterns.',
            ],
            [
                'code' => 'IT202',
                'name' => 'Database Management',
                'credits' => 4,
                'prerequisites' => 'IT101',
                'description' => 'Design and manage relational databases using SQL, normalization, and query optimization.',
            ],
            [
                'code' => 'IT203',
                'name' => 'Web Application Development',
                'credits' => 4,
                'prerequisites' => 'IT102, IT201',
                'description' => 'Build full-stack web applications using modern frameworks like Laravel or Django.',
            ],
            [
                'code' => 'IT204',
                'name' => 'Mobile Application Development',
                'credits' => 3,
                'prerequisites' => 'IT201',
                'description' => 'Develop mobile applications for iOS and Android using Flutter or React Native.',
            ],
            [
                'code' => 'IT301',
                'name' => 'Software Engineering',
                'credits' => 4,
                'prerequisites' => 'IT201, IT202',
                'description' => 'Learn software development lifecycle, design methodologies, testing, and project management.',
            ],
            [
                'code' => 'IT302',
                'name' => 'Cybersecurity Fundamentals',
                'credits' => 3,
                'prerequisites' => 'IT201',
                'description' => 'Understand security principles, cryptography, network security, and secure coding practices.',
            ],
            [
                'code' => 'IT303',
                'name' => 'Cloud Computing & Deployment',
                'credits' => 3,
                'prerequisites' => 'IT203',
                'description' => 'Deploy applications on AWS, Azure, or Google Cloud. Learn containerization with Docker and Kubernetes.',
            ],
            [
                'code' => 'IT304',
                'name' => 'Capstone Project',
                'credits' => 6,
                'prerequisites' => 'IT301, IT302, IT303',
                'description' => 'Develop a comprehensive real-world project applying knowledge from all major courses.',
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
