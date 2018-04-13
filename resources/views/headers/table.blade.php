@include('headers.main')

<style>
.table thead{
  background-color: #E5E4E2;
}

div.container {
        width: 80%;
    }

</style>

<script type = 'text/javascript'>
// for terminating button
$(document).ready(function(){
  /*$('btn#terminated').click(function(){
     ('tr').fadeOut('slow', function(){

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
  }); */

  $( "#start_date" ).datepicker({
  goToCurrent: true,
  currentText: "Today",
  maxDate: 0,
  defaultDate: 0,
  showButtonPanel: true,
  showAnim: 'fadeIn',
  showOtherMonths: true,
  autoSize: true,
  dateFormat: 'yy-mm-dd',
 });

  $( "#end_date" ).datepicker({
    goToCurrent: true,
    currentText: "Today",
    maxDate: 0,
    defaultDate: 0,
    showButtonPanel: true,
    showAnim: 'fadeIn',
    showOtherMonths: true,
    autoSize: true,
    dateFormat: 'yy-mm-dd',
 });

 $( "#datedue" ).datepicker({
   goToCurrent: true,
   currentText: "Today",
   minDate: +7,
   defaultDate: 0,
   showButtonPanel: true,
   showAnim: 'fadeIn',
   showOtherMonths: true,
   autoSize: true,
   dateFormat: 'yy-mm-dd',
});

  // Datatables
    $('#format-table').DataTable({
      scrollY:        '200px',
      scrollCollapse: true,
      paging:         false,
      searching:     true,

        "language": {
            "decimal": ".",
            "thousands": ","
        },
    });


    // create order auto-generate default specificaions -->
    $(document).on('change', '#jobtype', function(){
      var job = $(this).val();
      console.log(job);
        $('#quan').removeProp();
        $('#page_num').removeProp();
        $('#size').removeProp();
        $('#cover_paper').removeProp();
        $('#cover_color').removeProp();
        $('#inside_paper').removeProp();
        $('#inside_color').removeProp();
        $('#lamination').removeProp();
        $('#binding').removeProp();

      $.ajax({
       url: '{!! URL::to('/order/assign') !!}',
       method: 'POST',
       async: false,
       data: {'type': job},
       dataType: 'JSON',
       headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },

       success:(function(data){
        console.log("Id: " + data[0].id);
        if(data[0] != null)
         {

           $('#page_num').prop("disabled", false);

           $('#size').prop("disabled", false);

           $('#cover_paper').prop("disabled", false);

           $('#cover_color').prop("disabled", false);

           $('#inside_paper').prop("disabled", false);

           $('#inside_color').prop("disabled", false);

           $('#lamination').prop("disabled", false);

           $('#binding').prop("disabled", false);

             console.log("Job Type: " + data[0].type);

              $('#page_num').prop('value', data[0].pages);

              $('#size').prop('value', data[0].size_id);

              $('#cover_paper').prop('value', data[0].cover_paper_id);

              $('#cover_color').prop('value', data[0].cover_color_id);

              $('#inside_paper').prop('value', data[0].inside_paper_id);

              $('#inside_color').prop('value', data[0].inside_color_id);

              $('#lamination').prop('value', data[0].lamination_id);

              $('#binding').prop('value', data[0].binding_id);

              if(data[0].id == 2 || data[0].id == 5){
                $('#inside_paper').prop("disabled", true);
                $('#inside_color').prop("disabled", true);
                $('#page_num').prop("disabled", true);
              }

              else if(data[0].id == 1 || data[0].id == 3){
                $('#cover_color').prop("disabled", true);
                $('#inside_color').prop("disabled", true);
              }
       }
       }),

        error:(function(xhr, status, error){
          alert("An AJAX error occured: " + status + "\n Error: " + error);
        }),
    });

    });

    $('form').submit(function(e) {

    $(':disabled').each(function(e) {
        $(this).removeAttr('disabled');
    })
});
});

</script>
