@extends('layout.main')

@section('title', "Employee List")

@include('headers.table')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-chart">
          <div class="card-header">
          <h5 class='card-category'>Employees</h5>
            <h4 class="card-title">List</h4>
          </div>

          <!-- FORM CONTENT -->
          <div class = 'card card-body'>
            <div class="col-lg-12 md-4">

              <div class="col-lg-12 md-4">
                <a href = '/employee/register'>
                      <btn class = 'btn btn-primary' id = 'create'>
                      <i class="now-ui-icons ui-1_simple-add"></i> Hire</btn></a>
                    </div>

  							<div class="card-chart">
  								<table class="table stripe" id ='format-table'>
    								<thead>
      								<tr class = 'font-weight-bold'>
        								<th>Employee</th>
        								<th>Department</th>
                        <th>Name</th>
        								<th>Contact</th>
                        <th>E-mail</th>
                        <th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
                      @foreach($employees as $employee)
      								<tr id = '{{$employee->id}}'>
        								<td>{{$employee->id}}</td>
        								<td>{{$employee->department->name}}
                    </td>
                        <td><a href = 'profile'>{{$employee->user->first_name}} {{$employee->user->last_name}} </a></td>
                        <td>{{$employee->user->contact}}</td>
                        <td>{{$employee->user->email}}</td>
                          <td>
                            <btn class = 'btn btn-danger' id = 'terminated'>Disable</btn>
                            @endforeach
                          </td>
    								</tbody>
  								</table>
              </div>
            </div>
          </div

            </div>
          </div>
        </div>
@endsection
