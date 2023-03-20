window.Echo.channel("chat").listen("MessageSent", event => {
    const message = event.message;
    console.log(message);
})
