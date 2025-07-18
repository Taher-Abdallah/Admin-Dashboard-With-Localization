@extends('admin.master')

@section('title', __('keywords.show_data'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="h5 page-title">{{ __('keywords.show_data') }}</h2>

            <div class="card shadow">
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <x-label-component name=title></x-label-component>
                                <p type="text" class="form-control"> {{ $feature->title }} </p>
                            </div>

                            <div class="col-md-6">
                                <x-label-component name=icon></x-label-component>
                                <p type="text"  class="form-control"> {{ $feature->icon }}  </p>
                            </div>

                            <div class="col-md-12 mt-2">
                                <x-label-component name=description></x-label-component>
                                <p class="form-control">{{ $feature->description }}</p>
                            </div>

                        </div>
                    </form>

                    <a href="{{ route('features.index') }}" class="btn btn-primary mt-3 ">{{ __('keywords.back') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection