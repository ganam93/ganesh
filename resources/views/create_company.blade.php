<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{ url }}" method="post">
	{{ csrf_field() }}
	cname<input type="text" name="cname"><br>
	pane<input type="text" name="pan"><br>
	GST<input type="text" name="GST"><br>
	reg_no<input type="text" name="reg_no"><br>
	addr_line1<input type="text" name="addr_line1"><br>
	addr_line2<input type="text" name="addr_line2"><br>
	country<input type="text" name="country"><br>
	city<input type="text" name="city"><br>
	zipcode<input type="text" name="zipcode"><br>
	<hr>
	branch <br>
	<input type="text" name="branch_name[]">
	<input type="text" name="branch_name[]">

	<button>Submit</button>

</form>
</body>
</html>