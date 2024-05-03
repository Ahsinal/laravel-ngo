@extends('layout.master')

@section('content')
<section>
    <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat inventore necessitatibus animi labore magni dolorum ipsum laboriosam quasi adipisci beatae.</p>
    </div>
</section>
@endsection

@section('content2')
<section>
    <div>
@for($i=0;$i<=3;$i++)
@include('cards.blogcard')
@endfor
    </div>
</section>
@endsection

