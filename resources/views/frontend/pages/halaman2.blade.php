<!-- Halaman 2 -->
<!-- Karakteristik -->
<div class="tab">
    <h6 class="judul">BAGIAN B.<br>KARAKTERISTIK RESPONDEN</h6>
    <p class="pertanyaan" id="nama_lengkap">
        <label for="nama_lengkap" class="label">B1. Nama Responden</label>
        <input oninput="this.className = ''" name="nama_lengkap" data-bs-placement="bottom" data-bs-toggle="tooltip"
            data-bs-title="Tulikan nama lengkap sesuai akta.">
    </p>

    <p class="pertanyaan" id="nik">
        <label for="nik" class="label">B2. NIK (Nomor Induk Kependudukan)
        </label>
        <input oninput="this.className = ''" name="nik" data-bs-placement="bottom" data-bs-toggle="tooltip"
            data-bs-title="NIK berdasarkan KK jika peserta didik belum memiliki KTP. Jika tidak ada NIK mohon diisi angka nol '0'">
    </p>

    <p class="pertanyaan" id="kelas">
        <label for="kelas" class="label">B3. Kelas</label>
        <select class="form-select form-select" aria-label=".form-select-sm example">
            <option selected disabled>==Pilih Kelas==</option>
            <option value="4">IV (Empat)</option>
            <option value="5">V (Lima)</option>
            <option value="6">VI (Enam)</option>
            <option value="7">VII (Tujuh)</option>
            <option value="8">VIII (Delapan)</option>
            <option value="9">IX (Sembilan)</option>
            <option value="10">X (Sepuluh)</option>
            <option value="11">XI (Sebelas)</option>
            <option value="12">XII (Dua Belas)</option>
        </select>
    </p>

    <p class="pertanyaan" id="tanggal_lahir">
        <label for="tanggal_lahir" class="label">B4. Tanggal Lahir</label>
        <input type="date" id="tanggal_lahir" placeholder="Tanggal Lahir" oninput="this.className = ''"
            name="tanggal_lahir">
    </p>

    <p class="pertanyaan" id="umur">
        <label for="umur" class="label">B5. Umur Responden</label>
        <input placeholder="(tuliskan angka saja)" oninput="this.className = ''" name="umur"
            data-bs-placement="bottom" data-bs-toggle="tooltip" data-bs-title="Diisi dengan angka 10-18">
    </p>

    <p class="pertanyaan" id="jenis_kelamin">
    <div class="form-group">
        <label for="jenis_kelamin" class="label">B6. Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki" id="jenis_kelamin" selected>Laki-Laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan" id="jenis_kelamin">Perempuan
    </div>
    </p>

    {{-- <button type="submit">Submit</button> --}}
</div>
