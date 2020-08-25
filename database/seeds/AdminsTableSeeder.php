<?php

use Illuminate\Database\Seeder;
use App\Admin;
Use Illuminate\support\Facades\DB;


class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            ['id'=>1,'name'=>'admin','type'=>'admin','mobile'=>'98000','email'=>'admin@gmail.com','password'=>'$2y$10$H69Nb9H3MMVcaN9/mO0un.VRzmqDgeE0iyFJqwy/923KGNMf0A7Iy','image'=>'','status'=>1
            ],
            ['id'=>2,'name'=>'jony','type'=>'subadmin','mobile'=>'98000','email'=>'jony@gmail.com','password'=>'$2y$10$H69Nb9H3MMVcaN9/mO0un.VRzmqDgeE0iyFJqwy/923KGNMf0A7Iy','image'=>'','status'=>1
            ],
            ['id'=>3,'name'=>'steve','type'=>'subadmin','mobile'=>'98000','email'=>'steve@gmail.com','password'=>'$2y$10$H69Nb9H3MMVcaN9/mO0un.VRzmqDgeE0iyFJqwy/923KGNMf0A7Iy','image'=>'','status'=>1
            ],
            ['id'=>4,'name'=>'amit','type'=>'admin','mobile'=>'98000','email'=>'amit@gmail.com','password'=>'$2y$10$H69Nb9H3MMVcaN9/mO0un.VRzmqDgeE0iyFJqwy/923KGNMf0A7Iy','image'=>'','status'=>1
            ],  
        ];

        DB::table('admins')->insert($adminRecords);
         
        // foreach($adminRecords as $key => $record){
        //     \App\Admin::create($record);
        // }
    }
}
