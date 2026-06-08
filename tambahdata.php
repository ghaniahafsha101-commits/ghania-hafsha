<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa | Teknologi Informasi</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="mahasiswa.html" method="post">
        <table cell padding="5px">
            <tr>
                <td><label for="nama">Nama :</label></td>
                <td></td>
                <td><input type="text" id="nama" name="nama"/></td>
            </tr>
            <tr>
                <td><label for="nim">Nim :</label></td>
                <td></td>
                <td><input type="text" id="nim" name="nim" required/></td>
            </tr>
            <tr>
                <td><label for="foto">Foto :</label></td>
                <td></td>
                <td><input type="file" id="fot" name="foto"/></td>
            </tr>
            <tr>
                <td><label for="uts">Uts :</label></td>
                <td></td>
                <td><input type="number" id="uts" name="uts"/></td>
            </tr>
            <tr>
                <td><label for="uas">UAS :</label></td>
                <td></td>
                <td><input type="number" id="uas" name="uas"/></td>
            </tr>
            <tr>
                <td><label for="tugas">Tugas :</label></td>
                <td></td>
                <td><input type="number" id="tugas" name="tugas"/></td>
            </tr>
            <tr>
                <td colspan="3" align="">
                    <button type="submit" name="submit">Tambah Data</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <hr>
    <form action="mahasiswa.html" method="post">
    <table cellpadding="5px">
        <tr>
            <td><label for="nama">Nama :</label></td>
            <td></td>
            <td><input type="text" id="nama" name="nama"/></td>
        </tr>

        <tr>
            <td><label for="nim">NIM :</label></td>
            <td></td>
            <td><input type="number" id="nim" name="nim" required/></td>
        </tr>

        <tr>
            <td><label for="password">Password :</label></td>
            <td></td>
            <td><input type="password" id="password" name="password"/></td>
        </tr>

        <tr>
            <td><label for="email">Email :</label></td>
            <td></td>
            <td><input type="email" id="email" name="email"/></td>
        </tr>

        <tr>
            <td><label for="nohp">No HP :</label></td>
            <td></td>
            <td><input type="tel" id="nohp" name="nohp"/></td>
        </tr>

        <tr>
            <td><label for="website">Website :</label></td>
            <td></td>
            <td><input type="url" id="website" name="website"/></td>
        </tr>

        <tr>
            <td><label for="tgl">Tanggal Lahir :</label></td>
            <td></td>
            <td><input type="date" id="tgl" name="tgl"/></td>
        </tr>

        <tr>
            <td><label for="warna">Warna Favorit :</label></td>
            <td></td>
            <td><input type="color" id="warna" name="warna"/></td>
        </tr>

        <tr>
            <td><label for="kepuasan">Tingkat Kepuasan :</label></td>
            <td></td>
            <td><input type="range" id="kepuasan" name="kepuasan" min="0" max="100"/></td>
        </tr>

        <tr>
            <td>Jenis Kelamin :</td>
            <td></td>
            <td>
                <input type="radio" name="jk" value="laki"> Laki-laki
                <input type="radio" name="jk" value="perempuan"> Perempuan
            </td>
        </tr>

        <tr>
            <td>Hobi :</td>
            <td></td>
            <td>
                <input type="checkbox" name="hobi" value="musik"> Musik
                <input type="checkbox" name="hobi" value="olahraga"> Olahraga
                <input type="checkbox" name="hobi" value="game"> Game
            </td>
        </tr>

        <tr>
            <td><label for="foto">Upload Foto :</label></td>
            <td></td>
            <td><input type="file" id="foto" name="foto"/></td>
        </tr>

        <tr>
            <td><label for="alamat">Alamat :</label></td>
            <td></td>
            <td><textarea id="alamat" name="alamat"></textarea></td>
        </tr>

        <tr>
            <td><label for="jurusan">Jurusan :</label></td>
            <td></td>
            <td>
                <select id="jurusan" name="jurusan">
                    <option value=""> Pilih Jurusan </option>
                    <option value="informatika">Informatika</option>
                    <option value="sistem informasi">Sistem Informasi</option>
                    <option value="teknik komputer">Teknik Komputer</option>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan="3" align="center">
                <button type="submit" name="submit">Submit</button>
            </td>
        </tr>
    </table>
</form>

</body>
</html>