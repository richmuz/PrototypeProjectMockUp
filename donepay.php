<html>
<head>
    <title>HZ</title>
	<style>

body{
    background-color:white;
}
.navigasi {
    list-style-type: none;
    padding: 0;
    text-align: center;
}

.navigasi li {
    display: inline-block;
    margin-right: 10px;
}

.navigasi a {
    text-decoration: none;
    color: #333; /* Warna teks asal */
    padding: 5px 10px;
    border: 1px solid #333; /* Garis sempadan asal */
    background-color: #fff; /* Latar belakang putih */
    transition: all 0.3s; /* Animasi perubahan */
}

.navigasi a:hover {
    background-color: gray; /* Warna kelabu apabila hover */
    border: 1px solid gray; /* Garis sempadan kelabu apabila hover */
}
.btn {
    background-color: black;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-top: 10px;
    cursor: pointer;
    
}


</style>
<body>	
<center>
<div class="header">
    <img src="nav2.png" style="height: 160px; width: 1080px;">
</center>
    <ul class="navigasi">
        <li><a href="tesla.php">TESLA</a></li>
        <li><a href="#">CHEVROLET</a></li>
        <li><a href="#">MERCEDES</a></li>
		<li><a href="#">BMW</a></li>
        <li><a href="#">FERARI</a></li>

    </ul>
    <div class="conten">
<center>
    <img src="done.png">
    <br>
    <a href="index.php"><button class="btn">BACK TO HOME</button></a>

    </div>
</body>
</html>      