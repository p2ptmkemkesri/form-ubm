 <!-- Halaman 2 -->
                    <!-- Karakteristik -->
                    <div class="tab">
                        <h6 class="judul">Bagian B.<br>Karakteristik Responden (Siswa Kelas 4 s/d 12)</h6>
                        <p class="pertanyaan" id="nama_lengkap">
                            <label for="nama_lengkap" class="label">Nama Lengkap Responden</label>
                            <input oninput="this.className = ''" name="nama_lengkap">
                        </p>

                        <p class="pertanyaan" id="nik">
                            <label for="nik" class="label">NIK Responden</label>
                            <input oninput="this.className = ''" name="nik">
                        </p>

                        <p class="pertanyaan" id="kelas">
                            <label for="kelas" class="label">Kelas</label>
                            <input oninput="this.className = ''" name="kelas">
                        </p>

                        <p class="pertanyaan" id="tanggal_lahir">
                            <label for="tanggal_lahir" class="label">Tanggal Lahir</label>
                            <input type="date" id="tanggal_lahir" placeholder="Tanggal Lahir"
                                oninput="this.className = ''" name="tanggal_lahir">
                        </p>

                        <p class="pertanyaan" id="umur">
                            <label for="umur" class="label">Umur Responden</label>
                            <input placeholder="(tuliskan angka saja)" oninput="this.className = ''" name="umur">
                        </p>

                        <p class="pertanyaan" id="jenis_kelamin">
                        <div class="form-group">
                            <label for="hari_tanggal" class="label">Jenis Kelamin</label>
                            <select class="selection-form" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option class="list" selected="selected" name="jenis_kelamin">Pilih Jenis Kelamin
                                </option>
                                <option value="laki-laki" class="list">Laki-laki</option>
                                <option value="perempuan" class="list">Perempuan</option>
                            </select>
                        </div>
                        </p>
                    </div>