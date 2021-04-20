@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- search area --}}
                    <div class="row justify-content-center lib-search-section">
                        <input type="text" class = " col-md-8 lib-search-input" placeholder = "search ...">
                        <button class="lib-search-btn">Search</button>
                        <p class="col-md-8 mt-4 ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sequi alias, beatae deserunt sit at consequatur, esse sed sint voluptatum autem repellendus consectetur? Nihil laborum voluptatibus saepe pariatur inventore delectus?
                        </p>
                    </div>

                    
                    <h3 class ="content-title">Populer</h3>
                    <div class="row  justify-content-center">
                        <div class="col-md-3 col-sm-6 col-xs-6 getter"><img src="{{asset('file/1.png')}}" alt="" width="187.31" height="281.31"></div>
                        <div class="col-md-3 col-sm-6 col-xs-6 getter"><img src="{{asset('file/2.png')}}" alt="" width="187.31" height="281.31"></div>
                        <div class="col-md-3 col-sm-6 col-xs-6 getter"><img src="{{asset('file/3.png')}}" alt="" width="187.31" height="281.31"></div>
                        <div class="col-md-3 col-sm-6 col-xs-6 getter"><img src="{{asset('file/3.jpg')}}" alt="" width="187.31" height="281.31"></div>
                        <div class="col-md-3 col-sm-6 col-xs-6 getter"><img src="{{asset('file/4.jpg')}}" alt="" width="187.31" height="281.31"></div>

                        <div class="col-md-3 col-sm-6 col-xs-6 getter"><img src="{{asset('file/1.png')}}" alt="" width="187.31" height="281.31"></div>
                        <div class="col-md-3 col-sm-6 col-xs-6 getter"><img src="{{asset('file/2.png')}}" alt="" width="187.31" height="281.31"></div>
                        <div class="col-md-3 col-sm-6 col-xs-6 getter"><img src="{{asset('file/3.png')}}" alt="" width="187.31" height="281.31"></div>
                        <div class="col-md-3 col-sm-6 col-xs-6 getter"><img src="{{asset('file/3.jpg')}}" alt="" width="187.31" height="281.31"></div>
                        <div class="col-md-3 col-sm-6 col-xs-6 getter"><img src="{{asset('file/4.jpg')}}" alt="" width="187.31" height="281.31"></div>
                    </div>
        </div>
    </div>
</div>
@endsection
