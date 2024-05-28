<style>
    #latihan_substitusi {
    max-width: 100%;
    overflow-x: auto;
}

#latihan_substitusi th, #latihan_substitusi td {
    white-space: normal !important;
}

</style>
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-cloud-upload"></i>
        </span> Substitusi
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
            <table id="latihan_substitusi" class="table">
                <thead>
                    <tr>
                        <th style="text-align: left;">No</th>
                        <th style="text-align: left;">Name</th>
                        @for ($i = 1; $i <= 45; $i++)
                            <th style="text-align: left;"> {{ $i }} </th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    @foreach ($latihan_substitusi as $key => $item)
                    <tr>
                        <td style="text-align: left;">{{ $key + 1 }}</td>
                        <td style="text-align: left;">{{ $item->user_name }}</td>
                        @for ($i = 1; $i <= 45; $i++)
                            <td style="text-align: left;">{{ $item->getAttribute($i) }}</td>
                        @endfor
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

