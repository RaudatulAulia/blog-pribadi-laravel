<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([

            'user_id' => 1,

            'category_id' => 1,

            'title' => 'Mengenal Laravel 12 dan Keunggulannya untuk Pengembangan Website Modern',

            'slug' => Str::slug('Mengenal Laravel 12 dan Keunggulannya untuk Pengembangan Website Modern'),

            'content' => '

Laravel merupakan salah satu framework PHP yang paling populer di dunia untuk membangun aplikasi berbasis web. Framework ini pertama kali dikembangkan oleh Taylor Otwell dengan tujuan menyederhanakan proses pengembangan aplikasi web melalui sintaks yang elegan, struktur kode yang rapi, dan fitur-fitur modern. Hingga saat ini, Laravel terus berkembang dan menjadi pilihan utama bagi banyak pengembang, baik pemula maupun profesional.

Pada versi terbarunya, Laravel 12 menghadirkan berbagai peningkatan yang membuat proses pengembangan aplikasi menjadi lebih cepat, efisien, dan aman. Dengan dukungan terhadap versi PHP terbaru serta peningkatan performa pada berbagai komponennya, Laravel 12 mampu memenuhi kebutuhan pengembangan aplikasi web modern yang semakin kompleks.

Salah satu alasan mengapa Laravel banyak digunakan adalah karena menerapkan pola arsitektur Model View Controller (MVC). Arsitektur ini membagi aplikasi menjadi tiga bagian utama, yaitu Model sebagai pengelola data, View sebagai tampilan antarmuka, dan Controller sebagai penghubung antara keduanya. Dengan menggunakan konsep MVC, struktur proyek menjadi lebih terorganisir sehingga memudahkan proses pengembangan maupun pemeliharaan aplikasi.

Laravel juga menyediakan sistem Routing yang sederhana namun sangat fleksibel. Melalui routing, pengembang dapat mengatur jalur akses aplikasi dengan mudah tanpa harus membuat banyak file secara manual. Selain itu, Laravel memiliki fitur Middleware yang memungkinkan proses autentikasi, validasi, serta pembatasan hak akses pengguna dilakukan dengan lebih aman dan efisien.

Fitur lain yang menjadi keunggulan Laravel adalah Blade Template Engine. Blade memungkinkan pengembang membuat tampilan website secara lebih dinamis dengan sintaks yang sederhana. Template dapat digunakan kembali pada berbagai halaman sehingga kode menjadi lebih singkat, konsisten, dan mudah dipelihara. Dengan Blade, proses pembuatan antarmuka website menjadi lebih cepat dibandingkan menggunakan PHP murni.

Dalam pengelolaan database, Laravel menyediakan Eloquent ORM (Object Relational Mapping). Melalui Eloquent, pengembang dapat berinteraksi dengan database menggunakan sintaks PHP tanpa harus menulis query SQL secara langsung untuk sebagian besar operasi. Hal ini membuat kode lebih mudah dibaca, mengurangi potensi kesalahan, dan mempercepat proses pengembangan aplikasi.

Laravel juga dilengkapi dengan fitur Migration dan Seeder. Migration memungkinkan struktur database dibuat menggunakan kode program sehingga perubahan database dapat dilacak dengan mudah. Sementara itu, Seeder digunakan untuk mengisi data awal ke dalam database secara otomatis. Kedua fitur tersebut sangat membantu ketika proyek dikerjakan oleh beberapa orang dalam satu tim karena seluruh anggota dapat menggunakan struktur database yang sama.

Dari sisi keamanan, Laravel memiliki berbagai mekanisme perlindungan yang sudah tersedia secara bawaan. Framework ini melindungi aplikasi dari serangan seperti Cross Site Request Forgery (CSRF), Cross Site Scripting (XSS), dan SQL Injection. Selain itu, sistem autentikasi pengguna juga dapat dibuat dengan lebih mudah menggunakan fitur bawaan Laravel ataupun paket resmi seperti Laravel Breeze dan Laravel Jetstream.

Laravel 12 juga mendukung berbagai teknologi modern yang banyak digunakan saat ini. Framework ini dapat diintegrasikan dengan Bootstrap, Tailwind CSS, Vue.js, React, maupun Livewire untuk membangun antarmuka yang interaktif. Selain itu, Laravel mendukung penggunaan REST API sehingga dapat digunakan sebagai backend untuk aplikasi mobile maupun Single Page Application (SPA).

Saat ini Laravel telah digunakan untuk membangun berbagai jenis aplikasi, mulai dari website perusahaan, blog pribadi, sistem informasi akademik, aplikasi inventaris, toko online, hingga sistem manajemen rumah sakit. Fleksibilitas yang dimiliki Laravel membuat framework ini mampu digunakan pada proyek berskala kecil maupun besar.

Bagi mahasiswa maupun pengembang yang baru mempelajari pemrograman web, Laravel menjadi pilihan yang sangat tepat karena memiliki dokumentasi resmi yang lengkap, komunitas yang besar, serta banyak tutorial yang tersedia di internet. Dengan mempelajari Laravel, pengembang tidak hanya memahami cara membuat website, tetapi juga belajar menerapkan praktik terbaik dalam pengembangan perangkat lunak modern.

Sebagai kesimpulan, Laravel 12 merupakan framework PHP yang menawarkan kemudahan, keamanan, serta performa yang sangat baik dalam membangun aplikasi web modern. Berbagai fitur seperti MVC, Blade Template, Eloquent ORM, Migration, Middleware, dan sistem keamanan bawaan menjadikan Laravel sebagai salah satu framework terbaik yang dapat digunakan untuk mengembangkan aplikasi web secara profesional. Dengan terus mengikuti perkembangan teknologi, Laravel diperkirakan akan tetap menjadi pilihan utama para pengembang web di masa mendatang.

',

            'thumbnail' => null,

            'status' => 'published',

        ]);

        Article::create([

    'user_id' => 1,

    'category_id' => 2,

    'title' => 'Peran Artificial Intelligence dalam Kehidupan Sehari-hari',

    'slug' => Str::slug('Peran Artificial Intelligence dalam Kehidupan Sehari-hari'),

    'content' => '

Artificial Intelligence (AI) atau kecerdasan buatan merupakan salah satu teknologi yang berkembang paling pesat dalam beberapa tahun terakhir. AI adalah cabang ilmu komputer yang berfokus pada pengembangan sistem atau mesin yang mampu meniru kemampuan berpikir manusia, seperti belajar dari data, mengenali pola, mengambil keputusan, hingga menyelesaikan berbagai permasalahan secara otomatis. Saat ini, AI tidak lagi menjadi konsep masa depan, melainkan telah menjadi bagian dari kehidupan sehari-hari.

Penerapan AI dapat ditemukan pada berbagai bidang, mulai dari pendidikan, kesehatan, transportasi, bisnis, hingga hiburan. Ketika seseorang menggunakan fitur rekomendasi film di platform streaming, melakukan pencarian menggunakan mesin pencari, berbicara dengan chatbot layanan pelanggan, atau menggunakan navigasi digital, secara tidak langsung mereka telah memanfaatkan teknologi Artificial Intelligence. Kemampuan AI dalam mengolah data dalam jumlah besar membuat teknologi ini mampu memberikan solusi yang lebih cepat dan efisien dibandingkan proses manual.

Salah satu keunggulan utama Artificial Intelligence adalah kemampuannya untuk belajar melalui data. Konsep ini dikenal sebagai Machine Learning, yaitu metode yang memungkinkan sistem meningkatkan performanya tanpa harus diprogram secara rinci untuk setiap kondisi. Semakin banyak data yang dipelajari, maka semakin baik pula kemampuan AI dalam menghasilkan prediksi maupun rekomendasi.

Selain Machine Learning, terdapat pula teknologi Deep Learning yang merupakan bagian dari AI. Deep Learning menggunakan jaringan saraf tiruan (Artificial Neural Network) yang dirancang menyerupai cara kerja otak manusia. Teknologi ini banyak digunakan dalam pengenalan wajah, pengenalan suara, kendaraan tanpa pengemudi, hingga sistem penerjemah bahasa otomatis.

Di bidang kesehatan, Artificial Intelligence membantu dokter dalam menganalisis hasil pemeriksaan medis, mendeteksi penyakit sejak dini, dan memberikan rekomendasi tindakan berdasarkan data pasien. Dalam dunia pendidikan, AI digunakan untuk menciptakan sistem pembelajaran yang lebih personal sesuai kemampuan masing-masing siswa. Sementara itu, pada sektor bisnis, AI dimanfaatkan untuk menganalisis perilaku pelanggan, memprediksi tren pasar, dan meningkatkan kualitas pelayanan.

Walaupun memiliki banyak manfaat, penggunaan Artificial Intelligence juga menghadapi berbagai tantangan. Salah satunya adalah masalah privasi data. AI membutuhkan data dalam jumlah besar agar dapat bekerja secara optimal. Oleh karena itu, keamanan data pengguna menjadi aspek yang sangat penting untuk diperhatikan. Selain itu, terdapat kekhawatiran bahwa otomatisasi berbasis AI dapat menggantikan beberapa jenis pekerjaan yang sebelumnya dilakukan oleh manusia.

Namun demikian, sebagian besar pakar teknologi berpendapat bahwa AI tidak sepenuhnya menggantikan manusia, melainkan membantu manusia bekerja lebih efektif. Banyak pekerjaan baru justru muncul seiring berkembangnya teknologi AI, seperti AI Engineer, Data Scientist, Machine Learning Engineer, hingga AI Researcher. Oleh karena itu, kemampuan untuk memahami dan memanfaatkan AI akan menjadi salah satu keterampilan yang sangat dibutuhkan di masa depan.

Perkembangan AI juga didukung oleh kemajuan perangkat keras komputer yang semakin cepat serta tersedianya data dalam jumlah besar melalui internet. Selain itu, berbagai perusahaan teknologi besar seperti Google, Microsoft, OpenAI, Meta, dan NVIDIA terus melakukan penelitian untuk mengembangkan model AI yang lebih canggih, efisien, dan mudah digunakan oleh masyarakat.

Di Indonesia, pemanfaatan Artificial Intelligence juga terus meningkat. Banyak perusahaan mulai mengintegrasikan AI ke dalam layanan digital mereka, baik dalam bentuk chatbot, analisis data pelanggan, sistem rekomendasi produk, maupun otomatisasi proses bisnis. Perguruan tinggi pun mulai memasukkan materi AI ke dalam kurikulum sebagai bekal mahasiswa menghadapi perkembangan teknologi di era digital.

Sebagai kesimpulan, Artificial Intelligence merupakan teknologi yang memiliki potensi besar untuk mengubah berbagai aspek kehidupan manusia. Dengan kemampuan menganalisis data, mengenali pola, serta membantu proses pengambilan keputusan, AI mampu meningkatkan efisiensi dan produktivitas di berbagai sektor. Meskipun terdapat tantangan terkait etika, privasi, dan dampaknya terhadap dunia kerja, penggunaan AI secara bertanggung jawab akan memberikan manfaat yang sangat besar bagi perkembangan teknologi dan masyarakat di masa depan.

',

    'thumbnail' => null,

    'status' => 'published',

]);
Article::create([

    'user_id' => 1,

    'category_id' => 7,

    'title' => 'Dasar-Dasar Pemrograman yang Harus Dikuasai Pemula',

    'slug' => Str::slug('Dasar-Dasar Pemrograman yang Harus Dikuasai Pemula'),

    'content' => '

Pemrograman merupakan proses menyusun serangkaian instruksi agar komputer dapat menjalankan suatu tugas sesuai dengan yang diinginkan. Saat ini, kemampuan pemrograman menjadi salah satu keterampilan yang banyak dibutuhkan karena hampir seluruh bidang teknologi memanfaatkan perangkat lunak dalam operasionalnya. Oleh sebab itu, mempelajari dasar-dasar pemrograman merupakan langkah awal yang penting bagi siapa saja yang ingin berkarier di dunia teknologi informasi.

Bagi pemula, mempelajari pemrograman tidak hanya berarti menghafal sintaks suatu bahasa pemrograman, tetapi juga memahami cara berpikir secara logis dalam menyelesaikan sebuah masalah. Konsep ini dikenal sebagai computational thinking, yaitu kemampuan untuk menganalisis suatu permasalahan, membaginya menjadi bagian-bagian kecil, kemudian menyusun solusi secara sistematis.

Salah satu konsep dasar yang harus dipahami adalah variabel. Variabel digunakan sebagai tempat untuk menyimpan data yang nantinya dapat diolah oleh program. Data tersebut dapat berupa angka, teks, maupun nilai logika. Selain variabel, pemahaman mengenai tipe data juga sangat penting karena setiap data memiliki karakteristik dan fungsi yang berbeda.

Konsep berikutnya adalah percabangan (conditional statement). Percabangan memungkinkan program mengambil keputusan berdasarkan kondisi tertentu. Dengan menggunakan struktur seperti if, else, atau switch, program dapat menghasilkan keluaran yang berbeda sesuai dengan kondisi yang diberikan.

Selain percabangan, terdapat pula perulangan (looping) yang digunakan untuk menjalankan suatu proses secara berulang tanpa harus menuliskan kode yang sama berkali-kali. Struktur seperti for, while, dan foreach banyak digunakan untuk mengolah data dalam jumlah besar sehingga penulisan program menjadi lebih efisien.

Pemula juga perlu memahami konsep fungsi (function). Fungsi merupakan sekumpulan kode yang dibuat untuk menjalankan tugas tertentu dan dapat digunakan kembali di berbagai bagian program. Penggunaan fungsi membuat kode lebih rapi, mudah dipelihara, dan mengurangi pengulangan penulisan kode.

Selanjutnya adalah struktur data sederhana, seperti array dan list. Struktur data digunakan untuk menyimpan banyak data dalam satu variabel sehingga proses pengolahan data menjadi lebih mudah. Pemahaman mengenai struktur data akan menjadi dasar sebelum mempelajari algoritma yang lebih kompleks.

Saat ini terdapat banyak bahasa pemrograman yang dapat dipelajari, seperti PHP, Python, Java, JavaScript, dan C++. Masing-masing bahasa memiliki kelebihan serta bidang penerapan yang berbeda. Misalnya, PHP banyak digunakan untuk pengembangan website, Python populer dalam bidang Artificial Intelligence dan analisis data, sedangkan Java banyak digunakan untuk aplikasi Android dan sistem enterprise.

Selain memahami teori, kemampuan pemrograman hanya dapat berkembang melalui latihan secara konsisten. Membuat proyek sederhana seperti kalkulator, aplikasi daftar tugas, website pribadi, atau sistem login merupakan cara yang efektif untuk mengasah kemampuan sekaligus memahami penerapan konsep yang telah dipelajari.

Saat belajar pemrograman, kesalahan atau error merupakan hal yang wajar. Justru melalui proses mencari penyebab dan memperbaiki kesalahan tersebut, seorang programmer akan semakin memahami cara kerja program. Oleh karena itu, pemula tidak perlu takut menghadapi error karena proses debugging merupakan bagian penting dalam pengembangan perangkat lunak.

Sebagai kesimpulan, dasar-dasar pemrograman seperti variabel, tipe data, percabangan, perulangan, fungsi, dan struktur data merupakan fondasi yang harus dikuasai sebelum mempelajari materi yang lebih lanjut. Dengan memahami konsep-konsep tersebut serta rutin berlatih membuat proyek sederhana, seseorang akan memiliki bekal yang kuat untuk berkembang menjadi seorang programmer yang kompeten di masa depan.

',

    'thumbnail' => null,

    'status' => 'published',

]);
Article::create([

    'user_id' => 1,

    'category_id' => 5,

    'title' => 'Pentingnya Cyber Security di Era Digital',

    'slug' => Str::slug('Pentingnya Cyber Security di Era Digital'),

    'content' => '

Cyber Security atau keamanan siber merupakan upaya untuk melindungi sistem komputer, jaringan, perangkat, serta data dari berbagai ancaman dan serangan digital. Seiring dengan meningkatnya penggunaan internet dan teknologi informasi, keamanan siber menjadi salah satu aspek yang sangat penting dalam kehidupan sehari-hari. Tidak hanya perusahaan besar, individu juga perlu memahami pentingnya menjaga keamanan data pribadi agar terhindar dari penyalahgunaan oleh pihak yang tidak bertanggung jawab.

Saat ini, hampir seluruh aktivitas dilakukan secara digital, mulai dari berkomunikasi, berbelanja, melakukan transaksi perbankan, hingga menyimpan dokumen penting di layanan cloud. Kemudahan tersebut tentu memberikan banyak manfaat, namun juga meningkatkan risiko terjadinya serangan siber seperti pencurian data, penyebaran malware, phishing, ransomware, dan berbagai bentuk kejahatan digital lainnya.

Salah satu ancaman yang paling sering terjadi adalah phishing. Phishing merupakan metode penipuan yang bertujuan memperoleh informasi pribadi, seperti username, password, atau nomor kartu kredit, dengan cara menyamar sebagai pihak yang terpercaya. Biasanya serangan ini dilakukan melalui email, pesan singkat, atau website palsu yang tampak menyerupai situs resmi.

Ancaman lainnya adalah malware, yaitu perangkat lunak berbahaya yang dirancang untuk merusak sistem komputer atau mencuri informasi pengguna. Malware memiliki berbagai jenis, seperti virus, worm, trojan, spyware, dan ransomware. Oleh karena itu, penggunaan antivirus serta pembaruan sistem operasi secara berkala menjadi langkah penting untuk mengurangi risiko serangan.

Selain malware, ransomware juga menjadi salah satu ancaman yang cukup berbahaya. Serangan ini bekerja dengan mengenkripsi data korban sehingga tidak dapat diakses. Pelaku kemudian meminta sejumlah uang tebusan agar data tersebut dapat dipulihkan. Banyak perusahaan maupun instansi pemerintah di berbagai negara pernah mengalami serangan ransomware yang menyebabkan kerugian finansial dan terganggunya operasional.

Untuk meningkatkan keamanan digital, terdapat beberapa langkah sederhana yang dapat dilakukan. Salah satunya adalah menggunakan kata sandi yang kuat dan berbeda pada setiap akun. Password sebaiknya terdiri dari kombinasi huruf besar, huruf kecil, angka, dan simbol agar lebih sulit ditebak oleh pihak lain.

Selain itu, pengguna juga disarankan mengaktifkan autentikasi dua faktor (Two-Factor Authentication atau 2FA). Dengan fitur ini, proses login memerlukan kode verifikasi tambahan sehingga akun menjadi lebih aman meskipun password diketahui oleh orang lain.

Kebiasaan memperbarui sistem operasi dan aplikasi juga sangat penting. Pembaruan perangkat lunak umumnya berisi perbaikan terhadap celah keamanan yang dapat dimanfaatkan oleh peretas. Mengabaikan pembaruan dapat meningkatkan risiko terjadinya serangan siber.

Di lingkungan perusahaan, Cyber Security tidak hanya melibatkan penggunaan teknologi keamanan, tetapi juga meningkatkan kesadaran seluruh karyawan mengenai pentingnya menjaga keamanan informasi. Banyak kasus kebocoran data terjadi karena kesalahan manusia, seperti membuka tautan mencurigakan atau menggunakan password yang lemah.

Di Indonesia, perhatian terhadap keamanan siber terus meningkat seiring berkembangnya transformasi digital. Berbagai instansi pemerintah, perusahaan, maupun lembaga pendidikan mulai menerapkan kebijakan keamanan informasi serta memberikan edukasi kepada masyarakat mengenai pentingnya melindungi data pribadi saat menggunakan layanan digital.

Sebagai kesimpulan, Cyber Security merupakan bagian penting dalam kehidupan modern karena hampir seluruh aktivitas telah memanfaatkan teknologi digital. Dengan memahami berbagai ancaman serta menerapkan kebiasaan penggunaan internet yang aman, masyarakat dapat mengurangi risiko kejahatan siber dan menjaga keamanan data pribadi maupun organisasi.

',

    'thumbnail' => null,

    'status' => 'published',

]);
Article::create([

    'user_id' => 1,

    'category_id' => 6,

    'title' => 'Cloud Computing dan Manfaatnya bagi Dunia Digital',

    'slug' => Str::slug('Cloud Computing dan Manfaatnya bagi Dunia Digital'),

    'content' => '

Cloud Computing atau komputasi awan merupakan teknologi yang memungkinkan pengguna mengakses berbagai layanan komputasi melalui internet tanpa harus memiliki atau mengelola perangkat keras secara langsung. Layanan tersebut meliputi penyimpanan data, server, database, jaringan, hingga perangkat lunak yang dapat digunakan kapan saja selama terhubung ke internet. Saat ini, Cloud Computing menjadi salah satu teknologi yang paling banyak dimanfaatkan oleh perusahaan, instansi pendidikan, maupun pengguna individu.

Sebelum teknologi cloud berkembang, sebagian besar organisasi harus membeli server fisik sendiri untuk menyimpan data dan menjalankan aplikasi. Cara ini membutuhkan biaya yang cukup besar, baik untuk pembelian perangkat, perawatan, maupun kebutuhan listrik. Dengan hadirnya Cloud Computing, perusahaan dapat menyewa sumber daya komputasi sesuai kebutuhan sehingga biaya operasional menjadi lebih efisien.

Cloud Computing memiliki tiga model layanan utama, yaitu Infrastructure as a Service (IaaS), Platform as a Service (PaaS), dan Software as a Service (SaaS). IaaS menyediakan infrastruktur seperti server virtual dan penyimpanan data. PaaS menyediakan platform bagi pengembang untuk membuat dan menjalankan aplikasi tanpa harus mengelola server. Sementara itu, SaaS memungkinkan pengguna menggunakan aplikasi secara langsung melalui internet tanpa perlu melakukan instalasi pada perangkat.

Selain model layanan, Cloud Computing juga memiliki beberapa jenis penerapan, yaitu Public Cloud, Private Cloud, dan Hybrid Cloud. Public Cloud merupakan layanan yang disediakan untuk umum melalui internet. Private Cloud digunakan secara khusus oleh satu organisasi sehingga memiliki tingkat keamanan yang lebih tinggi. Hybrid Cloud menggabungkan kedua model tersebut agar pengguna memperoleh fleksibilitas sekaligus keamanan sesuai kebutuhan.

Salah satu keunggulan utama Cloud Computing adalah kemudahan dalam mengakses data dari berbagai perangkat. Pengguna dapat membuka dokumen, menyimpan file, maupun menjalankan aplikasi melalui komputer, laptop, tablet, atau smartphone selama tersedia koneksi internet. Selain itu, kapasitas penyimpanan dapat ditingkatkan dengan mudah tanpa harus membeli perangkat keras baru.

Cloud Computing juga mendukung kolaborasi secara real-time. Beberapa orang dapat mengerjakan dokumen yang sama secara bersamaan dari lokasi yang berbeda. Fitur ini sangat membantu perusahaan yang menerapkan sistem kerja jarak jauh maupun institusi pendidikan yang memanfaatkan pembelajaran daring.

Di dunia bisnis, Cloud Computing dimanfaatkan untuk menjalankan aplikasi perusahaan, menyimpan data pelanggan, melakukan pencadangan (backup), hingga mengelola sistem informasi secara lebih efisien. Banyak perusahaan teknologi besar menyediakan layanan cloud yang digunakan oleh jutaan organisasi di seluruh dunia.

Walaupun menawarkan banyak manfaat, penggunaan Cloud Computing juga memiliki beberapa tantangan. Keamanan data menjadi salah satu aspek yang harus diperhatikan karena informasi penting disimpan pada server milik penyedia layanan. Oleh karena itu, penyedia cloud umumnya menerapkan berbagai mekanisme keamanan seperti enkripsi data, autentikasi berlapis, serta sistem pemantauan untuk melindungi data pengguna dari ancaman siber.

Di Indonesia, pemanfaatan Cloud Computing terus meningkat seiring berkembangnya transformasi digital. Banyak perusahaan, lembaga pemerintahan, serta perguruan tinggi mulai memanfaatkan layanan cloud untuk meningkatkan efisiensi kerja, mempercepat proses pengolahan data, dan mendukung layanan digital kepada masyarakat.

Sebagai kesimpulan, Cloud Computing merupakan teknologi yang memberikan kemudahan dalam penyimpanan data, pengelolaan aplikasi, serta pemanfaatan sumber daya komputasi melalui internet. Dengan berbagai keunggulan seperti fleksibilitas, efisiensi biaya, kemudahan akses, dan skalabilitas yang tinggi, Cloud Computing menjadi salah satu fondasi utama dalam perkembangan teknologi informasi di era digital.

',

    'thumbnail' => null,

    'status' => 'published',

]);
    }
}