<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Pelamar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('getByFormasi') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <select name="keyword" class="form-control" style="margin-bottom: 10px;">
                            <option value="IT Support">IT Support</option>
                            <option value="Kasir">Kasir</option>
                            <option value="IT Programmer">IT Programmer</option>
                            <option value="Farmasi">Farmasi</option>
                            <option value="Fisioterapis">Fisioterapis</option>
                            <option value="Perawat">Perawat</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-success">Tampilkan</button>
                    </div>
                </div>
            </form>
            <table class="table table-hover">
                <tr>
                    <td>Formasi</td>
                    <td>No Identitas</td>
                    <td>Nama Lengkap</td>
                    <td>Email</td>
                    <td>No Hp</td>
                    <td>No Telp</td>
                    <td>Aksi</td>
                </tr>
                @foreach($data as $d)
                    <tr>
                        <td>{{ $d->formasi }}</td>
                        <td>{{ $d->noIdentitas }}</td>
                        <td>{{ $d->namaLengkap }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->noHp }}</td>
                        <td>{{ $d->noTelp }}</td>
                        <td>
                            <a href="{{ route('detail', $d->id) }}">
                                <button class="btn btn-info">Detail</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>
