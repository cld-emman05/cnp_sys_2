@extends('layout.main')

@section('title', "Customer List")

@include('headers.table')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-chart">
          <div class="card-header">
          <h5 class='card-category'>Customers</h5>
            <h4 class="card-title">List</h4>
          </div>

          <!-- FORM CONTENT -->
          <div class = 'card card-body'>
            <div class="col-lg-12 md-4">

              <div class="col-md-12 md-4">
                <a href = '/customer/register'>
                  <btn class = 'btn btn-primary' id = 'create'>
                  <i class="now-ui-icons ui-1_simple-add"></i> New</btn>
                </a>
              </div>

  							<div class="card-chart">
  								<table class="table stripe" id = 'format-table'>
    								<thead>

      								<tr>
        								<th>#</th>
        								<th>Industry</th>
        								<th>Company</th>
        								<th>Representative</th>
                        <th>Contact</th>
                        <th>E-mail</th>
                        <th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
                      @foreach($customers as $customer)
      								<tr id = '{{$customer->id}}'>
        								<td>{{$customer->id}}</td>
                        <td>{{@$customer->industry->type}}</td>
        								<td>{{$customer->company}}</td>
                        <td><a href = 'profile'>{{$customer->user->first_name}} {{$customer->user->last_name}}</a></td>
                        <td>{{$customer->user->contact}}</td>
                        <td>{{$customer->user->email}}</td>
                          <td>
                            <btn class = 'btn btn-danger' id = 'terminated'>Remove</btn>
                          </td>
                        @endforeach
    								</tbody>
  								</table>
              </div>
            </div>
          </div>

            </div>
          </div>
        </div>
@endsection
