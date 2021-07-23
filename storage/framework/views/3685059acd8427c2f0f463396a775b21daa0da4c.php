
<script src="<?php echo e(asset('public/front/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/front/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/front/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/front/js/wow.min.js')); ?>"></script> 
<script src="<?php echo e(asset('public/front/js/script.js')); ?>"></script>
<script src="<?php echo e(asset('public/front/js/custom.js')); ?>"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<script type="text/javascript">  

 $('#type').change(function() {
      var sid = $(this).val();     
       $.ajax({
					type: 'POST',
				    url: "<?php echo e(url('/servicetypeques')); ?>",
					data: {
						"_token": $('meta[name="csrf-token"]').attr('content'),	
						"id": sid,								
					},
					success: function(data) {					    
						// console.log(data);
					// var data1=	JSON.parse(data);
						document.getElementById("anoop_test").innerHTML = data;
						// d-hide = document.getElementById("d-hide");
						$('#parent_id').removeClass('parent_id');
						$('#d-hide').removeClass('d-hide');


					}
				})
 });


 function responcestatus(id) {     
	        $.ajax({
	            type: 'POST',
	            url: "<?php echo e(url('/response_ajax_status')); ?>",
				data: {
						"_token": $('meta[name="csrf-token"]').attr('content'),	
						"id": id,								
					},
	            success: function(data) {	       
	            }

	        })
	    }






	    document.getElementById("read").addEventListener("click", function(e) {
	        id = e.target.id;
	        $.ajax({
	            type: 'POST',
	            url: "<?php echo e(url('/read_unread')); ?>",
	            data: {
	                "_token": $('meta[name="csrf-token"]').attr('content'),
	                "id": id,
	            },
	            success: function(data) {	         
	                document.getElementById("accordionExample").innerHTML = data;
	              }
	        })


	    });

	    document.getElementById("unread").addEventListener("click", function(e) {
			id = e.target.id;
	        $.ajax({
	            type: 'POST',
	            url: "<?php echo e(url('/read_unread')); ?>",
	            data: {
	                "_token": $('meta[name="csrf-token"]').attr('content'),
	                "id": id,
	            },
	            success: function(data) {	         
	                document.getElementById("accordionExample").innerHTML = data;
	              }
	        })
	    });


</script>



<script>
	function customerRegister() {	 
		$.ajax({         
			type: 'POST',
			url: "<?php echo e(url('/customer/register')); ?>",
			data: $("#modelForm input").serialize(),  
			success: function(data) {
				// console.log(data);
				// alert(JSON.stringify(data.id)); 
				// var cuatomer_id = JSON.stringify(data.id); 
				// document.getElementById("customer_id").value = cuatomer_id;
				var cuatomer_id = data.id;   
				// alert(cuatomer_id);
				var cuatomer_type = data.type;              
				document.getElementById("customer_id").value = cuatomer_id;                   
				document.getElementById("customer_type").value = cuatomer_type;                    
				$('#question_form').submit(); 
				document.getElementById("modelForm").reset();                      
				$('#registraion-modal').modal('hide');                                
				$('#without_id').hide();                                
			},
			error: function(data) { 
						                
				$('#fullname').html(''); 
				$('#email').html(''); 
				$('#phone').html(''); 
				$('#password').html(''); 
				$('#password_confirmation').html(''); 			
		
				const obj = JSON.parse(data.responseText);		
					
				$.each(obj.errors, function(key,value) {									
					$('#'+key).html('<small class="text-danger">'+value+'</small>');                        
				});             

			}
		})   
	}




function getAmount(){   
$('#credit-modal').modal('show');  
}



function reset_radio()
{
	$('input[name="package_id"]').prop('checked', false);	
	$('#ttl').css({'text-decoration' : 'none', 'opacity' : '1'});
}
$("input[name='package_id']").click(function() {
	$('#ttl').css({'text-decoration' : 'line-through', 'opacity' : '0.5'});
	
})





function customer_notification_update(id) {
		var id = id;
				$.ajax({
					type: 'POST',
					url: "<?php echo e(url('/customer_notification_update')); ?>",
					data: {
						"_token": $('meta[name="csrf-token"]').attr('content'),	
						"id": id,
						"action" : 'admin',			
					},
					success: function(data) {	
						$("#notify_area").load(window.location.href + "#notify_area");			
						window.location.reload();
					}
				})
			}





</script>
</body>
</html><?php /**PATH /home/lucky7bet/public_html/rajeevjadhav/resources/views/customer/include/botton.blade.php ENDPATH**/ ?>