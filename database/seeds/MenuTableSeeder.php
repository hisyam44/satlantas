<?php

use Illuminate\Database\Seeder;
use App\Menu;
use App\Place;
use App\Regident;
use App\Phone;
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
			    'slug'=> '#/info',
			    'icon'=> 'ion-android-call',
			    'badge'=> 'kritik',
			    'title'=> 'Informasi'
			  ],
			  [
			    'slug'=> '#/regident',
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
		$place = new Place();
		$place->name = "RSUD Kabupaten Batang";
		$place->address = "Jalan Dr Sutomo No. 42, Batang, Jawa Tengah.";
		$place->description = "Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.";
		$place->photo = "img/rsud.jpg";
		$place->save();
		$place = new Place();
		$place->name = "Polres Batang";
		$place->address = "Jl. Gajah Mada No.200, Proyonanggan Sel., Kec. Batang, Kabupaten Batang, Jawa Tengah 51211";
		$place->description = "Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.";
		$place->photo = "img/polres.jpg";
		$place->save();
		$regident = new Regident();
		$regident->title = "Penerbitan Surat Izin Mengemudi (SIM)";
		$regident->description = "Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.";
		$regident->link = "http://google.co.id/#q=Penerbitan+Surat+Izin+Mengemudi";
		$regident->save();
		$regident = new Regident();
		$regident->title = "Penerbitan Surat Tanda Nomor Kendaraan Bermotor (STNK, STCK)";
		$regident->description = "Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.";
		$regident->link = "http://google.co.id/#q=Penerbitan+Surat+Tanda+Nomor+Kendaraan+Bermotor";
		$regident->save();
		$regident = new Regident();
		$regident->title = "Penerbitan Buku Pemilik Kendaraan Bermotor (BPKB)";
		$regident->description = "Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.";
		$regident->link = "http://google.co.id/#q=Penerbitan+Buku+Pemilik+Kendaraan+Bermotor";
		$regident->save();
		$regident = new Regident();
		$regident->title = "Pembinaan Materiil (SIM, STNK, BPKB dan TNKB)";
		$regident->description = "Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.";
		$regident->link = "http://google.co.id/#q=Pembinaan+Materiil+SIM";
		$regident->save();

		$phone = new Phone();
		$phone->name = "Pemadam Kebakaran";
		$phone->phone = "tel:+62-285-119";
		$phone->save();
		$phone = new Phone();
		$phone->name = "Dinas Kesehatan";
		$phone->phone = "tel:+62285119";
		$phone->save();
		$phone = new Phone();
		$phone->name = "Polisi Sektor";
		$phone->phone = "tel:+62285119";
		$phone->save();
		$phone = new Phone();
		$phone->name = "Rumah Sakit";
		$phone->phone = "tel:+62285119";
		$phone->save();
    }
}
