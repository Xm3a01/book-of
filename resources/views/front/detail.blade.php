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
                <div class="row">
                    <div class="col-md-4 mb-4 offset-">
                        <h5> <a href="/">Main</a> | name of book</h5>
                    </div>
                </div>
                {{-- search area --}}
                <div class="row lib-details-section">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="{{ asset('file/1.png') }}" alt="" width="200.31" height="300.31">
                    </div>
                    <div class="col-md-8 mt-4 ">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>
                                    Book name laravg book of name
                                </h3>
                            </div>
                            <div class="col-md-12 mb-2">
                                <i>
                                    <a href="#">auther name</a>
                                </i>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2">* <span style="color: #f7903c">32</span> / <span style="color: #d1cac5">0</span></div>
                                    <div class="col-md-2">* 43 comments</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sequi alias, beatae deserunt sit at
                            consequatur, esse sed sint voluptatum autem repellendus consectetur? Nihil laborum voluptatibus
                            saepe pariatur inventore delectus?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sequi alias, beatae deserunt sit at
                            consequatur, esse sed sint voluptatum autem repellendus consectetur? Nihil laborum voluptatibus
                            saepe pariatur inventore delectus?

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sequi alias, beatae deserunt sit at
                            consequatur, esse sed sint voluptatum autem repellendus consectetur? Nihil laborum voluptatibus
                            saepe pariatur inventore delectus?

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sequi alias, beatae deserunt sit at
                            consequatur, esse sed sint voluptatum autem repellendus consectetur? Nihil laborum voluptatibus
                            saepe pariatur inventore delectus?
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"><code>Categories</code> : Psychology</div>
                                    <div class="form-group"> <code>Year</code> :       1973</div>
                                    <div class="form-group"> <code>Publisher</code> :  Penguin Books Ltd</div>
                                    <div class="form-group"> <code>Language</code> :   english</div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group"><code>Pages </code> : Psychology</div>
                                    <div class="form-group"> <code>ISBN 10</code> :       1973</div>
                                    <div class="form-group"> <code>ISBN 13</code> :  Penguin Books Ltd</div>
                                    <div class="form-group"> <code>File</code> :   english</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        {{-- <button class=" btn btn-primary col-md-4 mt-4">Ok</button> --}}
                        <div class="btn-group col-md-4" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Download (pdf , 12 MB)
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                              <a class="dropdown-item" href="#">Dropdown link</a>
                              <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                          </div>
                          <div class="col-md-4">
                              <button class="btn btn-info">Preview</button>
                         
                            <button class="btn btn-info">Save to later</button>
                        </div>
                    </div>
                    </div>

                    <h3 class ="content-title">May interest</h3>
                    <div class="row  justify-content-center">
                        <div class="col-md-3 col-sm-6 col-xs-6 getter"><a href="{{route('details' , 1)}}"><img src="{{asset('file/1.png')}}" alt="" width="187.31" height="281.31"></a></div>
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
    </div>
@endsection
