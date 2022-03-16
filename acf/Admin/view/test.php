<?php 
          include('includes/header.php');
          include('includes/sidenav.php');
          include('includes/topnav.php');
           
?>


 <div data-role="controlgroup" data-type="horizontal">
 <a href="#" data-role="button" data-inline="true" data-mini="true" id="myApptBtn" style="width: 101PX;border: black 1PX solid;" class="btnDesign">YES</a>
 <a href="#" data-role="button" data-inline="true" data-mini="true" id="allApptBtn" style="width: 101PX;border: black 1PX solid;" class="btnDesign">NO</a>
 </div>

<?php include('includes/footer.php'); ?>

<script type="text/javascript">
 $(document).ready(function() {
    $('#myApptBtn').click(function() {
   $(this).addClass('active');
   $('#allApptBtn').removeClass('active').addClass('inactive');
    $('#myApptBtn').removeClass('inactive'); 
  
    });
 $('#allApptBtn').click(function() {
        $('#myApptBtn').removeClass('active').addClass('inactive');
    $(this).addClass('active').removeClass('inactive');
   
    });
});
</script>