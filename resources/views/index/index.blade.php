@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="about-us-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-about-us">
                        <div id="about" class="about-us">
                            <h1>TOUR EXPERT MANAGEMENT SYSTEM</h1>
                            <P>
                            <table id="organisatorstable">
                                <tr>
                                    <td>№</td>
                                    <td>Tour name</td>
                                    <td>Organizer</td>
                                    <td>Transport</td>
                                    <td>Duration</td>
                                    <td>When</td>
                                    <td>Destination img</td>
                                </tr>
                             @foreach($tours as $tour)
                                <tr>
                                    <td>{{$tour->id}}</td>
                                    <td>{{$tour->name}}</td>
                                    <td>{{$tour->organizers}}</td>
                                    <td>{{$tour->transports}}</td>
                                    <td>{{$tour->durance}}</td>
                                    <td>{{$tour->tour_date}}</td>
                                    <td>
                                        <a href="{{ asset('/'.$tour->image) }}"  target="_blank"> <img class="zoom" src="{{ asset('/'.$tour->image) }}"  alt="image"><img></a>
                                    </td>
                                </tr>
                            @endforeach
                            </table>

                        </div><!--/.about-us-txt-->
                    </div><!--/.single-about-us-->
                </div><!--/.col-->
                <div class="col-sm-6">
                    <div class="single-about-us">
                        <div class="about-us-img">

                        </div><!--/.about-us-img-->
                    </div><!--/.single-about-us-->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.about-us-content-->
    </div><!--/.container-->
@endsection
