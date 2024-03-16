<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'title1',
                'desc' => 'desc1',
                'text'=>'text1',
                'date'=>date('11.11.2004'),
            ],
            [
                'title' => 'title2',
                'desc' => 'desc2',
                'text'=>'text2',
                'date'=>date('11.11.2005'),
            ],
            [
                'title' => 'title3',
                'desc' => 'desc3',
                'text'=>'text3',
                'date'=>date('11.11.2006'),
            ],
            [
                'title' => 'title4',
                'desc' => 'desc4',
                'text'=>'text4',
                'date'=>date('11.11.2007'),
            ],
            [
                'title' => 'title5',
                'desc' => 'desc5',
                'text'=>'text5',
                'date'=>date('11.11.2008'),
            ],
        ]);
    }
}
