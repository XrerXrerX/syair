


@extends('layout.main')

@section('container')
{{-- @dd($syairs); --}}
<div class="row">
  
    <div class="col-md-8">
          
      <div class="row row-cols-1 row-cols-md-2 g-4">

        @foreach ($syairs as $syair)
        <p style="display:none">
          {{ $dayName = \Carbon\Carbon::parse($syair->datepost)->isoFormat('dddd') }}
          {{ $dateN = \Carbon\Carbon::parse($syair->datepost)->format('d') }}
          {{ $month = \Carbon\Carbon::parse($syair->datepost)->format('F') }}
          {{ $year = \Carbon\Carbon::parse($syair->datepost)->isoFormat('Y') }}
        </p>
        <div class="col">
          <div class="card bg-dark">
            {{-- @if (request('nm_psr') === 'cambodia')
            <img src="/img/inner/cmd.png" class="card-img-top" alt="...">
            @elseif (request('nm_psr') === 'sydney')
            <img src="/img/inner/syd.png" class="card-img-top"  alt="...">
            @elseif (request('nm_psr') === 'china')
            <img src="/img/inner/chn.png" class="card-img-top" alt="...">
            @elseif (request('nm_psr') === 'totomacau')
            <img src="/img/inner/ttm.png" class="card-img-top" alt="...">
            @elseif (request('nm_psr') === 'singapore')
            <img src="/img/inner/sgp.png" class="card-img-top" alt="...">
            @elseif (request('nm_psr') === 'pcso')
            <img src="/img/inner/pcso.png" class="card-img-top" alt="...">
            @elseif (request('nm_psr') === 'taiwan')
            <img src="/img/inner/taiwan.png" class="card-img-top" alt="...">
            @else
            <img src="/img/ps/hk.png" class="card-img-top" alt="...">
            @endif --}}
            <img src="{{ $syair->image }}" class="card-img-top" alt="...">
            <div class="card-body p-0 m-0">
              <p class="text-center py-2 m-0 ">SYAIR {{ strtoupper($title) }} - 
              
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
              </p>
              {{-- <p class="card-text">Syair L21 | Pasaran {{ $title }} yang rangkum dalam 1 halaman untuk mempermudah anda mencari Angka Hoki Hari ini .</p> --}}
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
      <div class="d-flex justify-content-center bg-dark">
        {{ $syairs->links() }}
        </div>
    </div>

  
    



 






@endsection

