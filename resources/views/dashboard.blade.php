@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
    <section class="content">
       

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-6">
                  
                  <div class="col-12">
                    <img src="{{ asset('AdminLTE/dist/img/Stunting-removebg-preview.png') }}" class="product-image" alt="Product Image">
                    <img src="{{ asset('AdminLTE/dist/img/stunting2.png') }}" class="product-image" alt="Product Image">
                    <img src="{{ asset('AdminLTE/dist/img/vitamin.png') }}" class="product-image" alt="Product Image">
                  </div>

              </div>
              <div class="col-12 col-sm-6">
                <h1 class="my-3">TAHUKAH KAMU APAKAH ITU STUNTING ???</h1>
                <p>Stunting merupakan permasalahan gizi kronis anak berusia di bawah 5 tahun 
                    yang ditandai dengan tinggi badan yang lebih rendah daripada anak seuisanya 
                    yang dapat disebabkan karena anak mengalami gangguan tumbuh kembang 
                    akibat dari gizi buruk dan infeksi penyakit (Kemenkes RI, 2018). Balita stunted 
                    adalah balita yang memiliki Z-Score tinggi badan dibandingkan usia <-2 SD 
                    sedangkan severely stunted dengan Z-Score <-3 SD (Kemenkes RI, 2020). 
                    </p>

                <p> Kondisi Stunting pada anak juga dapat terjadi karena bermacam faktor, antara 
                    lain: kurangnya pengetahuan mengenai stunting, kelahiran prematur, pemberian 
                    ASI eksklusif, kebersihan lingkungan, dan rendahnya status ekonomi keluarga 
                    (Beal dkk., 2018). Salah satu faktor tersebut adalah imunisasi dasar yang tidak 
                    lengkap, yang meningkatkan risiko infeksi pada anak. </p>    
  
                <hr>
                <h4>Angka Stunting Balita di Jawa Tengah Masih Tinggi</h4>
                <p>Pj Gubernur Jawa Tengah (Jateng), Nana Sudjana menyebut bahwa 
                    angka stunting (tengkes) di wilayahnya pada 2022 lalu masih 20,8 persen.
                     Ada kemungkinan angkanya justru naik menjadi 21 persen di akhir tahun ini.                     
                    "Jadi kalau kita lihat grafik dari tahun 2021 ini persentasenya kita ada di posisi 20,9 (persen) 
                    di tahun 2022 kita hanya turun 0,1 (persen) jadi di posisi 20,8," kata Nana saat memberikan sambutan di Gedung Gradika, Jalan Pahlawan Semarang, Kamis (28/12/2023).
                </p>
                  
  
                <h4 class="mt-3">Upaya Pemprov Jateng Dalam Menurunkan Angka Stunting</h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                 <p> 
                    Pemerintah Provinsi Jawa Tengah akan melakukan intervensi kepada 20 daerah yang dinilai belum optimal menurunkan angka prevalensi stunting. Penjabat (Pj.) Gubernur Jateng, Nana Sudjana, mengungkapkan di Jawa Tengah terdapat
                     kabupaten/kota yang prevalensi stuntingnya masih tinggi dari tahun ke tahun.
                 
                 Sebagai langkah awal, Pemprov Jateng akan menerjunkan tim kepada 20 kabupaten/kota yang penurunan angka stuntingnya masih belum signifikan. Tim ini akan melakukan penjajakan dan menggali informasi lebih dalam kepada daerah-daerah bersangkutan untuk kemudian
                     merancang sebuah aksi yang menunjang program percepatan penurunan stunting.</p>
                </div>
  
  
                
  
              </div>
            </div>
            <div class="row mt-4">
              <nav class="w-100">
                <div class="nav nav-tabs" id="product-tab" role="tablist">
                  <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Penyebab</a>
                  <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Gejala</a>
                  <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Pencegahan</a>
                </div>
              </nav>
              <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 
                    1. Kurangnya Asupan Gizi pada Ibu Selama Hamil 
                    <p>Organisasi Kesehatan Dunia menyatakan bahwa sekitar 20% kasus stunting terjadi sejak anak berada dalam kandungan. Hal ini dapat terjadi akibat makanan yang dikonsumsi ibu selama hamil kurang bergizi sehingga janin tidak mendapatkan cukup nutrisi.
                        Akhirnya, pertumbuhan janin dalam kandungan mulai mengalami hambatan dan terus berlangsung hingga setelah kelahiran. Maka dari itu, penting memastikan ibu mengonsumsi  .</p>
                    2. Kebutuhan Nutrisi Anak Tidak Tercukupi                   
                    <p>Kondisi ini bisa terjadi setelah kelahiran, tepatnya di saat anak di bawah usia dua tahun namun kebutuhan asupan gizinya tidak terpenuhi. Asupan yang dibutuhkan tersebut meliputi ASI dan MPASI (makanan pendamping ASI).                    
                    Selain itu, kurangnya asupan makanan juga bisa menjadi salah satu faktor penyebab stunting, khususnya makanan yang kaya akan protein, mineral zinc, serta zat besi yang penting bagi anak di usia balita.</p>
                    
                    3. Penyebab Lainnya
                     
                    
                    <p>Selain kurangnya asupan gizi pada ibu hamil dan kebutuhan nutrisi anak yang tidak tercukupi, terdapat beberapa faktor lain yang dapat menjadi penyebab stunting adalah sebagai berikut: </p>
                    
                    <li>Kurangnya pengetahuan ibu terhadap pentingnya pemenuhan gizi sebelum hamil, saat hamil, dan setelah melahirkan.</li>
                    
                    <li>Kurangnya persediaan air bersih dan sanitasi.</li>
                    
                    <li>Berat badan ibu tidak naik selama hamil atau kenaikan berat badan ibu kurang dari nilai ideal.</li>
                    
                    <li>Terbatasnya akses pelayanan kesehatan.</li>
                    
                    <li>Anak menderita penyakit yang menghalangi penyerapan nutrisi.</li>
                    
                     </div>
                <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                    <p>Anak yang memiliki perawakan pendek tidak selalu menjadi gejala stunting.
                         Balita dapat dikatakan stunting apabila tinggi badannya berada di bawah kisaran
                          normal dari standar tinggi badan anak berdasarkan usia pada dua kali
                           pemeriksaan berturut-turut. Selain perawakan tubuhnya yang pendek, 
                           adapun ciri-ciri stunting lain adalah sebagai berikut:</p>

 

                    <li>Tumbuh kembangnya lambat.</li>
                    
                    <li>Wajah tampak lebih muda dari anak seusianya.</li>
                    
                        <li>Berat badan tidak naik bahkan akan cenderung menurun.</li>
                    
                            <li>Kemampuan fokus dan memori belajarnya tidak baik.</li>
                    
                                <li>Anak cenderung lebih pendiam.</li>
                    
                                    <li>Fase pertumbuhan gigi pada anak melambat.</li>
                    
                                        <li>Dalam jangka panjang, bagi anak perempuan berpotensi telat menstruasi pertama.</li>
                    
                                            <li>Anak lebih mudah terserang/terinfeksi berbagai penyakit.</li>
                    
                     
                    
                    <p>Stunting adalah gagal tumbuh akibat kurangnya asupan gizi, di mana dalam jangka pendek dapat menyebabkan terganggunya perkembangan otak, metabolisme, dan pertumbuhan fisik pada anak. Sementara, dalam jangka panjang, dampak stunting adalah sebagai berikut:</p>
                    
                     
                    
                    <li>Kesulitan belajar.</li>
                    
                        <li>Penyakit jantung dan pembuluh darah.</li>
                    
                            <li>Kemampuan perkembangan kognitif menurun.</li>
                    
                                <li>Meningkatkan risiko obesitas pada anak.</li>
                    
                                    <li>Daya tahan tubuh melemah sehingga mudah terinfeksi penyakit.</li>
                    
                     </div>
                <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> 
                    <h3>Pencegahan Stunting pada Anak</h3>
                    <p>Jumlah penderita stunting di Indonesia sendiri terus mengalami peningkatan.
                         Setidaknya, setiap satu dari tiga anak berisiko mengalami gangguan tersebut.
                          Lantas, adakah pencegahan yang bisa dilakukan? Berikut adalah langkah pencegahan stunting pada anak.</p>

<p>1. Memenuhi kebutuhan gizi sejak hamil</p>

Tindakan yang relatif ampuh dilakukan untuk mencegah stunting pada anak adalah selalu memenuhi gizi sejak masa kehamilan. Lembaga kesehatan Millenium Challenge Account Indonesia menyarankan agar ibu yang sedang mengandung selalu mengonsumsi makanan sehat nan bergizi maupun suplemen atas anjuran dokter. Selain itu, perempuan yang sedang menjalani proses kehamilan juga sebaiknya rutin memeriksakan kesehatannya ke dokter atau bidan.

<p>2. Beri ASI Eksklusif sampai bayi berusia 6 bulan</p>

Veronika Scherbaum, ahli nutrisi dari Universitas Hohenheim, Jerman, menyatakan ASI ternyata berpotensi mengurangi peluang stunting pada anak berkat kandungan gizi mikro dan makro. Oleh karena itu, ibu disarankan untuk tetap memberikan ASIX selama enam bulan kepada sang buah hati. Protein whey dan kolostrum yang terdapat pada susu ibu pun dinilai mampu meningkatkan sistem kekebalan tubuh bayi yang terbilang rentan.

<p>3. Dampingi ASI dengan MPASI sehat</p>

Ketika bayi menginjak usia 6 bulan ke atas, maka ibu sudah bisa memberikan makanan pendamping atau MPASI. Dalam hal ini pastikan makanan-makanan yang dipilih bisa memenuhi gizi mikro dan makro yang sebelumnya selalu berasal dari ASI untuk mencegah stunting. WHO pun merekomendasikan fortifikasi atau penambahan nutrisi ke dalam makanan. Di sisi lain, sebaiknya ibu berhati-hati saat akan menentukan produk tambahan tersebut. Konsultasikan dulu dengan dokter.

<p>4. Terus memantau tumbuh kembang anak</p>

Tidak sulit mengenali anak yang mengalami stunting. Dari segi fisik, mereka biasanya mempunyai postur tubuh lebih pendek dibandingkan anak-anak seusianya. Jadi, penting bagi ibu untuk terus memantau tumbuh kembang mereka, terutama dari tinggi dan berat badan anak. Bawa si Kecil secara berkala ke Posyandu maupun klinik khusus anak. Dengan begitu, akan lebih mudah bagi ibu untuk mengetahui gejala awal gangguan dan penanganannya.

<p>5. Selalu jaga kebersihan lingkungan</p>

Seperti yang diketahui, anak-anak sangat rentan akan serangan penyakit, terutama kalau lingkungan sekitar mereka kotor. Faktor ini pula yang secara tak langsung meningkatkan peluang stunting. Studi yang dilakukan di Harvard Chan School menyebutkan diare adalah faktor ketiga yang menyebabkan gangguan kesehatan tersebut. Sementara salah satu pemicu diare datang dari paparan kotoran yang masuk ke dalam tubuh manusia.


                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
