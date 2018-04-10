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

    $('#page_num').prop('readonly', true);
    $('#size').prop('readonly', true);
    $('#cover_paper').prop('readonly', true);
    $('#cover_color').prop('readonly', true);
    $('#inside_paper').prop('readonly', true);
    $('#inside_color').prop('readonly', true);
    $('#lamination').prop('readonly', true);
    $('#binding').prop('readonly', true);

    $(document).on('change', '#jobtype', function(){
      var job = $(this).val();
      console.log(job);

      $.ajax({
       url: '{!! URL::to('/order/assign') !!}',
       method: 'POST',
       async: false,
       data: {'id': job},
       dataType: 'JSON',
       headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },

       success:(function(data){
        if(data[0] != null)
         {
           console.log("Job Type: " + data[0].type);

         console.log("Number of Pages: " + data[0].pages);
         $('#page_num').attr('value', data[0].pages);

         console.log("Size: " + data[0].size_id);
         $('#size').prop('value', data[0].size_id);

         console.log("Cover Paper: " + data[0].cover_paper_id);
         $('#cover_paper').prop('value', data[0].cover_paper_id);

         console.log("Cover Color: " + data[0].cover_color_id);
         $('#cover_color').prop('value', data[0].cover_color_id);

         console.log("Inside Paper: " + data[0].inside_paper_id);
         $('#inside_paper').prop('value', data[0].inside_paper_id);

         console.log("Inside Color: " + data[0].inside_color_id);
         $('#inside_color').prop('value', data[0].inside_color_id);

         console.log("Lamination: " + data[0].lamination_id);
         $('#lamination').prop('value', data[0].lamination_id);

         console.log("Binding: " + data[0].binding_id);
         $('#binding').prop('value', data[0].binding_id);
       }

       else{
         $('#quan').attr('value', 1);
         $('#page_num').attr('value', 1);
         $('#size').prop('value', null);
         $('#cover_paper').prop('value', null);
         $('#cover_color').prop('value', null);
         $('#inside_paper').prop('value', null);
         $('#inside_color').prop('value', null);
         $('#lamination').prop('value', null);
         $('#binding').prop('value', null);
       }
       }),

        error:(function(xhr, status, error){
          alert("An AJAX error occured: " + status + "\n Error: " + error);
        }),
    });

    });
});

</script>
