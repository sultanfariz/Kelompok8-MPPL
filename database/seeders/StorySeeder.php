<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Story;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stories = [
            [
                'title' => 'Kumpulan Cerita Rakyat Jawa Tengah',
                'body' => 'Di sebuah desa, hiduplah sepasang petani tua. Dia adalah Mbok Sirni dan
                suaminya. Sudah lama sekali mereka mendambakan hadirnya seorang anak.
                Akan tetapi, hingga setua itu, Mbok Sirni dan suaminya belum juga dikaruniai
                anak. Mereka lalu berdoa agar segera dapat menimang anak….
                Buku ini berisi Kumpulan Cerita Rakyat Jawa Tengah seperti Timun Mas, Si Manan dan Si beku, Nyai Dasima dan masih banyak Lagi.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/iymn/',
                'image' => 'https://res.cloudinary.com/hydeblazack/image/upload/v1638018436/MPPL/1_chhpvn.png',
            ],
            [
                'title' => 'Berakhlak Baik, Yuk!',
                'body' => 'Siapa yang sayang Rasulullah? Wah, tentu kita
                semua sayang sekali pada beliau. Lalu
                bagaimana cara kita menunjukkan rasa sayang itu?

                Tentu saja dengan meniru apa yang Rasulullah
                lakukan! Dari mana kita tahu apa yang Rasulullah
                lakukan Sudah pasti dari Hadits beliau dong!

                Nah, buku di tangan kalian ini berisi Hadis Nabi yang dapat kalian tiru. Apalagi disertai cerita dan
                gambar berwarna yang subhanallah bagusnya!',
                'link'=> 'https://online.fliphtml5.com/ikmgs/zabe/',
                'image' => 'https://res.cloudinary.com/hydeblazack/image/upload/v1638018439/MPPL/2_c0qp4n.png',
            ],
            [
                'title' => '10 Menit, Kumpulan Dongeng Teladan',
                'body' => 'Buku ini berisi Kumpulan Dongeng  anak yang dilengkapi dengan gambar menarik serta games dan puzzle yang sangat bermanfaat bagi anak.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/rlru/',
                'image' => 'https://res.cloudinary.com/hydeblazack/image/upload/v1638018440/MPPL/3_edhqq1.png',
            ],
            [
                'title' => 'Kalarahu, Kumpulan Cerita Rakyat Jawa',
                'body' => 'Kumpulan cerita rakyat yang berjudul Kalarahu ini
                terdiri atas sepuluh cerita rakyat Jawa, yaitu (1) Kalarahu, (2) Jaka Tarub. dan Nawangwu,lan, (3) Asal Mula Nama Banyuwangi, (4) Bawang Putih dan Bawang Merah, (5) Asal Mula Huruf Jawa, (6) Si Wuragil, (7) Loro Jonggrang dan Bandung Bandawasa (8) Dewi Sri dan Sedana, (9) Ande-Ande Lumut dan Kleting Kuning, dan (1 0) A wan Wedus· Gembel.
                Kumpulan cerita ini diceritakan kembali untuk
                pembaca usia sekolah dasar. Mudah-mudahan kumpulan cerita ini bermanfaat bagi anak-anak yang membacanya.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/tkrx/',
                'image' => 'https://res.cloudinary.com/hydeblazack/image/upload/v1638018438/MPPL/4_cvgjwp.png',
            ],
            [
                'title' => 'Kisah Awal Kenabian',
                'body' => 'Assalamu’alaikum teman-teman, pernahkah kalian membaca kisah kelahiran Nabi Muhammad SAW? Bagaimana kehidupan beliau sebelum diutus sebagai Nabi dan Rasul Allah bagi seluruh umat
                manusia...? Kisah perjalanan kehidupan Nabi Muhammad disebut Sirah Nabawiyyah, yang menceritakan asal-usul Nabi, nasab beliau,
                kelahiran, masa kecil, kejadian-kejadian sebelum beliau menjadi Rasul, kisah kehidupan beliau dalam berdakwah kepada manusia dan seterusnya, hingga wafatnya.

                Nah, kali ini kita akan membaca kisah di awal kenabian, yakni
                sebelum beliau mendapatkan wahyu yang pertama kali sebagai
                seorang Nabi dan Rasul.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/lgjz/',
                'image' => 'https://res.cloudinary.com/hydeblazack/image/upload/v1638018437/MPPL/5_yliucw.png',
            ],
            [
                'title' => 'Legenda Telaga Alam Banyu Batuah ',
                'body' => 'Legenda Telaga Alam Banyu Batuah merupakan sekilas kisah perjalanan sisi kehidupan anak manusia yang terpilih sebagai penolong banyak orang, seorang heroik yang manusiawi, dan kisah kepahlawanan yang membumi. Manusia pilihan dan keajaiban alam merupakan media yang menggambarkan segala kebaikan anugerah itu datangnya dari Tuhan Yang Maha Esa dan tak terhingga batasannya.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/hopr/',
                'image' => 'https://res.cloudinary.com/hydeblazack/image/upload/v1638018435/MPPL/6_mk1i6c.png',
            ],
            [
                'title' => 'Si Kabayan, Cerita Rakyat dari Jawa Barat',
                'body' => 'Cerita Si Kabayan yang merupakan sastra lisan Sunda dapat dipandang sebagai cerita yang mengandung nilai-nilai yang tinggi. Di dalamnya, di samping penuh dengan kelucuan- kelucuan yang ditimbulkan oleh sikap Kabayan, juga sarat dengan berbagai sindiran yang dikemas dalam bentuk humor. Si Kabayan yang dalam mitosnya terkenal sebagai manusia pemalas, sesungguhnya memiliki daya pikir yang luar biasa cerdiknya sehingga orang lain—bahkan mertuanya—tidak dapat menandingi kecerdikannya.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/juoh/',
                'image' => 'https://res.cloudinary.com/hydeblazack/image/upload/v1638018436/MPPL/7_cfqun2.png',
            ],
            [
                'title' => 'Burung Ajaib',
                'body' => 'Cerita ini mengisahkan tentang Kerajaan Rimba Belantara yang dipimpin oleh seorang adiraja yaitu Raja Pelanduk. Raja Pelanduk adalah seorang pemimpin yang cerdik, bijaksana, tegas, dan lucu. Setiap hewan di kerajaan itu pun sangat menghormatinya. Namun, ada hal yang merisaukan sang raja. Keadaan alam di sekitar kerajaannya semakin lama makin memburuk, persediaan makanan menipis. Oleh karena itu, semua raja hewan diundang bermusyawarah untuk mencari solusi keadaan ini.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/tbuz/',
                'image' => 'https://res.cloudinary.com/hydeblazack/image/upload/v1638018435/MPPL/8_jx2pd6.png',
            ],
            [
                'title' => 'Cerita dari Tanah Papua',
                'body' => 'Buku ini berisi Kumpulan Dongeng  anak dari Tanah Papua yang dapat memberikan informasi seputar tanah papua seperti asal usul burung cenderawasih, putri bungsu dari danau dan lain-lain.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/skaq/',
                'image' => 'https://res.cloudinary.com/hydeblazack/image/upload/v1638018435/MPPL/9_u0hdv2.png',
            ],
            [
                'title' => 'Kain Tenun dan Putra Mahkota',
                'body' => 'Cerita “Kain Tenun dan Putra Mahkota” diambil dari
                cerita rakyat Jawa Barat. Judul asli cerita itu adalah “Peria Pokak“
                yang diceritakan kembali oleh S Wiranggapati.
                Cerita “Kain Tenun dan Putra Mahkota ”bersumber dari buku Cerita Rakyat I yang dikeluarkan oleh Urusan Adat dan Cerita Rakyat Jawatan Kebudayaan Departemen Pendidikan dan Kebudayaan.
                Mudah-mudahan cerita “Kain Tenun dan Putra Mahkota” ini
                dapat menambah kekayaan Khazanah cerita rakyat di tanah air.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/ikqn/',
                'image' => 'https://res.cloudinary.com/hydeblazack/image/upload/v1638018435/MPPL/10_lnzakp.png',
            ],
            [
                'title' => 'Kisah Ashabul Ukhdud',
                'body' => 'Teman-teman, tahukah kalian apa ashabul ukhdud itu? Mereka adalah orang-orang yang membuat parit, yang dilaknat Allah di
                dalam firman-Nya:
                “Binasa dan terlaknatlah orang-orang yang membuat parit, yang
                berapi (dinyalakan dengan) kayu bakar, ketika mereka duduk di sekitarnya,...” (QS Al-Buruj [85] : 4-6)
                ',
                'link'=> 'https://online.fliphtml5.com/ikmgs/wxjo/',
                'image' => 'https://res.cloudinary.com/hydeblazack/image/upload/v1638018439/MPPL/11_jbi47h.png',
            ],
        ];

        foreach ($stories as $key => $val) {
            Story::create($val);
        }
    }
}
