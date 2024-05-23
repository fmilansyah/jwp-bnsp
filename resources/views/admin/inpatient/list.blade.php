<x-admin.layout>
    <x-admin.page-title title="Rawat Inap" />
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
                                            <th>Tgl. Masuk</th>
                                            <th>Kamar</th>
                                            <th>Status</th>
                                            <th width="75"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($models as $data)
                                        <tr>
                                            <td>{{ $data?->registration?->name }}</td>
                                            <td>{{ $data?->registration?->phone }}</td>
                                            <td>{{ $data?->registration?->address }}</td>
                                            <td>{{ $data->created_at ? \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d/m/Y H:i:s') : '' }}</td>
                                            <td>{{ $data?->room?->room_class }} - {{ $data?->room?->room_name }}</td>
                                            <td>{{ $data?->status == \App\Models\Inpatient::STATUS_IN_TREATMENT ? 'Dalam Perawatan' : 'Pulang' }}</td>
                                            <td>
                                                @if($data?->status == \App\Models\Inpatient::STATUS_IN_TREATMENT)
                                                <a href="{{ route('admin.inpatient.status', ['id' => $data->id]) }}" class="btn btn-primary mb-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                                    </svg>
                                                </a>
                                                @endif
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
</x-admin.layout>