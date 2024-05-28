<style>
    #quiz {
    max-width: 100%;
    overflow-x: auto;
}

#quiz th, #quiz td {
    white-space: normal !important;
}

</style>
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-cloud-upload"></i>
        </span> Quiz
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
            <table id="quiz" class="table">
                <thead>
                    <tr>
                        <th style="text-align: left;">No</th>
                        <th style="text-align: left;">Name</th>
                        <th style="text-align: left;">Nilai</th>
                        <th style="text-align: left;">1</th>
                        <th style="text-align: left;">2</th>
                        <th style="text-align: left;">3</th>
                        <th style="text-align: left;">4</th>
                        <th style="text-align: left;">5</th>
                        <th style="text-align: left;">6</th>
                        <th style="text-align: left;">7</th>
                        <th style="text-align: left;">8</th>
                        <th style="text-align: left;">9</th>
                        <th style="text-align: left;">10</th>
                        <th style="text-align: left;">11</th>
                        <th style="text-align: left;">soal 1</th>
                        <th style="text-align: left;">soal 2</th>
                        <th style="text-align: left;">soal 3</th>
                        <th style="text-align: left;">soal 4</th>
                        <th style="text-align: left;">soal 5</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quiz as $key => $item)
                    <tr>
                        <td style="text-align: left;">{{ $key + 1 }}</td>
                        <td style="text-align: left;">{{ $item->user_name }}</td>
                        <td style="text-align: left;">{{ $item->nilai }}</td>
                        <td style="text-align: left;">{{ $item->getAttribute('1') }}</td>
                        <td style="text-align: left;">{{ $item->getAttribute('2') }}</td>
                        <td style="text-align: left;">{{ $item->getAttribute('3') }}</td>
                        <td style="text-align: left;">{{ $item->getAttribute('4') }}</td>
                        <td style="text-align: left;">{{ $item->getAttribute('5') }}</td>
                        <td style="text-align: left;">{{ $item->getAttribute('6') }}</td>
                        <td style="text-align: left;">{{ $item->getAttribute('7') }}</td>
                        <td style="text-align: left;">{{ $item->getAttribute('8') }}</td>
                        <td style="text-align: left;">{{ $item->getAttribute('9') }}</td>
                        <td style="text-align: left;">{{ $item->getAttribute('10') }}</td>
                        <td style="text-align: left;">{{ $item->getAttribute('11') }}</td>
                        <td style="text-align: left;">
                            <a href="{{ asset('storage/' . $item->file1) }}" data-lightbox="image{{ $key }}" target="_blank">
                                <img src="{{ asset('storage/' . $item->file1) }}" alt="Cover">
                            </a>
                        </td>
                        <td style="text-align: left;">
                            <a href="{{ asset('storage/' . $item->file2) }}" data-lightbox="image{{ $key }}" target="_blank">
                                <img src="{{ asset('storage/' . $item->file2) }}" alt="Cover">
                            </a>
                        </td>
                        <td style="text-align: left;">
                            <a href="{{ asset('storage/' . $item->file3) }}" data-lightbox="image{{ $key }}" target="_blank">
                                <img src="{{ asset('storage/' . $item->file3) }}" alt="Cover">
                            </a>
                        </td>
                        <td style="text-align: left;">
                            <a href="{{ asset('storage/' . $item->file4) }}" data-lightbox="image{{ $key }}" target="_blank">
                                <img src="{{ asset('storage/' . $item->file4) }}" alt="Cover">
                            </a>
                        </td>
                        <td style="text-align: left;">
                            <a href="{{ asset('storage/' . $item->file5) }}" data-lightbox="image{{ $key }}" target="_blank">
                                <img src="{{ asset('storage/' . $item->file5) }}" alt="Cover">
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

