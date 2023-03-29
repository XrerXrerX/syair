
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
{!! $title->body !!}     </p>
     <img src="{{ asset('storage/' . $post->artaimage) }}" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="{{ asset('storage/' . $post->arwanaimage) }}" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="{{  asset('storage/' .$post->doyanimage) }}" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="{{  asset('storage/' .$post->duoimage )}}" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="{{  asset('storage/' .$post->jeepimage )}}" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="{{ asset('storage/' .$post->neonimage )}}" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="{{  asset('storage/' .$post->neroimage )}}" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="{{  asset('storage/' .$post->romaimage )}}" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="{{  asset('storage/' .$post->tokeimage )}}" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="{{  asset('storage/' .$post->tsimage) }}" class="img-fluid rounded mx-auto d-block my-3" alt="...">
     <img src="{{  asset('storage/' .$post->zaraimage )}}" class="img-fluid rounded mx-auto d-block my-3" alt="...">



    </div>
</div>
</div>
</div>
</div>
   








@endsection

