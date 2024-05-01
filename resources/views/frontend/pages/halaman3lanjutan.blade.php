<!-- Halaman 3 -->
<!-- Perilaku Merokok -->
<div class="tab">
    <h6 class="judul">BAGIAN C.<br>PERILAKU MEROKOK (lanjutan)</h6>

    {{-- soal c3 --}}
    <p class="pertanyaan mt-4" id="c3">
    <div class="form-group">
        <label for="c3" class="label">C3. Jika merokok (jawaban 1 dan 2), JENIS ROKOK apa yang digunakan?</label>
        <input type="radio" name="c3" value="konvensional" id="c3" selected> Rokok konvensional (rokok
        filter/putih, kretek, linting, dll)
        <br>
        <input type="radio" name="c3" value="elektronik" id="c3"> Rokok elektronik (vape, IQOS, dll)
        <br>
        <input type="radio" name="c3" value="keduanya" id="c3"> Keduanya
        <br>
        <input type="radio" name="c3" value="lainnya" id="c3"> Lainnya:
        <input oninput="this.className = ''" name="lainnya" data-bs-placement="bottom" data-bs-toggle="tooltip"
            data-bs-title="Tuliskan di sini">
    </div>
    </p>

    {{-- soal c4 --}}
    <p class="pertanyaan mt-4" id="c4">
        <label for="c4" class="label">C4. Berapa usia MULAI merokok?</label>
        <input oninput="this.className = ''" name="c4" data-bs-placement="bottom" data-bs-toggle="tooltip"
            data-bs-title="Diisi dengan ANGKA 0 - 18">
    </p>

    {{-- soal c5 --}}
    <p class="pertanyaan mt-4" id="c5">
    <div class="form-group">
        <label for="c5" class="label">C5. Apa alasan UTAMA kamu mulai merokok?</label>

        <input type="radio" name="c5" value="" id="C5"> Ikut-ikutan teman
        <br>
        <input type="radio" name="c5" value="" id="c5"> Pengaruh keluarga
        <br>
        <input type="radio" name="c5" value="" id="C5"> Rasa ingin tahu/ coba-coba
        <br>
        <input type="radio" name="c5" value="" id="c5"> Terpaksa oleh teman/lingkungan
        <br>
        <input type="radio" name="c5" value="" id="C5"> Mengisi waktu luang
        <br>
        <input type="radio" name="c5" value="" id="c5"> Menghilangkan stress
        <br>
        <input type="radio" name="c5" value="lainnya" id="c3"> Lainnya:
        <input oninput="this.className = ''" name="lainnya" data-bs-placement="bottom" data-bs-toggle="tooltip"
            data-bs-title="Tuliskan di sini">
    </div>
    </p>

    {{-- soal c6 --}}
    <p class="pertanyaan mt-4" id="c6">
        <label for="c6" class="label">C6. Sudah berapa lama kamu merokok (dalam BULAN)?</label>
        <input oninput="this.className = ''" name="c6" data-bs-placement="bottom" data-bs-toggle="tooltip"
            data-bs-title="Contoh pengisian : jika merokok 3 tahun maka 3 x 12 bulan = 36 bulan --> diisi 36">
    </p>

    {{-- soal c7 --}}
    <p class="pertanyaan mt-4" id="c7">
    <div class="form-group">
        <label for="c7" class="label">C7. Bagaimana biasanya (PALING SERING) kamu mendapatkan rokok?</label>

        <input type="radio" name="c7" value="" id="c7"> Beli batangan
        <br>
        <input type="radio" name="c7" value="" id="c7"> Beli bungkusan
        <br>
        <input type="radio" name="c7" value="" id="c7"> Dapat/minta dari teman/ orang tua/ saudara
        <br>
        <input type="radio" name="c7" value="lainnya" id="c7"> Lainnya:
        <input oninput="this.className = ''" name="lainnya" data-bs-placement="bottom" data-bs-toggle="tooltip"
            data-bs-title="Tuliskan di sini">
    </div>
    </p>

    {{-- soal 8 --}}
    <p class="pertanyaan mt-4" id="c8a">
    <div class="form-group">
        <label for="c8a" class="label">C8a. Apakah ada keinginan kamu untuk berhenti merokok?</label>
        <br>
        <input type="radio" name="c8a" value="" id="c8a"> Ya
        <br>
        <input type="radio" name="c8a" value="" id="c8a"> Tidak
    </div>
    </p>

</div>
