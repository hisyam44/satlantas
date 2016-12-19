<?php

use Illuminate\Database\Seeder;
use App\Menu;
class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [[
			    'slug'=> '#/report-accident',
			    'icon'=> 'ion-speakerphone',
			    'badge'=> 'false',
			    'title'=> 'Laporkan'
			  ],
			  [
			    'slug'=> '#/list/accident',
			    'icon'=> 'ion-ios-paper  ',
			    'badge'=> 'true',
			    'title'=> 'Berita'
			  ],
			  [
			    'slug'=> '#/list/kemacetan',
			    'icon'=> 'ion-map',
			    'badge'=> 'macet',
			    'title'=> 'Situasi Jalan'
			  ],
			  [
			    'slug'=> '#/list/bencana',
			    'icon'=> 'ion-ios-flame ',
			    'badge'=> 'bencana',
			    'title'=> 'Bencana Alam'
			  ],
			  [
			    'slug'=> '#/kritik',
			    'icon'=> 'ion-android-call',
			    'badge'=> 'kritik',
			    'title'=> 'Informasi'
			  ],
			  [
			    'slug'=> '#/kritik',
			    'icon'=> 'ion-ios-information',
			    'badge'=> 'kritik',
			    'title'=> 'Regident'
			  ],
			  [
			    'slug'=> '#/akun',
			    'icon'=> 'ion-ios-person',
			    'badge'=> 'kritik',
			    'title'=> 'Akun'
			  ],
			  [
			    'slug'=> '#/kritik',
			    'icon'=> 'ion-ios-information-outline',
			    'badge'=> 'kritik',
			    'title'=> 'Kritik & Saran'
			  ]
			  ];
		foreach ($menus as $menu) {
			$newMenu = New Menu;
			$newMenu->slug = $menu['slug'];
			$newMenu->icon = $menu['icon'];
			$newMenu->badge = $menu['badge'];
			$newMenu->title = $menu['title'];
			$newMenu->save();
		}
    }
}
