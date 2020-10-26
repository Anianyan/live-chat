$(document).ready(function () {

    // Detects
    $('#message-field').keyup(function (e) {
        // Press 'Enter'
        if (e.keyCode == 13) {
            const message = $(this).val();
            const userId = $('input[name=user-id]').val();
            const userName = $('input[name=user-name]').val();

            chat.sendMessage(userId, message);
            $(this).val("");
        }
    });

    // Scroll to the Last messages.
    const chatArea = document.getElementById('chat-area');
    chatArea.scrollTop = chatArea.scrollHeight;
});

// Listen new messages
Echo.channel('chatting')
    .listen('.ChattingEvent', e => {
        const { message, user } = e;
        chat.appendNewMessage(user, message);
    });
