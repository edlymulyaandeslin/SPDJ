<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penyakit::factory()->create([
            'kode_penyakit' => 'P01',
            'name' => 'Komedo Putih (Whitehead)',
            'definisi' => 'Whitehead atau komedo putih adalah jenis jerawat ringan (non-inflamasi) yang terbentuk ketika minyak dan bakteri terperangkap di dalam pori-pori. Tidak seperti komedo hitam yang terbuka, komedo putih berada di bawah permukaan pori-pori sehingga tertutup. Oleh karena itu komedo ini disebut juga sebagai komedo tertutup.',
            'penyebab' => "1.	Skincare comedogenic. Skincare yang comedogenic dapat menyebabkan penyumbatan pori-pori yang memicu jerawat. Menghindari produk comedogenic adalah pencegahan yang lebih baik.
2.	Lifestyle. Seperti paparan sinar matahari langsung, polusi, pemakaian produk yang bersifat mengiritasi kulit serta pemilihan makanan dan minuman yang kurang sehat seperti makanan manis dan berminyak.
3.	Pengaruh hormon. Perubahan hormonal terjadi pada saat pubertas, menstruasi dan kehamilan.
4.	Kondisi kesehatan. Beberapa kondisi kesehatan yang mempengaruhi komedo, seperti Stres, Sindrom Ovarium Polikistik (PCOS) dan Sindrom Pramenstruasi (PMS) serta obat-obatan yang mengiritasi kulit.",
            'solusi' => "•	Double cleansing, dilakukan dengan 2 tahap pembersihan yaitu :
Tahap pertama, mengunakan milk cleanser atau micellar water yang dapat diaplikasikan dengan kapas wajah.
Tahap kedua, menggunakan sabun muka yang ringan dan lembut yang tidak membuat kulit merah dan iritasi. Dapat gunakan facial wash dengan berbahan aktif tea tree atau salicylic acid.
•	Cuci muka secara teratur, mencuci muka sebelum dan setelah tidur tidak lebih dari 2 kali. Segera cuci wajah setelah menggunakan make up.
•	Jika tipe kulit kering gunakan moisturizer, yang bermanfaat untuk hidrasi kulit agar mencegah produksi minyak berlebih.
•	Gunakan sunscreen tekstur ringan (oil-free/waterbase) dengan minimal 30 SPF dan non-comedogenic.
•	Lakukan eksfoliasi 1-2 kali seminggu dengan bahan yang mengandung AHA(seperti lactic acid)/BHA (seperti salicylic acid).
•	Kandungan skincare yang bisa digunakan seperti retinol (dianjurkan konsentrasi rendah untuk pemula), eksfoliasi AHA/BHA, azelaic acid (sesuai resep dokter) dan niacinamide (dalam bentuk serum lebih disarankan).
•	Sebaiknya tidak menggunakan retinol dan AHA/BHA secara bersamaan."
        ]);
        Penyakit::factory()->create([
            'kode_penyakit' => 'P02',
            'name' => 'Komedo Hitam (Blackhead)',
            'definisi' => 'Blackhead atau komedo hitam adalah jenis jerawat ringan yang tidak meradang (non-inflamasi), bintik kecil sedikit menonjol berwarna gelap di kulit akibat penyumbatan pori-pori oleh kotoran minyak dan sel-sel kulit mati. Blackhead menonjol keluar (terbuka) dan tidak tertutup sel kulit sehingga terpapar udara dan terjadi reaksi kimiawi pada melanin akbit teroksidasi yang membuat sumbatan menghitam.',
            'penyebab' => "1.	Skincare comedogenic. Skincare yang comedogenic dapat menyebabkan penyumbatan pori-pori yang memicu jerawat. Menghindari produk comedogenic adalah pencegahan yang lebih baik.
2.	Lifestyle. Seperti paparan sinar matahari langsung, polusi, pemakaian produk yang bersifat mengiritasi kulit serta pemilihan makanan dan minuman yang kurang sehat seperti makanan manis dan berminyak.
3.	Pengaruh hormon. Perubahan hormonal terjadi pada saat pubertas, menstruasi dan kehamilan.
4.	Kondisi kesehatan. Beberapa kondisi kesehatan yang mempengaruhi komedo, seperti Stres, Sindrom Ovarium Polikistik (PCOS) dan Sindrom Pramenstruasi (PMS) serta obat-obatan yang mengiritasi kulit.",
            'solusi' => '•	Lakukan double cleansing. Double cleansing dilakukan dengan 2 tahap pembersihan. Tahap pertama, bersihkan wajah menggunakan milk cleanser atau micellar water yang dapat diaplikasikan dengan kapas wajah. Tahap kedua, cuci muka dengan facial wash yang lembut dan ringan. Facial wash dengan kandungan Salicylic Acid lebih disarankan.
•	Gunakan Moisturizer agar tetap terhidrasi.
•	Gunakan sunscreen. Hindari paparan sinar matahari langsung.
•	Lakukan eksfoliasi 1-2 kali seminggu. Hindari scrub yang kasar.  Gunakan produk yang mengandung AHA/BHA. Konsentrasi BHA (1-2%) dan AHA (5-10%).
•	Gunakan vitamin A (Retinol) pada malam hari bisa dalam bentuk serum ataupun cream. Disarankan hindari pemakaian bersamaan dengan AHA/BHA.'
        ]);
        Penyakit::factory()->create([
            'kode_penyakit' => 'P03',
            'name' => 'Jerawat Papula',
            'definisi' => 'Papula adalah salah satu jenis jerawat dengan peradangan (inflamasi) sedang, yang muncul di bawah permukaan kulit. Jerawat ini tampak seperti tonjolan yang bengkak dan kemerahan, namun tidak memiliki titik nanah pada puncaknya. Papula terasa sakit bila disentuh dan jika tidak diobati dapat berubah menjadi jerawat yang bernanah (pustula).',
            'penyebab' => "Pengaruh hormonal.
Infeksi bakteri Propionibacterium acnes di permukaan kulit akibat pori-pori tersumbat.
Produksi minyak di wajah yang berlebih.
Penyumbatan di folikel rambut dan kelenjar minyak.
Terlalu banyak konsumsi makanan manis.
Stres.

Selain itu, ada beberapa hal lain yang dapat memicu timbulnya jerawat papula, mulai dari konsumsi obat tertentu seperti kortikosteroid, penggunaan kosmetik, hingga tidak menjaga kebersihan kulit. Kondisi medis tertentu, seperti dermatitis kontak dan eksim, juga bisa memicu munculnya jerawat papula.",
            'solusi' => '•	Rutin membersihkan wajah maksimal 2x sehari dengan Double Cleansing. Double cleansing dilakukan dengan 2 tahap pembersihan. Tahap pertama, bersihkan wajah menggunakan milk cleanser atau micellar water yang dapat diaplikasikan dengan kapas wajah. Tahap kedua, cuci muka dengan facial wash. Disarankan menggunakan facial wash gentle dengan tekstur foam/gel dengan kandungan salicylic acid (untuk tipe kulit berminyak) atau alantoning (untuk tipe kulit kering).
•	Gunakan moisturizer dengan kandungan gluconolacton/niacinamide/centella asiatica untuk menghidrasi kulit dan meredakan kemerahan.
•	Gunakan sunscreen dapat berupa chemical atau physical sunscreen minimal 30 SPF. Selalu re-apply sunscreen.
•	Saat jerawat meradang, jika perlu gunakan acne spot treatment dengan kandungan benzoil peroxide/retinol/sulfur. Tidak disarankan untuk tipe kulit sensitif.
•	Hindari memencet dan menyentuh jerawat pada saat tangan masih kotor.
•	Kurangi penggunaan makeup tebal.
•	Memperbaiki pola makan dan hindari stress serta begadang.'
        ]);
        Penyakit::factory()->create([
            'kode_penyakit' => 'P04',
            'name' => 'Jerawat Pustula',
            'definisi' => 'Pustula adalah salah satu jerawat meradang berupa benjolan di permukaan kulit yang berisi nanah. Pustula terjadi karena tubuh sedang mencoba melawan infeksi dengan sel darah putih, sehingga cairan nanah tersebut terbentuk di bawah lapisan kulit. Pustula memiliki puncak berisi nanah dengan kemerahan disekelilingnya.',
            'penyebab' => "Salah satu pemicu utama jerawat pustula adalah perubahan hormon, biasanya terjadi saat kehamilan, menopause, atau pubertas.
Mengonsumsi makanan tinggi gula dalam jumlah banyak.
Kurang menjaga kebersihan kulit, seperti tidak membersihkan wajah setelah penggunaan makeup.
Menggunakan kosmetik yang berbahan minyak.
Dalam kondisi stres.
Memiliki kebiasaan merokok.
Memiliki faktor genetik atau keluarga dengan riwayat keluhan jerawat pustula.
Efek samping mengonsumsi obat-obatan tertentu.",
            'solusi' => '•	Bersihkan wajah secara teratur 2x sehari, terutama setelah memakai riasan dan beraktivitas diluar rumah. Untuk dipagi hari, cuci muka dengan facial wash. Untuk malam hari, double cleansing menggunakan milk cleanser atau micellar water dengan kapas wajah dan mencuci muka dengan facial wash. Disarankan menggunakan facial wash dengan kandungan alantoning dengan tekstur creamy (untuk tipe kulit kering) dan kandungan Salicylic Acid dengan tekstur foam (untuk tipe kulit berminyak).
•	Selanjutnya, gunakan moisturizer untuk mendukung penyembuhan alami kulit.
•	Wajib menggunakan sunscreen waterbase dengan SPF 30.
•	Gunakan acne patch (tidak lebih dari 4 jam) untuk mengangkat nanah pada jerawat.
•	Gunakan acne spot treatment jika perlu dengan kandungan salicylic acid atau benzoyl peroxide (sesuai resep dokter).
•	Lakukan pola hidup sehat seperti mengelola stress, mengkonsumsi makanan yang sehat dan menghindari produk yang dapat memicu pertumbuhan jerawat.'
        ]);
        Penyakit::factory()->create([
            'kode_penyakit' => 'P05',
            'name' => 'Jerawat Nodul',
            'definisi' => 'Jerawat nodul adalah jenis jerawat yang tergolong parah.  Jenis jerawat ini meradang yang terbentuk di lapisan bawah kulit. Jerawat ini umumnya lebih besar dengan tekstur keras dan menimbulkan rasa nyeri. Lebih sulit dihilangkan daripada jenis jerawat lainnya. Dapat menyebar apabila sering menyentuh wajah dan berpotensi meninggalkan bekas apabila penanganan tidak tepat.',
            'penyebab' => "1. Berkeringat berlebihan, terutama jika mengenakan pakaian yang menjebak keringat di kulit.
2. Memiliki riwayat keluarga yang mengalami jerawat nodul.
3. Mengalami perubahan hormon seperti saat pubertas, menstruasi, hamil, dan menopause.
4. Penggunaan makeup maupun skincare yang dapat menyumbat pori-pori, seperti yang berbahan dasar minyak.
5. Kecemasan dan stres dapat menyebabkan tubuh memproduksi lebih banyak sebum saat kadar kortisol meningkat.
6. Obat-obatan tertentu yang dapat memperburuk jerawat nodul.",
            'solusi' => '•	Atur pola tidur yang cukup dan hindari stress. Tidur yang cukup akan membantu proses detoksifikasi pada wajah dan tubuh.
•	Hindari makanan tinggi gula dan lemak.
•	Minum air putih yang cukup. Pastikan mencukupi asupan cairan yang dibutuhkan oleh tubuh.
•	Jangan menggosok wajah terlalu keras, karena bisa merusak kulit.
•	Melindungi wajah dari debu dan polusi dengan mengenakan masker serta hindari menyentuh wajah dengan tangan yang kotor.
•	Makan makanan bergizi, kaya serat, dan hindari makanan berlemak serta berminyak.
•	Jangan memencet jerawat, karena bisa menyebabkan peradangan menjadi lebih parah dan bekas.
•	Menggunakan skincare yang sesuai. Berikut kandungan skincare yang digunakan :
1.	Face wash yang lembut bentuk krim/foam yang mengandung Salicylic Acid.
2.	Moisturizer, kandungan yang dapat menenangkan seperti niacinamide/benzoil peroxide/gluconolacton.
3.	Gunakan Serum jika ingin menambah nutrisi pada kulit (tidak wajib), dapat menjadi pilihan untuk menggunakan serum yang mengandung Niacinamide.
4.	Sunscreen dengan tekstur gel agar mudah meresap. Hindari sunscreen yang mengandung alcohol atau parfum.'
        ]);
        Penyakit::factory()->create([
            'kode_penyakit' => 'P06',
            'name' => 'Jerawat Cystic',
            'definisi' => 'Cystic termasuk jerawat meradang (inflamasi) yang terjadi ketika sebum berlebih dan bakteri yang berkembang terperangkap didalam pori-pori dan terinfeksi. Karena terinfeksi jauh didalam kulit menyebabkan kista (benjolan) besar dan bengkak didalam kulit yang biasanya terasa sakit dan nyeri.',
            'penyebab' => "Tipe kulit yang berminyak.
Perubahan hormon, seperti menstruasi, kehamilan, menyusui, dan stres.
Penggunaan kosmetik berlebihan juga disebut bisa memengaruhi kemunculan jerawat kistik (batu) pada wajah. Apalagi bagi pengguna makeup yang malas untuk membersihkan wajahnya, dan tidak rutin menggunakan skincare.
Penggunaan obat-obatan tertentu atau terpaparnya kulit dengan bahan kimia.",
            'solusi' => '•	Hindari memencet jerawat.
•	Atur pola tidur yang cukup dan hindari stress. Tidur yang cukup akan membantu proses detoksifikasi pada wajah dan tubuh.
•	Hindari makanan tinggi gula dan lemak.
•	Minum air putih yang cukup. Pastikan mencukupi asupan cairan yang dibutuhkan oleh tubuh.
•	Jangan menggosok wajah terlalu keras, karena bisa merusak kulit.
•	Melindungi wajah dari debu dan polusi dengan mengenakan masker serta hindari menyentuh wajah dengan tangan yang kotor.
•	Sebaiknya untuk jerawat kistik konsultasikan ke dokter agar segera diberi penanganan yang tepat. '
        ]);
    }
}
