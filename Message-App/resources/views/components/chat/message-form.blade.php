<meta name="csrf-token" content="{{ csrf_token() }}">
<form action="/send" method="post" class="message-form form form{{$window}}">
    @csrf
    <input type="hidden" id="conversation{{$window}}" name="conversation" value="{{$window}}">
    <input type="hidden" id="user{{$window}}" name="user" value="{{auth()->user()->id}}">
    <input class="message-content message-content{{$window}}" type="text" id="content" name="content" autofocus>
    <input type="submit" value="Submit" onkeypress="return checkSubmit(event)">
</form>
<script>
    document.querySelector('.form{{$window}}').addEventListener('submit', (event) => {
        event.preventDefault();
        const message = document.querySelector('.message-content{{$window}}').value;
        const user = document.querySelector('#user{{$window}}').value;
        const conversation = document.querySelector('#conversation{{$window}}').value;

        fetch('/send-message', {
            method: 'POST',
            headers: {
                "Content-Type": 'application/json',
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({message: message, conversation: conversation, user: user})
        })
            .then(response => response.json())
            .then(data => {
                document.querySelector('.message-content{{$window}}').value = '';
                document.querySelector('.message-top').innerHTML +=  '<div class="message-label-one"><a href="users/{{auth()->user()->id}}">You</a></div>';
                document.querySelector('.message-top').innerHTML +=  '<div class="message-user-one" style="{{'background-color:' . auth()->user()->chat_colour }}">' + message + '</div>';
            })
            .catch(error => {
                console.error("Error:", error);
            })
    })
</script>
