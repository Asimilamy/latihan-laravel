<div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        Actions <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li>
            <a href="javascript:void(0)" title="View Detail" onclick="get_detail('{{ $id }}')">
                <i class="fa fa-eye"></i> View Detail
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" title="Edit Data" onclick="show_form('{{ $id }}')">
                <i class="fa fa-pencil"></i> Edit Data
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="javascript:void(0)" title="Delete Data" onclick="get_modal_delete('{{ $id }}')">
                <i class="fa fa-trash"></i> Delete Data
            </a>
        </li>
    </ul>
</div>
