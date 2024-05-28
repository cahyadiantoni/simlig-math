@extends('layouts.main')
@section('title', 'Pendapat')

@section('content')
    @include('components.pendapat')
@endsection()

@section('bot')
<script>
    $(document).ready(function() {
        $('#pendapat').DataTable({
            responsive: true,
            scrollX: true,
            autoWidth: false, 
            columns: [
                { width: '10%' },  
                { width: '40%' },
                { width: '50%' }
            ],
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    });
</script>
@endsection()