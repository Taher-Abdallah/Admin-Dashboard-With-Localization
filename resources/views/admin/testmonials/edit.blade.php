@extends('admin.master')

@section('title', __('keywords.update_data'))

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="h5 page-title">{{ __('keywords.update_data') }}</h2>

            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('testmonials.update', $testmonial) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <x-label-component name=name></x-label-component>
                                <input type="text" name="name" class="form-control"  value="{{ $testmonial->name }}"
                                    placeholder="{{ __('keywords.name') }}">
                                    <x-error-component name='name'></x-error-component>
                            </div>

                            <div class="col-md-6">
                                <x-label-component name=position></x-label-component>
                                <input type="text" name="position" class="form-control" value="{{ $testmonial->position }}"
                                    placeholder="{{ __('keywords.position') }}">
                                    <x-error-component name='position'></x-error-component>
                            </div>

                            
                            <div class="col-md-12 mt-2">
                                <x-label-component name=description></x-label-component>
                                <textarea name="description" class="form-control"  
                                placeholder="{{ __('keywords.description') }}">{{ $testmonial->description }}</textarea>
                                <x-error-component name='description'></x-error-component>
                            </div>
                            
                            <div class="col-md-6">
                                <x-label-component name=image></x-label-component>
                                <input type="file" name="image" class="form-control" value="{{ $testmonial->image }}"
                                    placeholder="{{ __('keywords.image') }}">
                                    <x-error-component name='image'></x-error-component>
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