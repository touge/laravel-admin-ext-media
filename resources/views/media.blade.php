<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">
    <label for="{{$name}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>
    <div class="{{$viewClass['field']}}">
        @include('admin::form.error')
        <div data-id="preview-{{$name}}" style="margin-bottom:10px;">
            @if(old($column, $value))
                <img src="{{$baseURL}}/{{$value}}" alt="Attachment" style="width:100px;"/>
            @endif
        </div>

        <input type="hidden" data-id="media-{{$name}}" name="{{$name}}" value="{{old($column, $value)}}">
        <div class="controls">
            <button class="btn btn-info btn-sm select-elfinder-file" data-id="{{$name}}" type="button">选择文件</button>
        </div>

        @include('admin::form.help-block')
    </div>
</div>