@extends('layouts.main')
@section('title', 'Campuran')

@section('content')
    @include('components.campuran')
@endsection()

@section('bot')
<script>
    $(document).ready(function() {
        $('#latihan_campuran').DataTable({
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