<div class="card-header p-0 border-bottom-0">
    <div class="d-flex flex-column text-center border-end h-100 pt-3"
         style="width: 7.5rem; border-color: rgba(117,117,117,0.49) !important;">
        <div class="d-flex justify-content-evenly">
            <img src="{{auth()->user()->img}}" style="width: 30px; height: 30px" class="rounded-pill"/>
            <a class="d-flex align-items-center" href="/users/{{auth()->user()->id}}"><h6 class=" mb-0"><strong>{{ucwords(explode(' ', auth()->user()->name)[0])}}</strong></h6></a>
        </div>

        <button class="btn btn-secondary btn-sm mb-2 mt-5 py-2 text-nowrap w-100 rounded-0">Chat Info</button>
        <button class="btn btn-secondary btn-sm mb-2  py-2 text-nowrap w-100 rounded-0">Contacts</button>
        <button class="btn btn-secondary btn-sm mb-2  py-2 text-nowrap w-100 rounded-0">Settings</button>

        <button id="btn-editinfo" class="btn btn-secondary btn-sm mb-2  mt-auto py-2 text-nowrap w-100 rounded-0">Edit
            User
        </button>
        <form action="/logout" method="post">
            @csrf
            <input id="btn-signout" class="btn btn-secondary btn-sm py-2 text-nowrap w-100 rounded-0" type="submit"
                   value="Log out" style="border-radius: 0 0 0 5px !important;">
        </form>
    </div>
</div>
