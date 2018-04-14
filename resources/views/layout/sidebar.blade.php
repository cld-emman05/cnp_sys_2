<div class="logo" align = 'center'>
      <a href="/" class="simple-text logo-normal">
        <img src = "{{ asset('img/logo1.png') }}">
      </a>
    </div>

    <div class="logo text-center">
        <small class ='font-weight-bold text-white'>Today is <i> {{today()->format('M d, Y [D]')}}
        </i></small>
</div>

<!--  <div class="logo text-center">
    <br>
    @if(session()->get('dept') == null)
      <h6 class = 'font-weight-bold'> {{ auth::user()->first_name }} {{ auth::user()->last_name }} </h6>


      @else
      <h6 class = 'font-weight-bold'> {{ auth::user()->first_name }} {{ auth::user()->last_name }} </h6>
      <small class = "font-weight-bold text-white text-uppercase"> {{ session()->get('dept') }} </small>
    @endif


  </div> !-->

  <div class="sidebar-wrapper font-weight-bold">
      <ul class="nav">
        <li class = "{{Request:: is('/') ? 'active' : ''}}">
              <a href="/">
                  <i class="now-ui-icons design_app"></i>
                  <p>Dashboard</p>
              </a>
          </li>

          @if(session()->get('dept') == null)
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

          @elseif(session()->get('dept') == 'Sales')
          <li class = "{{Request:: is('order/*') ? 'active' : ''}}
                      {{Request:: is('order') ? 'active' : ''}}">
              <a href= '/order/'>
                  <i class="now-ui-icons shopping_cart-simple"></i>
                  <p>Orders</p>
              </a>
          </li>


          <li class = "{{Request:: is('customer') ? 'active' : ''}}
          {{Request:: is('customer/*') ? 'active' : ''}} ">
              <a href="/customer/">
                  <i class="now-ui-icons business_badge"></i>
                  <p>Customers</p>
              </a>
          </li>

          @elseif(session()->get('dept') == 'Administrator')
          <li class = "{{Request:: is('quotation') ? 'active' : ''}}"">
                       <a href="/quotation/">
                           <i class="now-ui-icons ui-2_chat-round"></i>
                           <p>Quotation Requests</p>
                       </a>
          </li>

          <li class = "{{Request:: is('quotation/manage') ? 'active' : ''}}">
                       <a href="/quotation/manage">
                           <i class="now-ui-icons ui-2_chat-round"></i>
                           <p>Ongoing Quotation</p>
                       </a>
          </li>

          <li class = "{{Request:: is('employee/*') ? 'active' : ''}}
                       {{Request:: is('employee') ? 'active' : ''}}">
              <a href="/employee">
                  <i class="now-ui-icons business_badge"></i>
                  <p>Employees</p>
              </a>
          </li>

		  @elseif(session()->get('dept') == 'Production')
      <li class = "{{Request:: is('order/*') ? 'active' : ''}}
                  {{Request:: is('order') ? 'active' : ''}}">
          <a href= '/order/'>
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Orders</p>
          </a>
      </li>

          @elseif(session()->get('dept') == 'Purchasing')
          <li class = "{{Request:: is('purchase/*') ? 'active' : ''}}
                        {{Request:: is('purchase/') ? 'active' : ''}}">

              <a href="#">
                  <i class="now-ui-icons shopping_cart-simple"></i>
                  <p>Purchase Materials</p>
              </a>
          </li>

          <li class = "{{Request:: is('purchase/compute') ? 'active' : ''}}">
              <a href="/purchase/compute">
                  <i class="now-ui-icons shopping_cart-simple"></i>
                  <p>Compute</p>
              </a>
          </li>

          <li class = "{{Request:: is('purchase/create') ? 'active' : ''}}">
              <a href="/purchase/create">
                  <i class="now-ui-icons shopping_cart-simple"></i>
                  <p>Order</p>
              </a>
          </li>

          <li class = "{{Request:: is('supplier/*') ? 'active' : ''}}
                        {{Request:: is('supplier') ? 'active' : ''}}">
              <a href="/supplier/">
                  <i class="now-ui-icons business_badge"></i>
                  <p>Suppliers</p>
              </a>
          </li>

          @elseif(session()->get('dept') == 'Finance')
          <li class = "{{Request:: is('supplier/track') ? 'active' : ''}}">
              <a href="/supplier/track">
                  <i class="now-ui-icons travel_info"></i>
                  <p>Debt Management</p>
              </a>
          </li>

          <li class = "{{Request:: is('supplier/pay') ? 'active' : ''}}">
              <a href="/supplier/pay">
                  <i class="now-ui-icons business_money-coins"></i>
                  <p>Cashflow</p>
              </a>
          </li>



      </ul>
@endif
    </div>
