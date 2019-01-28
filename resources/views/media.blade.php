<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">
    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>
    <div class="{{$viewClass['field']}}">
        @include('admin::form.error')
        <div id="preview-{{$id}}" style="margin-bottom:10px;">
            @if(old($column, $value))
                <img src="{{$baseURL}}/{{$value}}" alt="Attachment" style="width:100px;"/>
            @endif
        </div>

        <input type="hidden" id="media-{{$id}}" name="{{$name}}" value="{{old($column, $value)}}">
        <div class="controls">
            <button class="btn btn-info btn-sm select-elfinder-file" data-id="{{$id}}" type="button">选择文件</button>
        </div>

        @include('admin::form.help-block')
    </div>
</div>