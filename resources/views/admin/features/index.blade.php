@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                <h2 class="h5 page-title">{{ __('keywords.features') }}</h2>

                <div class="page-title-right">
                    <x-action-component href="{{ route('features.create') }}" type="create" >  </x-action-component>
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
                            @if (count($features) > 0)
                            @foreach ($features as $key => $feature)
                            <tr>
                                <td>{{ $features->firstItem() + $loop->index }}</td>
                                <td>{{ $feature->title }}</td>
                                <td>{{ $feature->description }}</td>
                                <td>
                                    <i class="fe {{ $feature->icon }} fa-2x"></i>
                                </td>
                                <td>
                                <x-action-component href="{{ route('features.edit', $feature) }}" type="edit" >  </x-action-component>
                                <x-action-component href="{{ route('features.show', $feature) }}" type="show" >  </x-action-component>
                                <x-delete-component href="{{ route('features.destroy', $feature) }}" id="{{ $feature->id }}" >  </x-delete-component>                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                            <x-no-records-component></x-no-records-component>
                            
                            </tr>
                            @endif
                        </tbody>
                    </table>
                                        {{ $features->render('pagination::bootstrap-4') }}   
        </div>
            </div>
        </div>
    </div>
</div>
@endsection