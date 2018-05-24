<html>

<h2>GeoTiff Generator</h2>
<form action="convert_tiff.php" method="post" enctype="multipart/form-data">
    <p>Select image to upload:</p>
	<input type="file" name="fileToUpload" id="fileToUpload">
	<br />
	<p>GeoTiff cordinates</p>
	<table>
		<tr>
			<td>Upper Left (x-lon)</td>
			<td>Upper Left (y-lat)</td>
		</tr>
		<tr>
			<td><input type="text" name="ULx"></td>
			<td><input type="text" name="ULy"></td>
		</tr>
		<tr>
			<td><input type="text" name="LRx"></td>
			<td><input type="text" name="LRy"></td>
		</tr>
		<tr>
			<td>Lower Right (x-lon)</td>
			<td>Lower Right (y-lat)</td>
		</tr>
	</table>
	
	
    <input type="submit">

</form>

</html>
