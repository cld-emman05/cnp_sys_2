@include('headers.main')

<!--   Core JS Files   -->
<script src="{{ asset('js/core/jquery.min.js') }}">></script>
<script src="{{ asset('js/core/popper.min.js')  }}">></script>
<script src="{{ asset('js/core/bootstrap.min.js')  }}">></script>
<script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js')  }}">></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('js/plugins/bootstrap-switch.js')  }}">></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA0xOhZ3ynhWgIZHpmMMiBkkV2unWVck0"></script>
<!-- Chart JS -->
<script src="{{ asset('js/plugins/chartjs.min.js')  }}">></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('js/plugins/bootstrap-notify.js')  }}">></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('js/now-ui-dashboard.js?v=1.0.0')  }}">></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('demo/demo.js')  }}">></script>

<style>
@if(@auth::user()->user_types->type == 'Customer'  || @auth::user()->user_types->type == 'Administrator')
.table thead{
  background-color: #2CA8FF;
}

@elseif(@auth::user()->user_types->type == 'Sales' || @auth::user()->user_types->type == 'Production')
.table thead{
  background-color: #f96332;
}

@elseif(@auth::user()->user_types->type == 'Purchasing' || @auth::user()->user_types->type == 'Finance')
.table thead{
  background-color: #18ce0f;;
}
@endif
</style>

<script>

// for terminating button
$(document).ready(function(){
  $('btn#terminated').click(function(){
    $('tr#1').fadeOut('slow', function(){
      $.notify({
        icon: "now-ui-icons ui-1_bell-53",
        message: "<small> {{ Carbon\Carbon::now()->format('h:i A') }} </small> <br> <i> Job Sample </i> has been terminated!"
      },{
        type: 'danger',
        timer: '1000',
        placement: {
            from: 'top',
            align: 'right'
          }
      });
    });
  });
</script>
