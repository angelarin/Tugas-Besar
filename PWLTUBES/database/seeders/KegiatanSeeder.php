<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('kegiatans')->truncate();
        \DB::table('kegiatans')->insert([
            [
                'id' => '1',
                'nama' => 'Piknik ke Taman Bunga',
                'desc' => 'Donec consequat, neque placerat aliquet malesuada, enim nibh laoreet nisl, ut congue quam eros vel justo. Aliquam vitae arcu quis ligula pulvinar ultrices a vel leo. Donec pharetra tempus nulla a aliquet. Vestibulum non orci lacinia, ullamcorper nibh a, mollis lectus. Duis eu commodo nulla. Nullam sed auctor tortor. Nunc sed fringilla lectus. Mauris tincidunt facilisis justo, varius dignissim dui tincidunt a. Vestibulum mollis massa quis feugiat convallis.',
                'harga' => '20000',
                'picName' => 'WIN_20220523_17_39_30_Pro.jpg',
                'picPath' => 'images/EFXa6fAqt9fSfg7R6oS356mVeDvd85cLnTTiOT6Z.jpg'
            ],
            [
                'id' => '2',
                'nama' => 'Karyawisata ke Pabrik Susu',
                'desc' => 'Maecenas et nisl velit. Ut hendrerit eros leo, vitae aliquam ipsum malesuada ut. Duis a maximus nunc. Maecenas dignissim, felis in commodo luctus, arcu lectus eleifend nibh, auctor porta velit lectus vel libero. Suspendisse pellentesque libero ut rhoncus molestie. Vestibulum nec rutrum mauris. Nam at consequat odio. Donec vel blandit velit, ut ultrices nisi. Vivamus finibus dolor nisl, vitae dignissim lectus tempor eget. Nulla non odio non neque efficitur sodales.',
                'harga' => '50000',
                'picName' => 'WIN_20220523_17_39_30_Pro.jpg',
                'picPath' => 'images/UxixwWNup6sTCEoAxmRtIzto8EaADTsERqfetKzX.jpg'
            ],
            [
                'id' => '3',
                'nama' => 'Pengumpulan Dana Acara Tahun Baru',
                'desc' => 'Quisque tempor mollis tempor. Cras consectetur scelerisque feugiat. Nam lacus tortor, luctus vel lacinia a, vulputate eu tellus. Etiam venenatis dolor sit amet enim aliquet, sed efficitur nulla sodales. Proin hendrerit erat in libero venenatis, et eleifend nisi suscipit. Nulla et elit rhoncus, facilisis tortor nec, interdum lorem. Donec nec mi eu neque porttitor dictum eleifend et metus.',
                'harga' => '40000',
                'picName' => 'WIN_20220523_17_39_30_Pro.jpg',
                'picPath' => 'images/vHxrldMxAmPWmWQZz25xcEUIXMvG4ScgCnXkyefU.jpg'
            ],
            [
                'id' => '4',
                'nama' => 'Pembelian Buku Wajib Matematika',
                'desc' => 'Ut accumsan ultrices orci. Vivamus in neque et quam suscipit faucibus. Nulla feugiat condimentum vestibulum. Nunc vitae fermentum quam, sed dictum lectus. Duis sit amet dolor non nibh luctus feugiat vel tristique elit. Pellentesque at lacus leo. Etiam vel tellus elit. Pellentesque eget imperdiet sapien. Quisque volutpat dignissim sapien nec euismod.',
                'harga' => '75000',
                'picName' => 'WIN_20220523_17_39_30_Pro.jpg',
                'picPath' => 'images/cUaTV1PSykPv5wg1CvxJEhwD2ZyqkVDCiLuhRWgS.jpg'
            ],
            [
                'id' => '5',
                'nama' => 'Biaya Pertandingan Olahraga AntarKelas',
                'desc' => 'Duis a nibh porta, scelerisque mauris et, imperdiet erat. Mauris elementum dapibus nisi quis gravida. Nam a nisl a ex finibus semper. In hac habitasse platea dictumst. Suspendisse pulvinar risus nibh, a laoreet lorem dictum sed. Praesent a enim lobortis, hendrerit orci ac, aliquet nibh. Fusce quis ligula non risus tincidunt dapibus viverra et sapien. Phasellus interdum sapien sed magna imperdiet placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis nibh tortor, commodo nec nunc vel, vestibulum rutrum urna. Phasellus mollis iaculis elit, eu iaculis nisi egestas a. Donec quam nisl, accumsan bibendum velit ac, bibendum suscipit neque. Phasellus placerat accumsan sem, a pretium massa. Aenean ac eleifend nulla.',
                'harga' => '10000',
                'picName' => 'WIN_20220523_17_39_30_Pro.jpg',
                'picPath' => 'images/5lYQYwjLwe2Q1maESYIpPZdemSSt2mQVXA1FoBiN.jpg'
            ],
            [
                'id' => '6',
                'nama' => 'Pembelian Seragam Kaos Kelas',
                'desc' => 'Vestibulum et tempus ligula. Vestibulum vitae imperdiet tellus. Quisque elit sapien, luctus vitae lacus non, commodo molestie ex. Cras commodo ligula lectus, sed mattis justo luctus eu. Proin dictum mi sit amet ipsum dapibus egestas. Nulla cursus auctor augue, eu venenatis leo vehicula ac. Etiam congue magna a sem posuere, quis molestie tellus fermentum.',
                'harga' => '30000',
                'picName' => 'WIN_20220523_17_39_30_Pro.jpg',
                'picPath' => 'images/M27D061a3rwmJGOZXTOY9DWVezmQgi4drpuLdVWa.jpg'
            ],
            [
                'id' => '7',
                'nama' => 'Nonton Bareng Akhir Semester',
                'desc' => 'Nulla ac tellus non lectus auctor vulputate vitae id nisi. Fusce venenatis auctor ullamcorper. Pellentesque lobortis posuere tortor sit amet placerat. Nullam at hendrerit arcu. Quisque semper dolor non leo maximus suscipit. Nam facilisis, augue ut fermentum facilisis, tellus lacus blandit nunc, a gravida tortor orci eu lectus. Sed ut mi accumsan, dapibus elit sit amet, facilisis erat. Cras fermentum lacinia odio ut fringilla. Mauris in fringilla ipsum. Aliquam ultrices egestas consectetur. Sed auctor, sapien at iaculis finibus, metus turpis sollicitudin neque, vitae sodales dui dui vehicula leo. Quisque gravida malesuada diam non efficitur. Sed mauris lectus, pellentesque sed magna non, mollis ullamcorper ipsum. Mauris semper metus lobortis, iaculis lacus quis, semper arcu. Proin facilisis id elit tempus consectetur. Nulla facilisi.',
                'harga' => '50000',
                'picName' => 'WIN_20220523_17_39_30_Pro.jpg',
                'picPath' => 'images/qJu6vHfaMmt8JrmKyloAf4Y5ZfhNxXxPx9oQPGJT.jpg'
            ],
            [
                'id' => '8',
                'nama' => 'Acara Buka Puasa Bersama',
                'desc' => 'Nunc semper semper diam nec vehicula. Donec rutrum elit id pretium sollicitudin. Mauris ultrices nisl porttitor nibh gravida efficitur. Aliquam vel consectetur urna, nec lacinia lacus. Maecenas nec neque vel felis tincidunt cursus. Phasellus gravida nisl eget sapien tincidunt egestas. In ac lacus sit amet massa ultricies venenatis nec vitae neque. Suspendisse sit amet rutrum diam. Donec sit amet purus vitae turpis blandit gravida. Etiam ac tortor at arcu egestas mollis non consectetur turpis. Sed luctus sed nisi vitae convallis. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'harga' => '20000',
                'picName' => 'WIN_20220523_17_39_30_Pro.jpg',
                'picPath' => 'images/wZZSElT4Ys6Pw67Shjo4heukoTo4JYeujm8UCDn0.jpg'
            ],
            [
                'id' => '9',
                'nama' => 'Biaya Perayaan Paskah',
                'desc' => 'Praesent cursus nunc diam, ac sollicitudin purus euismod vitae. Fusce nisl orci, ullamcorper at velit maximus, faucibus vulputate neque. Proin consequat sed libero non mollis. Quisque vestibulum dapibus magna eu congue. Ut nibh est, pharetra nec nunc at, hendrerit consectetur metus. Maecenas quis turpis velit. Ut tristique dui nec condimentum laoreet. Nam tempor eget lorem vitae convallis. Maecenas massa eros, ornare eu eros sed, malesuada ornare tortor. Duis aliquet auctor arcu ac ullamcorper. Maecenas euismod metus et metus tempus gravida. Vivamus eleifend, neque quis ornare sodales, est diam consequat nisl, ac fermentum sapien dui a massa. Duis in mi id ligula consequat blandit a congue sapien.',
                'harga' => '25000',
                'picName' => 'WIN_20220523_17_39_30_Pro.jpg',
                'picPath' => 'images/QZFOkkvHqb32muj4aUi8ArTjrprjGQ7CKGVBWLLd.jpg'
            ],
        ]);
    }
}
