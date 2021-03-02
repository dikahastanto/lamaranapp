<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Aplikasi Pendaftaran Kerja</title>
<!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{ asset('css/templatemo-softy-pinko.css')}}">

    </head>
    
    <body>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="app">
        <div class="container">
            <form action="{{ route('daftarAction') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="left-heading">
                          <h2 class="section-title">Isi Form Berikut Ini</h2>
                      </div>
                      <div class="left-text">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Formasi</label>
                            <select name="formasi" class="form-control">
                              <option value="IT Support">IT Support</option>
                              <option value="Kasir">Kasir</option>
                              <option value="IT Programmer">IT Programmer</option>
                              <option value="Farmasi">Farmasi</option>
                              <option value="Fisioterapis">Fisioterapis</option>
                              <option value="Perawat">Perawat</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input name="namaLengkap" type="text" class="form-control" placeholder="Nama Lengkap">
                          </div>
                          <div class="form-group">
                            <label>Nama Panggilan</label>
                            <input name="namaPanggilan" type="text" class="form-control" placeholder="Nama Panggilan">
                          </div>
                          <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input name="tempatLahir" type="text" class="form-control" placeholder="Tempat Lahir">
                          </div>
                          <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input name="tanggalLahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                          </div>
                          <div class="form-group">
                            <label>Alamat Email</label>
                            <input name="email" type="email" class="form-control" placeholder="Alamat Email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Kelamin</label>
                            <select name="jenisKelamin" class="form-control">
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <select name="agama" class="form-control">
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Katholik">Katholik</option>
                              <option value="Budha">Budha</option>
                              <option value="Hindu">Hindu</option>
                            </select>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="left-heading" style="margin-top: 75px;">
                          
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status</label>
                      <select name="status" class="form-control">
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Tinggi Badan</label>
                      <input name="tinggiBadan" type="number" class="form-control" placeholder="Tiinggi Badan (Cm)">
                    </div>
                    <div class="form-group">
                      <label>No Identitas (KTP/SIM)</label>
                      <input name="noIdentitas" type="number" class="form-control" placeholder="No Identitas">
                    </div>
                    <div class="form-group">
                      <label>Alamat Sesuai KTP</label>
                      <textarea name="alamat" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                      <label>No HP</label>
                      <input name="noHp" type="text" class="form-control" placeholder="No Hp">
                    </div>
                    <div class="form-group">
                      <label>No Telp</label>
                      <input name="noTelp" type="text" class="form-control" placeholder="No Telp">
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="left-heading">
                          <h2 class="section-title">Data Keluarga</h2>
                      </div>
                      <div class="left-text">
                          Data Tanggungan (Suami/Istri Jika Sudah Menikah)
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Tanggungan</label>
                            <input class="form-control" type="text" name="namaTanggungan" placeholder="Nama Tanggungan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Kelamin</label>
                            <select name="jenisKelaminTanggungan" class="form-control">
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Hubungan Dengan Anda</label>
                            <input class="form-control" type="text" name="hubungan" placeholder="Hubungan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Pendidikan Terkahir</label>
                            <input class="form-control" type="text" name="pendidikanTerakhirTanggungan" placeholder="Pendidikan Terkahir">
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="left-heading">
                          <h2 class="section-title">Data Susunan Keluarga</h2>
                      </div>
                      Data Keluarga
                      <div class="left-text" v-for="(d, i) in keluarga">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Tanggungan</label>
                            <input class="form-control" type="text" :name="'keluarga' + '[' + i + '][nama]'" placeholder="Nama Tanggungan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Kelamin</label>
                            <select :name="`keluarga[${i}][jenisKelamin]`" class="form-control">
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Hubungan Dengan Anda</label>
                            <input class="form-control" type="text" :name="`keluarga[${i}][hubungan]`" placeholder="Hubungan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Pendidikan Terkahir</label>
                            <input class="form-control" type="text" :name="`keluarga[${i}][pendidikanTerakhir]`" placeholder="Pendidikan Terkahir">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir</label>
                            <input class="form-control" type="text" :name="`keluarga[${i}][tempatLahir]`" placeholder="Tempat Lahir">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input class="form-control" type="date" :name="`keluarga[${i}][tanggalLahir]`" placeholder="Tempat Lahir">
                          </div>
                          <button type="button" @click="deleteKeluarga(i)" class="btn btn-danger">Hapus</button>
                          <hr>
                      </div>
                      <button @click="tambahKeluarga()" type="button" class="btn btn-success" type="button">Tambah</button>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="left-heading">
                          <h2 class="section-title">Kontak Darurat</h2>
                      </div>
                      <div class="left-text">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input class="form-control" type="text" name="namaKontakDarurat" placeholder="Nama">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">No Hp</label>
                            <input class="form-control" type="text" name="noHpKontakDarurat" placeholder="No Hp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input class="form-control" type="text" name="alamatKontakDarurat" placeholder="Alamat">
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="left-heading">
                          <h2 class="section-title">Riwayat Pendidikan</h2>
                      </div>
                      <div class="left-text">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Institusi</label>
                            <input class="form-control" type="text" name="namaInstitusi" placeholder="Nama Institusi">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kota/Kab</label>
                            <input class="form-control" type="text" name="kotaInstitusi" placeholder="Kota/Kab">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Jurusan</label>
                            <input class="form-control" type="text" name="jurusan" placeholder="Jurusan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tahun Lulus</label>
                            <input class="form-control" type="number" name="tahunLulus" placeholder="Tahun Lulus">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">IPK</label>
                            <input class="form-control" type="number" name="ipk" placeholder="IPK">
                          </div>
                          Apakah Anda Akan Melanjutkan Pendidikan ?
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="true" name="lanjutPendidikan" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Ya
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" value="false" type="radio" name="lanjutPendidikan" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Tidak
                            </label>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="left-heading">
                          <h2 class="section-title">Pengalaman Organisasi</h2>
                      </div>
                      <div class="left-text">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Organisasi</label>
                            <input class="form-control" type="text" name="namaOrganisasi" placeholder="Nama Organisasi">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Jabatan</label>
                            <input class="form-control" type="text" name="jabatanOrganisasi" placeholder="Jabatan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tahun</label>
                            <input class="form-control" type="number" name="tahunOrganisasi" placeholder="Tahun">
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="left-heading">
                          <h2 class="section-title">Riwayat Pelatihan</h2>
                      </div>
                      <div class="left-text">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pelatihan</label>
                            <input class="form-control" type="text" name="namaPelatihan" placeholder="Nama Pelatihan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tahun</label>
                            <input class="form-control" type="number" name="tahunPelatihan" placeholder="Tahun Pelatihan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Masa Berlaku (Tahun)</label>
                            <input class="form-control" type="number" name="masaBerlaku" placeholder="Masa Berlaku (Tahun)">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="left-heading">
                          <h2 class="section-title">Bahasa Asing Yang Dikuasai</h2>
                      </div>
                      <div class="left-text" v-for="(b, i) in bahasa">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Bahasa</label>
                            <input class="form-control" type="text" :name="`bahasa[${i}][namaBahasa]`" v-model="b.namaBahasa" placeholder="Bahasa">
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" :name="`bahasa[${i}][mendengar]`" type="checkbox" value="true" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Mendengar (@{{ b.namaBahasa }})
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" :name="`bahasa[${i}][membaca]`" type="checkbox" value="true" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                              Membaca (@{{ b.namaBahasa }})
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" :name="`bahasa[${i}][menulis]`" type="checkbox" value="true" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                              Menulis (@{{ b.namaBahasa }})
                            </label>
                          </div>
                          <button class="btn btn-danger" type="button" @click="hapusBahasa(i)">Hapus</button>
                      </div>
                      <hr>
                      <button class="btn btn-success" @click="tambahBahasa()" type="button">Tambah Bahasa</button>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="left-heading">
                          <h2 class="section-title">Riwayat Pengalaman Kerja</h2>
                      </div>
                      <div class="left-text" v-for="(d, i) in pengalamanKerja">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Perusahaan</label>
                            <input class="form-control" type="text" :name="`pengalamanKerja[${i}][namaPerusahaan]`" placeholder="Nama Perusahaan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Bidang Perusahaan</label>
                            <input class="form-control" type="text" :name="`pengalamanKerja[${i}][bidang]`" placeholder="Bidang Perusahaan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input class="form-control" type="text" :name="`pengalamanKerja[${i}][alamat]`" placeholder="Alamat">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Jabatan Awal</label>
                            <input class="form-control" type="text" :name="`pengalamanKerja[${i}][jabatanAwal]`" placeholder="Jabatan Awal">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Jabatan Akhir</label>
                            <input class="form-control" type="text" :name="`pengalamanKerja[${i}][jabatanAkhir]`" placeholder="Jabatan Akhir">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Mulai</label>
                            <input class="form-control" type="date" :name="`pengalamanKerja[${i}][tanggalMulai]`" placeholder="Tanggal Mulai">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Akhir</label>
                            <input class="form-control" type="date" :name="`pengalamanKerja[${i}][tanggalAkhir]`" placeholder="Tanggal Akhir">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Gaji</label>
                            <input class="form-control" type="number" :name="`pengalamanKerja[${i}][gaji]`" placeholder="Gaji">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Alasan Berhenti</label>
                            <textarea class="form-control" :name="`pengalamanKerja[${i}][alasanBerhenti]`" id="" cols="30" rows="10"></textarea>
                          </div>
                          <button class="btn btn-danger" @click="hapusPengalamanKerja(i)" type="button">Delete</button>
                      </div>
                      <hr>
                      <button class="btn btn-success" @click="tambahPengalamanKerja()" type="button">Tambah Pengalaman Kerja</button>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="left-heading">
                          <h2 class="section-title">Lain-Lain</h2>
                      </div>
                      <div class="left-text">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Dari Mana Anda Mengetahui lowongan kerja di RS. Mitra Husada ?</label>
                            <textarea name="lain1" class="form-control" cols="30" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Apakah anda pernah melamar kerja di RS. Mitra Husada sebelumnya, kapan dan diposisi apa ?</label>
                            <textarea name="lain2" class="form-control" cols="30" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Apakah saat ini anda melamar kerja di perusahaan lain ? sebagai posisi apa ?</label>
                            <textarea name="lain3" class="form-control" cols="30" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Apakah saat ini anda terikat kontrak dengan perusahaan lain ?</label>
                            <textarea name="lain4" class="form-control" cols="30" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Apakah anda memiliki pekerjaan part time ? dimana dan sebagai apa ?</label>
                            <textarea name="lain5" class="form-control" cols="30" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Apakah Anda pernah mengalami sakit keras atau menjalani perawatan intensif ? Jika iya kapan dan sebutkan penyakitnya ?</label>
                            <textarea name="lain6" class="form-control" cols="30" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Apabila diterima, kapan anda mulai bekerja ?</label>
                            <textarea name="lain7" class="form-control" cols="30" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Berapa besar gaji yang anda harapkan ?</label>
                            <textarea name="lain8" class="form-control" cols="30" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Apakah anda mempunyai saudara atau temena yang bekerja di RS. Mitra Husada ?</label>
                            <textarea name="lain9" class="form-control" cols="30" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Benefit lain yang anda harapkan</label>
                            <textarea name="lain10" class="form-control" cols="30" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">File CV Anda (PDF, max 2Mb)</label>
                            <input type="file" name="cv" required>
                          </div>
                          <hr>
                          <button type="submit" class="btn btn-success">Kirimkan Data</button>
                      </div>
                  </div>
              </div>
            </form>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->
    
    <!-- jQuery -->
    <script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{ asset('js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/imgfix.min.js')}}"></script> 
    
    <!-- Global Init -->
    <script src="{{ asset('js/custom.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue-bootstrap-typeahead"></script>
    <script src="https://unpkg.com/vue-bootstrap-typeahead"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script>
      new Vue({
        el: '#app',
        data() {
          return {
            keluarga: [
              {
                namaLengkap: null,
                jenisKelamin: null,
                hubungan: null,
                pendidikanTerkahir: null,
                tempatLahir: null,
                tanggalLahir: null
              }
            ],
            bahasa: [
              {
                namaBahasa: null,
                mendengar: false,
                membaca: false,
                menulis: false
              }
            ],
            pengalamanKerja: [
              {
                namaPerusahaan: null,
                bidang: null,
                alamat: null,
                jabatanAwal: null,
                jabatanAkhir: null,
                tanggalMulai: null,
                tanggalAkhir: null,
                gaji: 0,
                alasanBerhenti: null
              }
            ]
          }
        },
        methods: {
          deleteKeluarga (i) {
            this.keluarga.splice(Number(i), 1)
          },
          tambahKeluarga () {
            this.keluarga.push({
                namaLengkap: null,
                jenisKelamin: null,
                hubungan: null,
                pendidikanTerkahir: null,
                tempatLahir: null,
                tanggalLahir: null
              })
          },
          hapusBahasa (i) {
            this.bahasa.splice(i, 1)
          },
          tambahBahasa () {
            this.bahasa.push({
              namaBahasa: null,
              mendengar: false,
              membaca: false,
              menulis: false
            })
          },
          hapusPengalamanKerja (i) {
            this.pengalamanKerja.splice(i, 1)
          },
          tambahPengalamanKerja () {
            this.pengalamanKerja.push({
                namaPerusahaan: null,
                bidang: null,
                alamat: null,
                jabatanAwal: null,
                jabatanAkhir: null,
                tanggalMulai: null,
                tanggalAkhir: null,
                gaji: 0,
                alasanBerhenti: null
              })
          }
        }
      })
    </script>
  </body>
</html>