/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)

// alert(input1.toSource());

var $ = require('jquery');
require('popper.js/dist/umd/popper.min.js');
require('bootstrap');
import 'font-awesome/css/font-awesome.css';
require('bootstrap/dist/css/bootstrap.css');
require('../css/app.css');

$('.modal-append-show').click(function () {
    let item = $(this).data('target');
    $(item).appendTo("body");

    $('.modal-append-edit').click(function () {
        let item2 = $(this).data('target');
        $(item2).appendTo("body");
        $(item).modal('hide');
    });
});

$('.modal-delete').click(function () {
    let item = $(this).data('target');
    $(item).fadeIn('fast');
    $('.modal-delete-cancel').click(function () {
        $(item).fadeOut(0);
    });
});

(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');

            }, false);
        });
    }, false);
})();

var $collectionHolder;
var $addTagButton = $('<button type="button" class="add_tag_link">Add a tag</button>');
var $newLinkLi = $('<div class="form-group row mb-0"><label class="col-sm-2 col-form-label">Naujas</label></div>').append($addTagButton);

$(document).ready(function() {
    $collectionHolder = $('div.answeroptions');
    $collectionHolder.find('div.d-flex').each(function() {
        addTagFormDeleteLink($(this), $(this).parent().parent());
    });
    $collectionHolder.append($newLinkLi);
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $addTagButton.on('click', function(e) {
        e.preventDefault();
        addTagForm($collectionHolder, $newLinkLi);
    });
});

function addTagForm($collectionHolder, $newLinkLi) {
    var prototype = $collectionHolder.data('prototype');
    var index = $collectionHolder.data('index');

    var newForm = prototype;
    newForm = newForm.replace(/__name__/g, index);
    $collectionHolder.data('index', index + 1);

    var $newFormLi = $('<div class="form-group row"><label class="col-sm-2 col-form-label">Atsakymas</label></div>').append('<div class="col-sm-10 mb-3"><div class="d-flex"></div></div>').append(newForm);
    addTagFormDeleteLink($newFormLi);
    $newLinkLi.before($newFormLi);
}
function addTagFormDeleteLink($tagFormLi, $newLink ) {
    var $removeFormButton = $('<button class="btn btn-primary btn-no-left-radius">Pašalinti</button>');
    $tagFormLi.append($removeFormButton);

    $removeFormButton.on('click', function(e) {
        e.preventDefault();
        $newLink.remove();
    });
}


$('.groupsSubmit').submit(function( event ) {

    event.preventDefault();
    var form = $(this);
    var url = form.attr('action');

    let input1 = $(this).children(":first").next().val();
    let input2 = $('#inputgroupname' + input1 ).val();
    let input3 = $('#inputgroupdesc' + input1 ).val();

    if ( form[0].checkValidity() === true ) {
        $.ajax({
            type: form.attr('method'),
            url: url,
            data: {id: input1, name: input2, desc: input3},
            dataType: "text",
            success: function () {
                document.location.reload(true);
            }
        });
    }
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$(".p-collapse").click(function () {
    let caret = $(this).children('i');
    if (caret.hasClass("rotation")) {
        caret.removeClass("rotation");
    } else {
        caret.addClass("rotation");
    }
});

// $(".questionSort").click(function () {
//     let i;
//     let length = $('#question-index-sort').children('th').length;
//
//
//     if ($(this).hasClass('fa-sort')){
//         for (i = 1; i <= length-1; i++) {
//             $('#questionIndexCaret' + i).removeClass('fa-sort-up').removeClass('fa-sort-down').addClass('fa-sort');
//         }
//         $(this).removeClass('fa-sort').addClass('fa-sort-up');
//
//     }
//     else if ($(this).hasClass('fa-sort-up')) {
//         $(this).removeClass('fa-sort-up').addClass('fa-sort-down');
//     }
//     else {
//         $(this).removeClass('fa-sort-down').addClass('fa-sort');
//     }
// });


$(".sidebar-collapse").click(function () {
    let item = $(this).data('target');
    $(item).collapse('show');

    let caret = $(this).data('target-animation');
    if  ( $(caret).hasClass("rotation")) {
        $(caret).removeClass("rotation");
    }
});

$(".groupAdd").click(function (event) {
    event.preventDefault();
    let itemInput = $(this).data('target');
    let itemAdd = $(this);
    let itemSuccess = $(itemAdd).parent().next();
    let itemDisplayDiv = $(itemInput).parent().parent();
    let itemForm = $('#group_new_simple');

    $(itemAdd).fadeOut(0);
    $(itemSuccess).fadeOut(0);
    $(itemDisplayDiv).fadeIn('slow');
    $(itemInput).focus();

    var url = itemForm.attr('action');
    $(itemForm).submit(function (event) {
        event.preventDefault();
        if ( $(itemInput).val().length >= 2 && $(itemInput).val().length <= 50) {
            $(itemInput).removeClass('invalid').addClass('valid');
            $.ajax({
                type: 'POST',
                url: url,
                data: itemForm.serialize(),
            }).done(function (data) {
                $("#question_fk_group").append($("<option selected='selected'></option>").attr("value",data.id).text(data.value));
                $(itemDisplayDiv).fadeOut(0);
                $(itemAdd).fadeIn('slow');
                $(itemSuccess).fadeIn('slow');
                $(itemInput).val('');
                $(itemInput).removeClass('valid');
            });
        }
        else {
            $(itemInput).addClass('invalid');
        }
    });
});

const contentTop = $('.table-header-sticky').offset().top;
$( window ).scroll(function() {
    let navTop = $('.table-header-sticky').offset().top;
    if (contentTop !== navTop) {
        $('#tableheader').removeClass('table-header').addClass('header-transform');
    }
    else {
        $('#tableheader').removeClass('header-transform').addClass('table-header');
    }
});




