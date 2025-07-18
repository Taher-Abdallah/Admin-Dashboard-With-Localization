@extends('admin.master')

@section('title', __('keywords.add_new_feature'))

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="h5 page-title">{{ __('keywords.add_new_feature') }}</h2>

            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('features.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <x-label-component name=title></x-label-component>
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                                    placeholder="{{ __('keywords.title') }}">
                            <x-error-component name='title'></x-error-component>

                            </div>

                            <div class="col-md-6">
                                <x-label-component name=icon></x-label-component>
                                <input type="text" name="icon" class="form-control" value="{{ old('icon') }}"
                                    placeholder="{{ __('keywords.icon') }}">
                            <x-error-component name='icon'></x-error-component>
                            </div>

                            <div class="col-md-12 mt-2">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <textarea name="description" class="form-control" 
                                    placeholder="{{ __('keywords.description') }}">{{ old('description') }}</textarea>
                                    <x-error-component name='description'></x-error-component>
                            </div>

                        </div>

                        <x-submit-component></x-submit-component>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection