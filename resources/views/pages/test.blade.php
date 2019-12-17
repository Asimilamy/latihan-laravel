@extends('layouts.admin')
@section('content')
    @component('components.ui.box')
        @slot('title')
            Ini Title Box 1
        @endslot

        <div class="row">
            <div class="col-md-6">
                @component('components.form.textfield', ['id' => 'test', 'name' => 'test'])
                    Test Text Field
                @endcomponent
            </div>
            <div class="col-md-8">
                @component('components.form.textarea', ['id' => 'test_area', 'name' => 'test_area'])
                    Test Text Area
                @endcomponent
            </div>
        </div>
        @component('components.ui.table')
            @slot('tableHead')
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            @endslot
            @slot('tableRow')
                <tr>
                    <td>1</td>
                    <td>Test</td>
                    <td>Laki-Laki</td>
                    <td>Server</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Asd</td>
                    <td>Laki-Laki</td>
                    <td>Disana</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Qwe</td>
                    <td>Laki-Laki</td>
                    <td>Vbn</td>
                </tr>
            @endslot
        @endcomponent

        @slot('footer')
            Ini Footer Box 1
        @endslot
    @endcomponent
@endsection
