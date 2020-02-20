		</div>
	</div>
	<script src="<?php echo $js ?>jquery-3.4.1.js"></script>
	<script src="<?php echo $js ?>bootstrap.min.js"></script>
	<script src="<?php echo $js ?>sweetalert2.all.min.js"></script>
	<script>
		$(document).ready(function() {
			<?php if(isset($_SESSION['message'])): ?>
				Swal.fire(
						'Felicitaciones',
						'<?php echo $_SESSION['message']; ?>',
						'success');
				setTimeout(function(){
					$.get('../unset.php',{id: 1}, function(data) {
						console.log(data);
					});

				},100);

				<?php endif ?>	
				//-------------------------------------------------
				$('.btn-delete').click(function(event){
					$id = $(this).attr('data-id');
					Swal.fire({
						title: 'Esta seguro?',
						 text: "Desea eliminar este registro!",
						 type: 'warning',
						 showCancelButton: true,
						 confirmButtonColor: '#4ABB13',
						 cancelButtonColor: '#d33',
						 confirmButtonText: 'OK'
						}).then((result) => {
						  if (result.value) {
						  	window.location.replace('delete.php?id='+$id);
						 }
				})
		});
	});
	</script>
</body>
</html>