@extends('admin.layout')

@section('content')
    {{-- content-header --}}
    @include('admin.component.content-header', ['title' => 'Danh mục'])
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{-- group button --}}
                    @include($pathView . "elements.group-button-index")
                    <div class="card">
                        <div class="card-body">
                            @include($pathView . "list")
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop