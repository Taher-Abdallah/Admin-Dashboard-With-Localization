@extends('admin.master')

@section('title', __('keywords.update_data'))

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="h5 page-title">{{ __('keywords.update_data') }}</h2>

            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('features.update', $feature) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <x-label-component name=title></x-label-component>
                                <input type="text" name="title" class="form-control"  value="{{ $feature->title }}"
                                    placeholder="{{ __('keywords.title') }}">
                                    <x-error-component name='title'></x-error-component>
                            </div>

                            <div class="col-md-6">
                                <x-label-component name=icon></x-label-component>
                                <input type="text" name="icon" class="form-control" value="{{ $feature->icon }}"
                                    placeholder="{{ __('keywords.icon') }}">
                                    <x-error-component name='icon'></x-error-component>
                            </div>

                            <div class="col-md-12 mt-2">
                                <x-label-component name=description></x-label-component>
                                <textarea name="description" class="form-control"  
                                    placeholder="{{ __('keywords.description') }}">{{ $feature->description }}</textarea>
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