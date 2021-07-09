@extends('front.template')

@section('main')
	<section>
		<div class="container">
			<nav class="breadcrumb" aria-label="breadcrumbs">
			  <ul>
			    <li><a href="/">Beranda</a></li>
			    <li><a href="">Destinasi</a></li>
			    <li><a href="/event">Event</a></li>
			    <li class="is-active"><a href="#" aria-current="page">Creative Innovation Balikpapan HUT 125</a></li>
			  </ul>
			</nav>
		</div>
	</section>

	<div class="container container-event">
		<section id="dispar-all-detail" class="my-6">
			<div class="columns is-centered is-multiline">
				<div class="column is-4">
					<img src="{{ asset('img/fest1.jpeg') }}" alt="" width="100%">
				</div>
				<div class="column is-6">
					<p class="title is-size-3">
						Balikpapan Festival 2020 : bpngo 123
					</p>
					<table class="table">
						<tr>
							<td>Lokasi</td>
							<td> : </td>
							<td>Lapangan Tennis Indoor</td>
						</tr>
						<tr>
							<td>Kategori </td>
							<td> : </td>
							<td class="has-text-link">Festival</td>
						</tr>
						<tr>
							<td>Waktu </td>
							<td> : </td>
							<td>30 Juli 2021 - 3 Agustus 2021</td>
						</tr>
					</table>
					<div class="content">
						<p class="title is-size-5">Informasi</p>
						<p class="subtitle is-size-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus beatae, omnis deserunt libero tempora vitae necessitatibus rerum unde nobis minima optio ullam harum soluta aut quisquam quia delectus illo. Accusamus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus beatae, omnis deserunt libero tempora vitae necessitatibus rerum unde nobis minima optio ullam harum soluta aut quisquam quia delectus illo. Accusamus.</p>
					</div>
				</div>
			</div>
		</section>
	</div>

@endsection