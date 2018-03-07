@include('headers.table')

<script type ='text/javascript'>
$(document).ready(function(){
  $('#post-quote').hide();
  $( "#UnitCost" ).prop( "readonly", true);
  $('#TotalAll').prop( "readonly", true);
  $('#quantity').prop( "readonly", true);
  $('#pagenumber').prop( "readonly", true);

        $("#calculate").click(function(){
        var a = $('#coverstockP').val();
        var b = $('#insidestockP').val();
        var c = $('#coveroffsetP').val();
        var d = $('#insideoffsetP').val();
        var e = $('#otheroffsetP').val();
        var f = $('#laminationP').val();
        var g = $('#letterpressP').val();
        var h = $('#bindingP').val();
        var i = $('#diecutP').val();
        var j = $('#diecutrunningP').val();
        var k = $('#othersP').val();
        var l = $('#quantity').val();
        var m = $('#pagenumber').val();

        var temp = parseInt(a, 10) + parseInt(b, 10) + parseInt(c, 10) +
                   parseInt(d, 10) + parseInt(e, 10) + parseInt(f, 10) +
                   parseInt(g, 10) + parseInt(h, 10) + parseInt(i, 10) +
                   parseInt(j, 10) + parseInt(k, 10);

        var sum = parseInt(temp, 10) * parseInt(m, 10);
        var total = parseInt(sum, 10) * parseInt(l, 10);
        
        $('#post-quote').fadeIn(300);

        $('#UnitCost').attr('value',sum);
        $('#TotalAll').attr('value',total);

  });
});
</script>
