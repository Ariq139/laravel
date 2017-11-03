@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>

                <div class="panel-body">
                    Logged in as <i>User</i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('logout')
<a href="{{ route('user.logout') }}"
	onclick="event.preventDefault();
	document.getElementById('logout-form').submit();">Logout
</a>
<form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">{{ csrf_ﬁeld() }}</form>
@endsection