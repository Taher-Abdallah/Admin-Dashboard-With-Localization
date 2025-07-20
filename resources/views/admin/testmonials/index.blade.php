@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                <h2 class="h5 page-title">{{ __('keywords.testmonials') }}</h2>

                <div class="page-title-right">
                    <x-action-component href="{{ route('testmonials.create') }}" type="create" >  </x-action-component>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-body">

                    <x-success-component></x-success-component>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="15%">#</th>
                                <th  >name</th>
                                <th  >position</th>
                                <th  >description</th>
                                <th  >image</th>
                                <th width="15%">actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($testmonials) > 0)
                            @foreach ($testmonials as $key => $testmonial)
                            <tr>
                                <td>{{ $testmonials->firstItem() + $loop->index }}</td>
                                <td>{{ $testmonial->name }}</td>
                                <td>{{ $testmonial->description }}</td>
                                <td>{{ $testmonial->position }}</td>
                                <td>
                                    <img src="{{ asset("storage/testmonials/$testmonial->image") }}"
                                alt="#" width="50px"> 
                                </td>
                                <td>
                                <x-action-component href="{{ route('testmonials.edit', $testmonial) }}" type="edit" >  </x-action-component>
                                <x-action-component href="{{ route('testmonials.show', $testmonial) }}" type="show" >  </x-action-component>
                                <x-delete-component href="{{ route('testmonials.destroy', $testmonial) }}" id="{{ $testmonial->id }}" >  </x-delete-component>                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                            <x-no-records-component></x-no-records-component>
                            
                            </tr>
                            @endif
                        </tbody>
                    </table>
                                        {{ $testmonials->render('pagination::bootstrap-4') }}   
        </div>
            </div>
        </div>
    </div>
</div>
@endsection