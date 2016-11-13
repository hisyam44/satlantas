<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Accident;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->password = bcrypt("qweasd");
        $user->address = "Jl Pelita no.1 Kelurahan Jenggot Kota Pekalongan";
        $user->phone = "079876543445";
        $user->save();
        for($i=0;$i<10;$i++){
            $accident = new Accident;
            $accident->user_id = 1;
            $accident->title = "Kecelakaan di Jalan Veteran";
            $accident->excerpt = "Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt.";
            $accident->description = "Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.";
            $accident->type = "kecelakaan";
            $accident->photo = "img/example.jpg";
            $accident->latitude = "-6.9143425";
            $accident->longitude = "109.6670824";
            $accident->save();
        }
    }
}
