

    @foreach($conversation->replies as $reply)

        <div>
<header style="display: flex; justify-content: space-between;">
    <p class="m-0"><strong>{{$reply->user->name}} said..</strong></p>

    @if($reply->isBest())

        <span style="color: green;">Best Reply!!</span>

    @endif





</header>




            <p>class="m-0><strong>{{$reply->user->name}}said...</strong></p>
            {{$reply->body}}

            @can ('update',$conversation)

            <form method="POST" action="/best-replies/{{$reply->id}}">
                @csrf


                <button type="submit">Best reply?</button>

            </form>

            @endcan

        </div>
        @continue($loop->last)
        <hr>
    @endforeach

