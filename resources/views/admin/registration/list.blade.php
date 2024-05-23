<x-admin.layout>
    <x-admin.page-title title="Rawat Jalan" />
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table">
                                    <thead>
                                        <tr>
                                            <th>Nama Pasien</th>
                                            <th>No. Tlp/WA</th>
                                            <th>Alamat</th>
                                            <th>Tgl. Berobat</th>
                                            <th>Poliklinik</th>
                                            <th>Dokter</th>
                                            <th width="75"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($models as $data)
                                        <tr>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->phone }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td>{{ $data->date ? \Carbon\Carbon::createFromFormat('Y-m-d', $data->date)->format('d/m/Y') : '' }}</td>
                                            <td>{{ $data?->polyclinic?->name }}</td>
                                            <td>{{ $data?->doctor?->name }}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary mb-2 btn-to-inpatient" data-id="{{ $data->id }}" data-bs-toggle="modal" data-bs-target="#modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-bed">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M7 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                        <path d="M22 17v-3h-20" />
                                                        <path d="M2 8v9" />
                                                        <path d="M12 14h10v-2a3 3 0 0 0 -3 -3h-7v5z" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Form -->
    <div class="modal modal-blur fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Rujuk Rawat Inap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.inpatient.store') }}" method="post">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="registration_id" />
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="room_id" class="form-label required">Kamar Perawatan</label>
                            <select name="room_id" required="" class="form-select">
                                <option value="" selected>Pilih Kamar</option>
                                @foreach($rooms as $room)
                                    <option value="{{ $room->id }}">{{ $room->room_class }} - {{ $room->room_name }}</option>
                                @endforeach
                            </select>
                            @error('room_class')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Batal
                        </a>
                        <button type="submit" class="btn btn-primary ms-auto">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                <path d="M14 4l0 4l-6 0l0 -4"></path>
                            </svg>
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin.layout>