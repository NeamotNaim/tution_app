<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //         $user=new User;
    
    //         $user->name="Naim";
    //         $user->email="naim@gmail.com";
    //         $user->phone="01865646474";
    //         $user->address="New Boston, 23 jakob Road";
            
    //         $user->class="class5";
            
    //         $user->gender="male";
            
    //         $user->uni_col_name="Bangamata Sheikh Fojilatunnesa Mujib Science and Technology University";
    //         $user->dept="Computer Science and Engineering";
    //         $user->age=22;
            
    //         $user->password='$2y$10$T88OAIfntu7e2jMWuH1UuuWJcFeUedvFWqLL83NVkNxb1vaGh03E2';
    //         $user->save();

    //         $user=new User;
    // //2nd data 
    //         $user->name="Neamot";
    //         $user->email="neamot@gmail.com";
    //         $user->phone="01723487654";
    //         $user->address="Faridpur,Dhaka";
            
    //         $user->class="math";
            
    //         $user->gender="male";
            
    //         $user->uni_col_name="Bangamata Sheikh Fojilatunnesa Mujib Science and Technology University";
    //         $user->dept="Computer Science and Engineering";
    //         $user->age=22;
            
    //         $user->password='$2y$10$T88OAIfntu7e2jMWuH1UuuWJcFeUedvFWqLL83NVkNxb1vaGh03E2';
    //         $user->save();

    //3rd data
    for ($i=0; $i <50 ; $i++) { 
         $facker=Faker::create();

            $user=new User;
            $gender = $facker->randomElements(['male', 'female'])[0];
            $user->name=$facker->name($gender) ;
            $user->email=$facker->freeEmail ;
            $user->phone='01'.$facker->numberBetween(718765430, 999999999);
            $user->address=$facker->address;
            // $user->class="class".$facker->numberBetween(1, 8);
            $user->class=$facker->randomElements(['class1', 'class2','class3','class4',
            'class5','physics','chemistry','biology','class6','class7','class8','mathematics','Higher Math','Bangla','English'])[0];
            $user->gender=$gender;
            $user->uni_col_name="Bangamata Sheikh Fojilatunnesa Mujib Science and Technology University";
            $user->dept="Computer Science and Engineering";
            $user->age=$facker->numberBetween(20, 24);
            $user->password='$2y$10$T88OAIfntu7e2jMWuH1UuuWJcFeUedvFWqLL83NVkNxb1vaGh03E2';

            $user->save();
    }
           
            


            
          
    }
}
