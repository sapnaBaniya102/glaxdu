@extends('layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>Examination Result</h2>

        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Examination Result</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="blog-all-wrap mr-40">
                    <div class="row">
                        @foreach ($results as $result)
   <div class="col-lg-6 col-md-6">
                <div class="single-event mb-55 event-gray-bg">

                    <div class="event-content">
                        <h3><a href="{{ asset('uploads/files/'.$result->link)  }}" download>{{ $result->name }}</a></h3>

                        <div class="event-meta-wrap">

                            <div class="event-meta">
                                <i class="fa fa-clock-o"></i>
                                <span>{{ $result->date }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        @endforeach


                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                {{ $results->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style">
                    <div class="sidebar-search mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Search</h4>
                        </div>
                        <form action="{{ route('resultSearch') }}" method="GET">
                            <input type="text" name="search" required/>
                            <button type="submit">Search</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
