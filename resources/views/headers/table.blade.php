@include('headers.main')

<!--DataTables-->



<style>
.table thead{
  background-color: #E5E4E2;
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


});
</script>
