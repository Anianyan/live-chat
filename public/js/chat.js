const chat = {
    sendMessage: (userId, message) => {
        $.ajax({
            type: 'POST',
            url: `/ajax/message/${userId}`,
            data: {
                'message': message,
            },
            dataType: "json",
            success: function (data) {
            },
        });
    },

    appendNewMessage: (userName, message) => {
        $('#chat-area').append(`<p><span>${userName}</span>${message} </p>`);
    }
}