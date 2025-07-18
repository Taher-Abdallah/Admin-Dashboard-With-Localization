@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                <h2 class="h5 page-title">{{ __('keywords.services') }}</h2>

                <div class="page-title-right">
                    <x-action-component href="{{ route('services.create') }}" type="create" >  </x-action-component>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-body">

                    <x-success-component></x-success-component>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="35%">#</th>
                                <x-table-component text="title"  ></x-table-component>
                                <th  >description</th>
                                <th width="10%">icon</th>
                                <th width="15%">actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($services) > 0)
                            @foreach ($services as $key => $service)
                            <tr>
                                <td>{{ $services->firstItem() + $loop->index }}</td>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <i class="fe {{ $service->image }} fa-2x"></i>
                                </td>
                                <td>
                                <x-action-component href="{{ route('services.edit', $service) }}" type="edit" >  </x-action-component>
                                <x-action-component href="{{ route('services.show', $service) }}" type="show" >  </x-action-component>
                                <x-delete-component href="{{ route('services.destroy', $service) }}" id="{{ $service->id }}" >  </x-delete-component>                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                            <x-no-records-component></x-no-records-component>
                            
                            </tr>
                            @endif
                        </tbody>
                    </table>
                                        {{ $services->render('pagination::bootstrap-4') }}   
        </div>
            </div>
        </div>
    </div>
</div>
@endsection