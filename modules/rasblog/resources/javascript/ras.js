/**
 * Created by ras on 08/01/14.
 */

function addComment() {
    if (!$('#comment').val()) {
        return;
    }

    var comment = $('#comment').val();
    $('#form_comment').sendRequest('rasblog:on_addComment', {
        onSuccess: function() { $('#list_of_comments').prepend('<li>' + comment + '</li>'); }
    });
    $('#comment').val('');
}