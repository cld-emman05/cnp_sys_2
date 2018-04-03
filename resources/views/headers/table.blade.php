@include('headers.main')

<!--DataTables-->
<script src="{{ asset('DataTables\DataTables-1.10.16\js\jquery.dataTables.min.js') }}">
</script>

<link href="{{ asset('DataTables\DataTables-1.10.16\css\jquery.dataTables.min.css') }}" rel = 'stylesheet'/>

<style>
.table thead{
  background-color: #E5E4E2;
}

div.container {
        width: 80%;
    }

</style>

<script>
// for terminating button
$(document).ready(function(){
  $('btn#terminated').click(function(){
    $('tr#1').fadeOut('slow', function(){

      $.notify({
        icon: "now-ui-icons ui-1_bell-53",
        message: "<small> {{ Carbon\Carbon::now()->format('h:i A') }} </small> <br> <i> Job Sample </i> has been terminated!"
      },

      {
        type: 'danger',
        timer: '1000',
        placement: {
            from: 'top',
            align: 'right'
          }
      });
    });
  });

    $('#format-table').DataTable({
      "language": {
      "lengthMenu": "Display _MENU_ records per page",
      "zeroRecords": "No @yield('title') yet",
      "info": "Showing page _PAGE_ of _PAGES_",
      "infoEmpty": "No records available",
      "infoFiltered": "(filtered from _MAX_ total records)"
  }
    });

});
</script>
