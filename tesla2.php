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



.kotak {
    width: 272px;
    padding: 20px;
    margin: 20px;
    border: 1px solid #ccc;
    text-align: center;
    display: inline-block;
	color : black;
}

.kotak img {
    max-width: 100%;
    height: auto;
}

.kotak h2 {
    font-size: 24px;
    margin: 10px 0;
}

.kotak p {
    font-size: 16px;
    color: #777;
}
.btn {
    background-color: black;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-top: 10px;
    cursor: pointer;
    
}
.search-form {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .search-form input[type="text"] {
            padding: 5px;
        }

        .search-form input[type="submit"] {
            background-color: black;
            color: white;
            border: none;
            padding: 5px 10px;
            margin-top: 73%;
            cursor: pointer;
        }

</style>
</head>
<body>	
<center>
	<div class="header">
    <img src="nav2.png" style="height: 160px; width: 1080px;">
<center>
    <ul class="navigasi">
        <li><a href="#">TESLA</a></li>
        <li><a href="#">CHEVROLET</a></li>
        <li><a href="#">MERCEDES</a></li>
		<li><a href="#">BMW</a></li>
        <li><a href="#">FERARI</a></li>
        <li><a href="index2.php">HOME</a></li>
        
        <li><form class="search-form" action="cari.php" method="get">
            <input type="text" name="q" placeholder="search">
            <input type="submit" value="search">
        </form>
    </li>
    </ul>

    <!-- Form pencarian -->
  

 <div class="kotak">
        <img src="tesla2.png" alt="Gambar 2">
        <p>TESLA</p>
		<h2>TESLA CYBERTRUNK SILVER</h2>
        <p>MYR-2000~14000</p>
        <a href="tesla2.php"><button class="btn">MORE</button></a>
    </div>

	<div class="kotak">
        <img src="tesla1.png" alt="Gambar 1">
        <p>TESLA</p>
		<h2>TESLA MODEL X GRAY</h2>
        <p>MYR-1500~8000</p>
        <a href=""><button class="btn">MORE</button></a>
    </div>

    <div class="kotak">
        <img src="tesla3.png" alt="Gambar 3">
        <p>TESLA</p>
		<h2>TESLA MODEL Y RED</h2>
        <p>MYR-1500~8000</p>
        <a href=""><button class="btn">MORE</button></a>
    </div>

    <div class="kotak">
        <img src="tesla4.png" alt="Gambar 3">
        <p>TESLA</p>
		<h2>TESLA MODEL S WHITE</h2>
        <p>MYR-2000~14000</p>
        <a href=""><button class="btn">MORE</button></a>
    </div>


    </div>
</body>
</html>   