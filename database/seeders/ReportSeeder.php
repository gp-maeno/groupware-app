<?php

namespace Database\Seeders;

use App\Models\Report;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            // 過去30日分の日報を作成
            for ($i = 0; $i < 30; $i++) {
                $date = Carbon::now()->subDays($i);
                
                Report::create([
                    'user_id' => $user->id,
                    'report_date' => $date->format('Y-m-d'),
                    'title' => '日報: ' . $date->format('Y年m月d日'),
                    'content' => '本日の業務報告です。' . PHP_EOL . '各種タスクの進捗状況をお知らせします。',
                    'tasks_completed' => '- タスク1の完了' . PHP_EOL . '- タスク2の進捗：80%' . PHP_EOL . '- 会議への参加',
                    'tasks_planned' => '- タスク3への着手' . PHP_EOL . '- タスク2の完了' . PHP_EOL . '- 明日の会議準備',
                    'issues' => $i % 3 === 0 ? '特になし' : '- リソースの不足' . PHP_EOL . '- スケジュールの遅延',
                ]);
            }
        }
    }
}
