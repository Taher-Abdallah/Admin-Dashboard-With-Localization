

@extends('admin.master')

@section('title', __('keywords.update_data'))

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="h5 page-title">{{ __('keywords.update_data') }}</h2>

            <div class="card shadow">
                <div class="card-body">
                    <x-success-component></x-success-component>
                    <form action="{{ route('settings.update', $setting) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <x-label-component name=address></x-label-component>
                                <input type="text" name="address" class="form-control" value="{{ $setting->address }}"
                                    placeholder="{{ __('keywords.address') }}">
                                <x-error-component name='address'></x-error-component>
                            </div>

                            <div class="col-md-6">
                                <x-label-component name=phone></x-label-component>
                                <input type="text" name="phone" class="form-control" value="{{ $setting->phone }}"
                                    placeholder="{{ __('keywords.phone') }}">
                                <x-error-component name='phone'></x-error-component>
                            </div>

                            <div class="col-md-6">
                                <x-label-component name=email></x-label-component>
                                <input type="text" name="email" class="form-control" value="{{ $setting->email }}"
                                    placeholder="{{ __('keywords.email') }}">
                                <x-error-component name='email'></x-error-component>
                            </div>
                            <div class="col-md-6">
                                <x-label-component name=facebook></x-label-component>
                                <input type="text" name="facebook" class="form-control" value="{{ $setting->facebook }}"
                                    placeholder="{{ __('keywords.facebook') }}">
                                <x-error-component name='facebook'></x-error-component>
                            </div>

                            <div class="col-md-6">
                                <x-label-component name=twitter></x-label-component>
                                <input type="text" name="twitter" class="form-control" value="{{ $setting->twitter }}"
                                    placeholder="{{ __('keywords.twitter') }}">
                                <x-error-component name='twitter'></x-error-component>
                            </div>

                            <div class="col-md-6">
                                <x-label-component name=instagram></x-label-component>
                                <input type="text" name="instagram" class="form-control" value="{{ $setting->instagram }}"
                                    placeholder="{{ __('keywords.instagram') }}">
                                <x-error-component name='instagram'></x-error-component>
                            </div>

                            <div class="col-md-6">
                                <x-label-component name=youtube></x-label-component>
                                <input type="text" name="youtube" class="form-control" value="{{ $setting->youtube }}"
                                    placeholder="{{ __('keywords.youtube') }}">
                                <x-error-component name='youtube'></x-error-component>
                            </div>

                            <div class="col-md-6">
                                <x-label-component name=linkedin></x-label-component>
                                <input type="text" name="linkedin" class="form-control" value="{{ $setting->linkedin }}"
                                    placeholder="{{ __('keywords.linkedin') }}">
                                <x-error-component name='linkedin'></x-error-component>
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