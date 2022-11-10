<form action="/send" method="post" class="message-form form{{$window}}">
    @csrf
    <input  type="hidden" id="conversation" name="conversation" value="{{$window}}">
    <input  type="hidden" id="user" name="user" value="{{auth()->user()->id}}">
    <input class="message-content" type="text" id="content" name="content" autofocus>
    <input type="submit" value="Submit" onkeypress="return checkSubmit(event">
  </form>