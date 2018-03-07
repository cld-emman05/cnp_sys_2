
<div class="logo">
      <a href="/" class="simple-text logo-normal">
        <img src = "{{ asset('img/logo1.png') }}">
      </a>
</div>

  <div class="logo" align = 'center'>
    <br>
    @if(auth::user()->user_type == 1)
      <h6 class = 'title'> {{ auth::user()->first_name }} {{ auth::user()->last_name }} </h6>
      <small class = "simple-text"> {{ @auth::user()->company }} </small>

      @else
        <h6 class = 'title'> {{ auth::user()->first_name }} {{ auth::user()->last_name }} </h6>
        <small class = "simple-text"> {{ @Auth::user()->user_types->type }} </small>
    @endif


  </div>

  <div class="sidebar-wrapper">
      <ul class="nav">
          <li class = "{{Request:: is(@Auth::user()->user_types->type) ? 'active' : ''}}">
              <a href="/{{ @Auth::user()->user_types->type }}">
                  <i class="now-ui-icons design_app"></i>
                  <p>Dashboard</p>
              </a>
          </li>

          @if(auth::user()->user_type == 1)
          <li class = "{{Request:: is('order/create') ? 'active' : ''}}">
              <a href= '/order/create'>
                  <i class="now-ui-icons shopping_cart-simple"></i>
                  <p>Create Order</p>
              </a>
          </li>

          <li class = "{{Request:: is('order/revise') ? 'active' : ''}}">
              <a href="/order/revise">
                  <i class="now-ui-icons shopping_bag-16"></i>
                  <p>Revise Order</p>
              </a>
          </li>

          <li class = "{{Request:: is('quotation/approve') ? 'active' : ''}}">
              <a href="/quotation/approve">
                  <i class="now-ui-icons ui-2_like"></i>
                  <p>Approve Quotation</p>
              </a>
          </li>

          <li class = "{{Request:: is('order/monitor-status') ? 'active' : ''}}">
              <a href="/order/monitor-status">
                  <i class="now-ui-icons design_bullet-list-67"></i>
                  <p>Monitor Job Status</p>
              </a>
          </li>

          @elseif(auth::user()->user_type == 2)
          <li class = "{{Request:: is('order/view') ? 'active' : ''}}">
              <a href="/order/view">
                  <i class="now-ui-icons shopping_bag-16"></i>
                  <p>Manage Orders</p>
              </a>
          </li>

          <li class = "{{Request:: is('order/schedule') ? 'active' : ''}}">
              <a href="/order/schedule">
                  <i class="now-ui-icons shopping_delivery-fast"></i>
                  <p>Schedule Delivery</p>
              </a>
          </li>

          <li class = "{{Request:: is('customer/register') ? 'active' : ''}}">
              <a href="/customer/register">
                  <i class="now-ui-icons business_badge"></i>
                  <p>Manage Customer</p>
              </a>
          </li>

          @elseif(auth::user()->user_type == 3)
          <li class = "{{Request:: is('quotation/create') ? 'active' : ''}}">
              <a href="/quotation/create">
                  <i class="now-ui-icons files_single-copy-04"></i>
                  <p>Manage Quotations</p>
              </a>
          </li>

          <li class = "{{Request:: is('quotation/haggle') ? 'active' : ''}}">
              <a href="/quotation/haggle">
                  <i class="now-ui-icons ui-2_chat-round"></i>
                  <p>Manage Haggling Requests</p>
              </a>
          </li>

          <li class = "{{Request:: is('employee/register') ? 'active' : ''}}">
              <a href="/employee/register">
                  <i class="now-ui-icons business_badge"></i>
                  <p>Manage Employees</p>
              </a>
          </li>

		  @elseif(auth::user()->user_type == 4)
          <li class = "{{Request:: is('order/view') ? 'active' : ''}}">
              <a href="/order/view">
                  <i class="now-ui-icons shopping_bag-16"></i>
                  <p>View Orders</p>
              </a>
          </li>

          @elseif(auth::user()->user_type == 5)
          <li class = "{{Request:: is('purchase/compute') ? 'active' : ''}}">
              <a href="/purchase/compute">
                  <i class="now-ui-icons files_single-copy-04"></i>
                  <p>Compute Supplies</p>
              </a>
          </li>

          <li class = "{{Request:: is('purchase/create') ? 'active' : ''}}">
              <a href="/purchase/create">
                  <i class="now-ui-icons shopping_cart-simple"></i>
                  <p>Purchase Supplies</p>
              </a>
          </li>

          <li class = "{{Request:: is('supplier/register') ? 'active' : ''}}">
              <a href="/supplier/register">
                  <i class="now-ui-icons business_badge"></i>
                  <p>Manage Suppliers</p>
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
