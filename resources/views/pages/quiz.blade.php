@extends('layouts.main')
@section('title', 'Quiz')

@section('content')
    @include('components.quiz')
@endsection()

@section('bot')
<script>
    $(document).ready(function() {
        $('#quiz').DataTable({
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