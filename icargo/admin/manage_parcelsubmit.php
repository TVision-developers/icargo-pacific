<div class="container-fluid">
	<form action="" id="update_status">
		<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
		<div class="form-group">
			<label for="">Please Read:</label>
			<?php $status_arr = array("Item Accepted by Courier","Collected","Shipped","In-Transit","Arrived At Destination","Out for Delivery","Ready to Pickup","Delivered","Picked-up","Unsuccessfull Delivery Attempt"); ?>
			<h5>Please review the information and confirm if it is correct or if there are any changes need to be made.</h5>
		</div>
	</form>
</div>

<div class="modal-footer display p-0 m-0">
        <button class="btn btn-primary" form="update_status">Confirm</button>
        <button type="button" class="btn btn-secondary" onclick="uni_modal('Parcel\'s Details','view_parcel.php?id=<?php echo $_GET['id'] ?>','large')">Back</button>
</div>
<style>
	#uni_modal .modal-footer{
		display: none
	}
	#uni_modal .modal-footer.display{
		display: flex
	}
</style>
<script>
	$('#update_status').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=submit_parcel',
			method:'POST',
			data:$(this).serialize(),
			error:(err)=>{
				console.log(err)
				alert_toast('An error occured.',"error")
				end_load()
			},
			success:function(resp){
				if(resp==1){
					alert_toast("Parcel's information successfully submitted",'success');
					setTimeout(function(){
						location.reload()
					},750)
				}
			}
		})
	})
</script>