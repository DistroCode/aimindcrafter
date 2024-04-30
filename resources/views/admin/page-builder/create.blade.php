@extends('layouts.app')

@section('page-header')
    <style>
        .tox-promotion {
            display: none !important;
        }
    </style>
    <!-- PAGE HEADER-->
    <div class="page-header mt-5-7">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">{{ __('Page Builder') }}</h4>
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                            class="fa-solid fa-chart-tree-map mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{route('admin.page-builder.index')}}"> {{ __('Page Builder') }}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="#"> {{ __('Add Page Builder') }}</a>
                </li>
            </ol>
        </div>
    </div>
    <!--END PAGE HEADER -->
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card overflow-hidden border-0">
                <div class="card-body">
                    <form action="{{route('admin.page-builder.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Page Title <span class="text-danger font-weight-bold">*</span></label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                       name="title">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-5">
                                <label for="">Select Position <span
                                        class="text-danger font-weight-bold">*</span></label>
                                <select class="form-control @error('position') is-invalid @enderror" name="position">
                                    <option selected disabled>Open this select menu</option>
                                    <option value="header">Header</option>
                                    <option value="footer">Footer</option>
                                </select>
                                @error('position')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-5">
                                <label for="">Description <span class="text-danger font-weight-bold">*</span></label>
                                <textarea id="myeditorinstance" name="description"></textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-5">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('plugins/tinymce/tinymce.min.js')}}"></script>
    <script>
        if (typeof (base_url) == "undefined") {
            var base_url = location.protocol + '//' + location.host + '/';
        }
        tinymce.init({
            selector: 'textarea',
             //plugins: 'bootstrap',
             //toolbar: ['bootstrap'],
             //contextmenu: "bootstrap",
            height : "680",
            bootstrapConfig: {
                url: base_url + '{{asset('tinymce')}}',
                iconFont: 'fontawesome5',
                imagesPath: '{{asset('tinymce')}}/plugin/assets/images',
                key: '06yt9N0+bZfFAfwLR9dkdMHqisJpW5B/Z7sJ8g/aRP3phxEOUnfcEBO+LFtTbbmJqSGTyxmb30q6qF0s5jEM11zazuVma7u3OrcYiBQDUxQ='
            },
        });
        document.addEventListener('focusin', (e) => {
            if (e.target.closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root") !== null) {
                e.stopImmediatePropagation();
            }
        });
    </script>
@endsection
