@extends('admin.master')

@section('title', __('keywords.add_new_service'))

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="h5 page-title">{{ __('keywords.add_new_service') }}</h2>

            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <x-label-component name=title></x-label-component>
                                <input type="text" name="title" class="form-control"
                                    placeholder="{{ __('keywords.title') }}">
                            <x-error-component name='title'></x-error-component>

                            </div>

                            <div class="col-md-6">
                                <x-label-component name=image></x-label-component>
                                <input type="text" name="image" class="form-control"
                                    placeholder="{{ __('keywords.image') }}">
                            <x-error-component name='image'></x-error-component>
                            </div>

                            <div class="col-md-12 mt-2">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <textarea name="description" class="form-control"
                                    placeholder="{{ __('keywords.description') }}"></textarea>
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