@extends('front.template')

@section('main')
	<div class="container">
		<section id="dispar-tentang">
			<nav class="breadcrumb" aria-label="breadcrumbs">
			  <ul>
			    <li><a href="/">Beranda</a></li>
			    <li class="is-active"><a href="#" aria-current="page">Tentang</a></li>
			  </ul>
			</nav>
			<div class="columns is-centered is-multiline container-event">
				<div class="column is-3">
					<img src="{{ asset('img/disporapar.jpg') }}">
				</div>
				<div class="column is-6 pt-6">
					<p class="title is-size-3">Dinas Pemuda, Olah Raga dan Pariwisata Kota Balikpapan</p>
					<p class="subtitle is-size-5">Jalan Marsma R. Iswahyudi No. 121 Rt. 30 (Gn. Bakaran)
Kelurahan Damai Bahagia Kecamatan Balikpapan Selatan </p>
					<p class="is-size-6">00.328.610.1-721.000</p>
					<p class="is-size-6">(0542) 761111</p>
				</div>
				<div class="column is-10">
					<br>
					<p class="title is-size-4">Gambaran Umum</p>
					<p>DPOP Kota Balikpapan adalah instansi pemerintahan yang bergerak dibidang kepemudaan, keolahragaan, dan keparawisataan. Dalam hal ini mengurusi kebijakan-kebijakan yang menyangkut dalam hal perkembangan sektor pariwisata, olah raga dan pariwisata termasuk dalam hal rekomendasi perizinan usaha pariwisata, rekomendasi perizinan cabang olah raga serta rekomendasi pemberian dana hibah bagi lembaga dalam sektor kepemudaan dan olaraga.</p>
					<br>
					<br>
					<p class="title is-size-4">Visi dan Misi</p>
					<p class="title is-size-5">Visi</p>
					<p>Terwujudnya daerah balikpapan sebagai daerah tujuan wisata unggulan berbasis budaya multi etnis dan berwawasan lingkungan serta memberdayakan potensi pemuda</p>
					<br>	
					<br>	
					<p class="title is-size-5">Misi</p>
					<div class="content">
						<ul>
							<li>Pengembangan pariwisata berwawasan lingkungan</li>
							<li>pengembangan peran serta kepemudaan</li>
							<li>pengembangan dan peningkatan prestasi olahraga</li>
						</ul>
					</div>
				</div>
			</div>			
		</section>
	</div>
@endsection