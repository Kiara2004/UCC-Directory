<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $staff = [
            [
                'name' => 'Dr. Robert Anderson',
                'email' => 'r.anderson@ucc.edu.jm',
                'phone' => '+1-876-555-0101',
                'department' => 'IT Department',
                'title' => 'Head of Department',
                'photo_url' =>"https://www.bu.edu/ssw/files/2017/07/Phillipe-Copeland-2025-Headshot-1024x1024.jpg",
                'bio' => 'Ph.D. in Computer Science with 20+ years of experience in academia and industry.',
            ],
            [
                'name' => 'Prof. Maria Garcia',
                'email' => 'm.garcia@ucc.edu.jm',
                'phone' => '+1-876-555-0102',
                'department' => 'IT Department',
                'title' => 'Senior Lecturer',
                'photo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMFabFID3LMB5EwMxVyuOuOJjJodtIcwgZlQ&s',
                'bio' => 'Specializing in Web Development and Full-Stack Technologies.',
            ],
            [
                'name' => 'Dr. James Chen',
                'email' => 'j.chen@ucc.edu.jm',
                'phone' => '+1-876-555-0103',
                'department' => 'IT Department',
                'title' => 'Lecturer - Database Systems',
                'photo_url' => 'https://cbcsa.usc.edu/wp-content/uploads/sites/3/2020/09/Dr.-Brandon-Bourgeois-930x620.jpg',
                'bio' => 'Expert in database design, optimization, and big data technologies.',
            ],
            [
                'name' => 'Ms. Sophia Williams',
                'email' => 's.williams@ucc.edu.jm',
                'phone' => '+1-876-555-0104',
                'department' => 'IT Department',
                'title' => 'Lecturer - Cybersecurity',
                'photo_url' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop',
                'bio' => 'Certified security professional with expertise in network security and ethical hacking.',
            ],
            [
                'name' => 'Mr. David Thompson',
                'email' => 'd.thompson@ucc.edu.jm',
                'phone' => '+1-876-555-0105',
                'department' => 'IT Department',
                'title' => 'Lecturer - Software Engineering',
                'photo_url' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=400&fit=crop',
                'bio' => 'Software architect with experience in enterprise system design and DevOps.',
            ],
            [
                'name' => 'Dr. Amelia Brown',
                'email' => 'a.brown@ucc.edu.jm',
                'phone' => '+1-876-555-0106',
                'department' => 'IT Department',
                'title' => 'Lecturer - Mobile Development',
                'photo_url' => 'https://img.freepik.com/free-photo/black-businesswoman-smiling_74855-1086.jpg?semt=ais_hybrid&w=740&q=80',
                'bio' => 'Mobile app developer specializing in iOS and Android platforms.',
            ],
            [
                'name' => 'Ms. Jennifer Lee',
                'email' => 'j.lee@ucc.edu.jm',
                'phone' => '+1-876-555-0107',
                'department' => 'IT Department',
                'title' => 'Lab Coordinator',
                'photo_url' => 'https://img.theeduledger.com/files/base/diverse/all/image/2022/08/16x9/Joy.62fd326a81beb.png?auto=format%2Ccompress&fit=max&q=70&w=400',
                'bio' => 'Manages IT labs and provides technical support to students.',
            ],
            [
                'name' => 'Mr. Marcus Johnson',
                'email' => 'm.johnson@ucc.edu.jm',
                'phone' => '+1-876-555-0108',
                'department' => 'IT Department',
                'title' => 'Lecturer - Cloud Computing',
                'photo_url' => 'https://webcentral.uc.edu/eprof/media/repository/1080BlackWayne2808.jpg',
                'bio' => 'Cloud architect with expertise in AWS, Azure, and Google Cloud platforms.',
            ],
        ];

        foreach ($staff as $member) {
            Staff::updateOrCreate(['email' => $member['email']], $member);
        }
    }
}
