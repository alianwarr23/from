<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
   <form action="test_form.php" method="post">
        <label>Nama Depan:</label><br>
        <input type="text" name="nama_depan" required><br><br>

        <label>Nama Belakang:</label><br>
        <input type="text" name="nama_belakang" required><br><br>

        <label>Tingkat:</label><br>
        <select name="tingkat" required>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMK">SMK</option>
        </select><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan<br><br>

        <label>Hobi:</label><br>
        <input type="checkbox" name="hobi[]" value="olahraga"> olahraga
        <input type="checkbox" name="hobi[]" value="menulis"> menulis
        <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br><br>

        <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>