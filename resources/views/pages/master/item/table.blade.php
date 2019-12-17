@extends('layouts.admin')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('content')
    @component('components.ui.box', ['box_type' => 'box-primary', 'btn_add' => true])
        @slot('title')
            Item Table
        @endslot

        <input type="hidden" name="datatable_route" value="{{ route($page . '.getDataTable') }}">
        <input type="hidden" name="form_route" value="{{ route($page . '.form') }}">
        <table id="table-data" class="table" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Action</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Description</th>
                </tr>
            </thead>
        </table>

        @slot('footer')
            Item Table
        @endslot
    @endcomponent
@endsection
@section('page-js')
    @parent
    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/base.js') }}"></script>
    <script src="{{ asset('js/master/table.js') }}"></script>
@endsection
