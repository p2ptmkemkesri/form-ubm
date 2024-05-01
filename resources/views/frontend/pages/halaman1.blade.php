<!-- Halaman 1 -->
<!-- Keterangan Tempat -->
<div class="tab">
    <h6 class="judul">BAGIAN A.<br>KETERANGAN TEMPAT</h6>
    {{-- <p class="pertanyaan mt-4" id="no_kuesioner">
        <label for="kuesioner" class="label">Nomor Kuesioner</label>
        <input oninput="this.className = ''" name="kuesioner" placeholder="Ketik di sini">
    </p> --}}

    <p class="pertanyaan mt-4" id="sekolah">
        <label for="sekolah" class="label">A1. Nama Sekolah/Madrasah</label>
        <input oninput="this.className = ''" name="sekolah" placeholder="Ketik di sini">
    </p>

    <p class="pertanyaan mt-4" id="provinsi">
    <div class="form-group">
        <label for="provinsi" class="label">A2. Provinsi</label>
        <select class="form-control js-example-basic-single" style="width: 100%;" tabindex="-1" aria-hidden="true">
            <option class="list" selected="selected" name="provinsi" disabled>Pilih
                Provinsi
            </option>
            @foreach ($provinces as $item)
                <option value="{{ $item->id }}" class="list">{{ $item->nama_prov }}</option>
            @endforeach
        </select>
    </div>
    </p>

    <p class="pertanyaan mt-4" id="kabkota">
    <div class="form-group">
        <label for="kabkota" class="label">A3. Kabupaten/Kota</label>
        <select class="form-control js-example-basic-single" style="width: 100%;" tabindex="-1" aria-hidden="true">
            <option class="list" selected="selected" name="kabkota" disabled>Pilih
                Kabupaten/Kota
            </option>
            @foreach ($provinces as $item)
                <option value="{{ $item->id }}" class="list">{{ $item->nama_prov }}</option>
            @endforeach
        </select>
    </div>
    </p>

    <p class="pertanyaan mt-4" id="puskesmas">
        <label for="puskesmas" class="label">A4. Puskesmas</label>
        <input oninput="this.className = ''" name="puskesmas" placeholder="Ketik di sini">
    </p>

    <p class="pertanyaan mt-4" id="nama_petugas">
        <label for="nama_petugas" class="label">A5. Petugas Pelaksana</label>
        <input oninput="this.className = ''" name="nama_petugas" placeholder="Ketik di sini">
    </p>

    <p class="pertanyaan mt-4" id="hari_tanggal">
        <label for="hari_tanggal" class="label">A6. Hari/Tanggal Pengisian</label>
        <input type="date" id="hari_tanggal" placeholder="Hari/Tanggal Pengisian" oninput="this.className = ''"
            name="hari_tanggal">
    </p>
</div>
