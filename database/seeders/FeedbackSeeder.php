<?php

namespace Database\Seeders;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_id = User::where('email', 'ali@gmail.com')->value('id');

        $feedbackData = [
            [
                'title' => 'Bug Report 1',
                'description' => 'This is a bug report description.',
                'category' => 'bug report',
                'user_id' => $user_id,
            ],
            [
                'title' => 'Feature Request 1',
                'description' => 'This is a feature request description.',
                'category' => 'feature request',
                'user_id' => $user_id,
            ],
            [
                'title' => 'Improvement 1',
                'description' => 'This is an improvement description.',
                'category' => 'improvement',
                'user_id' => $user_id,
            ],
        ];

        // Create feedback entries
        foreach ($feedbackData as $data) {
            DB::table('feedbacks')->insert($data);
        }
    }

}
