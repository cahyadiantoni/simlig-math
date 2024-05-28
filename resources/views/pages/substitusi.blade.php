@extends('layouts.main')
@section('title', 'Substitusi')

@section('content')
    @include('components.substitusi')
@endsection()

@section('bot')
<script>
    $(document).ready(function() {
        $('#latihan_substitusi').DataTable({
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