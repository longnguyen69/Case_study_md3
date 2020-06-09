@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Edit Category</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
                        <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                    </ol>
                </div>
                <div class="col-sm-3">
                    <div class="btn-group float-sm-right">
                        <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
                        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="javaScript:void();" class="dropdown-item">Action</a>
                            <a href="javaScript:void();" class="dropdown-item">Another action</a>
                            <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb-->


                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Edit Category</div>
                            <hr>
                            <form action="{{ route('admin.updateCategory',$category->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="input-6">Name Category</label>
                                    <input type="text" class="form-control form-control-rounded" id="input-6" value="{{$category->name}}" name="name">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Update </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->
        </div>
    </div>
@endsection
