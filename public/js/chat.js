const chat = {
    sendMessage: (userId, message) => {
        $.ajax({
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: `/ajax/message/${userId}`,
            data: {
                'message': message,
            },
            dataType: "json",
        });
    },

    appendNewMessage: (userName, message) => {
        const chatArea = document.getElementById('chat-area');
        $(chatArea).append(`<p><span>${userName}</span>${message} </p>`);
        chatArea.scrollTop = chatArea.scrollHeight;
    }
}