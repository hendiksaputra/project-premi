@extends('main')

@section('title', 'PPO-ARKA')

@section('breadcrumbs')
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
          <h1>Warning Data</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
            <li class="active"><i class="fa fa-warning"></i></li>
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
            <strong>Warning Detail</strong>
          </div>
          <div class="pull-right">
            <a href="{{ url('warnings') }}" class="btn btn-success btn-sm">
              <i class="fa fa-undo"></i> Back
            </a>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th style="width: 30%">NIK</th>
                    <td>{{ $warning->employee->nik }}</td>
                  </tr>
                  <tr>
                    <th>Employee</th>
                    <td>{{ $warning->employee->employee_name }}</td>
                  </tr>
                  <tr>
                    <th>Project</th>
                    <td>{{ $warning->employee->project->code_project }} -
                      {{ $warning->employee->project->name_project }}</td>
                  </tr>
                  <tr>
                    <th>Warning</th>
                    <td>{{ $warning->warning_category->sp_name }}</td>
                  </tr>
                  <tr>
                    <th>Date</th>
                    <td>{{ $warning->sp_date }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
