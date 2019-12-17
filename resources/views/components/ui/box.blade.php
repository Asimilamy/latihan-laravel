<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">{{ $title }}</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title=""
                data-original-title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i
                    class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        {{ $slot }}
    </div><!-- /.box-body -->
    @if (!empty($footer))
    <div class="box-footer">
        {{ $footer }}
    </div><!-- /.box-footer-->
    @endif
</div>
