var isDown = false;
var frame = '';
var topE = '';
var left = '';

$(document).ready(function () {
    $('#button-multiselect').on('click', function () {

        if (getURLVar('user_token')) {
            var token = 'user_token=' + getURLVar('user_token');
        } else {
            var token = 'token=' + getURLVar('token');
        }

        $('#modal-image').remove();
        $.ajax({
            url: 'index.php?route=common/filemanager&' + token,
            dataType: 'html',
            beforeSend: function() {

            },
            complete: function() {

            },
            success: function(html) {
                $('body').append('<div id="modal-image" class="modal">' + html + '</div>');
                $('#modal-image').one('shown.bs.modal', function () {
                    $(this).addClass('multi-select');
                });

                $('#modal-image').one('hidden.bs.modal', function () {
                    $(this).removeClass('multi-select');
                });

                $('#modal-image').modal('show');

            }
        });
    });

    $(document).on('click', '#button-select', function () {
        var images = [];
        $('#modal-image.multi-select input:checked').each(function () {
            images[images.length] = {
                'image' : this.value,
                'thumb' : $(this).closest('div').find('img').attr('src')
            };

            this.checked = false;
        });

        if (images.length && typeof addImage != "undefined") {
            images.map(function (element, index) {
                addImage();
                $('#images tbody tr:last-child').find('.img-thumbnail img').attr('src', element.thumb);
                $('#images tbody tr:last-child').find('input[id^="input-image"]').val(element.image);
            });
        };
    });

    $(document).on('click', '#modal-image.multi-select a.thumbnail', function (e) {

        e.preventDefault();
        $(this).closest('div').find('input').click();
        showHideButton();

    });

    $(document).on('mousedown', '#modal-image.multi-select .modal-body', function (e) {

        isDown = true;
        topE = e.pageY - $('#modal-image').offset().top;
        left = e.pageX;

        setTimeout(function () {
            $('#modal-image').append('<div id="frame"></div>');
            frame = $('#frame');
            frame.css('top', topE);
            frame.css('left', left);
        }, 100);
    });

    $('body').mouseup(function () {

        isDown = false;
        if ($('#frame').length) {
            selectElements($('#frame'));
        }
        $('#frame').remove();
        frame = '';
        topE = '';
        left = '';

    });

    $(document).on('mousemove', '#modal-image.multi-select .modal-body', function (e) {
        if(isDown && frame) {

            var height = parseInt(e.pageY) - topE;
            var width = parseInt(e.pageX) - left;
            frame.css('height', height);
            frame.css('width', width);

        }
    });

});
function showHideButton() {
    var selectedInput = $('#modal-image input:checked');

    if (selectedInput.length && !$('#button-select').length) {

        var html = '<button type="button" data-toggle="tooltip" title="Select" id="button-select" class="btn btn-primary"><i class="fa fa-cogs"></i></button>';
        $('#button-delete').after(html);

    } else if (!selectedInput.length) {

        $('#button-select').remove();

    }
    
};

function selectElements(frame) {

    var top = frame.offset().top;
    var left = frame.offset().left;
    var width = left + frame.width();
    var height = top + frame.height();
    $('#modal-image.multi-select a.thumbnail').each(function () {

        if ($(this).offset().top + $(this).height() > top && $(this).offset().top < height && $(this).offset().left > left && $(this).offset().left < width) {
            $(this).click();
        }

    });
};