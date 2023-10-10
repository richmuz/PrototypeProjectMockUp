<html>
<head>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.login-container {
    display: flex;
    background-color: #F77D11; /* Warna oren */
    height: 100vh;
}

.login-form {
    flex: 1;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #fff; /* Warna putih */
}

h2 {
    margin-bottom: 20px;
}

form {
    text-align: left;
}

label {
    display: block;
    margin-bottom: 10px;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #F77D11; /* Warna oren */
    color: #fff; /* Warna putih */
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.login-image {
    flex: 1;
    background-image: url('gambar.jpg'); /* URL gambar */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    text-align: center;
    margin-top: 15%;
}
 </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Paparan Login</title>
    
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2>LOG IN </h2>
            <form>
                <label for="username">Nama Pengguna:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Kata Laluan:</label>
                <input type="password" id="password" name="password" required>
                <a button type="submit" href="index.php" >Log Masuk></a></button>
            </form>
        </div>
        <div class="login-image">
        <img src="logo2.png" alt="Gambar" >
        </div>
    </div>
</body>
</html>