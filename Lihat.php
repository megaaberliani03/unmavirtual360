
<!DOCTYPE html>
<html>
<head>
	<title>360 Test</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/aframe/1.2.0/aframe.min.js"></script>
</head>
<body>
    <?php
    $foto = $_GET['foto'];
    ?>
	<a-scene>
		<img id="panorama" src="f360/<?= $foto ?>" height="40" width="40"/>
		<a-sky src="#panorama" rotation="0 90 0"></a-sky>
	</a-scene>
</body>
</html>