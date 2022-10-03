<!DOCTYPE html>
<html lang="en">
    <head>
        <title>From Pendaftaran</title>
</head>
<body>
    <header>
        <h3>TABEL PENDAFTARAN</h3>
</header>
<from action="proses-pendaftaran.php" method="POST">
    <fieldset>
        <p>
            <label for="nama">Nama Lengkap :</label>
            <input type="text" name="nama" />
        </p>
        <p>
            <label for="tempat">Tempat Lahir :</label>
            <input type="text" name="tempat" />
        </p>
        <p>
            <label for="tanggal">Tanggal Lahir :</label>
            <input type="DATE" name="date" />
        </p>
        <p>
            <label for="alamat">Alamat :</label>
            <input type="textarea" name="alamat" />
        </p>
        <p>
            <label for="JK">jenis kelamin :</label>
            <input type="radio" name="JK" value="laki-laki" />Laki-Laki</label>
            <label><input type="radio" name="JK" value="perempuan" />Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama : </label>
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="budha">Budha</option>
                <option value="konghucu">Konghucu</option>
</select>
</p>
<p>
    <input type="submit" value="Submit" name="Submit" />
</p>
</fieldset>
</form>
</body>
</html>