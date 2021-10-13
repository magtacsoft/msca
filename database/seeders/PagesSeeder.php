<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pages')->insert([
            [
                'title' => 'Haqqımızda',
                'text' => "<p>Respublika Prezidentinin apardığı məqsədyönlü siyasət nəticəsində yaradılan sağlam mühit digər sahələrdə olduğu kimi
özəl sektorun da sürətli inkişafına təkan vermişdir: Bu baxımdan 'Modern Style Construction Agro' MMC müvafiq lisenziya və icazələri alaraq qüvvədə olan
qanunvericiliyə uyğun olaraq. 'Modern Style Construction Agro' MMC olaraq, qabaqcıl və müasir texnologiyaları tətbiq edərək, yeni istehsal sahələri yaratmağa
və etibarlı tərəfdaş kimi tanınmağa çalışırıq. Məqsədlərimizə tam və effektiv şəkildə nail olmaq üçün keyfiyyətə, sağlamlığa, təhlükəsizliyə və ətraf mühitin
 qorunmasına böyük önəm veririk.</p>",
                'img' => 'msca-logo.png'
            ],
            [
                'title'=>'ƏKİN SAHƏLƏRİ',
                'text' => "<p> Qeyri neft sektoru Azərbaycanın İqtisadi inkişafının prioritetinə çevrilib. Xüsusi ilə bura Kənd Təsərrüfatının inkişafını qeyd etmək olar. Torpaqların inkişafı üçün əlimizdən gələni edirik. Torpaqların inkişafı ölkəmizin məhsuldarlığını artırmaq üçün böyük rol oynayacaqdır. Respublika prezidentinin apardığı məqsəd-yönlü siyasəti nəticəsində formalaşan sağlam mühit digər sahələr kimi, özəl sektorda sürətli inkişafına təkan vermişdir.Bu baxımdan 'Modern Style Construction Agro' MMC inkişaf etmiş şirkətlər kimi formalaşmışdır.</p>",
                'img' => 'ekin_sekil2.jpg'
            ],
            [
                'title' => 'Agro Servis	',
                'text' => " <span style='color: rgb(119, 119, 119);'>'Modern Style Construction Agro' MMC ildən artıqdır ki, 'Şahdağ agro' MMC-nin təsərrüfat
                sahələrinədə agro texniki xidmət göstərməkdədir. Biz 'Modern Style Construction Agro' MMC olraq 'Şahdağ agro ' MMC-nin rəhbərliyinə və işçi heyətinə
                 təşəkkürümüzü bildiririk. 'Modern Style Construction Agro' - MMC bölgələrimizin bütün rayonlarında agro texniki xidmətlərin müasir standartlara
                 uyğun qurulmasının , məhsuldarliğın artırılmmasına və torpaq ehtiyyatlarından daha səmərəli istifadəyə imkan yaradır. Eyni zamanda , müəssisə
                 kompleks agro texniki xidmətlər,düzgün əkin metodunun seçilməsi,şum,səpin və suvarma işlərinin aparılması, məhsulun yığını və AGRONOM xidmətlər
                  göstərməklə fermerlər və torpaq sahibləri üçün 'vahid pəncər' rolunu oynayır.</span>",
                'img' => 'agro_sekil1.jpg'
            ],

            [
                'title' => 'Beton Zavod	',
                'text' => " <span style='color: rgb(119, 119, 119);'>MSCA Beton Zavodu 2018-ci ildə Bakı şəhərində açılmışdır. MSCA şirkətlər qrupunun uğurlu inkişafında MSCA Beton zavodu böyük əhəmiyyət daşıyır. Beton zavodunun bütün lazım
olan avadanlıqla təchiz olunmuşdur, işçi heyəti işə yüksək ixtisas dərəcəsinə malikdir Bu gun biz inşaatçıları istənilən ölçüdə betonla təchiz edə bilərik. Bundan əlavə betonun müasir müasir çatdırılması üsulu tikinti
sahəsində gecikmələrin qarşısını alır. Beton istehsalı. Almaniyada istehsal olunmuş Liebherr markalı avadanlıqlardan istifadə olunaraq, həyata keçirilir. Beton istehsalında yalnız keyfiyyətli materiallardan istifadə olunur.
Betonun tərkibi müəyyən olunmuş dövlət standartlarına uyğun olaraq təyin olunur. Zavodumuzda istehsal olunan betona kimyəvi maddələrdə əlavə olunur ki, bu da istehsal olunan məhsulun keyfiyyətini artırmağa imkan verir.
Beton zavodumuz M100-M700 markali beton istehsal edir.</span>",
                'img' => 'beton_sekil1.jpg'
            ],
            [
                'title' => 'Layihələr',
                'text' => " TƏQDİM ETDİYİMİZ İŞLƏR",
                'img' => ''
            ],
            [
                'title' => 'Xidmətlərimiz',
                'text' => "Xidmətlər",
                'img' => ''
            ],

        ]);
    }
}
