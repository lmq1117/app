<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderWaitEffectToEffect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:order-wait-effect-to-effect';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '待生效订单跳转到已生效';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //这里用往user表插数据模拟该定时任务
        //Log::channel("business")->info("定时任务执行一次");
        $index = DB::table('users')->count() + 1;
        $at = date('Y-m-d H:i:s');
        DB::insert("insert into users (name,email,email_verified_at,password,remember_token,created_at,updated_at) values ('sam{$index}','sam{$index}@qq.com','{$at}','1','{$index}','{$at}','$at')");

    }
}
