
<div class="container-fluid">
                        <h1 class="mt-4">Galeri Foto</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Galeri Foto</li>
                        </ol>
                        <a href="?page=galeri" class="btn btn-danger">Kembali</a>
                        <form method="post">
                            <table class="table">
                                <tr>
                                    <td>Judul</td>
                                    <td>:</td>
                                    <td><input type="text" name="judul" class="from-control"></td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>:</td>
                                    <td><input type="text" name="deskrin psi" class="from-control"></td>
                                </tr>
                                <tr>
                                    <td>Album</td>
                                    <td>:</td>
                                    <td>
                                        <select name="album_id" class="form-select form-control">
                                            <?php
                                                $al = mysqli_query($koneksi, "SELECT  * FROM album");
                                                while($album = mysqli_fetch_array($al)) {
                                                    ?>
                                                    <option value="<?php echo $album['album_id']; ?><?php echo $album['namaalbum']; ?>"></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td><input type="date" name="judul" class="from-control"></td>
                                </tr>
                                <tr>
                                    <td>Gambar</td>
                                    <td>:</td>
                                    <td><input type="file" name="gambar" class="from-control"></td>
                                </tr>
                            </table>
                        </form>
                    </div>