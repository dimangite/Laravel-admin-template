@extends('layouts.blank')
@push('stylesheets')

@endpush


@section('main_container')
    <div class="container-fluid">

    </div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {


    } );
</script>

@if(Session::has('deleted_item'))
    <script>
        toastr.info('{{session('deleted_item')}}', 'Success Alert', {timeOut: 5000});
    </script>
@endif
@if(Session::has('created_item'))
    <script>
        toastr.info('{{session('created_item')}}', 'Success Alert', {timeOut: 5000});
    </script>
@endif
@if(Session::has('updated_item'))
    <script>
        toastr.info('{{session('updated_item')}}', 'Success Alert', {timeOut: 5000});
    </script>
@endif
@endpush