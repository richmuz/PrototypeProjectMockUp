<html>
<head>
    <title>CARDEAL</title>
	<style>
   body{
    background-color:white;
}
.header{
    text-align:center;
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


.gambar-kiri, .gambar-kanan {
    width: 50%;
    float: left;
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
}

.gambar-kiri img, .gambar-kanan img {
    max-width: 73%;
    height: auto;
}	

.gambar-kiri p, .gambar-kanan p {
    font-weight: bold;
    margin-top: 10px;
}


        </style>
</head>
<body>	

	<div class="header">
    <a href="login.php"><img src="nav.png" style="height: 170px; width: 1230px;"></a>

    <ul class="navigasi">
        <li><a href="tesla.php">TESLA</a></li>
        <li><a href="#">CHEVROLET</a></li>
		<li><a href="#">MERCEDES</a></li>
        <li><a href="#">BMW</a></li>
        <li><a href="#">FERARI</a></li>

    </ul>
	<div class="gambar-kiri">
        <img src="tesla1.png" alt="Gambar Kiri">
        <p><strong>TESLA MODEL X 
            <br>SILVER</br>MYR-1500~8000
            </strong></p>
    </div>
    
    <div class="gambar-kanan">
        <img src="bmw1.png" alt="Gambar Kanan">
        <p><strong>BMW M4 GREEN <br>LATERN </br>MYR-2500~20000</strong></p>
    </div>
</body>
</html>        
