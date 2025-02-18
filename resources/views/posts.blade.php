<!doctype html>
<html lang="en">
<head>
    <!-- Meta tag untuk pengaturan charset dan responsivitas halaman -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title halaman -->
    <title>Eloquent Relationships : Relasi One to Many</title>
    
    <!-- Link untuk mengimpor stylesheet Bootstrap untuk desain responsif dan komponen UI -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    
    <!-- Link untuk mengimpor ikon Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Container utama untuk konten halaman -->
    <div class="container">
        <!-- Card Bootstrap untuk menampilkan konten secara terstruktur -->
        <div class="card mt-5">
            <div class="card-body">
                <!-- Heading utama dengan link ke situs -->
                <h3 class="text-center"><a href="https://santrikoding.com">www.santrikoding.com</a></h3>
                
                <!-- Judul kecil untuk memberikan informasi tentang topik halaman -->
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One To Many</h5>
                
                <!-- Tabel yang menampilkan data post dan komentar -->
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <!-- Kolom untuk judul post -->
                            <th>Judul Post</th>
                            <!-- Kolom untuk menampilkan komentar-komentar dari setiap post -->
                            <th>Komentar</th>
                        </tr>
                        <tr>
                            <!-- Kolom untuk judul post -->
                            <th>Tugas Sekolah</th>
                            <!-- Kolom untuk menampilkan komentar-komentar dari setiap post -->
                            <th>Matematika</th>
                        </tr>
                        <tr>
                            <!-- Kolom untuk judul post -->
                            <th>Tugas Sekolah</th>
                            <!-- Kolom untuk menampilkan komentar-komentar dari setiap post -->
                            <th>B.Indonesia</th>
                        </tr>
                        <tr>
                            <!-- Kolom untuk judul post -->
                            <th>Tugas Sekolah</th>
                            <!-- Kolom untuk menampilkan komentar-komentar dari setiap post -->
                            <th>B.Inggris</th>
                        </tr>
                        <tr>
                            <!-- Kolom untuk judul post -->
                            <th>Tugas Sekolah</th>
                            <!-- Kolom untuk menampilkan komentar-komentar dari setiap post -->
                            <th>Produktif</th>
                        </tr>
                        <tr>
                            <!-- Kolom untuk judul post -->
                            <th>Tugas Sekolah</th>
                            <!-- Kolom untuk menampilkan komentar-komentar dari setiap post -->
                            <th>P.Web</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Iterasi untuk menampilkan setiap post dengan data dari $posts -->
                        @foreach($posts as $post)
                            <tr>
                                <!-- Menampilkan judul post -->
                                <td>{{ $post->title }}</td>
                                
                                <td>
                                    <!-- Iterasi untuk menampilkan komentar-komentar terkait setiap post -->
                                    @foreach($post->comments()->get() as $comment)
                                        <!-- Card untuk setiap komentar -->
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                                <!-- Ikon komentar dan teks komentar -->
                                                <i class="fa fa-comments"></i> {{ $comment->comment }}
                                            </div>
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
