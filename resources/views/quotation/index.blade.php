@extends('layout.main')

@section('title', "Manage Quotations")

@include('headers.table')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-chart">
          <div class="card-header">
          <h5 class='card-category'>Quotations</h5>
            <h4 class="card-title">Requests</h4>
          </div>

          <!-- FORM CONTENT -->
          <div class = 'card card-body'>
            <div class="col-lg-12 md-4">

                <div class="card-chart">
  								<table class="table stripe" id = 'format-table'>
    								<thead>
      								<tr>
        								<th>Quote #</th>
        								<th>Job Title</th>
        								<th>Customer</th>
                        <th>Status</th>
        								<th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
                      <tr>
        								<td>1</td>
        								<td>Job Sample</td>
        								<td><a>Crisostomo Ibarra</a></td>
        								<td>New order</i></td>
        								<td>
        									<a href = 'quotation/create'><btn class = 'btn btn-primary'>Create Quotation</btn></a>
        								</td>
      								</tr>

      								<tr>
        								<td>2</td>
        								<td>Rejected for Haggling</td>
        								<td><a>Crisostomo Ibarra</a></td>
        								<td>Haggle</i></td>
        								<td>
        									<btn class = 'btn btn-warning' id = 'approved'>Update</btn>
        									<btn class = 'btn btn-danger' id = 'terminated'>Reject</btn>
        								</td>
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
