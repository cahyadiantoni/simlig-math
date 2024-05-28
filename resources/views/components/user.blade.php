<style>
    #user {
    max-width: 100%;
    overflow-x: auto;
}

#user th, #user td {
    white-space: normal !important;
}

</style>
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-cloud-upload"></i>
        </span> User
        </h3>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
        </ul>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="{{ route('user.tambah') }}"><i class="mdi mdi-plus"></i> Tambah User</a>
            </div>
            <table id="user" class="table">
                <thead>
                    <tr>
                        <th style="text-align: left;">No</th>
                        <th style="text-align: left;">Name</th>
                        <th style="text-align: left;">Email</th>
                        <th style="text-align: left;">Role</th>
                        <th style="text-align: left;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $key => $item)
                    <tr>
                        <td style="text-align: left;">{{ $key + 1 }}</td>
                        <td style="text-align: left;">{{ $item->name }}</td>
                        <td style="text-align: left;">{{ $item->email }}</td>
                        <td style="text-align: left;">{{ $item->role }}</td>
                        <td style="text-align: left;">
                            <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-gradient-warning">
                                <i class="mdi mdi-pencil"></i> Edit
                            </a>
                            <a href="#" type="button" class="btn btn-sm btn-gradient-danger" data-bs-toggle="modal" data-bs-target="#modalHapusTulisan{{ $item->id }}">
                                <i class="mdi mdi-delete"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@foreach ($user as $key => $item)
    <div class="modal fade" id="modalHapusTulisan{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="modalHapusTulisanLabel{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalHapusTulisanLabel{{ $item->id }}">Konfirmasi Hapus Tulisan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus user ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <form action="{{ route('user.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

