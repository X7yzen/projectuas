
<div class="container-fluid">
                        <h1 class="mt-4">Galeri Foto</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Galeri Foto</li>
                        </ol>
                        <a href="?page=galeri_tambah" class="btn btn-primary">+ Tambah Galeri</a>
                        <br><br>
                        <table class="table table-bordered">
                            <tr>
                              <th>Gambar</th>
                              <th>Judul</th>
                              <th>Album</th>
                              <th>Deskripsi</th>
                              <th>Tanggal</th>
                              <th>Aksi</th>
                            </tr>
                            <?php
                
                                $query = mysqli_query($koneksi, "SELECT foto.*, album.namaalbum FROM foto left join album on album.album_id = foto.album_id");
                                while($data = mysqli_fetch_array($query)) {

                                    ?>
                                    <tr>
                                        <td><img src="gambar/<?php echo $data['gambar']; ?>" alt="gambar"></td>
                                        <td><?php echo $data['judul']; ?></td>
                                        <td><?php echo $data['nama_album']; ?></td>
                                        <td><?php echo $data['deskripsi']; ?></td> 
                                        <td><?php echo $data['tanggal']; ?></td>
                                        <td>
                                            <a href="?page=galeri_ubah&&id=<?php echo $data['foto_id']; ?>" class="btn btn-primary">Ubah</a>
                                            <a href="?page=galeri_hapus&&id=<?php echo $data['foto_id']; ?>" class="btn btn-primary">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?> 
                                </table>
                    </div>