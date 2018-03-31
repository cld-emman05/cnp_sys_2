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
          <div class = 'card-body'>
            <div class="col-lg-12 md-4">
  							<div class="card card-chart">
  								<table class="table table-hover">
    								<thead>
                      <tr>
                        <td></td><td></td><td></td><td></td><td></td>
                        <td><a href = '/customer/register'>
                          <btn class = 'btn btn-primary' id = 'create'>
                          <i class="now-ui-icons ui-1_simple-add"></i> New</btn>
                        </a></td>
                      </tr>

      								<tr class = 'font-weight-bold'>
        								<th>Customer #</th>
        								<th>Industry</th>
        								<th>Company</th>
        								<th>Representative</th>
                        <th>Contact Number</th>
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

								<div class="col-sm-12 ">
									<div class="result pull-left"><strong>Showing 1 to 2 of max</strong></div>
										<ul class="pagination pull-right">
											<li><a href="#">«</a></li>
											<li class = 'active'><a href="#1">1</a></li>
											<li><a href="#2">2</a></li>
											<li><a href="#3">3</a></li>
											<li><a href="#4">4</a></li>
											<li><a href="#5">5</a></li>
											<li><a href="#2">»</a></li>
										</ul>
							</div>

            </div>
          </div>
        </div>
@endsection
