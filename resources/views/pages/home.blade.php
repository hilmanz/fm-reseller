@extends('main')
@section('content')
<div class="section">
    <div class="container">
      <div class="paralax section1">
        <div class="img">
          <img src="{{url('images/Iei-2.jpg')}}" alt="" />
        </div>
      </div>
      <div class="paralax section2">
        <div class="col-md-6">
          <div class="entry-left">
            <h2>INDONESIA ENTERPRENEURSHIP INITIATIVE</h2>
            <p>Memasuki tahun ke 71 sejak kemerdekaan, apakah rakyat Indonesia telah sejahtera? Pertanyaan ini senantiasa dibebankan kepada pihak pemerintah, namun alangkah baiknya jika kesejahteraan bangsa menjadi tanggung jawab kita semua, sesama warga Indonesia. 
      </p>

      <p>
        <img src="{{url('images/Quotes.jpg')}}"/>
        Saat ini ada lebih dari 59 juta badan usaha yang terdaftar di Indonesia, dimana sekitar 4100 atau 0.01% adalah usaha milik pengusaha besar atau konglomerat, yang menghasilkan hampir 46% dari pemasukan bisnis di Indonesia secara keseluruhan. Maka tidak heran jika kesenjangan sosial di Indonesia semakin besar, dimana yang kaya semakin kaya, dan yang miskin pun semakin miskin.

      </p>
      <p>
        Bagi kita yang bekerja di kantor, biaya hidup terkesan kerap membesar, tidak diimbangi dengan peningkatan gaji bulanan. Banyak diantara kita yang lalu ingin membuka usaha sampingan, namun sering kali terhambat kendala dana yang diperlukan untuk modal usaha.
      </p>
      <p>
        <img src="{{url('images/Quotes-2.jpg')}}"/>
        Mengingat semua hal di atas, kami mencetuskan program Indonesia Enterpreneurship Initiative, sebuah program usaha dengan sistim bagi hasil 50-50, tanpa perlu biaya modal sama sekali. Program ini diperuntukkan kepada warga Indonesia yang memiliki tekad dan semangat untuk berusaha meningkatkan pemasukan mereka. 
      </p>

      <p>
        Dengan mendaftar sebagai IEI member, peserta langsung dapat memasarkan produk Super Soccer tanpa perlu mengeluarkan biaya sepeserpun. 

      </p>
      <p>
      Produk yang dapat dipasarkan adalah paket langganan SuperSoccer TV dengan harga khusus  :
      <ul style="list-style:circle;padding-left:20px;">
        <li>Paket langganan 12 bulan Rp. 200,000 (harga umum Rp. 225,000)</li>
        <li>Paket langganan 6 bulan Rp. 120,000 (harga umum Rp.145,000)</li>

      </ul>
      </p>
    
      <p>
        Setelah mendaftar, peserta akan diberikan kode khusus yang harus diberikan kepada calon pembeli supaya mereka memperoleh harga khusus, yang juga menandakan alokasi pembagian hasil penjualan (50%). Jadi untuk setiap paket 12 bulan yang berhasil dijual, peserta IEI langsung menerima bagi hasil sebesar Rp.100,000. Maka dengan menjual 10 paket langganan 12 bulan, peserta IEI akan menerima bagi hasil sebesar Rp.1,000,000
      </p>
      <p>
        Kami berharap program ini dapat membantu mereka yang memiliki semangat untuk maju, sehingga dana yang diperoleh pun akan bermanfaat bagi diri sendiri ataupun sanak saudara para peserta program IEI.
      </p>
      
          </div>
        </div>
        <div class="col-md-6">
          <div class="img fr">
            <img src="{{url('images/iei-3s.jpg')}}" alt="" />
        
            <div class="action-buttons">
              <a href="{{url('register')}}" class="button">DAFTAR SEKARANG</a> 
              <a href="{{url('login')}}" class="button">LOGIN</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- end .container -->
</div>



@endsection