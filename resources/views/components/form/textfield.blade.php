<div class="form-group">
    <label for="{{ $id }}">{{ $slot }}</label>
    <input type="{{ !empty($type) ? $type : 'text' }}" id="{{ $id }}" name="{{ $name }}" class="form-control" placeholder="{{ $slot }}" value="{{ !empty($value) ? $value : '' }}">
</div>
