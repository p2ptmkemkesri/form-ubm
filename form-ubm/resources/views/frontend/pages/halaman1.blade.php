<!-- Halaman 1 -->
<!-- Keterangan Tempat -->
<div class="tab">
    <h6 class="judul">Bagian A.<br>Keterangan Tempat</h6>
    <p class="pertanyaan" id="no_kuesioner">
        <label for="kuesioner" class="label">Nomor Kuesioner</label>
        <input oninput="this.className = ''" name="kuesioner">
    </p>

    <p class="pertanyaan" id="sekolah">
        <label for="sekolah" class="label">Nama Sekolah</label>
        <input oninput="this.className = ''" name="sekolah">
    </p>

    <p class="pertanyaan" id="provinsi">
    <div class="form-group">
        <label for="provinsi" class="label">Provinsi</label>

        <p class="pertanyaan" id="jenis_kelamin">
        <div class="form-group">
            <label for="jenis_kelamin" class="label">Provinsi</label><br>
            <input type="radio" name="Aceh" value="Aceh" id="jenis_kelamin" selected>Aceh<br>
            <input type="radio" name="jenis_kelamin" value="perempuan" id="jenis_kelamin">Perempuan
        </div>
        </p>


        {{-- <select class="selection-form" style="width: 100%;" tabindex="-1" aria-hidden="true">
            <option class=" list" selected="selected" name="provinsi">Pilih
                Provinsi
            </option>
            <option value="" class="list">Nanggroe Aceh Darussalam</option>
            <option value="" class="list">Sumatera Utara</option>
            <option value="" class="list">Sumatera Selatan</option>
            <option value="" class="list">Sumatera Barat</option>
            <option value="" class="list">Bengkulu</option>
            <option value="" class="list">Riau</option>
            <option value="" class="list">Kepulauan Riau</option>
            <option value="" class="list">Jambi</option>
            <option value="" class="list">Lampung</option>
            <option value="" class="list">Bangka Belitung</option>
            <option value="" class="list">Kalimantan Barat</option>
            <option value="" class="list">Kalimantan Timur</option>
            <option value="" class="list">Kalimantan Selatan</option>
            <option value="" class="list">Kalimantan Tengah</option>
            <option value="" class="list">Kalimantan Utara</option>
            <option value="" class="list">Banten</option>
            <option value="" class="list">DKI Jakarta</option>
            <option value="" class="list">Jawa Barat</option>
            <option value="" class="list">Jawa Tengah</option>
            <option value="" class="list">Daerah Istimewa Yogyakarta</option>
            <option value="" class="list">Jawa Timur</option>
            <option value="" class="list">Bali</option>
            <option value="" class="list">Nusa Tenggara Timur</option>
            <option value="" class="list">Nusa Tenggara Barat</option>
            <option value="" class="list">Gorontalo</option>
            <option value="" class="list">Sulawesi Barat</option>
            <option value="" class="list">Sulawesi Tengah</option>
            <option value="" class="list">Sulawesi Utara</option>
            <option value="" class="list">Sulawesi Tenggara</option>
            <option value="" class="list">Sulawesi Selatan</option>
            <option value="" class="list">Maluku Utara</option>
            <option value="" class="list">Maluku</option>
            <option value="" class="list">Papua Barat</option>
            <option value="" class="list">Papua</option>
            <option value="" class="list">Papua Tengah</option>
            <option value="" class="list">Papua Pegunungan</option>
            <option value="" class="list">Papua Selatan</option>
            <option value="" class="list">Papua Barat Daya</option>
        </select> --}}
    </div>
    </p>

    <p class="pertanyaan" id="kabkota">
    <div class="form-group">
        <label for="kabkota" class="label">Kabupaten/Kota</label>
        <select class="selection-form" style="width: 100%;" tabindex="-1" aria-hidden="true">
            <option class="list" selected="selected" name="kabkota">Pilih
                Kabupaten/Kota
            </option>
            <option value="" class="list">Nanggroe Aceh Darussalam</option>
            <option value="" class="list">Sumatera Utara</option>
            <option value="" class="list">Sumatera Selatan</option>
            <option value="" class="list">Sumatera Barat</option>
            <option value="" class="list">Bengkulu</option>
            <option value="" class="list">Riau</option>
            <option value="" class="list">Kepulauan Riau</option>
            <option value="" class="list">Jambi</option>
            <option value="" class="list">Lampung</option>
            <option value="" class="list">Bangka Belitung</option>
            <option value="" class="list">Kalimantan Barat</option>
            <option value="" class="list">Kalimantan Timur</option>
            <option value="" class="list">Kalimantan Selatan</option>
            <option value="" class="list">Kalimantan Tengah</option>
            <option value="" class="list">Kalimantan Utara</option>
            <option value="" class="list">Banten</option>
            <option value="" class="list">DKI Jakarta</option>
            <option value="" class="list">Jawa Barat</option>
            <option value="" class="list">Jawa Tengah</option>
            <option value="" class="list">Daerah Istimewa Yogyakarta</option>
            <option value="" class="list">Jawa Timur</option>
            <option value="" class="list">Bali</option>
            <option value="" class="list">Nusa Tenggara Timur</option>
            <option value="" class="list">Nusa Tenggara Barat</option>
            <option value="" class="list">Gorontalo</option>
            <option value="" class="list">Sulawesi Barat</option>
            <option value="" class="list">Sulawesi Tengah</option>
            <option value="" class="list">Sulawesi Utara</option>
            <option value="" class="list">Sulawesi Tenggara</option>
            <option value="" class="list">Sulawesi Selatan</option>
            <option value="" class="list">Maluku Utara</option>
            <option value="" class="list">Maluku</option>
            <option value="" class="list">Papua Barat</option>
            <option value="" class="list">Papua</option>
            <option value="" class="list">Papua Tengah</option>
            <option value="" class="list">Papua Pegunungan</option>
            <option value="" class="list">Papua Selatan</option>
            <option value="" class="list">Papua Barat Daya</option>
        </select>
    </div>
    </p>

    <p class="pertanyaan" id="puskesmas">
        <label for="puskesmas" class="label">Puskesmas</label>
        <input oninput="this.className = ''" name="puskesmas">
    </p>

    <p class="pertanyaan" id="nama_petugas">
        <label for="nama_petugas" class="label">Nama Petugas</label>
        <input oninput="this.className = ''" name="nama_petugas">
    </p>

    <p class="pertanyaan" id="hari_tanggal">
        <label for="hari_tanggal" class="label">Hari/Tanggal Pengisian</label>
        <input type="date" id="hari_tanggal" placeholder="Hari/Tanggal Pengisian" oninput="this.className = ''"
            name="hari_tanggal">
    </p>
</div>