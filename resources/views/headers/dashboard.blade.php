@include('headers.main')
<script>
    $(document).ready(function() {
      setInterval(function(e) {
        var date = new Date(),
            time = date.toLocaleTimeString(),
            calendar = date.toDateString();
        $(".clock").html(time);
        $(".date").html(calendar);}, 750);


            /* Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts(); */
    });
</script>
