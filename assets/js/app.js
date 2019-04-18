/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)

// alert(input1.toSource());

import {when} from "q";

var $ = require('jquery');
require('popper.js/dist/umd/popper.min.js');
require('bootstrap');
require('bootstrap/dist/css/bootstrap.css');
import 'font-awesome/css/font-awesome.css';
global.moment = require('moment');
require('tempusdominus-bootstrap-4');
require('tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css');
require('../css/app.css');

// General + bootrstap animations

$('.modal-append-show').click(function () {
    let item = $(this).data('target');
    $(item).appendTo("body");

    $('.modal-append-edit').click(function () {
        let item2 = $(this).data('target');
        $(item2).appendTo("body");
        $(item).modal('hide');
    });
});
$('.modal-append').click(function () {
    $(this).data('target').appendTo("body");
});
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-tooltip="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();
    $('#datetimepicker2').popover('disable');
    $('.datepicker').datetimepicker({
        format: 'YYYY-MM-DD H:m:s',
        locale: 'lt',
        buttons: {
            showToday: true,
        },
        tooltips: {
            today: 'Nustatyti dabartinę datą',
            selectDate: 'Pasirinkti datą',
            selectTime: "Pasirinkti laiką",
        },
        widgetPositioning: {
            horizontal: 'right',
            vertical: 'top'
        },
    });
});
$('.dropdown-menu').on("click.bs.dropdown", function (e) { e.stopPropagation(); });
$('.modal-delete').click(function () {
    let item = $(this).data('target');
    $(item).fadeIn('fast');
    $('.modal-delete-cancel').click(function () {
        $(item).fadeOut(0);
    });
});
$(".card-collapse").click(function (e) {
    let caret = $(this).children('i');
    let $link = $(e.target);
    if(!$link.data('lockedAt') || +new Date() - $link.data('lockedAt') > 350) {
        if (caret.hasClass("rotation")) {
            caret.removeClass("rotation");
        } else {
            setTimeout(function()
            {
                caret.addClass("rotation");
            }, 200);
        }
        $link.data('lockedAt', +new Date());
    }
});
$(".sidebar-collapse").click(function () {
    let item = $(this).data('target');
    $(item).collapse('show');

    let caret = $(this).data('target-animation');
    if  ( $(caret).hasClass("rotation")) {
        $(caret).removeClass("rotation");
    }
});

// Form validation

(function() {
    'use strict';
    // window.addEventListener('load', function() {
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
    // }, false);
})();

// Question controller / html functions

function questionAjaxPost(form, url, redi = false) {
    $.ajax({
        type: 'POST',
        url: url,
        data: form.serialize(),
    })
    .done(function (data) {
        if ( redi ) {
            let origin   = window.location.origin;
            let link = origin + "/question/" + data.id;
            window.location.replace(link);
        }
        else {
            document.location.reload(true);
        }
    })
}
function questionRemoveAnswers(val) {
    if (val !== 'one' && val !== 'multi'){
        let $collectionHolder = $('div.answeroptions');
        $collectionHolder.find('button.questionAnswerRemoveButton').each(function() {
            $(this).click();
        });
    }
}
let form = $('#question_form');
let val = $('#question_type');
$('.questionTypeSave').click(function( event ) {
    if ( val.val() === "" ) {
        event.preventDefault();
        $(val).addClass('invalid').parent().nextAll('div.invalid-feedback').show();}
    else {
        $('[required]').removeAttr('required');
        $(val).removeClass('invalid').parent().nextAll('div.invalid-feedback').hide();
        $('#answers').removeClass('show');
        questionRemoveAnswers(val.val());}
});
$('.questionTypeEditSave').click(function( event ) {
    event.preventDefault();
    questionRemoveAnswers(val.val());
    questionAjaxPost(form, $(this).data('link'));
});
$('.questionTypeRemove').click(function( event ) {
    event.preventDefault();
    $(val).removeClass('invalid').attr('disabled', false).parent().nextAll('div.invalid-feedback').hide();
    $(this).hide(0).prev().fadeIn('fast');
});
$('.questionSave').click(function( event ) {
    event.preventDefault();
    if (form[0].checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
    }
    else {
        $('[disabled]').removeAttr('disabled');
        questionAjaxPost(form, $(this).data('link'), true);
    }
    form.addClass('was-validated');
});
$('#question_form').submit(function () { $('[disabled]').removeAttr('disabled');});

// Group controller / html functions

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
$(".groupAdd").click(function (event) {
    event.preventDefault();
    let itemInput = $(this).data('target');
    let itemAdd = $(this);
    let itemSuccess = $(itemAdd).parent().next();
    let itemDisplayDiv = $(itemInput).parent().parent();
    let itemForm = $('#group_new_simple');

    $(itemAdd).fadeOut(0);
    $(itemSuccess).fadeOut(0);
    $(itemDisplayDiv).fadeIn('fast');
    $(itemInput).focus();

    var url = itemForm.attr('action');
    $(itemInput).next().one('click', function (event) {
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
                $(itemAdd).fadeIn('fast');
                $(itemSuccess).fadeIn('fast');
            });
        }
        else {
            $(itemInput).addClass('invalid');
        }
        $(itemInput).val('');
        $(itemInput).removeClass('valid');
        $(itemInput).removeClass('invalid');
    });
    $(".groupRemove").click(function (event) {
        event.preventDefault();
        $(itemInput).val('');
        $(itemDisplayDiv).fadeOut(0);
        $(itemAdd).fadeIn('fast');
    });
});

// Test controller / html functions
$('#test_form').submit(function () {
    $('#test_test_start').popover('disable').popover('hide').removeClass('invalid').nextAll('div.invalid-feedback').hide();
    if ($('#test_test_start').val() === ''){ $("#test_is_active")[0].checked = false; }
});
$(".input-group-text").click(function () {
    $('#test_test_start').popover('disable').popover('hide').removeClass('invalid').nextAll('div.invalid-feedback').hide();
});
$("#test_is_active").click(function (event) {
    let inputDate = $('#test_test_start');
    if ($(inputDate).val() === '' && $(this).is(':checked') === true ){
        event.preventDefault();
        $(inputDate).popover('enable').popover('show');
        $(inputDate).addClass('invalid').nextAll('div.invalid-feedback').show();
    }
    else if ($(inputDate).val() !== '') {
        $(inputDate).removeClass('invalid');
    }
});

// Test start functions
let formArticle = $('#slider');
$("article:last").find("button.next").hide().parent().append('<button type="submit" class="submit mr-5 btn btn-danger">Baigti testą</button>')
//hide every form section except first
$("article:nth-child(1n+2)").hide();
//add class of visible to first screen
$("article:first").addClass("visible");

$("button.next").on("click", function(e){
    e.preventDefault();
    $(this).closest("article").removeClass("visible").hide().next().addClass("visible").fadeIn();
});
// $("button.submit").on("click", function(e){
//     e.preventDefault();
//     $.ajax({
//         type: formArticle.attr('method'),
//         url: formArticle.attr('action'),
//         data: formArticle.serialize(),
//         success:function(data){
//
//             // handling the response data from the controller
//             if(data.status == 'error'){
//                 alert("[API] ERROR: "+data);
//             }
//             if(data.status == 'success'){
//                 alert("[API] SUCCESS: "+data);
//             }
//         }
//     });
// });
// Collection of test answer forms

var $collectionHolder;
var $addTagButton = $('<a><i data-toggle="tooltip" data-placement="right" title="Pridėti naują atsakymą" class="p-form text-dark pointer fa fa-plus-square"></i></a>');
var $newLinkLi = $('<div class="form-group row mb-0"><label class="col-sm-2 col-form-label">Atsakymo kūrimas</label></div>').append($addTagButton);

(function() {
    $collectionHolder = $('div.answeroptions');

    var numr = 0;
    $collectionHolder.find('div.d-flex').each(function() {
        addAnswerFormDeleteLink($(this));
        numr+= 1;
    });

    $collectionHolder.append($newLinkLi);
    $collectionHolder.data('index', $collectionHolder.find(':input').length-numr);

    if ( $collectionHolder.data('index') < 1) {
        addAnswerForm($collectionHolder, $newLinkLi);
        addAnswerForm($collectionHolder, $newLinkLi);
    }

    $addTagButton.on('click', function(e) {
        e.preventDefault();
        addAnswerForm($collectionHolder, $newLinkLi);
    });
})();
function addAnswerForm($collectionHolder, $newLinkLi) {
    var prototype = $collectionHolder.data('prototype');
    var index = $collectionHolder.data('index');

    var newForm = prototype;
    newForm = newForm.replace(/__name__/g, index);
    $collectionHolder.data('index', index + 1);

    var input = newForm.match(/<input(.*?)>/ig);
    var label = newForm.match(/<label(.*?)<\/label>/ig);
    var number = index+1;

    var $newFormLi =
        $('<div class="form-group row">' +
            '<label class="col-sm-2 col-form-label">'+ label + ' ' + number + '</label>' +
            '<div class="col-sm-10 mb-3">' +
            '<div class="d-flex">' + input +
            '</div>' +
            '</div>' +
            '</div>');

    addAnswerFormDeleteLink($newFormLi.find('div.d-flex'));
    $newLinkLi.before($newFormLi);
}
function addAnswerFormDeleteLink($tagFormLi) {
    var $removeFormButton = $('<button class="btn btn-outline-dark btn-no-left-radius questionAnswerRemoveButton">Pašalinti</button>');
    $tagFormLi.append($removeFormButton);

    $removeFormButton.on('click', function(e) {
        e.preventDefault();
        $tagFormLi.parent().parent().remove();
    });
}


// Collection of test question forms

var $collectionHolder2;
var $addTestQuestionButton = $('<a><i data-toggle="tooltip" data-placement="right" title="Pridėti naują klausimą" class="p-form text-dark pointer fa fa-plus-square"></i></a>');
var $newLinkLi2 = $('<div class="form-group row mb-0"><label class="col-sm-2 col-form-label">Klausimo pridėjimas</label></div>').append($addTestQuestionButton);
(function() {
    $collectionHolder2 = $('div.testquestions');

    var numr = 0;
    $collectionHolder2.find('div.d-flex').each(function() {
        addTestQuestionFormDeleteLink($(this));
        numr+= 1;
    });

    $collectionHolder2.append($newLinkLi2);
    $collectionHolder2.data('index', $collectionHolder2.find(':input').length-numr);

    $addTestQuestionButton.on('click', function(e) {
        e.preventDefault();
        addTestQuestionForm($collectionHolder2, $newLinkLi2);description
    });
})();

function addTestQuestionForm($collectionHolder2, $newLinkLi2) {

    var prototype = $collectionHolder2.data('prototype');
    var index = $collectionHolder2.data('index');

    var newForm = prototype;
    newForm = newForm.replace(/__name__label__/g, index);
    newForm = newForm.replace(/__name__/g, index);

    var select = newForm.match(/<select(.*?)<\/select>/ig);
    var label = newForm.match(/<label(.*?)<\/label>/ig);
    var number = index+1;
    $collectionHolder2.data('index', index + 1);

    var $newFormLi2 =
        $('<div class="form-group row">' +
            '<label class="col-sm-2 col-form-label">'+ label + ' ' + number + '</label>' +
            '<div class="col-sm-10 mb-3">' +
            '<div class="d-flex">' + select +
            '</div>' +
            '</div>' +
            '</div>');

    addTestQuestionFormDeleteLink($newFormLi2.find('div.d-flex'));
    $newLinkLi2.before($newFormLi2);

}
function addTestQuestionFormDeleteLink($tagFormLi) {
    var $removeFormButton = $('<button class="btn btn-outline-dark btn-no-left-radius">Pašalinti</button>');
    $tagFormLi.append($removeFormButton);

    $removeFormButton.on('click', function(e) {
        e.preventDefault();
        $tagFormLi.parent().parent().remove();
    });
}

// Table header animation

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