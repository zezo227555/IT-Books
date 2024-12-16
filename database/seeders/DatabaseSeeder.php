<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\ScintificJournal;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for($i = 1; $i <= 10; $i ++) {
            User::create([
                'name' => "admin_$i",
                'role' => 'مسؤول نظام',
                'email' => "admin_$i@gmail.com",
                'password' => Hash::make('admin123'),
            ]);
        }

        for($i = 1; $i <= 10; $i ++) {
            User::create([
                'name' => "teacher_$i",
                'role' => 'عضو هيئة تدريس',
                'email' => "teacher_$i@gmail.com",
                'password' => Hash::make('teacher123'),
            ]);
        }

        for($i = 1; $i <= 10; $i ++) {
            User::create([
                'name' => "student_$i",
                'role' => 'طالب',
                'email' => "student_$i@gmail.com",
                'password' => Hash::make('student123'),
            ]);
        }

        for($i = 1; $i <= 10; $i ++) {
            Book::create([
                'title' => "كتاب علمي رقم $i",
                'discreption' => 'يستعرض هذا الكتاب العلمي بعمق موضوع علمي، حيث يقدم تحليلاً دقيقاً ومفصلاً مدعوماً بأحدث الدراسات والتجارب العلمية. يهدف إلى تزويد القارئ بفهم شامل للمفاهيم الأساسية، مع استكشاف التطبيقات العملية والآفاق المستقبلية',
                'cover' => 'default.webp',
                'isbn' => "1100$i",
                'file' => 'book_d.pdf',
            ]);
        }

        for($i = 1; $i <= 10; $i ++) {
            ScintificJournal::create([
                'name' => "مجلة علمية رقم $i",
                'discreption' => 'تستعرض هذة المجلة العلمية بعمق موضوع علمي، حيث يقدم تحليلاً دقيقاً ومفصلاً مدعوماً بأحدث الدراسات والتجارب العلمية. يهدف إلى تزويد القارئ بفهم شامل للمفاهيم الأساسية، مع استكشاف التطبيقات العملية والآفاق المستقبلية',
                'issn' => "1200$i",
                'user_id' => 1,
            ]);
        }
    }
}
