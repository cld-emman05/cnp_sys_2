@include('headers.table')

<script type ='text/javascript'>
$(document).ready(function(){

  $('#cred_supplier').hide();

  var supplier = $('#supplier_name').val();

  $( "#ofc_supplier" ).prop( "readonly", true);
  $( "#bal_supplier" ).prop( "readonly", true);
  $( "#loan_stat" ).prop( "readonly", true);

      $('#cred_supplier').fadeIn(1000);

  });
</script>
