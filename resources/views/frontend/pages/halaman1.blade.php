<!-- Halaman 1 -->
<!-- Keterangan Tempat -->
<div class="tab">
    <h6 class="judul">Bagian A.<br>Keterangan Tempat</h6>
    <p class="pertanyaan" id="no_kuesioner">
        <label for="kuesioner" class="label">Nomor Kuesioner</label>
        <input oninput="this.className = ''" name="kuesioner" placeholder="Ketik di sini">
    </p>

    <p class="pertanyaan" id="sekolah">
        <label for="sekolah" class="label">Nama Sekolah</label>
        <input oninput="this.className = ''" name="sekolah" placeholder="Ketik di sini">
    </p>

    <p class="pertanyaan" id="provinsi">
    <div class="form-group">
        <label for="provinsi" class="label">Provinsi</label>
        <select class="selection-form" style="width: 100%;" tabindex="-1" aria-hidden="true">
            <option class=" list" selected="selected" name="provinsi" disabled>Pilih
                Provinsi
            </option>
            @foreach ($provinces as $item)
                <option value="{{ $item->id }}" class="list">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>


    </p>

    <p class="pertanyaan" id="kabkota">
    <div class="form-group">
        <label for="kabkota" class="label">Kabupaten/Kota</label>
        <select class="selection-form" style="width: 100%;" tabindex="-1" aria-hidden="true">
            <option class="list" selected="selected" name="kabkota" disabled>Pilih
                Kabupaten/Kota
            </option>
            @foreach ($regencies as $item)
                <option value="" class="list">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    </p>

    <p class="pertanyaan" id="puskesmas">
        <label for="puskesmas" class="label">Puskesmas</label>
        <input oninput="this.className = ''" name="puskesmas" placeholder="Ketik di sini">
    </p>

    <p class="pertanyaan" id="nama_petugas">
        <label for="nama_petugas" class="label">Nama Petugas</label>
        <input oninput="this.className = ''" name="nama_petugas" placeholder="Ketik di sini">
    </p>

    <p class="pertanyaan" id="hari_tanggal">
        <label for="hari_tanggal" class="label">Hari/Tanggal Pengisian</label>
        <input type="date" id="hari_tanggal" placeholder="Hari/Tanggal Pengisian" oninput="this.className = ''"
            name="hari_tanggal">
    </p>

    {{-- <button type="submit">Submit</button> --}}

</div>
