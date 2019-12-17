<div class="form-group">
    <label>{{ $slot }}</label>
    <textarea id="{{ $id }}" name="{{ $name }}" class="form-control" rows="{{ !empty($rows) ? $rows : '5' }}" cols="{{ !empty($cols) ? $cols : '20' }}" placeholder="{{ $slot }}">{{ !empty($value) ? $value : '' }}</textarea>
</div>
