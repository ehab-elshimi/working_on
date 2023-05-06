@extends('layouts.master')

@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Grades List <small class="font-size-base font-w400 text-muted">Table</small>
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">Grades</li>
                            <li class="breadcrumb-item">Grades List</li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="">Table</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <div class="block block-rounded">
                <div class="block-header">
                    <h3 class="block-title">Dynamic Table <small>Full</small></h3>
                </div>
            </div>
        </div>
        <!-- END Page Content -->




    </main>
@endsection
