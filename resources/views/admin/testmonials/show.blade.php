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
                                <x-label-component name=name></x-label-component>
                                <p type="text" class="form-control"> {{ $testmonial->name }} </p>
                            </div>

                            <div class="col-md-6">
                                <x-label-component name=position></x-label-component>
                                <p type="text" class="form-control"> {{ $testmonial->position }} </p>
                            </div>

                            <div class="col-md-6">
                                <x-label-component name=image></x-label-component>
                                <p type="file"  class="form-control"> <img src="{{ asset("storage/testmonials/$testmonial->image") }}"
                                alt="#" width="50px">  </p>
                            </div>

                            <div class="col-md-12 mt-2">
                                <x-label-component name=description></x-label-component>
                                <p class="form-control">{{ $testmonial->description }}</p>
                            </div>

                        </div>
                    </form>

                    <a href="{{ route('testmonials.index') }}" class="btn btn-primary mt-3 ">{{ __('keywords.back') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection