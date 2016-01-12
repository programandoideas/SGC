<!-- contenido -->
<div id="page-wrapper">
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">Inicio</h1>
	    </div>
	    <div class="col-lg-12">
	    	<a href="" class="btn btn-warning" id="btnWarning">Warning</a>
			<a href="" class="btn btn-success" id="btnSuccess">Success</a>
			<a href="" class="btn btn-danger" id="btnDanger">Danger 10 seconds</a>
			<a href="" class="btn btn-info" id="btnInfo">Info permanent</a>
	    </div>
	</div>
	<br/>
	<div class="row">
	    <div class="col-lg-12">
	    	<a href="" class="btn btn-default" id="btnConfirm">Confirmation</a>
	    </div>
	</div>
	<br/>
	<div class="row">
		<div class="col-lg-12">
	    	<a href="" class="btn btn-info" id="btnProgressbar">Start</a>
	    </div>
	</div>
	<br/>
	<div class="row">
	</div>
</div>
<script>
	
// Alert type warning
$('#btnWarning').click(function(e) {
  e.preventDefault();
  $.smkAlert({
    text: 'Alert type "warning"',
    type: 'warning',
    time: 86000
  });
});
// Alert type success, position top-left
$('#btnSuccess').click(function(e) {
  e.preventDefault();
  $.smkAlert({
    text: 'Alert type "success"',
    type: 'success',
    position:'top-left',
    time: 86000
  });
});
// Alert type danger, position top-center, 10 seconds
$('#btnDanger').click(function(e) {
  e.preventDefault();
  $.smkAlert({
    text: 'Alert type "danger" time 10 seconds',
    type: 'danger',
    position:'top-center',
    time: 86000
  });
});
// Alert type info, position bottom-right, icon glyphicon-time, permanent
$('#btnInfo').click(function(e) {
  e.preventDefault();
  $.smkAlert({
    text: 'Alert type "info" permanent',
    type: 'info',
    position:'bottom-right',
    icon: 'glyphicon-time',
    permanent: true
  });
});


$('#btnConfirm').click(function(e) {
  e.preventDefault();
  $.smkConfirm({
    text:'Al ELIAS CATALAN GARCIA le gusta la CORNETA.!',
    accept:'Aceptar',
    cancel:'Cancelar'
  },function(res){
    // Code here
    if (res) {
      $.smkAlert({text: 'Confirmado!!', type:'success'});
    }
  });
});

$('#btnProgressbar').click(function(e) {
  e.preventDefault();
  $.smkProgressBar({
    element:'body',
    status:'start',
    bgColor: '#000',
    barColor: '#fff',
    content: 'Loading...'
  });
  setTimeout(function(){
    $.smkProgressBar({
      status:'end'
    });
  }, 1000);
});

</script>