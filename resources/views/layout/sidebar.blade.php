
<div class="logo" align = 'center'>
      <a href="/" class="simple-text logo-normal">
        <img src = "{{ asset('img/logo1.png') }}">
      </a>

        <small class ='font-weight-bold'>Today is <i> {{Carbon\Carbon::now()->format('M d, Y [D]')}}
        </i></small>
</div>

  <div class="logo text-center">
    <br>
    @if(auth::user()->user_type == 1)
      <h6 class = 'font-weight-bold'> {{ auth::user()->first_name }} {{ auth::user()->last_name }} </h6>
      <small class = "font-weight-bold text-white"> {{ @auth::user()->company }} </small>

      @else
      <h6 class = 'font-weight-bold'> {{ auth::user()->first_name }} {{ auth::user()->last_name }} </h6>
      <small class = "font-weight-bold text-white text-uppercase"> {{ @Auth::user()->user_types->type }} </small>
    @endif


  </div>

  <div class="sidebar-wrapper font-weight-bold">
      <ul class="nav">
          <li class = "{{Request:: is('/') ? 'active' : ''}}">
              <a href="/">
                  <i class="now-ui-icons design_app"></i>
                  <p>Dashboard</p>
              </a>
          </li>

          @if(auth::user()->user_type == 1)
          <li class = "{{Request:: is('order/*') ? 'active' : ''}}
                      {{Request:: is('order') ? 'active' : ''}}">
              <a href= '/order/'>
                  <i class="now-ui-icons shopping_cart-simple"></i>
                  <p>Orders</p>
              </a>
          </li>

          <li class = "{{Request:: is('quotation/*') ? 'active' : ''}}
                      {{Request:: is('quotation') ? 'active' : ''}}">
              <a href= '/quotation/approve'>
                <i class="now-ui-icons files_single-copy-04"></i>
                <p>Quotations</p>
              </a>
          </li>

          @elseif(auth::user()->user_type == 2)
          <li class = "{{Request:: is('order/*') ? 'active' : ''}}
                      {{Request:: is('order') ? 'active' : ''}}">
              <a href= '/order/'>
                  <i class="now-ui-icons shopping_cart-simple"></i>
                  <p>Orders</p>
              </a>
          </li>

          <li class = "{{Request:: is('customer/*') ? 'active' : ''}}
                        {{Request:: is('customer') ? 'active' : ''}}">
              <a href="/customer/">
                  <i class="now-ui-icons business_badge"></i>
                  <p>Customers</p>
              </a>
          </li>

          @elseif(auth::user()->user_type == 3)
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

		  @elseif(auth::user()->user_type == 4)
      <li class = "{{Request:: is('order/*') ? 'active' : ''}}
                  {{Request:: is('order') ? 'active' : ''}}">
          <a href= '/order/'>
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Orders</p>
          </a>
      </li>

          @elseif(auth::user()->user_type == 5)
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

          @elseif(auth::user()->user_type == 6)
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
