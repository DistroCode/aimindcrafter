<select id="model" name="model" class="form-select" >	
    <option value="gpt-3.5-turbo-0125" @if ("gpt-3.5-turbo-0125" == $default_model) selected @endif>{{ __('GPT 3.5 Turbo') }}</option>	
    @foreach ($models as $model)
        @if (trim($model) == 'gpt-4')
            <option value="{{ trim($model) }}" @if (trim($model) == $default_model) selected @endif>{{ __('GPT 4') }}</option>
        @elseif (trim($model) == 'gpt-4-0125-preview')
            <option value="{{ trim($model) }}" @if (trim($model) == $default_model) selected @endif>{{ __('GPT 4 Turbo') }}</option>
        @elseif (trim($model) == 'gpt-4-turbo-2024-04-09')
            <option value="{{ trim($model) }}" @if (trim($model) == $default_model) selected @endif>{{ __('GPT 4 Turbo with Vision') }}</option>
        @elseif (trim($model) == 'claude-3-opus-20240229')
            <option value="{{ trim($model) }}" @if (trim($model) == $default_model) selected @endif>{{ __('Claude 3 Opus') }}</option>
        @elseif (trim($model) == 'claude-3-sonnet-20240229')
            <option value="{{ trim($model) }}" @if (trim($model) == $default_model) selected @endif>{{ __('Claude 3 Sonnet') }}</option>
        @elseif (trim($model) == 'claude-3-haiku-20240307')
            <option value="{{ trim($model) }}" @if (trim($model) == $default_model) selected @endif>{{ __('Claude 3 Haiku') }}</option>
        @elseif (trim($model) == 'gemini_pro')
            <option value="{{ trim($model) }}" @if (trim($model) == $default_model) selected @endif>{{ __('Gemini Pro') }}</option>
        @else
            @foreach ($fine_tunes as $fine_tune)
                @if (trim($model) == $fine_tune->model)
                    <option value="{{ trim($model) }}" @if (trim($model) == $default_model) selected @endif>{{ $fine_tune->description }}</option>
                @endif
            @endforeach
        @endif
        
    @endforeach									
</select>