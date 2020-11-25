@php

    $select_status = Form::select('form[status]', config("myconfig.template.status"), null, ['class' => 'form-control']);
@endphp

@extends('admin.layout')

@section('content')
    {{-- content-header --}}
    @include('admin.component.content-header', ['title' => 'Thêm/Sửa'])
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{-- group button --}}
                    @include($pathView . "elements.group-button-form")
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Thông tin</a>
                                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-meta" role="tab" aria-controls="nav-profile" aria-selected="false">Meta</a>
                                        </div>
                                      </nav>
                                </div>
                                <div class="tab-content col-md-12" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name :</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description :</label>
                                                    <textarea cols="30" rows="10" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status :</label>
                                                    {!! $select_status !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Picture :</label>
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- meta --}}
                                    @include('admin.component.form-meta')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop