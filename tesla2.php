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
p1{
font-family: Arial, Arial ;
font-size: 12px ;
font-weight: 700 ;
color: #82888c ;
}

p2,p4{
    font-family: Arial, Arial ;
font-size: 24px ;
font-weight: 400 ;
color: #000000 ;
}

p3{
    font-family: Arial, Arial ;
font-size: 26px ;
font-weight: 700 ;
line-height: 25px ;
color: #000000 ;
}

1{
font-family: Arial, Arial ;
font-size: 15px ;
font-weight: 400 ;
color: #000000 ;
background-color: #ffffff ;
border: 1.11111px solid #000000 ;
padding: 0px 15px ;
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
</head>
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
        <li><a href="index.php">HOME</a></li>
    </ul>

    <div style="display: flex;">
        <!-- Gambar Besar di Sebelah Kanan -->
        <img src="tesla2.png" style="width: 70%;">

        <!-- Konten Teks dan Lainnya di Sebelah Kiri -->
        <div style="width: 30%; padding: 20px;">
            <p1>TESLA</p1>
            <br>
            <p2>TESLA CYBERTRUNK SILVER</p2>
            <br>
            <p3>MYR-2000~14000</p3>
            <br>
            <p4>SILVER</p4>
            <br>

            <!-- Gambar Kecil -->
            <img src="tesla2.png" style="width: 100px;">
            <br>

            <!-- Pilihan Butang untuk Memilih Nombor -->
            <select>
                <option value="1">DAY</option>
                <option value="2">1</option>
                <option value="3">2</option>
                <option value="3">3</option>
                <option value="3">4</option>
                <option value="3">5</option>
                <option value="3">6</option>
                <option value="3">7</option>
            </select>

            <!-- Kotak Hitam dengan Teks Putih -->
            <br>
            <a href="chekout.php"><button class="btn">BUY NOW</button></a>
            </div>
            
            <!-- Butang Like -->

    </div>
</body>
</html>        