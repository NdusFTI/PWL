INI GALERI <br>
<form action="/gallery/kirim" method="post">
  @csrf
  <label for="kode">Kode:</label>
  <input type="number" name="kode" id="kode" required>
  <br>
  <label for="gambar">Gambar:</label>
  <input type="text" name="gambar" id="gambar" required>
  <br>
  <input type="submit" value="Submit">
</form>