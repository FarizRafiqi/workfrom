<?php

namespace Database\Seeders;

use App\Models\UseCase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UseCaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UseCase::insert([
            [
                'name' => 'Event',
                'parent_id' => null,
            ],
            [
                'name' => 'Charity Event',
                'parent_id' => 1,
            ],
            [
                'name' => 'Art Exhibition',
                'parent_id' => 1,
            ],
            [
                'name' => 'Awards Ceremony',
                'parent_id' => 1,
            ],
            [
                'name' => 'Workshop',
                'parent_id' => 1,
            ],
            [
                'name' => 'Classroom',
                'parent_id' => 1,
            ],
            [
                'name' => 'Presentation',
                'parent_id' => 1,
            ],
            [
                'name' => 'Church',
                'parent_id' => 1,
            ],
            [
                'name' => 'Coaching Session',
                'parent_id' => 1,
            ],
            [
                'name' => 'Corporate Event',
                'parent_id' => 1,
            ],
            [
                'name' => 'Focus Group Discussion',
                'parent_id' => 1,
            ],
            [
                'name' => 'Music Recording',
                'parent_id' => 1,
            ],
            [
                'name' => 'Seminar',
                'parent_id' => 1,
            ],
            [
                'name' => 'Speaker Panel',
                'parent_id' => 1,
            ],
            [
                'name' => 'Team Building Event',
                'parent_id' => 1,
            ],
            [
                'name' => 'Training',
                'parent_id' => 1,
            ],
            [
                'name' => 'Wedding Ceremony',
                'parent_id' => 1,
            ],
            [
                'name' => 'Meeting',
                'parent_id' => null,
            ],
            [
                'name' => 'Board Meeting',
                'parent_id' => 2,
            ],
            [
                'name' => 'Brainstorming',
                'parent_id' => 2,
            ],
            [
                'name' => 'Casting',
                'parent_id' => 2,
            ],
            [
                'name' => 'Client Marketing',
                'parent_id' => 2,
            ],
            [
                'name' => 'Corporate Meeting',
                'parent_id' => 2,
            ],
            [
                'name' => 'Creative Meeting',
                'parent_id' => 2,
            ],
            [
                'name' => 'Discussion',
                'parent_id' => 2,
            ],
            [
                'name' => 'Interview',
                'parent_id' => 2,
            ],
            [
                'name' => 'Off-site Meeting',
                'parent_id' => 2,
            ],
            [
                'name' => 'Sales Meeting',
                'parent_id' => 2,
            ],
            [
                'name' => 'Team Meeting',
                'parent_id' => 2,
            ],
            [
                'name' => 'Photo Shoot',
                'parent_id' => null,
            ],
            [
                'name' => 'Wedding Photo Shoot',
                'parent_id' => 3,
            ],
            [
                'name' => 'Product Photo Shoot',
                'parent_id' => 3,
            ],
            [
                'name' => 'Office',
                'parent_id' => null,
            ],
            [
                'name' => 'Private Office',
                'parent_id' => 4,
            ],
        ]);
    }
}
