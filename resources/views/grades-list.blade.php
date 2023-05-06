@extends('layouts.master')

@section('content')
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">Dynamic Table <small>Full</small></h3>
        </div>

        <div class="block-content block-content-full">
            <!-- start add button -->
            <button type="button" class="btn btn-success mr-1 mb-3" data-toggle="modal" data-target="#modal-add-grade">
                <i class="fa fa-fw fa-plus mr-1"></i> Add New Grade
            </button>
            <!-- start add modal Content -->
            <div class="modal" id="modal-add-grade" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
                <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Add New Grade</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content font-size-sm">
                                <form action="{{route('grades.store')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-xl-6">
                                            <div class="form-group">
                                                <label for="example-text-input-alt">Name</label>
                                                <input type="text" class="form-control form-control-alt" id="example-text-input-alt"
                                                        name="name" placeholder="Grade Name In Arabic">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xl-6">
                                            <div class="form-group">
                                                <label for="example-text-input-alt">English Name</label>
                                                <input type="text" class="form-control form-control-alt" id="example-text-input-alt"
                                                        name="en_name" placeholder="Grade Name In English">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="form-group">
                                                <label for="example-textarea-input-alt">Notes</label>
                                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt"
                                                    name="notes" rows="5" placeholder="Notes content.."></textarea>
                                            </div>
                                        </div>
                                        <div class="block-content block-content-full text-right border-top">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-md btn-primary">
                                                    <i class="fa fa-fw fa-check"></i> Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END add modal Content -->
            <!-- END add button -->

            {{-- errors And Alerts --}}
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <p class="mb-0">{{ $error }}</p>
                    </div>
                @endforeach
            @endif
            @if(session('success'))
                <div class="alert alert-success d-flex align-items-center ANIMATED FADEINDOWN" role="alert">
                    <div class="flex-00-auto">
                        <i class="fa fa-fw fa-check"></i>
                    </div>
                    <div class="flex-fill ml-3">
                        <p class="mb-0">{{ session('success') }}</p>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            {{-- end errors And Alerts --}}

            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Notes</th>
                        <th style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grades as $grade)
                        <tr>
                            <td class="text-center font-size-sm">{{$loop->iteration}}</td>
                            <td class="font-w600 font-size-sm">
                                <a href="#">{{$grade->name}}</a>
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$grade->notes}}
                            </td>
                            <td>
                                <div class="d-flex flex-xs-column flex-sm-column flex-md-row justify-content-start">
                                    <button type="button" class="btn btn-sm btn-primary m-1" data-toggle="modal" data-target="#modal-edit-grade{{$grade->id}}">
                                        <i class="fa fa-fw fa-edit mr-1"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger m-1" data-toggle="modal" data-target="#modal-delete{{$grade->id}}">
                                        <i class="fa fa-fw fa-times mr-1"></i> Delete
                                    </button>
                                </div>
                            </td>
                            <!-- start delete modal Content -->
                            <div class="modal" id="modal-delete{{$grade->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="block block-rounded block-themed block-transparent mb-0">
                                            <div class="block-header bg-primary-dark">
                                                <h3 class="block-title">Add New Grade</h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="block-content font-size-sm">
                                                <form action="{{route('grades.destroy', $grade)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="row">
                                                        <div class="col-lg-12 col-xl-12">
                                                            <div class="form-group">
                                                                <p>Are You Sure You Want To Delete This Row ?</p>
                                                            </div>
                                                        </div>
                                                        <div class="block-content text-left border-top">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-md btn-danger">
                                                                    <i class="fa fa-fw fa-times mr-1"></i> Yes
                                                                </button>
                                                                <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END delete modal Content -->

                            <!-- edit modal Content -->
                            <div class="modal" id="modal-edit-grade{{$grade->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="block block-rounded block-themed block-transparent mb-0">
                                            <div class="block-header bg-primary-dark">
                                                <h3 class="block-title">Edit Grade</h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="block-content font-size-sm">
                                                <form action="{{ route('grades.update', $grade) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-xl-6">
                                                            <div class="form-group">
                                                                <label for="example-text-input-alt">Name</label>
                                                                <input type="text" class="form-control form-control-alt" id="example-text-input-alt"
                                                                        name="name" value="{{$grade->name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-xl-6">
                                                            <div class="form-group">
                                                                <label for="example-text-input-alt">English Name</label>
                                                                <input type="text" class="form-control form-control-alt" id="example-text-input-alt"
                                                                        name="en_name" placeholder="Grade Name In English">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="example-textarea-input-alt">Notes</label>
                                                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt"
                                                                    name="notes" rows="5">{{$grade->notes}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="block-content block-content-full text-right border-top">
                                                            <div class="form-group">
                                                                <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-md btn-primary">
                                                                    <i class="fa fa-fw fa-check"></i> Update
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END edit modal Content -->
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <!-- END Dynamic Table Full -->
        </div>
    </div>
@endsection
