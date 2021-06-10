<!DOCTYPE html>
<html>
<head>
	<title>Hello Goodbye</title>
</head>
<body>
 
	<header>
 
		<h2>Blog Seadanya</h2>
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/tentang">TENTANG</a>
			|
			<a href="/blog/kontak">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="#">I hope you choke and die</a>. 2077 - 6669</p>
	</footer>
 
</body>
</html>