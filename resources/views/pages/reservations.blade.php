@extends('layouts.master')

@section('content')
	<div class="container">
        <p>All our rooms have as standard:  WiFi, free parking and complimentary toiletries. A continental breakfast for two is included in the room price. <a href="{{url('accommodations')}}"><strong>Check our rooms</strong></a></p>

        <div id="vue">
            <package-selector></package-selector>
        </div>
    </div>

@endsection
@section('script')
    <script src="/js/main.js"></script>
@endsection