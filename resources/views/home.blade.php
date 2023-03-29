


@extends('layout.main')

@section('container')
<div class="row">
    <div class="col-md-8">
        @foreach ($syai as $syair)
        

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
                        @if ($syair->nm_pasar == 'cambodia')
                        <img src="img/ps/cmd.jpg" class="img-fluid rounded-start" style="height: 150px" width="150px" alt="...">
                        @elseif($syair->nm_pasar === 'sydney')
                        <img src="img/ps/syd.jpg" class="img-fluid rounded-start" style="height: 150px" width="150px" alt="...">
                        @elseif($syair->nm_pasar === 'china')
                        <img src="img/ps/chn.jpg" class="img-fluid rounded-start" style="height: 150px" width="150px" alt="...">
                        @elseif($syair->nm_pasar === 'totomacau')
                        <img src="img/ps/ttm.jpg" class="img-fluid rounded-start" style="height: 150px" width="150px" alt="...">
                        @elseif($syair->nm_pasar === 'singapore')
                        <img src="img/ps/sgp.jpg" class="img-fluid rounded-start" style="height: 150px" width="150px" alt="...">
                        @elseif($syair->nm_pasar === 'pcso')
                        <img src="img/ps/pcso.jpg" class="img-fluid rounded-start" style="height: 150px" width="150px" alt="...">
                        @elseif($syair->nm_pasar === 'taiwan')
                        <img src="img/ps/twn.jpg" class="img-fluid rounded-start" style="height: 150px" width="150px" alt="...">
                        @else
                        <img src="img/ps/hk.jpg" class="img-fluid rounded-start" style="height: 150px" width="150px" alt="...">
                        @endif
                    </div>
              
                        {!! $title->title !!}

                      {{-- <p class="card-text">SYAIR L21 – 
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

                    
                         merupakan forum kode syair yang menyediakan berbagai macam jenis syair angka HOKI terpercaya hari ini. Kami mengerti bahwasannya setiap pemain di darat maupun di online sangat kesulitan mencari situs forum syair yang menyediakan secara lengkap agar tidak pindah-pindah situs yang pastinya merepotkan. SYAIR L21 GROUP – bekerja sama dengan Forum-Forum Syair Ternama di Indonesia, seperti SYAIR JEEP, SYAIR TS, SYAIR DOYAN, SYAIR ARTA, SYAIR NEON, SYAIR ZARA, SYAIR ROMA SYAIR TOKE, SYAIR NERO dan SYAIR DUOGAMING </p> --}}
                      <a href="/syair/{{ $syair->slug }}" class="btn btn-danger float-end"> Read More</a>
          
                    </div>
                </div>
              </div>
              
    
    

                   
    
                 {{-- <li class="page-item">
                    <a class="page-link">Previous</a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="http://syair.test/">1</a></li>
                  <li class="page-item"><a class="page-link" href="http://syair.test?page=2">2</a></li>
                  <li class="page-item"><a class="page-link" href="http://syair.test?page=3">3</a></li>
                  <li class="page-item"><a class="page-link" href="http://syair.test?page=4">4</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>  --}}
              
              @endforeach
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    @if(request('page') == null)
                        <li class="page-item">
                            <a class="page-link disabled">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="http://syair.test/">1</a></li>
                        <li class="page-item"><a class="page-link" href="http://syair.test?page=2">2</a></li>
                        <li class="page-item"><a class="page-link" href="http://syair.test?page=3">3</a></li>
                        <li class="page-item"><a class="page-link" href="http://syair.test?page=4">4</a></li>
                        <li class="page-item"><a class="page-link" href="http://syair.test?page=5">5</a></li>

                        <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                        </li>                 
                    @elseif(request('page') == 2 )
                        <li class="page-item">
                            <a class="page-link" href="http://syair.test/">Previous</a>
                        </li>
                        <li class="page-item "><a class="page-link" href="http://syair.test/">1</a></li>
                        <li class="page-item active"><a class="page-link" href="http://syair.test?page=2">2</a></li>
                        <li class="page-item"><a class="page-link" href="http://syair.test?page=3">3</a></li>
                        <li class="page-item"><a class="page-link" href="http://syair.test?page=4">4</a></li>
                        <li class="page-item"><a class="page-link" href="http://syair.test?page=5">5</a></li>
                        <li class="page-item">
                        <a class="page-link" href="http://syair.test?page=3">Next</a>
                        </li> 
                        @elseif(request('page') == 3 )
                        <li class="page-item">
                            <a class="page-link" href="http://syair.test?page=2">Previous</a>
                        </li>
                        <li class="page-item "><a class="page-link" href="http://syair.test/">1</a></li>
                        <li class="page-item "><a class="page-link" href="http://syair.test?page=2">2</a></li>
                        <li class="page-item active"><a class="page-link" href="http://syair.test?page=3">3</a></li>
                        <li class="page-item"><a class="page-link" href="http://syair.test?page=4">4</a></li>
                        <li class="page-item"><a class="page-link" href="http://syair.test?page=5">5</a></li>
                        <li class="page-item">
                        <a class="page-link" href="http://syair.test?page=4">Next</a>
                        </li>                       
                    @elseif(request('page') ==4 )
                    <li class="page-item">
                        <a class="page-link" href="http://syair.test?page=3">Previous</a>
                    </li>
                    <li class="page-item "><a class="page-link" href="http://syair.test/">1</a></li>
                    <li class="page-item "><a class="page-link" href="http://syair.test?page=2">2</a></li>
                    <li class="page-item "><a class="page-link" href="http://syair.test?page=3">3</a></li>
                    <li class="page-item active"><a class="page-link" href="http://syair.test?page=4">4</a></li>
                    <li class="page-item"><a class="page-link" href="http://syair.test?page=5">5</a></li>
                    <li class="page-item">
                    <a class="page-link" href="http://syair.test?page=5">Next</a>
                    </li>   
                    @else
                    <li class="page-item">
                        <a class="page-link" href="http://syair.test?page=4">Previous</a>
                    </li>
                    <li class="page-item "><a class="page-link" href="http://syair.test/">1</a></li>
                    <li class="page-item "><a class="page-link" href="http://syair.test?page=2">2</a></li>
                    <li class="page-item "><a class="page-link" href="http://syair.test?page=3">3</a></li>
                    <li class="page-item "><a class="page-link" href="http://syair.test?page=4">4</a></li>
                    <li class="page-item active"><a class="page-link" href="http://syair.test?page=5">5</a></li>
                    <li class="page-item">
                    <a class="page-link disabled">Next</a>               
                    @endif
                </ul>
            </nav> 
              
              {{-- <div class="d-flex justify-content-center bg-dark">
                {{ $syai->links() }}
                </div> --}}
    </div>

           
@endsection

