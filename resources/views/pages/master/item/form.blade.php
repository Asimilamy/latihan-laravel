@component('components.ui.box', ['box_type' => 'box-warning', 'id' => 'box-form', 'btn_add' => false])
    @slot('title')
        Item Form
    @endslot

    <input type="hidden" name="submit_route" value="{{ route($page . '.getDataTable') }}">
    <form id="formSubmit" method="post" enctype="multipart/form-data">
        @component('components.form.textfield', ['id' => 'name', 'name' => 'name', 'value' => $row->name])
            Name
        @endcomponent
    </form>

    @slot('footer')
        Item Form
    @endslot
@endcomponent
