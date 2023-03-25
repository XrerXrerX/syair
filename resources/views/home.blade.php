


@extends('layout.main')

@section('container')
<div class="row">
    <div class="col-md-8">
        @foreach ($syairs as $syair)
        

            <div class="card mb-3 d-block" >
                <div class="row g-0 d-flex align-items-center">
                    <div class="card-body bg-dark" >
                      <p style="display:none"> {{  $dayName = \Carbon\Carbon::parse($syair->datepost)->isoFormat('dddd') }}</p>
                        <p style="display:none">{{ $month = \Carbon\Carbon::parse($syair->datepost)->format('F') }}</p> 
                        
                        <h5 class="card-title">
                             ANGKA SYAIR  {{ strtoupper($syair->nm_pasar) }}
                            {{-- {{ \Carbon\Carbon::parse($syair->datepost)->format('d F Y') }} --}}

                   
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


                     {{ \Carbon\Carbon::parse($syair->datepost)->format('d') }}
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
                     {{ \Carbon\Carbon::parse($syair->datepost)->format('Y') }} 


                    
                    
                    
                    </h5>
                      {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}

                    
                    <div class="float-start">
                    <img src="img/1.png" class="img-fluid rounded-start" style="height: 150px" width="150px" alt="...">
                    </div>
              

                      <p class="card-text">SYAIR L21 – 
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

                     {{ \Carbon\Carbon::parse($syair->datepost)->format('d') }}
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

                     {{ \Carbon\Carbon::parse($syair->datepost)->format('Y') }} 

                    
                         merupakan forum kode syair yang menyediakan berbagai macam jenis syair angka HOKI terpercaya hari ini. Kami mengerti bahwasannya setiap pemain di darat maupun di online sangat kesulitan mencari situs forum syair yang menyediakan secara lengkap agar tidak pindah-pindah situs yang pastinya merepotkan. SYAIR L21 GROUP – bekerja sama dengan Forum-Forum Syair Ternama di Indonesia, seperti SYAIR JEEP, SYAIR TS, SYAIR DOYAN, SYAIR ARTA, SYAIR NEON, SYAIR ZARA, SYAIR ROMA SYAIR TOKE, SYAIR NERO dan SYAIR DUOGAMING </p>
                      <a href="/syair/{{ $syair->slug }}" class="btn btn-danger float-end"> Read More</a>
          
                    </div>
                </div>
              </div>
    
              
              @endforeach
              <div class="d-flex justify-content-center bg-dark">
                {{ $syairs->links() }}
                </div>
    </div>

           
@endsection

