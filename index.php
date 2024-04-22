<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Nilai Ujian | Rozir Wobari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Form Nilai Ujian
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group py-2">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
                            </div>
                            <div class="form-group py-2">
                                <label for="nama">Nama</label>
                                <input type="nama" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group py-2">
                                <label for="kuliah">Kuliah</label>
                                <select class="form-select" name="kuliah">
                                    <option selected>--- Pilih Kampus ---</option>
                                    <option value="Universitas Gunadarma">Universitas Gunadarma</option>
                                    <option value="Universitas Indonesia">Universitas Indonesia</option>
                                    <option value="Universitas Pendidikan Indonesia">Universitas Pendidikan Indonesia</option>
                                    <option value="Institut Teknologi Bandung">Institut Teknologi Bandung</option>
                                </select>
                            </div>
                            <div class="form-group py-2">
                                <label for="mata_kuliah">Mata Kuliah</label>
                                <select class="form-select" name="mata_kuliah">
                                    <option selected>--- Pilih Mata Kuliah ---</option>
                                    <option value="HTML">HTML</option>
                                    <option value="CSS">CSS</option>
                                    <option value="JavaScript">JavaScript</option>
                                    <option value="PHP">PHP</option>
                                </select>
                            </div>
                            <div class="form-group py-2">
                                <label for="nilai">Nilai</label>
                                <input type="number" class="form-control" id="nilai" name="nilai"
                                    placeholder="Masukkan Nilai">
                            </div>
                            <div class="text-center pt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once 'class.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $kuliah = $_POST['kuliah'];
  $mata_kuliah = $_POST['mata_kuliah'];
  $nilai = $_POST['nilai'];

  $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $mata_kuliah, $nilai);
?>

<div class="container mt-5">
  <h2 class="mb-4 text-center">Data Mahasiswa</h2>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Kuliah</th>
        <th scope="col">Mata Kuliah</th>
        <th scope="col">Nilai</th>
        <th scope="col">Grade</th>
        <th scope="col">Predikat</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?= $mahasiswa->nim ?></th>
        <td><?= $mahasiswa->nama ?></td>
        <td><?= $mahasiswa->kuliah ?></td>
        <td><?= $mahasiswa->mata_kuliah ?></td>
        <td><?= $mahasiswa->nilai ?></td>
        <td><?= $mahasiswa->getGrade() ?></td>
        <td><?= $mahasiswa->getPredikat() ?></td>
        <td><?= $mahasiswa->getStatus() ?></td>
      </tr>
    </tbody>
  </table>
</div>

<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>