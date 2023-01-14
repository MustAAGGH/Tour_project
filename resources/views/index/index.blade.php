@extends('layouts.app')

@section('content')
    <div class="container">
           <h1>Our latest offers...</h1>
              <br/>
                  <table id="tour_table">
                       <tr>
                          <td>№</td>
                          <td>Tour name</td>
                          <td>Organizer</td>
                          <td>Transport</td>
                          <td>Duration</td>
                          <td>When</td>
                          <td>Destination image</td>
                             </tr>
                             @foreach($tours as $tour)
                                <tr>
                                    <td>{{$tour->id}}</td>
                                    <td>{{$tour->name}}</td>

                                    @foreach($tour->organizers as $organizer)
                                        <td>{{$organizer->name}}</td>
                                    @endforeach
                                    @foreach($tour->transports as $transport)
                                        <td>{{$transport->transport}}</td>
                                    @endforeach

                                    <td>{{$tour->durance}}</td>
                                    <td>{{$tour->tour_date}}</td>
                                    <td>
                                        <a href="{{ asset('/'.$tour->image) }}"  target="_self"> <img width="500" height="500" src="{{ asset('/'.$tour->image) }}"  alt="tour image"><img></a>
                                    </td>
                                </tr>
                            @endforeach
                            </table>
                        </div><!--/.about-us-txt-->
@endsection
