<x-head/>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.11.2/dist/echo.iife.min.js"></script>
<script src="{{ asset('js/chat.js') }}"></script>
<x-chat.user-modal/>
<div class="container-parent">

    <div class="card w-50 opacity-75 d-flex flex-row">
        <x-chat.container-left/>
        <div class="w-100">
            <div class="card-header text-center pb-0">
                <h6 id="chat-name">Web Messenger</h6>
            </div>
            <div class="d-flex border-bottom" style="height: 2.5rem; border-color: rgba(117,117,117,0.49) !important;">
                <div class="w-100">
                    @if (count($activeConversations) < 1)
                        <div class="p-2 fst-italic">
                            <span>Please join a chat!</span>
                        </div>
                    @else
                        <div class="d-flex">

                            @foreach ($activeConversations as $conversation)
                                <x-chat.chat-selector :window="$conversation" :active="'active'"/>
                            @endforeach
                        </div>
                    @endif
                </div class="w-100">
            </div>

            <div class="chat-box w-auto">
                @foreach ($conversations as $conversation)
                    <x-chat.window :conversations="$conversations" :window="$conversation->id" :userBlocks="$userBlocks"
                                   :blocksArray="$blocksArray"/>
                    <x-chat.message-form :window="$conversation->id"/>
                @endforeach
            </div>

        </div>

        <div class="d-flex flex-column card-header border-start p-0 border-bottom-0"
             style="border-color: rgba(117,117,117,0.49) !important;">

            @foreach ($conversations as $conversation)
                <x-chat.chat-members :conversations="$conversations" :array="$conversation->id - 1"
                                     :window="$conversation->id" :messages="$messages" :blocksArray="$blocksArray"/>
            @endforeach
            <x-chat.chat-list :conversations="$conversations" :messages="$messages"/>
        </div>
    </div>
</div>
<div class="modal-background"></div>
<x-footer/>
