@extends('layouts.main')
@section('title', 'User')

@section('content')
    @include('components.user')
@endsection()

@section('bot')
<script>
    $(document).ready(function() {
        $('#user').DataTable({
            responsive: true,
            scrollX: true,
            autoWidth: false, 
            columns: [
                { width: '10%' },  
                { width: '40%' },
                { width: '20%' },
                { width: '10%' },
                { width: '20%' }
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