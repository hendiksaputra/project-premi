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
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      <div class="card">
        <div class="card-header">
          <div class="pull-left">
            <strong>Data Warning Categories</strong>
          </div>
          <div class="pull-right">
            <a href="{{ url('sp_categories/add') }}" class="btn btn-success btn-sm">
              <i class="fa fa-plus"></i> Add
            </a>
          </div>
        </div>
        <div class="card-body table-responsive">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th>Name</th>
                <th>Index</th>
                <th width="10%" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($spCategories as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->sp_name }}</td>
                  <td>{{ $item->sp_index }}</td>
                  <td class="text-center">
                    <a href="{{ url('sp_categories/edit/' . $item->id) }}" class="btn btn-primary btn-sm">
                      <i class="fa fa-pencil"></i>
                    </a>
                    <form action="{{ url('sp_categories/' . $item->id) }}" method="post"
                      onsubmit="return confirm('Are you sure want to delete this data?')" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
