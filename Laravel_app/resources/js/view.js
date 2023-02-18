$(function() {
    $.get('/api/Weekday', function(Weekday) {
        $.each(Weekday, function(index, Weekday) {
            $('table tbody').append(`
                <tr>
                    <td>${Weekday.days}</td>
                </tr>
            `);
        });
    });
});