<select id="model" name="model" class="form-select">
    @if (trim($template->model) == 'gpt-3.5-turbo-0125')
        <option value="{{ trim($template->model) }}" @if (trim($template->model) == $default_model) selected @endif>{{ __('GPT 3.5 Turbo') }}</option>
    @elseif (trim($template->model) == 'gpt-4')
        <option value="{{ trim($template->model) }}" @if (trim($template->model) == $default_model) selected @endif>{{ __('GPT 4') }}</option>
    @elseif (trim($template->model) == 'gpt-4-0125-preview')
        <option value="{{ trim($template->model) }}" @if (trim($template->model) == $default_model) selected @endif>{{ __('GPT 4 Turbo') }}</option>
    @elseif (trim($template->model) == 'gpt-4-turbo-2024-04-09')
        <option value="{{ trim($template->model) }}" @if (trim($template->model) == $default_model) selected @endif>{{ __('GPT 4 Turbo with Vision') }}</option>										
    @else
        @foreach ($fine_tunes as $fine_tune)
            @if ($template->model == $fine_tune->model)
                <option value="{{ $template->model }}">{{ $fine_tune->description }} ({{ __('Fine Tune') }})</option>
            @endif
        @endforeach
    @endif
</select>