
@extends('layout.main')

@section('container')
<div class="row">
    <div class="col-md-8">
        <div class="card mb-3 d-block" >
            <div class="row g-0 d-flex align-items-center">
              <div class="col-md-12">
                <div class="card-body bg-dark" >
      <h1 class="text-center">ANGKA SYAIR   
        @if($dayName == 'Sunday')
        {{ 'MINGGU' }}
     @elseif($dayName == 'Monday')
        {{ 'SENIN' }}
     @elseif($dayName == 'Tuesday')
        {{ 'SELASA' }}
     @elseif($dayName == 'Wednesday')
        {{ 'RABU' }}
     @elseif($dayName == 'Thursday')
        {{ 'KAMIS' }}
     @elseif($dayName == 'Friday')
        {{ 'JUMAT' }}
     @else
        {{ 'SABTU' }}
     @endif 


     {{ $dateN }}
     @if($month == 'January')
     {{ 'Januari' }}
     @elseif($month == 'February')
         {{ 'Februari' }}
     @elseif($month == 'March')
         {{ 'Maret' }}
     @elseif($month == 'April')
         {{ 'April' }}
     @elseif($month == 'May')
         {{ 'Mei' }}
     @elseif($month == 'June')
         {{ 'Juni' }}
     @elseif($month == 'July')
         {{ 'Juli' }}
     @elseif($month == 'August')
         {{ 'Agustus' }}
     @elseif($month == 'September')
         {{ 'September' }}
     @elseif($month == 'October')
         {{ 'Oktober' }}
     @elseif($month == 'November')
     {{ 'November' }}
     @else
         {{ 'Desember' }}
     @endif
     {{ $year }} 
        
</h1>

     <p class="text-center">
        SYAIR L21 GRUP – forum kode syair yang menyediakan berbagai macam jenis syair angka HOKI terpercaya hari ini. Situs ini membagikan secara gratis tanpa imbalan guna membantu teman-teman sekalian dalam menentukan angka main pada hari ini, kami mengerti bahwasannya setiap pemain di darat maupun di online sangat kesulitan mencari situs forum syair yang menyediakan secara lengkap agar tidak pindah-pindah situs yang pastinya merepotkan. SYAIR ARWANA – bekerja sama dengan Forum-Forum Syair Ternama di Indonesia, seperti SYAIR JEEP, SYAIR TS, SYAIR DOYAN, SYAIR ARTA, SYAIR NEON, SYAIR ZARA, SYAIR ROMA SYAIR TOKE, SYAIR NERO dan SYAIR DUOGAMING .
     </p>
     <img src="/img/arta.jpg" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="/img/arwana.jpg" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="/img/doyan.jpg" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="/img/duo.jpg" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="/img/jeep.jpg" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="/img/neon.jpg" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="/img/nero.jpg" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="/img/roma.jpg" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="/img/toke.jpg" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="/img/ts.jpg" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="/img/zara.jpg" class="img-fluid rounded mx-auto d-block my-3" alt="...">

    </div>
</div>
</div>
</div>
</div>
   


</div>






@endsection
