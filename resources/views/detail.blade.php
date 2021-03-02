<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Data Pelamar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
              <div class="col-md-6">
                <h5>Data Umum</h5>
                <hr>
                <div>Formasi</div>
                <div><b>{{ $data->formasi }}</b></div>
                <div>Nama Pelamar</div>
                <div><b>{{ $data->namaLengkap }}</b></div>
                <div>Nama Panggilan</div>
                <div><b>{{ $data->namaPanggilan }}</b></div>
                <div>TTL</div>
                <div><b>{{ $data->tempatLahir }}, {{ $data->tanggalLahir }}</b></div>
                <div>Email</div>
                <div><b>{{ $data->email }}</b></div>
                <div>Jenis Kelamin</div>
                <div><b>{{ $data->jenisKelamin }}</b></div>
                <div>Agama</div>
                <div><b>{{ $data->agama }}</b></div>
                <div>Status</div>
                <div><b>{{ $data->status }}</b></div>
                <div>Tinggi Badan</div>
                <div><b>{{ $data->tinggiBadan }} Cm</b></div>
                <div>No Identitas</div>
                <div><b>{{ $data->noIdentitas }}</b></div>
                <div>Alamat</div>
                <div><b>{{ $data->alamat }}</b></div>
                <div>No Hp</div>
                <div><b>{{ $data->noHp }}</b></div>
                <div>No Telp</div>
                <div><b>{{ $data->noTelp }}</b></div>
              </div>
              <div class="col-md-6">
                  <h5>Data Keluarga</h5>
                  <hr>
                  <div>Nama Suami/Istri</div>
                  <div><b>{{ $data->namaTanggungan }}</b></div>
                  <div>Jenus Kelamin</div>
                  <div><b>{{ $data->jenisKelamin }}</b></div>
                  <div>Hubungan</div>
                  <div><b>{{ $data->hubungan }}</b></div>
                  <div>Pendidikan Terakhir</div>
                  <div><b>{{ $data->pendidikanTerakhirTanggungan }}</b></div>
                  <br>
                  <h5>Susuan Keluarga</h5>
                  @foreach($keluarga as $k)
                    <div>Nama Lengkap</div>
                    <div><b>{{ $k->nama }}</b></div>
                    <div>Jenis Kelamin</div>
                    <div><b>{{ $k->jenisKelamin }}</b></div>
                    <div>Hubungan</div>
                    <div><b>{{ $k->hubungan }}</b></div>
                    <div>TTL</div>
                    <div><b>{{ $k->tempatLahir }}, {{ $k->tanggalLahir }}</b></div>
                  @endforeach
                  <hr>
              </div>
            </div>
            <div class="row" style="margin-top: 20px;">
              <div class="col-md-6">
                <h5>Kontak Darurat</h5>
                <hr>
                <div>Nama</div>
                <div><b>{{ $data->namaKontakDarurat }}</b></div>
                <div>No Hp</div>
                <div><b>{{ $data->noHpKontakDarurat }}</b></div>
                <div>Alamat</div>
                <div><b>{{ $data->alamatKontakDarurat }}</b></div>
              </div>
              <div class="col-md-6">
                <h5>Riwayat Pendidikan Calon Pelamar</h5>
                <hr>
                <div>Nama Institusi</div>
                <div><b>{{ $data->namaInstitusi }}</b></div>
                <div>Alamat</div>
                <div><b>{{ $data->kotaInstitusi }}</b></div>
                <div>Jurusan</div>
                <div><b>{{ $data->jurusan }}</b></div>
                <div>Tahun Lulus</div>
                <div><b>{{ $data->tahunLulus }}</b></div>
                <div>IPK</div>
                <div><b>{{ $data->ipk }}</b></div>
                <div>Apakah Ingin Melanjutkan Sekolah ?</div>
                <div><b>{{ $data->lanjutPendidikan ? 'Lanjut' : 'Tidak' }}</b></div>
              </div>
            </div>
            <div class="row" style="margin-top: 20px;">
              <div class="col-md-6">
                <h5>Pengalaman Organisasi</h5>
                <hr>
                <div>Nama Organisasi</div>
                <div><b>{{ $data->namaOrganisasi }}</b></div>
                <div>Jabatan</div>
                <div><b>{{ $data->jabatanOrganisasi }}</b></div>
                <div>Tahun</div>
                <div><b>{{ $data->tahunOrganisasi }}</b></div>
              </div>
              <div class="col-md-6">
                <h5>Riwayat Pelatihan</h5>
                <hr>
                <div>Nama Pelatihan</div>
                <div><b>{{ $data->namaPelatihan }}</b></div>
                <div>Tahun</div>
                <div><b>{{ $data->tahunPelatihan }}</b></div>
                <div>Masa Berlaku</div>
                <div><b>{{ $data->masaBerlaku }} Tahun</b></div>
              </div>
            </div>
            <div class="row" style="margin-top: 20px;">
              <div class="col-md-6">
                <h5>Bahasa Asing Yang Dikuasai</h5>
                <hr>
                @foreach($bahasa as $b)
                  <div>Bahasa</div>
                  <div><b>{{ $b->namaBahasa }}</b></div>
                  <div>Membaca</div>
                  <div><b>{{ $b->membaca ? 'Ya' : 'Tidak' }}</b></div>
                  <div>Mendengar</div>
                  <div><b>{{ $b->mendengar ? 'Ya' : 'Tidak' }}</b></div>
                  <div>Menulis</div>
                  <div><b>{{ $b->menulis ? 'Ya' : 'Tidak' }}</b></div>
                @endforeach
              </div>
              <div class="col-md-6">
                <h5>Riwayat Pengalaman Kerja</h5>
                <hr>
                @foreach($pengalamanKerja as $p)
                  <div>Nama Perusahaan</div>
                  <div><b>{{ $p->namaPerusahaan}}</b></div>
                  <div>Bidang</div>
                  <div><b>{{ $p->bidang}}</b></div>
                  <div>Alamat</div>
                  <div><b>{{ $p->alamat}}</b></div>
                  <div>Jabatan Awal</div>
                  <div><b>{{ $p->jabatanAwal}}</b></div>
                  <div>Jabatan Akhir</div>
                  <div><b>{{ $p->jabatanAkhir}}</b></div>
                  <div>Tanggal Mulai</div>
                  <div><b>{{ $p->tanggalMulai}}</b></div>
                  <div>Tanggal Selesai</div>
                  <div><b>{{ $p->tanggalAkhir}}</b></div>
                  <div>Gaji Terakhir Diterima</div>
                  <div><b>{{ $p->gaji}}</b></div>
                  <div>Alasan Berhenti</div>
                  <div><b>{{ $p->alasanBerhenti}}</b></div>
                @endforeach
              </div>
            </div>
            <div class="row" style="margin-top: 20px;">
              <div class="col-md-12">
                <h5>Hasil Wawancara</h5>
                <hr>
                <div>Dari Mana Anda Mengetahui lowongan kerja di RS. Mitra Husada ?</div>
                <div><b>{{ $data->lain1 }}</b></div>
                <div>Apakah anda pernah melamar kerja di RS. Mitra Husada sebelumnya, kapan dan diposisi apa ?</div>
                <div><b>{{ $data->lain2 }}</b></div>
                <div>Apakah saat ini anda melamar kerja di perusahaan lain ? sebagai posisi apa ?</div>
                <div><b>{{ $data->lain3 }}</b></div>
                <div>Apakah saat ini anda terikat kontrak dengan perusahaan lain ?</div>
                <div><b>{{ $data->lain4 }}</b></div>
                <div>Apakah anda memiliki pekerjaan part time ? dimana dan sebagai apa ?</div>
                <div><b>{{ $data->lain5 }}</b></div>
                <div>Apakah Anda pernah mengalami sakit keras atau menjalani perawatan intensif ? Jika iya kapan dan sebutkan penyakitnya ?</div>
                <div><b>{{ $data->lain6 }}</b></div>
                <div>Apabila diterima, kapan anda mulai bekerja ?</div>
                <div><b>{{ $data->lain7 }}</b></div>
                <div>Berapa besar gaji yang anda harapkan ?</div>
                <div><b>{{ $data->lain8 }}</b></div>
                <div>Apakah anda mempunyai saudara atau temena yang bekerja di RS. Mitra Husada ?</div>
                <div><b>{{ $data->lain9 }}</b></div>
                <div>Benefit lain yang anda harapkan ?</div>
                <div><b>{{ $data->lain10 }}</b></div>
              </div>
            </div>
            <div class="row" style="margin-top: 20px;">
              <div class="col-md-6">
                <h5>CV</h5>
                <hr>
                <img src="{{ url('img') }}/{{ $data->image_cv }}" alt="">
              </div>
            </div>
        </div>
    </div>
</x-app-layout>
