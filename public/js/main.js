$(document).ready(function () {

    // Detects
    $('#message-field').keyup(function (e) {
        // Press 'Enter'
        if (e.keyCode == 13) {
            const message = $(this).val();
            const userId = $('input[name=user-id]').val();
            const userName = $('input[name=user-name]').val();

            chat.appendNewMessage(userName, message);
            chat.sendMessage(userId, message);
            $(this).val("");
        }
    });
});