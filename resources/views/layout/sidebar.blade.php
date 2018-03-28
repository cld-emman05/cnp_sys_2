@auth

{{ $current = Auth::user()->id }}

{{  $user = DB::table('departments')
            ->join('employees', 'employees.department_id', '=', 'departments.id')
            ->join('users', 'employees.user_id', '=', 'users.id')
            ->select('departments.name')
            ->where('users.id', '=', $current)->value('departments.name') }}

@endauth

<div class="logo" align = 'center'>
      <a href="/" class="simple-text logo-normal">
        <img src = "{{ asset('img/logo1.png') }}">
      </a>

        <small class ='font-weight-bold'>Today is <i> {{Carbon\Carbon::now()->format('M d, Y [D]')}}
        </i></small>
</div>

  <div class="logo text-center">
    <br>
    @if($user == null)
      <h6 class = 'font-weight-bold'> {{ auth::user()->first_name }} {{ auth::user()->last_name }} </h6>
      <small class = "font-weight-bold text-white"> {{ @auth::user()->customer()->value('company') }} </small>

      @else
      <h6 class = 'font-weight-bold'> {{ auth::user()->first_name }} {{ auth::user()->last_name }} </h6>
      <small class = "font-weight-bold text-white text-uppercase"> {{ $user }} </small>
    @endif


  </div>

  <div class="sidebar-wrapper font-weight-bold">
      <ul class="nav">
        <!--  <li class = "{{Request:: is('/') ? 'active' : ''}}">
              <a href="/">
                  <i class="now-ui-icons design_app"></i>
                  <p>Dashboard</p>
              </a>
          </li> -->

          @if($user == null)
          <li class = "{{Request:: is('order/*') ? 'active' : ''}}
                      {{Request:: is('order') ? 'active' : ''}}">
              <a href= '/order/'>
                  <i class="now-ui-icons shopping_cart-simple"></i>
                  <p>Orders</p>
              </a>
          </li>

                <li class = "{{Request:: is('order/create') ? 'active' : ''}}">
                    <a href= '/order/create'>
                        <i class="now-ui-icons ui-1_email-85"></i>
                        <p>Create</p>
                    </a>
                </li>

                <li class = "{{Request:: is('order/revise') ? 'active' : ''}}">
                    <a href= '/order/revise'>
                        <i class="now-ui-icons design_image"></i>
                        <p>Revise</p>
                    </a>
                </li>

                <li class = "{{Request:: is('order/monitor-status') ? 'active' : ''}}">
                    <a href= '/order/monitor-status'>
                        <i class="now-ui-icons travel_info"></i>
                        <p>Status</p>
                    </a>
                </li>

          <li class = "{{Request:: is('quotation/*') ? 'active' : ''}}
                      {{Request:: is('quotation') ? 'active' : ''}}">
              <a href= '/quotation/approve'>
                <i class="now-ui-icons files_single-copy-04"></i>
                <p>Quotations</p>
              </a>
          </li>

          @elseif($user == 'Sales')
          <li class = "{{Request:: is('order/*') ? 'active' : ''}}
                      {{Request:: is('order') ? 'active' : ''}}">
              <a href= '/order/'>
                  <i class="now-ui-icons shopping_cart-simple"></i>
                  <p>Orders</p>
              </a>
          </li>

          <li class = "{{Request:: is('customer/*') ? 'active' : ''}}
                        {{Request:: is(null) ? 'active' : ''}}">
              <a href="/customer/">
                  <i class="now-ui-icons business_badge"></i>
                  <p>Customers</p>
              </a>
          </li>

          @elseif($user == 'Administrator')
          <li class = "{{Request:: is('quotation/*') ? 'active' : ''}}
                       {{Request:: is('quotation') ? 'active' : ''}}">
                       <a href="/quotation">
                           <i class="now-ui-icons ui-2_chat-round"></i>
                           <p>Quotations</p>
                       </a>
          </li>

          <li class = "{{Request:: is('employee/*') ? 'active' : ''}}
                       {{Request:: is('employee') ? 'active' : ''}}">
              <a href="/employee">
                  <i class="now-ui-icons business_badge"></i>
                  <p>Employees</p>
              </a>
          </li>

		  @elseif($user == 'Production')
      <li class = "{{Request:: is('order/*') ? 'active' : ''}}
                  {{Request:: is('order') ? 'active' : ''}}">
          <a href= '/order/'>
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Orders</p>
          </a>
      </li>

          @elseif($user == 'Purchasing')
          <li class = "{{Request:: is('purchase/compute') ? 'active' : ''}}">
              <a href="/purchase/compute">
                  <i class="now-ui-icons files_single-copy-04"></i>
                  <p>Compute Supplies</p>
              </a>
          </li>

          <li class = "{{Request:: is('purchase/*') ? 'active' : ''}}
                        {{Request:: is('purchase/') ? 'active' : ''}}">
              <a href="/purchase/">
                  <i class="now-ui-icons shopping_cart-simple"></i>
                  <p>Purchase Supplies</p>
              </a>
          </li>

          <li class = "{{Request:: is('supplier/*') ? 'active' : ''}}
                        {{Request:: is('supplier') ? 'active' : ''}}">
              <a href="/supplier/">
                  <i class="now-ui-icons business_badge"></i>
                  <p>Suppliers</p>
              </a>
          </li>

          @elseif($user == 'Finance')
          <li class = "{{Request:: is('supplier/track') ? 'active' : ''}}">
              <a href="/supplier/track">
                  <i class="now-ui-icons travel_info"></i>
                  <p>Debt Tracker</p>
              </a>
          </li>

          <li class = "{{Request:: is('supplier/pay') ? 'active' : ''}}">
              <a href="/supplier/pay">
                  <i class="now-ui-icons business_money-coins"></i>
                  <p>Pay Supplier</p>
              </a>
          </li>



      </ul>
@endif
    </div>
