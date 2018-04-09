@extends('layout.main')

@section('title', "Supplier List")

@include('headers.table')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-chart">
          <div class="card-header">
          <h5 class='card-category'>Suppliers</h5>
            <h4 class="card-title">Contact</h4>
          </div>

          <!-- FORM CONTENT -->
          <div class = 'card card-body'>
            <div class="col-lg-12 md-4">

              <div class="col-md-12 md-4">
                <a href = '/supplier/register'>
                  <btn class = 'btn btn-primary' id = 'create'>
                  <i class="now-ui-icons ui-1_simple-add"></i> Add</btn>
                </a>
            </div>

  							<div class="card-chart">
  								<table class="table stripe" id = 'format-table'>
    								<thead>
      								<tr>
        								<th>#</th>
        								<th>Name</th>
        								<th>Credit Limit</th>
                        <th>Terms</th>
        								<th>Contact</th>
                        <th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
                      <tr>
        								<td>1</td>
        								<td>Dhunwell</td>
        								<td><a>PhP 30000000</a></td>
                        <td><a>30 days</a></td>
        								<td>09221168711</i></td>
        								<td>
                          <btn class = 'btn btn-warning' id = 'approved'>Update</btn>
                          <btn class = 'btn btn-danger' id = 'terminated'>Remove</btn>
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
