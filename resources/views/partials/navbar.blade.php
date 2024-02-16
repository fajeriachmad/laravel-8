{{-- bootstrap navbar --}}
<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
	<div class="container">
		<a class="navbar-brand" href="#">E-Store</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="/home" data-href="http://e-store.test/home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/about" data-href="http://e-store.test/about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/posts" data-href="http://e-store.test/posts">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/categories" data-href="http://e-store.test/categories">Category</a>
				</li>

				{{-- <li class="nav-item">
					<a class="nav-link {{ ($active === "home") ? 'active' : ''}}" href="/home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ ($active === "about") ? 'active' : ''}}" href="/about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ ($active === "posts") ? 'active' : ''}}" href="/posts">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ ($active === "categories") ? 'active' : ''}}" href="/categories">Category</a>
				</li> --}}
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="/login" data-href="http://e-store.test/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>