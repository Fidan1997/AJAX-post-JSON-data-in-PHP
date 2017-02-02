<html>
	<head>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<script src="javascript/jquery.js"></script>
	<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
	<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js" ></script>

	<style>
		#ad,#soyad,#ist_adi, input{
          border:1px solid  #D3D3D3;
          border-radius:5px;
          padding:10px 20px;
          margin:10px;
          box-shadow:2px;
          box-shadow:2px 2px 1px #D3D3D3;

		}
		#submit{
			background:#3ABEE2;
			border:none;
			color:white;
		}

	</style>
	<script>
// AJAX submit data 

  $(document).ready(function(){

	$("#submit").click(function(){

	var ad=document.getElementById('ad').value;
	var soyad=document.getElementById('soyad').value;
	var ist_adi=document.getElementById('ist_adi').value;
	var dataString="ad="+ad+"&soyad="+soyad+"&ist_adi="+ist_adi;
	
	
	// var dataString='soyad='+soyad;
			$.ajax({
				type:"post",
				url:"hi.php",
				data:dataString,
				cache:false,
				success:function(html){
					$('#mesaj').html(html);
				}

			});
			return false;
		});
	});


	 </script>
	</head>
<body>
<div id="result"></div>


<div class="container">
<h1>FORM</h1>

<form>
	<input type="text" id="ad" placeholder="Ad"><br>
	<input type="text" id="soyad" placeholder="Soyad"><br><br>
	<input type="text" id="ist_adi" placeholder="Istifadeci adi" ><br>
  <input type="submit" value="submit" id="submit">

</form>
<p id="mesaj"></p>
</div>
	
</body>


</html>

<!-- JSON data yazdirmaq -->


<script>
	$(document).ready(function(){

	$("#submit").click(function(){

			$.ajax({
				type:"post",
				url:"hi.php",
				data:{
                name: $('#ad').val(),
                password: $('#soyad').val(),
                user: $('#ist_adi').val(),
            },
				dataType:"JSON",
				success:function(jsonSTR){
					$("#result").text(JSON.stringify(jsonSTR));
				}

			});
			
		});
	});

</script>