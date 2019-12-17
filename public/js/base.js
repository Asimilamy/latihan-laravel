if (typeof jQuery === 'undefined') {
    throw new Error('My Custom Function requires jQuery')
}

var loader = $('#loader');
var content = $('#content');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function show_loader() {
    loader.show();
    setTimeout(() => {
        loader.hide();
    }, 500);
}

function submit_form(url, form_element) {
    return $.ajax({
        type: 'POST',
        url: url,
        data: form_element,
        contentType: false,
        processData: false
    });
}

function get_page(url, data) {
    return $.ajax({
        type: 'GET',
        url: url,
        data: data
    });
}

function print_error(messages) {
    var msg = '';
    $.each(messages, function (key, value) {
        msg += '<li>' + value + '</li>';
    });
    return msg;
}

function format_money(amount, decimalCount = 2, decimal = '.', thousands = ',') {
    try {
        decimalCount = Math.abs(decimalCount);
        decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

        const negativeSign = amount < 0 ? '-' : '';

        let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
        let j = (i.length > 3) ? i.length % 3 : 0;

        return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace('/(\d{3})(?=\d)/g', '$1' + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : '');
    } catch (e) {
        console.log(e)
    }
};
