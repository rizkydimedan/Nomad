@extends('layouts.success')
@section('title', 'Success')


@section('content')
     <!-- main -->
     <main>
        <div class="section-success d-flex align-items-center">
         <div class="col text-center">
            <img src="{{ url('frontend/images/ic_mail@2x.png') }}" alt="success" class="w-25" />
            <h1>Yay! Success</h1>
            <p>We,ve sent you email for trip instruction <br/>
             please read it as well</p>
             <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">
                 Homepage
             </a>
         </div>
        </div>
     </main>
     <!-- end main -->
@endsection