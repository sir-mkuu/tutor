<div class="messages">
        <ul class="message-wrapper clearfix">
            @foreach($messages as $message)
                <!-- {{--if message from id is equal to auth id then it is sent by logged in user --}} -->
                <li class="{{ ($message->from == Auth::id()) ? 'sent' : 'replies' }}">
                    <p>
                        {{ $message->message }} <br>
                        <i style="color:silver;">{{ date('d M y, h:i a', strtotime($message->created_at)) }}</i>
                    </p>
                </li>
            @endforeach
        </ul>
</div>
<div class="message-input">
	<div class="wrap">
        <input type="text" placeholder="Write your message..." />
            <i class="fa fa-paperclip attachment" aria-hidden="true"></i>
        <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
	</div>
</div>


