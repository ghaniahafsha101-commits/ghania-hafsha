<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Kontak</title>

<style>
body{
font-family: Arial;
margin:0;
background:#f7f7f7;
text-align:center;
}

nav{
background:#333;
padding:15px;
}

nav a{
color:white;
margin:15px;
text-decoration:none;
font-weight:bold;
}

nav a:hover{
color:yellow;
}

.container{
padding:40px;
}

form{
width:300px;
margin:auto;
}

input, textarea{
width:100%;
padding:8px;
margin:10px 0;
}

button{
background:#333;
color:white;
padding:10px;
border:none;
cursor:pointer;
}

button:hover{
background:#555;
}
</style>
</head>

<body>

<nav>
<a href="index.html">Beranda</a>
<a href="about.html">Tentang</a>
<a href="contact.html">Kontak</a>
</nav>

<div class="container">
<h1>Kontak Saya</h1>

<form>
<input type="text" placeholder="Nama">
<input type="email" placeholder="Email">
<textarea placeholder="Pesan"></textarea>
<button>Kirim</button>
</form>

</div>

</body>
</html>