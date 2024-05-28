@extends('layouts.main')
@section('title', 'Eliminasi')

@section('content')
    @include('components.eliminasi')
@endsection()

@section('bot')
<script>
    $(document).ready(function() {
        $('#latihan_eliminasi').DataTable({
            responsive: true,
            scrollX: true,
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    });
</script>
@endsection()