<html>
<head>
    <title>CARDEAL</title>
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
    <div class="container">
        <div class="purchase-item">
            <img src="tesla2.png" alt="Gambar Barang">
            <div class="item-details">
            <h2><span style="color: green;">PAYMENT SUCCESSFULY</span></h2>
            <br>
            <p>TESLA</p>
            <p>TESLA CYBERTRUNK</p>
            <p>Colour SILVER</p>
            <p>5 DAYS</p>
            <h3>MYR 7000</h3>
            <p>contact +60108760912 for any question </p>
            </div>
            <button class="received-button">ORDERS RECEIVED</button>
        </div>
    </div>
    <center>
    <br>
    <a href="index2.php"><button class="btn">BACK TO HOME</button></a>

</body>
</html>