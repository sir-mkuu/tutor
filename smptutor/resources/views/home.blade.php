@extends('layouts.chatlayout')
@section('content')
        @foreach($users as $user)
            <li class="contact" id="{{ $user->id }}">
                <div class="wrap">
                    {{--will show unread count notification--}}
                    @if($user->unread)
                    <span class="contact-status online"></span>
                    @endif
                    <img src="{{ $user->profile_picture }}" alt="" />
                    <div class="meta">
                        <p class="name">{{ $user->name }}</p>
                        @if($user->unread > 0)
                            <p class="preview">You have {{$user->unread}} new messages</p>
                        @else
                            <p class="preview"></p><br>
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
@endsection
