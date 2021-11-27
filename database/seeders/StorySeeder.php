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
                'image' => 'https://i.ibb.co/qxXxXxz/story-1.jpg',
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
                'image' => 'https://i.ibb.co/qxXxXxz/story-1.jpg',
            ],
            [
                'title' => '10 Menit, Kumpulan Dongeng Teladan',
                'body' => 'Buku ini berisi Kumpulan Dongeng  anak yang dilengkapi dengan gambar menarik serta games dan puzzle yang sangat bermanfaat bagi anak.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/rlru/',
                'image' => 'https://i.ibb.co/qxXxXxz/story-1.jpg',
            ],
            [
                'title' => 'Kalarahu, Kumpulan Cerita Rakyat Jawa',
                'body' => 'Kumpulan cerita rakyat yang berjudul Kalarahu ini
                terdiri atas sepuluh cerita rakyat Jawa, yaitu (1) Kalarahu, (2) Jaka Tarub. dan Nawangwu,lan, (3) Asal Mula Nama Banyuwangi, (4) Bawang Putih dan Bawang Merah, (5) Asal Mula Huruf Jawa, (6) Si Wuragil, (7) Loro Jonggrang dan Bandung Bandawasa (8) Dewi Sri dan Sedana, (9) Ande-Ande Lumut dan Kleting Kuning, dan (1 0) A wan Wedus· Gembel.
                Kumpulan cerita ini diceritakan kembali untuk
                pembaca usia sekolah dasar. Mudah-mudahan kumpulan cerita ini bermanfaat bagi anak-anak yang membacanya.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/tkrx/',
                'image' => 'https://i.ibb.co/qxXxXxz/story-1.jpg',
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
                'image' => 'https://i.ibb.co/qxXxXxz/story-1.jpg',
            ],
            [
                'title' => 'Legenda Telaga Alam Banyu Batuah ',
                'body' => 'Legenda Telaga Alam Banyu Batuah merupakan sekilas kisah perjalanan sisi kehidupan anak manusia yang terpilih sebagai penolong banyak orang, seorang heroik yang manusiawi, dan kisah kepahlawanan yang membumi. Manusia pilihan dan keajaiban alam merupakan media yang menggambarkan segala kebaikan anugerah itu datangnya dari Tuhan Yang Maha Esa dan tak terhingga batasannya.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/hopr/',
                'image' => 'https://i.ibb.co/qxXxXxz/story-1.jpg',
            ],
            [
                'title' => 'Si Kabayan, Cerita Rakyat dari Jawa Barat',
                'body' => 'Cerita Si Kabayan yang merupakan sastra lisan Sunda dapat dipandang sebagai cerita yang mengandung nilai-nilai yang tinggi. Di dalamnya, di samping penuh dengan kelucuan- kelucuan yang ditimbulkan oleh sikap Kabayan, juga sarat dengan berbagai sindiran yang dikemas dalam bentuk humor. Si Kabayan yang dalam mitosnya terkenal sebagai manusia pemalas, sesungguhnya memiliki daya pikir yang luar biasa cerdiknya sehingga orang lain—bahkan mertuanya—tidak dapat menandingi kecerdikannya.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/juoh/',
                'image' => 'https://i.ibb.co/qxXxXxz/story-1.jpg',
            ],
            [
                'title' => 'Burung Ajaib',
                'body' => 'Cerita ini mengisahkan tentang Kerajaan Rimba Belantara yang dipimpin oleh seorang adiraja yaitu Raja Pelanduk. Raja Pelanduk adalah seorang pemimpin yang cerdik, bijaksana, tegas, dan lucu. Setiap hewan di kerajaan itu pun sangat menghormatinya. Namun, ada hal yang merisaukan sang raja. Keadaan alam di sekitar kerajaannya semakin lama makin memburuk, persediaan makanan menipis. Oleh karena itu, semua raja hewan diundang bermusyawarah untuk mencari solusi keadaan ini.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/tbuz/',
                'image' => 'https://i.ibb.co/qxXxXxz/story-1.jpg',
            ],
            [
                'title' => 'Cerita dari Tanah Papua',
                'body' => 'Buku ini berisi Kumpulan Dongeng  anak dari Tanah Papua yang dapat memberikan informasi seputar tanah papua seperti asal usul burung cenderawasih, putri bungsu dari danau dan lain-lain.',
                'link'=> 'https://online.fliphtml5.com/ikmgs/skaq/',
                'image' => 'https://i.ibb.co/qxXxXxz/story-1.jpg',
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
                'image' => 'https://i.ibb.co/qxXxXxz/story-1.jpg',
            ],
            [
                'title' => 'Kisah Ashabul Ukhdud',
                'body' => 'Teman-teman, tahukah kalian apa ashabul ukhdud itu? Mereka adalah orang-orang yang membuat parit, yang dilaknat Allah di
                dalam firman-Nya:
                “Binasa dan terlaknatlah orang-orang yang membuat parit, yang
                berapi (dinyalakan dengan) kayu bakar, ketika mereka duduk di sekitarnya,...” (QS Al-Buruj [85] : 4-6)
                ',
                'link'=> 'https://online.fliphtml5.com/ikmgs/wxjo/',
                'image' => 'https://i.ibb.co/qxXxXxz/story-1.jpg',
            ],
        ];

                

        // $stories = [
        //     [
        //         'title' => 'Si Kancil dan Harimau',
        //         'body' =>  'Pada suatu hari, terjadilah kelaparan di sebuah pulau yang penduduknya kebanyakan di huni oleh para Harimau. Mereka sangat kelaparan, karena semakin hari tidak ada hewan yang dapat mereka mangsa. Akhirnya, Raja Harimau mengutus Panglima dan para Prajuritnya untuk pergi ke pulau kecil di sebrang dan kembali dengan membawa banyak makanan.

        //         Perjalanan ke pulau kecil di sebrang cukup jauh. Akhirnya, mereka pun sampai di tempat tujuan. Di sana mereka sangat takjub dengan melihat keindahan alam pulang kecil tersebut. Namun, setibanya mereka disana. Mereka hanya melihat seekor Kancil kecil di tepi pantai. Kancil pun segera berlari. Namun, ia terlambat. Ia sudah di kepung oleh para Harimau. " Hei Kancil! Di mana Rajamu? Kami datang untuk meminta makanan. Jika kalian menolak, kami akan menyerang pulau kecil ini. Dan lihatlah, kami membawa potongan kumis raja kami." Kata prajurit Harimau dan menunjukkan kumis rajanya.

        //         " Kumis ini besar sekali. Pasti raja Harimau sangat besar dan kuat. Aku akan membawa kumis raja Harimau dan menunjukkannya kepada raja kami." Kata Kancil. Sebenarnya, Kancil sangat kebingungan karena di pulau kecil tersebut tidak terdapat seorang Raja. Pada saat itu, Kancil melihat sahabatnya seekor Landak yang sangat besar. Ia pun langsung menemukan sebuah ide. " Hei sahabatku. Kemarilah, aku sangat membutuhkan bantuanmu!" kata Kancil.

        //         " Hah? Bantuanku? Buat apa Cil?" Tanya Landak.
                
        //         " Untuk keselamatan semua hewan di pulau ini." Jawab Kancil.

        //         Akhirnya, Landak pun mencabut durinya yang paling besar, rajam dan panjang. Setelah mendapatkan duri tersebut. Kancil langsung berlari membawa duri Landak dan menyerahkan kepada para Harimau. Kancil pun mencari di mana para Harimau itu. Akhirnya, Kancil berhasil menemukan mereka di tepi pantai. Mereka tertidur sangat pulas. Kancil pun membangunkan panglima Harimau.
                
        //         " Tuan, raja kami siap untuk berperang. Sebagai buktinya. Raja kami pun mengirimkan kumisnya." Kata Kancil tegas. Ia pun langsung menyerahkan kumis Landak kepada para Harimau.
                
        //         " Ini kumis raja mu?" Tanya panglima Harimau.
                
        //         " Iya, itu adalah kumis raja kami yang paling kecil. Raja kami pun menerima tantangan dari raja kalian." Kata Kancil.
                
        //         Para Harimau pun sangat terkejut melihat kumis raja pulau kecil yang besar dan tajam.
                
        //         " Kumis raja Kancil sangat besar. Sangat besar dari kumis raja kita. Kita pasti akan sulit untuk melawannya." Bisik panglima Harimau kepada para prajuritnya.
                
        //         " Lalu bagaimana?” Tanya salah satu Harimau.
                
        //         " Sebaiknya kita segera pergi dari pulau ini." Jawab panglima Harimau.
                
        //         Akhirnya, para Harimau pergi meninggalkan pulau kecil tersebut. mereka pun melanjutkan perjalanan ke pulau lainnya untuk mencari makanan.',
        //         'image' => 'si-kancil-dan-harimau.jpg',
        //         'language' => 'id',
        //         'like_count' => 0,
        //         'comment_count' => 0,
        //     ],
        //     [
        //         'title' => 'The Velveteen Rabbit',
        //         'body' =>  'A soft and fluffy Velveteen Rabbit lived in a toybox in a Boy\'s room.  Each day, the Boy opened the toybox and picked up Velveteen Rabbit. And Velveteen Rabbit was happy.

        //         Then newer, brighter toys came into the toybox.  They had special tricks.  Some could move when the Boy pushed a button.  Others bounced high. 
                
        //         Velveteen Rabbit had no special tricks or buttons. No wonder the Boy started to choose these other new toys. At night, when the toys were back all in the toy box, the other toys talked with pride about the fine things they could do. Velveteen Rabbit was quiet.  There was not much to say.

        //         Only one other toy in the toy box was like Velveteen Rabbit.  Cowboy Horse was also a soft, fluffy toy.  But he was old.  Most of his hair was worn away.  He had only one eye left. Cowboy Horse said to Velveteen Rabbit, “Soft toys like us are really the lucky ones.  We get loved the most.  And when soft toys get loved and loved, we can become Real.”

        //         “What is Real?” said Velveteen Rabbit.
                
        //         “Being Real is the best," said Skin Horse.  "You can move when you want to move. When you are Real, if you are loved, you can show your love back.”
                
        //         One day Nana, who took care of the Boy, flew open the lid of the toy box.  She said in a busy tone, “Oh, dear!  That walking doggie is missing. I must find something else for the Boy!”  In a second, Velveteen Rabbit was plopped down onto the bed with the Boy. This began another happy time for Velveteen Rabbit.  Each night the Boy would hold Velveteen Rabbit close in his arms.  In the morning, the Boy would show Velveteen Rabbit how to make rabbit holes under the sheets.  If the Boy went outside to a picnic, or to the park, Velveteen Rabbit would come with him, too.  

        //         After awhile, with the hugging and holding, much of Velveteen Rabbit’s fur got matted down.  Its pink nose grew less pink with all the Boy’s kisses.  But Velveteen Rabbit did not care.  It was happy.
                
        //         One day the Boy became sick.  His forehead got very hot.  The doctor came and went.  Nana walked back and forth in fear.  Day after day, the Boy stayed in bed.   There was nothing for Velveteen Rabbit to do but to stay in bed, too, day after day.  
                
        //         Then at last, the Boy got better.  Such joy in the house! The doctor said the Boy must go to the shore.  How wonderful! thought Velveteen Rabbit.  Many times the Boy had talked happily about the shore, and told of its white sands and big blue ocean.  
                
        //         “What about this old bunny?” Nana asked the doctor. “That old thing?” said the doctor.  “It’s full of scarlet fever germs.  Burn it at once!  Get him a new bunny.”

        //         So Velveteen Rabbit was thrown into a sack along with the Boy\'s bed sheets and old clothes and a lot of junk.  The sack was carried to the backyard.  The gardener was told to burn the whole thing.
                
        //         But the gardener was too busy with picking the beans and peas before nightfall, so he left the sack behind.  “I will take care of it tomorrow,” he said.  The sack was not tied at the top, and Velveteen Rabbit fell out.  The next day when the gardener picked up the sack to take it away to be burned, Velveteen Rabbit was not in it.
                
        //         Then it started to rain.  Velveteen Rabbit was sad.  So far away from the Boy, never again to be nice and cozy together, and now soaking wet!  A tear fell from Velveteen Rabbit’s eye, over his cheek.  It plopped onto the grass.
                
        //         All at once, at the spot where the tear fell, a flower grew up.  Then the bud of the flower opened.  A tiny Fairy! “Little Rabbit,” said the Fairy.  “Do you know who I am?”

        //         “I wish I did,” said Velveteen Rabbit.
                
        //         “I am the Fairy that takes care of toys that are well loved,” said the Fairy.  
                
        //         By then, Velveteen Rabbit was shabby and gray.  The boy had loved off all of its whiskers.  The pink lining in the ears had long turned grey. Its brown spots, once fresh and bright, were now faded and hard to see.
                
        //         “It is time now for me to make you Real,” said the Fairy.  
                
        //         “I think I remember Real,” said Velveteen Rabbit.  Now, what was it Cowboy Horse had said?  Ah yes.  When you are Real, you can move when you want to move.  If you are loved, you can love back.
                
        //         With one touch of the Fairy’s wand, Velveteen Rabbit felt different.  Tickly.  All of a sudden, each one of its two legs sewn together tight, could move! A fly landed on Velveteen Rabbit’s head and it was itchy.  As quick as a wink, that foot was up at the Velveteen Rabbit’s head to scratch it off.

        //         “So this is being Real"! “I can move when I want to move!”
                
        //         “I will show you some new friends,” said the Fairy.  And the Fairy took Velveteen Rabbit where several rabbits ran and hopped about.  Soon they were all great friends. Time went by.  The Boy was back from the shore.  He was all better now. 

        //         One day, the Boy went to the backyard to play.  From the trees nearby, a few rabbits hopped out.  One rabbit was brown all over, and another one was all white.  A third rabbit had brown spots, most of them faded.  That one hopped the closest to the Boy.
                
        //         The Boy thought, "Why, this rabbit looks just like my old Bunny that was lost when I was sick.  I loved that Bunny!"

        //         What he didn\'t know was that it was his very own Bunny, come back to see the boy. For he was the reason the Velveteen Rabbit had become Real.',
        //         'image' => 'the-velveteen-rabbit',
        //         'language' => 'en',
        //         'like_count' => 0,
        //         'comment_count' => 0,
        //     ],
        // ];

        foreach ($stories as $key => $val) {
            Story::create($val);
        }
    }
}
