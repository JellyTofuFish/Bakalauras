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
require('../images');

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
            let origin  = window.location.origin;
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
$('.questionEditSave').click(function( event ) {
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

// Question example functions

let timeoutDisplayTime;
if ($('input.test-slug').data('action') === 'question example') {

    // Question example color attribute options
    $("a.paramButtonColor").on("click", function(e) {
        e.preventDefault();
        let attribute = $(this).data('attribute');
        setButtonColor(attribute);
    });
    $("a.paramBackgroundColor").on("click", function(e) {
        e.preventDefault();
        let attribute = $(this).data('attribute');
        setBackgroundColor(attribute);
    });
    // Question example time attribute options
    $("a.paramTime").on("click", function(e) {
        e.preventDefault();
        let attribute = $(this).data('attribute');
        let totalSeconds = 0; i = 0;
        $('div.paramTime').show().find('div.time-font').each(function() {
            if ($(this).find('span').data('target') === attribute) {
                i = setTime(totalSeconds, $(this).find('span.chronometer'), i, $(this).find('span').data('attribute'), null);
                i++;
                $(this).show();
            }
            else {
                $(this).hide();
            }
        });
    });
    // Question example display time attribute options
    $("a.paramDisplayTime").on("click", function(e) {
        e.preventDefault();
        let attribute = $(this).data('attribute'), j;
        $('div.paramDisplayTime').find('div.paramDT').each(function() {
            let element = $(this);
            let attributeDisplayTime = $(this).data('attribute');
            let attributeDisplayTimeArray = attributeDisplayTime.split(":");

            if (attributeDisplayTime === attribute) {
                if (attributeDisplayTimeArray[1] === '1') {
                    $(element).hide();
                    timeoutDisplayTime = setTimeout(function(){
                        $(element).fadeIn();
                    }, attributeDisplayTimeArray[0] * 1000);

                }
                if (attributeDisplayTimeArray[1] === '0') {
                    $(element).show().find('button').prop('disabled', true);
                    for (j = 0; j <= i; j++) {
                        clearTimeout(timeoutDisplayTime);
                    }
                    setTimeout(function(){
                        $(element).find('button').prop('disabled', false);
                    }, attributeDisplayTimeArray[0] * 1000);
                }
            }
            else {
                $(element).hide();
            }
        });
    });
    // Question example picture attribute options
    $("a.paramPicture").on("click", function(e) {
        e.preventDefault();
        let attribute = $(this).data('attribute');
        $('div.paramPicture').find('div.paramP').each(function() {
            let attributePicture = $(this).data('attribute');
            if (attributePicture === attribute) {
                $(this).show();
            }
            else {
                $(this).hide();
            }
        });
    });
}

// Test start execute

if ($('input.test-slug').data('action') === 'test participation' ) {
    $("article.test:last").find("button.next").hide().parent().append('<button type="submit" class="submit float-right btn btn-danger">Baigti testą</button>');
}
else {
    $("article.test:last").find("button.next").hide().parent().append('<button class="example-end float-right btn btn-danger">Baigti testą</button>');
}
//hide the first button labeled previous
$("article.test:first").find("button.prev").hide();
//hide every form section except first
$("article:nth-child(1n+2)").hide();
//add class of visible to first screen
$("article:first").show();

// check if delay was executed
let displayWasPressed = {};
var totalSeconds, i = 0;
let paramTimeQArray = {};
let SetTQ;

if ($('input.test-slug').data('action') === 'test example' || $('input.test-slug').data('action') === 'test participation') {
// test start color attribute execute
    setButtonColor($("article.test:first").find('input.paramButtonColor').data('attribute'));
    setBackgroundColor($("article.test:first").find('input.paramBackgroundColor').data('attribute'));
// test start file display execute
    findFile($("article.test:first").find('input.File').data('attribute'));
    $("article.test:first").find('.paramP').show();
// test start time attribute execute
    $('div.paramTime').find('span.timer').each(function () {
        let timerInput = $(this).data('attribute');
        let timeAttribute = $(this).data('target').split(':');
        i = startTimer(timeAttribute[0], $(this), i, timerInput);
        i++;
    });
    i = 0;
    $('div.paramTime').find('span.chronometer').each(function () {
        totalSeconds = 0;
        let chronometerInput = $(this).data('attribute');
        let chronometerAttribute = $(this).data('target').split(':');
        i = setTime(totalSeconds, $(this), i, chronometerAttribute[0], chronometerInput);
        i++;
    });
// test start time attribute execute
    let paramTimeQInput = $("article.test:first").find('.paramTimeQ').data('attribute');
    if (typeof paramTimeQInput !== 'undefined') {
        SetTQ = setTimeQ(paramTimeQInput);
    }
}
// test validation ( pressed next question )
$("button.next").on("click", function(e) {
    e.preventDefault();
    let container = $(this).closest(".container").parent().prev();
    let checkbox_required = $(container).find('.custom-checkbox').data('action');
    let checked = validateQuestion(container);
    if (checked[0] === false && checked[1] === true || checkbox_required === 'required' && checked[0] === false) {
        addValidation(container);
    }
    else {
        $(this).closest("article.test").removeClass("visible").hide().next().addClass("visible").fadeIn();
        // test start button and background color attribute execute
        setButtonColor($(this).closest("article.test").next().find('input.paramButtonColor').data('attribute'));
        setBackgroundColor($(this).closest("article.test").next().find('input.paramBackgroundColor').data('attribute'));
        // test start picture attribute execute
        $(this).closest("article.test").find('.paramP').hide();
        $(this).closest("article.test").next().find('.paramP').fadeIn(0);
        // test start file execute
        findFile($(this).closest("article.test").next().find('input.File').data('attribute'));
        // test start question time attribute execute
        clearTimeout(SetTQ);
        let paramTimeQInput = $(this).closest("article.test").next().find('input.paramTimeQ').data('attribute');
        if (typeof paramTimeQInput !== 'undefined') {
            SetTQ = setTimeQ(paramTimeQInput);
        }
        // test start display time attribute execute
        let displayTime = $(this).closest("article.test").next().find('div.paramDT');
        if (typeof (displayWasPressed[displayTime.data('attribute')]) === 'undefined' ) {
            startDisplayTime(displayTime);
            displayWasPressed[displayTime.data('attribute')] = false;
        }
    }
    removeValidation(container);
});
// test validation ( pressed previous question )
$("button.prev").on("click", function(e) {
    e.preventDefault();
    let container = $(this).closest(".container").parent().prev();
    let checkbox_required = $(container).find('.custom-checkbox').data('action');
    let checked = validateQuestion(container);
    if (checked[0] === false && checked[1] === true || checkbox_required === 'required' && checked[0] === false) {
        addValidation(container);
    }
    else {
        $(this).closest("article.test").removeClass("visible").hide().prev().addClass("visible").fadeIn();
        // test start button and background color attribute execute
        setButtonColor($(this).closest("article.test").prev().find('input.paramButtonColor').data('attribute'));
        setBackgroundColor($(this).closest("article.test").prev().find('input.paramBackgroundColor').data('attribute'));
        // test start picture attribute execute
        $(this).closest("article.test").find('.paramP').hide();
        $(this).closest("article.test").prev().find('.paramP').fadeIn(0);
        // test start file execute
        findFile($(this).closest("article.test").prev().find('input.File').data('attribute'));
        // test start question time attribute execute
        clearTimeout(SetTQ);
        let paramTimeQInput = $(this).closest("article.test").prev().find('input.paramTimeQ').data('attribute');
        if (typeof paramTimeQInput !== 'undefined') {
            SetTQ = setTimeQ(paramTimeQInput);
        }
    }
    removeValidation(container);
});
$("button.example-end").on("click", function(e) {
    e.preventDefault();
    let container = $(this).closest(".container").parent().prev();
    let checked = validateQuestion(container);
    clearInterval(i);
    if (checked[0] === false && checked[1] === true || checkbox_required === 'required' && checked[0] === false) {
        addValidation(container);
    }
    removeValidation(container);
});

// test start functions

// add test validation to required fields
function addValidation(container) {
    $(container).find('input').each(function () {
        $(this).addClass('is-invalid');
    });
    $(container).find('textarea').addClass('is-invalid');
    $(container).find('.invalid-feedback').show();
}
// remove test validation from selected fields
function removeValidation(container) {
    $(container).find('input').on("click", function(){
        $(container).find('input').each(function () {
            $(this).removeClass('is-invalid');
            $(container).find('.invalid-feedback').hide();
        });
    });
    $(container).find('textarea').on("click", function(){
        $(this).removeClass('is-invalid');
        $(container).find('.invalid-feedback').hide();
    });
}
// validate required test fields
function validateQuestion(container) {
    let required = false;
    let selected = false;
    // check if property required is set on inputs
    $(container).find('input').each(function() {
        if ($(this)[0].type === 'radio' ) {
            if ($(this).prop('required')) {
                required = true;
            }
        }
        if($(this).is(':checked')){
            selected = true;
        }
    });
    // check if property required is set on textarea
    if ($(container).find('textarea').prop('required')) {
        required = true;
        if ($(container).find('textarea').val().trim().length > 0) {
            selected = true;
        }
    }
    return [selected, required];
}
// color attributes
function setButtonColor(attribute){
    let color = getContrastYIQ(attribute.substring(1));
    $('.buttonColor').css( "background-color", attribute).css( "border-color", attribute).css( "color", color);
}
function setBackgroundColor(attribute){
    $('body').css( "background-color", attribute);
    let color = getContrastYIQ(attribute.substring(1));
    $('.backgroundColor').css( "color", color ).css( "border-color", color);
}
// color contrasts
function getContrastYIQ(hexcolor){
    var r = parseInt(hexcolor.substr(0,2),16);
    var g = parseInt(hexcolor.substr(2,2),16);
    var b = parseInt(hexcolor.substr(4,2),16);
    var yiq = ((r*299)+(g*587)+(b*114))/1000;
    return (yiq >= 128) ? 'black' : 'white';
}
// chronometer
function setTime(time, elem, i, chronometerTime, input, minutes = 0, seconds = 0, hours = 0 ) {
    let string = "00:00:00";
    if (elem !==null) {
        $(elem).html(string);
    }
    i = setInterval(function() {
        ++time;
        seconds = parseInt((time % 60), 10);
        minutes = parseInt(((time / 60) % 60), 10);
        hours = parseInt(((time / 3600) % 60), 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        hours = hours < 10 ? "0" + hours : hours;

        let string = hours + ":" + minutes + ":" + seconds;
        if (input !==null) {
            document.getElementById(input).value = time;
        }
        if (elem !==null) {
            $(elem).html(string);
        }
        if (time >= chronometerTime && chronometerTime !== 0) {
            if ($('input.test-slug').data('action') === 'test participation' ) {
                clearInterval(i);

            } else {
                clearInterval(i);
            }
        }
    },1000);
    return i;
}
// timer
function startTimer(time, elem, i, input, minutes = 0, seconds = 0, hours = 0) {
    minutes = parseInt(time / 60, 10);
    seconds = parseInt(time % 60, 10);
    hours = parseInt(time / 3600, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;
    hours = hours < 10 ? "0" + hours : hours;

    let string = hours + ":" + minutes + ":" + seconds;
    if (elem !==null) {
        $(elem).html(string);
    }

    i = setInterval(function() {
        minutes = parseInt(time / 60, 10);
        seconds = parseInt(time % 60, 10);
        hours = parseInt(time / 3600, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        hours = hours < 10 ? "0" + hours : hours;

        let string = hours + ":" + minutes + ":" + seconds;

        if (input !==null) {
            document.getElementById(input).value = time;
        }
        if (elem !==null) {
            $(elem).html(string);
        }
        if (--time < 0) {
            if ($('input.test-slug').data('action') === 'test participation' ) {
                clearInterval(i);

            } else {
                clearInterval(i);
            }
        }
    },1000);
    return i;
}
// Question time chronometer
function setTimeQ(input) {
    let seconds=0, minutes=0, time;
    if (typeof paramTimeQArray[input] === 'undefined') {
        time = 0;
    }
    else {
        time = paramTimeQArray[input];
    }
    SetTQ = setInterval(function() {
        ++time;
        seconds = parseInt((time % 60), 10);
        minutes = parseInt(((time / 60) % 60), 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        document.getElementById(input).value = time;
        paramTimeQArray[input] = time;
    },1000);
    return SetTQ;
}
// start display time attributes
function startDisplayTime(element) {
    let attributeDisplayTimeArray = $(element).data('attribute').split(":");
    if (attributeDisplayTimeArray[1] === '1') {
        $(element).hide();
        timeoutDisplayTime = setTimeout(function () {
            $(element).fadeIn();
        }, attributeDisplayTimeArray[0] * 1000);

    }
    if (attributeDisplayTimeArray[1] === '0') {
        $(element).show().find('button').prop('disabled', true);
        setTimeout(function () {
            $(element).find('button').prop('disabled', false);
        }, attributeDisplayTimeArray[0] * 1000);
    }
}
function findFile(FileArticle) {
    $('div.FileList').find('div.File').each(function() {
        let File = $(this).data('attribute');
        if (FileArticle === File) {
            $(this).fadeIn(0);
        }
        else {
            $(this).hide();
        }
    });
}

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
            '<label class="col-sm-2 col-form-label">'+ label + ' ' + number + ' ' + '*' + '</label>' +
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
            '<label class="col-sm-2 col-form-label">'+ label + ' Nr.' + number + '*' + '</label>' +
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