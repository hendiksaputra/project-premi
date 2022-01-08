@extends('main')

@section('title', 'PPO-ARKA')

@section('breadcrumbs')
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
          <h1>Warning Category (SP)</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
            <li class="active"><i class="fa fa-dashboard"></i></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="content mt-3">
    <div class="animated fadeIn">

      <div class="card">
        <div class="card-header">
          <div class="pull-left">
            <strong>Edit Warning Category</strong>
          </div>
          <div class="pull-right">
            <a href="{{ url('warning_categories') }}" class="btn btn-success btn-sm">
              <i class="fa fa-undo"></i> Back
            </a>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-4 offset-md-4">
              <form action="{{ url('warning_categories/' . $warningCategories->id) }}" method="post">
                @method('patch')
                @csrf
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="sp_name" class="form-control @error('sp_name') is-invalid @enderror"
                    value="{{ old('sp_name', $warningCategories->sp_name) }}" autofocus>
                  @error('sp_name')
                    <div class="has-warning form-group">{{ $message }}</div>
                  @enderror
                </div>
                <div class=" form-group">
                  <label for="">Index</label>
                  <input type="text" name="sp_index" class="form-control @error('sp_index') is-invalid @enderror"
                    value="{{ old('sp_index', $warningCategories->sp_index) }}" autofocus>
                  @error('sp_index')
                    <div class="has-warning form-group">{{ $message }}</div>
                  @enderror
                </div>
                <button type=" submit" class="btn btn-success">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
