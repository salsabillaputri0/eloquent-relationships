<!doctype html>
<html lang="en">

<head>
    <!-- Meta tag untuk pengaturan charset dan responsivitas halaman -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title halaman -->
    <title>Eloquent Relationships : Relasi One to One & Many To Many</title>
    
    <!-- Link untuk mengimpor stylesheet Bootstrap untuk desain responsif dan komponen UI -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
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
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One To One & Many To Many</h5>
                
                <!-- Tabel yang menampilkan data user, nomor telepon dan roles -->
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <!-- Kolom untuk menampilkan nama user -->
                            <th>Nama User</th>
                            <!-- Kolom untuk menampilkan nomor telepon user (relasi One to One) -->
                            <th>Nomor Telepon</th>
                            <!-- Kolom untuk menampilkan roles (relasi Many to Many) -->
                            <th>Roles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Iterasi untuk menampilkan setiap user dari koleksi $users -->
                        @foreach($users as $user)
                        <tr>
                            <!-- Menampilkan nama user -->
                            <td>{{ $user->name }}</td>
                            <!-- Menampilkan nomor telepon user yang diambil melalui relasi One to One -->
                            <td>{{ $user->phone->phone }}</td>
                            <td>
                                <!-- Iterasi untuk menampilkan roles yang dimiliki user (relasi Many to Many) -->
                                @foreach ($user->roles()->get() as $role)
                                <!-- Tombol untuk setiap role yang dimiliki user -->
                                <button class="btn btn-sm btn-primary me-2">{{ $role->name }}</button>
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
