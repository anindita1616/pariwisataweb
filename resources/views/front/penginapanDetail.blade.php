@extends('front.template')

@section('main')
	<section>
		<div class="container">
			<nav class="breadcrumb" aria-label="breadcrumbs">
			  <ul>
			    <li><a href="/">Beranda</a></li>
			    <li><a href="">Destinasi</a></li>
			    <li><a href="/penginapan">Penginapan</a></li>
			    <li class="is-active"><a href="/wisataDetail" aria-current="page">Golden Tulip</a></li>
			  </ul>
			</nav>
		</div>
	</section>

	<div class="container container-event">
		<section id="dispar-all-detail" class="my-6">
			<div class="columns is-centered is-multiline">
				<div class="column is-7">
					<div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.313406120304!2d116.8454787!3d-1.2763824!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x21e4461663e971c0!2sGolden%20Tulip%20Balikpapan%20Hotel%20%26%20Suites!5e0!3m2!1sid!2sid!4v1624134811833!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
					<br>
					<p class="is-size-3 has-text-weight-bold">Golden Tulip</p>
					<p class="is-size-5">JL. MT Haryono, no.44</p>
					<div class="content">
						<p class="has-text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptatibus repudiandae ut doloribus, aliquid quas voluptatem aperiam, architecto consequuntur, quis sapiente cum ratione fugit soluta aut. Veritatis ipsam blanditiis, veniam.</p>
					</div>
					<div>
						<p class="is-size-5">Akomodasi</p>
						<br>
						<div class="columns">
							<div class="column is-2">
								<div class="item-detail-akomodasi has-background-link has-text-light has-text-centered py-3">
									<span class="icon is-medium">
										<i class="fas fa-dumbbell fa-2x"></i>
									</span>
									<p>Gym</p>
								</div>
							</div>
							<div class="column is-2">
								<div class="item-detail-akomodasi has-background-link has-text-light has-text-centered py-3">
									<span class="icon is-medium">
										<i class="fas fa-swimming-pool fa-2x"></i>
									</span>
									<p>Renang</p>
								</div>
							</div>

							<div class="column is-2">
								<div class="item-detail-akomodasi has-background-link has-text-light has-text-centered py-3">
									<span class="icon is-medium">
										<i class="fas fa-wifi fa-2x"></i>
									</span>
									<p>Wi-Fi</p>
								</div>
							</div>

							<div class="column is-2">
								<div class="item-detail-akomodasi has-background-link has-text-light has-text-centered py-3">
									<span class="icon is-medium">
										<i class="fas fa-coffee fa-2x"></i>
									</span>
									<p>Sarapan</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="column is-5">
					<div class="has-background-light px-5 py-5">
						<figure class="slide-page all-detail-img">
							<img src="{{ asset('img/penginapanDetail3.jpg') }}" alt="">
							<img src="{{ asset('img/penginapanDetail2.jpg') }}" alt="">
							<img src="{{ asset('img/penginapanDetail1.jpg') }}" alt="">
						</figure>
						<div>
							<p class="is-size-5">Ringkasan Ulasan</p>
							<div class="columns ">
								<div class="column">
									<div class="progress-item">
										<span class="mr-2">5</span>
										<progress class="progress is-small is-warning" value="80" max="100"></progress>
									</div>
									<div class="progress-item">
										<span class="mr-2">4</span>
										<progress class="progress is-small is-warning" value="50" max="100"></progress>
									</div>
									<div class="progress-item">
										<span class="mr-2">3</span>
										<progress class="progress is-small is-warning" value="60" max="100"></progress>
									</div>
									<div class="progress-item">
										<span class="mr-2">2</span>
										<progress class="progress is-small is-warning" value="20" max="100"></progress>
									</div>
									<div class="progress-item">
										<span class="mr-2">1</span>
										<progress class="progress is-small is-warning" value="0" max="100"></progress>
									</div>
								</div>
								<div class="column is-narrow">
									<div class="has-text-centered">
										<p class="is-size-3">4.7</p>
										<div>
											<span class="icon is-small has-text-warning">
												<i class="fas fa-star checked"></i>
											</span>
											<span class="icon is-small has-text-warning">
												<i class="fas fa-star checked"></i>
											</span>
											<span class="icon is-small has-text-warning">
												<i class="fas fa-star checked"></i>
											</span>
											<span class="icon is-small has-text-warning">
												<i class="fas fa-star checked"></i>
											</span>
											<span class="icon is-small has-text-grey-light">
												<i class="fas fa-star"></i>
											</span>
										</div>
										<p class="is-size-7">20 ulasan</p>
									</div>
								</div>
							</div>
							<p class="is-size-5 mb-3">Ulasan Terbaru</p>
							<div class="ulasan-wrap">
								<article class="media">
								  	<figure class="media-left">
								    	<p class="image is-64x64">
								      		<img src="https://bulma.io/images/placeholders/128x128.png">
								    	</p>
								  	</figure>
								  	<div class="media-content">
								    	<div class="content">
								      		<p class="is-size-6">
								        		<span class="has-text-weight-semibold">John Smith</span>
								        		<br>
								        		<span class="has-text-grey">
								        		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.
								        		</span>
								      		</p>
								    	</div>
								  	</div>
								</article>
								<article class="media">
								  	<figure class="media-left">
								    	<p class="image is-64x64">
								      		<img src="https://bulma.io/images/placeholders/128x128.png">
								    	</p>
								  	</figure>
								  	<div class="media-content">
								    	<div class="content">
								      		<p class="is-size-6">
								        		<span class="has-text-weight-semibold">John Smith</span>
								        		<br>
								        		<span class="has-text-grey">
								        		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.
								        		</span>
								      		</p>
								    	</div>
								  	</div>
								</article>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

@endsection