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
                    <input type="text" class=" col-md-8 lib-search-input" placeholder="search ...">
                    <button class="lib-search-btn"> <a href="/find" style="text-decoration: none; color:black">Search</a></button>
                    <p class="col-md-8 mt-4 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sequi alias, beatae deserunt sit at
                        consequatur, esse sed sint voluptatum autem repellendus consectetur? Nihil laborum voluptatibus
                        saepe pariatur inventore delectus?
                    </p>
                </div>


                <h3 class="content-title">Result</h3>
                <div class="row  justify-content-center">
                    <div class="card lib-search-result">
                        <div class="card-body row shadow-sm">
                            <div class="col-md-3 col-sm-6 col-xs-6 getter"><img src="{{ asset('file/1.png') }}" alt=""
                                    width="97.31" height="150.31"></div>
                            <div class="col-md-6 col-sm-6 col-xs-6 getter">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>
                                            <a href="" style="color: black"> Book name laravg book of name </a>
                                        </h3>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <i>
                                           <a href="/find?q=auther name" style="text-decoration: none; color:rgb(68, 64, 64)"> auther name </a>
                                        </i>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <i>
                                            <a href="#">auther name</a>
                                        </i>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            <div class=" col-md-6 justify-content-end row">
                                <div class="col-md-4"><code>Year</code> : Publised</div>
                                <div class="col-md-4"><code>Language</code> : hello</div>
                                <div class="col-md-4"><code>File</code> : Melo</div>
                            </div>
                        </div>
                    </div>

                    <div class="card lib-search-result">
                        <div class="card-body row shadow-sm">
                            <div class="col-md-3 col-sm-6 col-xs-6 getter"><img src="{{ asset('file/1.png') }}" alt=""
                                    width="97.31" height="150.31"></div>
                            <div class="col-md-6 col-sm-6 col-xs-6 getter">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>
                                            <a href="" style="color: black"> Book name laravg book of name </a>
                                        </h3>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <i>
                                            auther name
                                        </i>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <i>
                                            <a href="#">auther name</a>
                                        </i>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            <div class=" col-md-6 justify-content-end row">
                                <div class="col-md-4"><code>Year</code> : Publised</div>
                                <div class="col-md-4"><code>Language</code> : hello</div>
                                <div class="col-md-4"><code>File</code> : Melo</div>
                            </div>
                        </div>
                    </div>
 
                    <div class="card lib-search-result">
                        <div class="card-body row shadow-sm">
                            <div class="col-md-3 col-sm-6 col-xs-6 getter"><img src="{{ asset('file/1.png') }}" alt=""
                                    width="97.31" height="150.31"></div>
                            <div class="col-md-6 col-sm-6 col-xs-6 getter">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>
                                            <a href="" style="color: black"> Book name laravg book of name </a>
                                        </h3>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <i>
                                            auther name
                                        </i>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <i>
                                            <a href="#">auther name</a>
                                        </i>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            <div class=" col-md-6 justify-content-end row">
                                <div class="col-md-4"><code>Year</code> : Publised</div>
                                <div class="col-md-4"><code>Language</code> : hello</div>
                                <div class="col-md-4"><code>File</code> : Melo</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
@endsection
