@include('headers.main')

<script type = 'text/javascript'>
$(document).ready(function(){
  $("#first_name").prop("readonly", true);
  $("#last_name").prop("readonly", true);
  $("#company").prop("readonly", true);
  $('#address').prop("readonly", true);
  $('#contact').prop("readonly", true);
  $('#email').prop("readonly", true);
  $('#update').hide();
  $('.pw').hide();

  $("#modify").click(function(){
    $("#first_name").prop("readonly", false);
    $("#last_name").prop("readonly", false);
    $("#company").prop("readonly", false);
    $('#address').prop("readonly", false);
    $('#contact').prop("readonly", false);
    $('#email').prop("readonly", false);
    $('#modify').hide();
    $('.pw').show();
    $('#update').fadeIn();
  });
});
</script>
