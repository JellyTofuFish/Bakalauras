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
import bsCustomFileInput from 'bs-custom-file-input';
require('tempusdominus-bootstrap-4');
require('tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css');
require('../css/app.css');
require('../images/Default.jpg');

// General + bootrstap animations

function isIE() {
    var ua = navigator.userAgent;
    var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;

    return is_ie;
}
if (isIE()){
    alert('Naršyklė "Internet Explorer" nepalaikoma. Prašome prie sistemos prisijungti su kita naršykle');
}

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
$('.fa').click(function () {
    let link = $(this).parent();
    $(link).blur();
    let modal = $(link).data('target');
    $(modal).on('hidden.bs.modal', function (e) {
        setTimeout(function(){
            $(link).blur();
        }, 5);
    });
});

$('.dropdown-menu').on("click.bs.dropdown", function (e) { e.stopPropagation(); });

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
                event.preventDefault();
                $('#pictureIsValid').html('');
                $('#fileIsValid').html('');
                let button = checkAttributeValidity($(':input.uniqueBtnC'), $('span.uniqueBtnC'));
                let background = checkAttributeValidity($(':input.uniqueBgC'), $('span.uniqueBgC'));
                hasExtensionFile($(':input.uniqueFile'), $('span.uniqueFile'), $('#fileIsValid'));
                hasExtensionFile($(':input.uniquePicture'), $('span.uniquePicture'), $('#pictureIsValid'));
                setTimeout( function(){
                    if ($('#pictureIsValid').html() === 'true' || $('#fileIsValid').html() === 'true' || form.checkValidity() === false || button === true || background === true) {
                        $(':invalid').closest('div.tab-pane').addClass('show');
                        $('.invalid').closest('div.tab-pane').addClass('show');
                        event.stopPropagation();
                        if ($('#pictureIsValid').html() === 'true') {
                            $(':input.uniquePicture').next().addClass('invalid');
                            $('span.uniquePicture').show();
                        }
                        if ($('#pictureIsValid').html() !== 'true') {
                            $(':input.uniquePicture').next().removeClass('invalid');
                            $('span.uniquePicture').hide();
                        }
                        if ($('#fileIsValid').html() === 'true') {
                            $(':input.uniqueFile').next().addClass('invalid');
                            $('span.uniqueFile').show();
                        }
                        if ($('#fileIsValid').html() !== 'true') {
                            $(':input.uniqueFile').next().removeClass('invalid');
                            $('span.uniqueFile').hide();
                        }
                    }
                    else {
                        $('[disabled]').removeAttr('disabled');
                        $(':input.uniqueFile').next().removeClass('invalid');
                        $('span.uniqueFile').hide();
                        $(':input.uniquePicture').next().removeClass('invalid');
                        $('span.uniquePicture').hide();
                        form.submit();
                    }
                }, 10);
                form.classList.add('was-validated');
            });
        });
})();
// Attribute submit

$('#attribute_form').submit(function () { $('[disabled]').removeAttr('disabled');});

// Question controller / html functions
function checkAttributeValidity(uniqueInputs, uniqueSpans) {
    let Arr = [];
    let inputs = uniqueInputs;
    let Invalid = false;
    let spans = uniqueSpans;
    $.each(inputs, function (i, key) {
        if(Arr.indexOf($(key).val()) !== -1) {
            Invalid = true;
        }
        else
            Arr.push($(key).val());
    });
    if (Invalid === true) {
        $(inputs).addClass('invalid');
        $(spans).show();
    }
    else {
        $(inputs).removeClass('invalid');
        $(spans).hide();
    }
    return Invalid;
}
// validate file upload
var _URL = window.URL || window.webkitURL;
function hasExtensionFile(uniqueInputs, uniqueSpans, valid) {
    $.each(uniqueInputs, function (i, key) {
        image(key, valid);
    });
}
function image(key, valid){
    var image, file;
    if ((file = $(key)[0].files[0])) {
        image = new Image();
        let FileSize = (file.size/1024/1024);
        if (FileSize > 0.5) {
            $(valid).html(true);
        }
        image.onload = function() {
            if( this.width > 1500 || this.height > 1500 ) {
                $(valid).html(true);
            }
        };
        image.src = _URL.createObjectURL(file);
    }
}
$('#fileRemove').on('click', function(e) {
    e.preventDefault();
    $(this).parent().prev().find('label').html($(this).data('action'));
    $(this).parent().prev().find('input.display-hidden').attr('value', 0);
    $(this).parent().prev().find('input.uniqueFile').val("");
});
function questionAjaxPost(form, url, redi = false) {
    $.ajax({
        type: 'POST',
        url: url,
        data: form.serialize(),
    })
    .done(function (data) {
        if ( redi ) {
            let origin  = window.location.origin;
            let link = origin + "/questions" ;
            window.location.replace(link);
        }
        else {
            $('#question_type').attr('disabled','disabled');
            location.reload();
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
    $(this).blur();
    $(val).removeClass('invalid').attr('disabled', false).parent().nextAll('div.invalid-feedback').hide();
    $(this).hide(0).prev().fadeIn('fast');
});

$('.questionSave').click(function( event ){
    event.preventDefault();
    $('#pictureIsValid').html('');
    $('#fileIsValid').html('');
    let action = $(this).data('link');
    let button = checkAttributeValidity($(':input.uniqueBtnC'), $('span.uniqueBtnC'));
    let background = checkAttributeValidity($(':input.uniqueBgC'), $('span.uniqueBgC'));
    hasExtensionFile($(':input.uniqueFile'), $('span.uniqueFile'), $('#fileIsValid'));
    hasExtensionFile($(':input.uniquePicture'), $('span.uniquePicture'), $('#pictureIsValid'));
    setTimeout( function(){
        if ($('#pictureIsValid').html() === 'true' || $('#fileIsValid').html() === 'true' || form[0].checkValidity() === false || button === true || background === true) {
            $(':invalid').closest('div.tab-pane').addClass('show');
            $('.invalid').closest('div.tab-pane').addClass('show');
            event.stopPropagation();
            if ($('#pictureIsValid').html() === 'true') {
                $(':input.uniquePicture').next().addClass('invalid');
                $('span.uniquePicture').show();
            }
            if ($('#pictureIsValid').html() !== 'true') {
                $(':input.uniquePicture').next().removeClass('invalid');
                $('span.uniquePicture').hide();
            }
            if ($('#fileIsValid').html() === 'true') {
                $(':input.uniqueFile').next().addClass('invalid');
                $('span.uniqueFile').show();
            }
            if ($('#fileIsValid').html() !== 'true') {
                $(':input.uniqueFile').next().removeClass('invalid');
                $('span.uniqueFile').hide();
            }
        }
        else {
            $('[disabled]').removeAttr('disabled');
            let form = document.getElementById("question_form");
            $(':input.uniqueFile').next().removeClass('invalid');
            $('span.uniqueFile').hide();
            $(':input.uniquePicture').next().removeClass('invalid');
            $('span.uniquePicture').hide();
            form.action = action;
            form.submit();
        }
    }, 20);
    form.addClass('was-validated');
});

$('.questionEditSave').click(function( event) {
    event.preventDefault();
    $('#pictureIsValid').html('');
    $('#fileIsValid').html('');
    let action = $(this).data('link');
    let button = checkAttributeValidity($(':input.uniqueBtnC'), $('span.uniqueBtnC'));
    let background = checkAttributeValidity($(':input.uniqueBgC'), $('span.uniqueBgC'));
        hasExtensionFile($(':input.uniqueFile'), $('span.uniqueFile'), $('#fileIsValid'));
        hasExtensionFile($(':input.uniquePicture'), $('span.uniquePicture'), $('#pictureIsValid'));
    setTimeout( function(){
        if ($('#pictureIsValid').html() === 'true' || $('#fileIsValid').html() === 'true' || form[0].checkValidity() === false || button === true || background === true) {
            $(':invalid').closest('div.tab-pane').addClass('show');
            $('.invalid').closest('div.tab-pane').addClass('show');
            event.stopPropagation();
            if ($('#pictureIsValid').html() === 'true') {
                $(':input.uniquePicture').next().addClass('invalid');
                $('span.uniquePicture').show();
            }
            if ($('#pictureIsValid').html() !== 'true') {
                $(':input.uniquePicture').next().removeClass('invalid');
                $('span.uniquePicture').hide();
            }
            if ($('#fileIsValid').html() === 'true') {
                $(':input.uniqueFile').next().addClass('invalid');
                $('span.uniqueFile').show();
            }
            if ($('#fileIsValid').html() !== 'true') {
                $(':input.uniqueFile').next().removeClass('invalid');
                $('span.uniqueFile').hide();
            }
        }
        else {
            $('[disabled]').removeAttr('disabled');
            let form = document.getElementById("question_form");
            $(':input.uniqueFile').next().removeClass('invalid');
            $('span.uniqueFile').hide();
            $(':input.uniquePicture').next().removeClass('invalid');
            $('span.uniquePicture').hide();
            form.action = action;
            form.submit();
        }
    }, 20);
    form.addClass('was-validated');
});
$('#question_form').submit(function () { $('[disabled]').removeAttr('disabled');});
bsCustomFileInput.init();
$('#question_form').change(function () { bsCustomFileInput.init();});

// group add in question form
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

// Group controller / html functions

$('.groupDelete').click(function () {
    let deleteForm = $(this).data('target'),
        editForm = $('.groupEdit');
    $(editForm).hide(0);
    $(deleteForm).fadeIn('slow');
    $('.groupDeleteCancel').click(function () {
        $(editForm).fadeIn('fast');
        $(deleteForm).hide(0);
    });
});

// Test controller / html functions
$(".exportFileTest").click(function (event) {
    event.preventDefault();
    let test = $(this).data('target');
    let filename = $(this).data('name');
    var xhr = new XMLHttpRequest();
    xhr.open('POST', window.location.origin +'/test/'+ test + '/report', true);
    xhr.responseType = 'arraybuffer';

    xhr.onload = function () {
        if (this.status === 200) {
            var disposition = xhr.getResponseHeader('Content-Disposition');

            var type = xhr.getResponseHeader('Content-Type');
            var blob = typeof File === 'function'
                ? new File([this.response], filename, { type: type })
                : new Blob([this.response], { type: type });

            if (typeof window.navigator.msSaveBlob !== 'undefined') {
                // IE workaround for "HTML7007: One or more blob URLs were revoked by closing the blob for which they were created. These URLs will no longer resolve as the data backing the URL has been freed."
                window.navigator.msSaveBlob(blob, filename);
            } else {
                var URL = window.URL || window.webkitURL;
                var downloadUrl = URL.createObjectURL(blob);

                if (filename) {
                    // use HTML5 a[download] attribute to specify filename
                    var a = document.createElement("a");
                    // safari doesn't support this yet
                    if (typeof a.download === 'undefined') {
                        window.location = downloadUrl;
                    } else {
                        a.href = downloadUrl;
                        a.download = filename;
                        document.body.appendChild(a);
                        a.click();
                    }
                } else {
                    window.location = downloadUrl;
                }

                setTimeout(function () { URL.revokeObjectURL(downloadUrl); }, 100); // cleanup
            }
        }
    };
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send();
    setTimeout(function() { alert("Pradėtas ataskaitos generavimas. Pilnas ataskaitos sugeneravimas gali užtrukti kelias minutes. Prašome palaukti kol ataskaita bus sugenera"); }, 1);
});
$('#test_form').change(function () { bsCustomFileInput.init();});
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
        let color = getContrastYIQ(attribute.substring(1));
        if (color === 'black' ) {
            $('.text-muted-custom').css("color", '#6c757d');
        }
        else {
            $('.text-muted-custom').css("color", '#c4c7cb');
        }
    });
    // Question example time attribute options
    $("a.paramTime").on("click", function(e) {
        e.preventDefault();
        let attribute = $(this).data('attribute');
        let totalSeconds = 0; i = 0;
        $('div.paramTime').show().find('div.time-font').each(function() {
            if ($(this).find('span').data('attribute') === attribute) {
                i = setTime(totalSeconds, $(this).find('span.chronometer'), i, $(this).find('span').data('attribute').split(":")[0], null);
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
        let attribute = $(this).data('attribute');
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
                    for (let j = 0; j <= i; j++) {
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


if ($('input.test-slug').data('action') === 'test participation' ) {
    $("article.test:last").find("button.next").hide().parent().append('<button type="submit" class="submit float-right btn btn-danger">Baigti testą</button>');
}
else {
    $("article.test:last").find("button.next").hide().parent().append('<button class="example-end float-right btn btn-secondary">Periūros pabaiga</button>');
}
//hide the first button labeled previous
$("article.test:first").find("button.prev").hide();
//hide every form section except first
$("article:nth-child(1n+2)").hide();
//add class of visible to first screen
$("article:first").show();

// check if delay was executed
let displayWasPressed = {};
let i = 0;
let paramTimeArray = {};
let SetTQ;
let SetDisplayTime;

if ($('input.test-slug').data('action') === 'test example' || $('input.test-slug').data('action') === 'test participation') {
    // set button color and font color for first form section
    setButtonColor($("article.test:first").find('input.paramButtonColor').data('attribute'));
    setBackgroundColor($("article.test:first").find('input.paramBackgroundColor').data('attribute'));
    // show file for first form section
    findFile($("article.test:first").find('input.File').data('attribute'));
    $("article.test:first").find('.paramP').show();
    // show time for entire test
    $('div.Time').find('span.timer').each(function () {
        let timeAttribute = $(this).data('target').split(':');
        i = startTimer(timeAttribute[0], $(this), i);
    });
    $('div.Time').find('span.chronometer').each(function () {
        let chronometerAttribute = $(this).data('target').split(':');
        i = setTime(0, $(this), i, chronometerAttribute[0]);
    });
    // show question count for first form section
    $('span.count').html($("article.test:first").data('count'));
    // start question timer for first form section
    let paramTimeInput = $("article.test:first").find('.paramTime').data('attribute');
    if (typeof paramTimeInput !== 'undefined') {
        SetTQ = setTimeQ(paramTimeInput);
    }
    // start question button display timer for first form section
    let displayTime = $("article.test:first").find('div.paramDT');
    if (typeof displayTime.data('attribute') !== 'undefined') {
        if (typeof (displayWasPressed[$("article.test:first").data('count')]) === 'undefined') {
            SetDisplayTime = startDisplayTime(displayTime);
            displayWasPressed[$("article.test:first").data('count')] = false;
        }
    }
}
// test validation ( pressed next question )
$("button.next").on("click", function(e) {
    e.preventDefault();
    nextQuestion($(this));
});
function nextQuestion(element) {
    // attribute execution via pressing "next" question
    if ( $(element).closest("article.test").data('count') !== $("article.test:last").data('count') || $('input.test-slug').data('action') === 'question example' ) {
        let container = $(element).closest(".container").parent().prev();
        let checkbox_required = $(container).find('.custom-checkbox').data('action');
        let checked = validateQuestion(container);
        if (checked[0] === false && checked[1] === true || checkbox_required === 'required' && checked[0] === false) {
            addValidation(container);
            if ($('input.test-slug').data('action') === 'test example' || $('input.test-slug').data('action') === 'test participation') {
                addValidationColor($(element).closest("article.test").find('input.paramBackgroundColor').data('attribute'));
            } else {
                let testcolor = $("a.paramBackgroundColor").data('attribute');
                if (typeof testcolor === 'undefined') {
                    addValidationColor("#FFFFFF");
                } else {
                    addValidationColor(testcolor);
                }
            }
        } else {
            $(element).closest("article.test").removeClass("visible").hide().next().addClass("visible").fadeIn();
            $('span.count').html($(element).closest("article.test").next().data('count'));
            // test start element and background color attribute execute
            setButtonColor($(element).closest("article.test").next().find('input.paramButtonColor').data('attribute'));
            setBackgroundColor($(element).closest("article.test").next().find('input.paramBackgroundColor').data('attribute'));
            // test start picture attribute execute
            $(element).closest("article.test").find('.paramP').hide();
            $(element).closest("article.test").next().find('.paramP').fadeIn(0);
            // // test start file execute
            findFile($(element).closest("article.test").next().find('input.File').data('attribute'));

            // // test start question time attribute execute
            clearInterval(SetTQ);
            let paramTimeInput = $(element).closest("article.test").next().find('input.paramTime').data('attribute');
            if (typeof paramTimeInput !== 'undefined') {
                SetTQ = setTimeQ(paramTimeInput);
            }
            // test start display time attribute execute
            clearTimeout(SetDisplayTime);
            let displayTime = $(element).closest("article.test").next().find('div.paramDT');
            if (typeof displayTime.data('attribute') !== 'undefined') {
                if (typeof (displayWasPressed[$(element).closest("article.test").next().data('count')]) === 'undefined') {
                    SetDisplayTime = startDisplayTime(displayTime);
                    displayWasPressed[$(element).closest("article.test").next().data('count')] = false;
                }
            }
        }
    }
}
// test validation ( pressed previous question )
$("button.prev").on("click", function(e) {
    e.preventDefault();
    let container = $(this).closest(".container").parent().prev();
    let checkbox_required = $(container).find('.custom-checkbox').data('action');
    let checked = validateQuestion(container);
    if (checked[0] === false && checked[1] === true || checkbox_required === 'required' && checked[0] === false) {
        addValidation(container);
        if ($('input.test-slug').data('action') === 'test example' || $('input.test-slug').data('action') === 'test participation') {
            addValidationColor($(this).closest("article.test").find('input.paramBackgroundColor').data('attribute'));
        } else {
            let testcolor = $("a.paramBackgroundColor").data('attribute');
            if (typeof testcolor === 'undefined') {
                addValidationColor("#FFFFFF");
            } else {
                addValidationColor(testcolor);
            }
        }
    }
    else {
        $(this).closest("article.test").removeClass("visible").hide().prev().addClass("visible").fadeIn();
        $('span.count').html($(this).closest("article.test").prev().data('count'));
        // test start button and background color attribute execute
        setButtonColor($(this).closest("article.test").prev().find('input.paramButtonColor').data('attribute'));
        setBackgroundColor($(this).closest("article.test").prev().find('input.paramBackgroundColor').data('attribute'));
        // test start picture attribute execute
        $(this).closest("article.test").find('.paramP').hide();
        $(this).closest("article.test").prev().find('.paramP').fadeIn(0);
        // test start file execute
        findFile($(this).closest("article.test").prev().find('input.File').data('attribute'));
        // test start question time attribute execute
        clearInterval(SetTQ);
        clearTimeout(SetDisplayTime);
        let paramTimeInput = $(this).closest("article.test").prev().find('input.paramTime').data('attribute');
        if (typeof paramTimeInput !== 'undefined') {
            SetTQ = setTimeQ(paramTimeInput);
        }
    }
});
$("button.example-end").on("click", function(e) {
    endTest(e, $(this));
    window.close();
});
$("button.submit").on("click", function(e) {
    endTest(e, $(this));
});
function endTest(e, element) {
    let container = $(element).closest(".container").parent().prev();
    let checked = validateQuestion(container);
    let checkbox_required = $(container).find('.custom-checkbox').data('action');
    clearTimeout(SetDisplayTime);
    clearInterval(SetTQ);
    clearInterval(i);
    if (checked[0] === false && checked[1] === true || checkbox_required === 'required' && checked[0] === false) {
        e.preventDefault();
        addValidation(container);
        if ($('input.test-slug').data('action') === 'test example' || $('input.test-slug').data('action') === 'test participation') {
            addValidationColor($(element).closest("article.test").find('input.paramBackgroundColor').data('attribute'));
        }
    }
    else {
        clearInterval(i);
        removeValidation(container);
    }
}

// test start functions

// add test validation to required fields
function addValidation(container) {
    $(container).find('input').each(function () {
        $(this).addClass('is-invalid');
    });
    $(container).find('textarea').addClass('is-invalid');
    $(container).find('.invalid-feedback').show();

}
function addValidationColor(color) {
    let colorM = getContrastYIQ(color.substring(1));
    if (colorM === 'black' ) {
        $('.invalid-feedback').css("color", '#B02A37');
        $('.custom-control-input.is-invalid ~ .custom-control-label').css("color", '#B02A37');
        $('.form-control.is-invalid').css("border-color", '#B02A37');
        $('.custom-control-label').addClass('custom-radio-validation-dark');
    }
    else {
        $('.invalid-feedback').css("color", '#E6717C');
        $('.custom-control-input.is-invalid ~ .custom-control-label').css("color", '#E6717C');
        $('.form-control.is-invalid').css("border-color", '#E6717C');
        $('.custom-control-label').addClass('custom-radio-validation-light');
    }
}
// remove test validation from selected fields
$("input").on("click", function(e) {
    removeValidation($(this).closest(".container"));
});

$("textarea").on("click", function(e) {
    removeValidation($(this).closest(".container"));
});
function removeValidation(container) {
    $(container).find('.invalid-feedback').hide();
    $('.form-control.is-invalid').css("border-color", '#80bdff');
    $('.custom-control-label').removeClass('custom-radio-validation-light').removeClass('custom-radio-validation-dark');
    let color = $(container).closest("article.test").find('input.paramBackgroundColor').data('attribute');
    if (color == null)  { color = '#FFFFFF'}
    let colorM = getContrastYIQ(color.substring(1));
    if (colorM === 'black' ) {
        $('.custom-control-input.is-invalid ~ .custom-control-label').css("color", '#000000');
    }
    else {
        $('.custom-control-input.is-invalid ~ .custom-control-label').css("color", '#FFFFFF');
    }
    $(container).find('input').each(function () {
        $(this).removeClass('is-invalid');
    });
    $(container).find('textarea').removeClass('is-invalid');
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
    if (color === 'black' ) {
        $('.text-muted-custom').css("color", '#6c757d');
    }
    else {
        $('.text-muted-custom').css("color", '#c4c7cb');
    }
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
function setTime(time, elem, i, chronometerTime, minutes = 0, seconds = 0, hours = 0 ) {
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
        if (elem !==null) {
            $(elem).html(string);
        }
        if (time >= chronometerTime && chronometerTime !== '0') {
            if ($('input.test-slug').data('action') === 'test participation' ) {
                clearInterval(i);
                $.ajax({
                    type: 'POST',
                    url: $('#slider').data('target'),
                    data: $('#slider').serialize(),
                })
                    .done(function () {
                        let origin  = window.location.origin;
                        let link = origin + "/";
                        window.location.replace(link);
                    })
            } else {
                clearInterval(i);
            }
        }
    },1000);
    return i;
}
// timer
function startTimer(time, elem, i, minutes = 0, seconds = 0, hours = 0) {
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
    time--;
    i = setInterval(function() {
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
        if (--time < 0) {
            if ($('input.test-slug').data('action') === 'test participation' ) {
                clearInterval(i);
                $.ajax({
                    type: 'POST',
                    url: $('#slider').data('target'),
                    data: $('#slider').serialize(),
                })
                    .done(function () {
                    let origin  = window.location.origin;
                    let link = origin + "/";
                    window.location.replace(link);
                })
            } else {
                clearInterval(i);
            }
        }
    },1000 );
    return i;
}
// Question time chronometer
function setTimeQ(input) {
    let seconds=0, minutes=0, time;
    if (typeof paramTimeArray[input] === 'undefined') {
        time = 0;
    }
    else {
        time = paramTimeArray[input];
    }
    SetTQ = setInterval(function() {
        ++time;
        seconds = parseInt((time % 60), 10);
        minutes = parseInt(((time / 60) % 60), 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        document.getElementById(input).value = time;
        paramTimeArray[input] = time;
    },1000);
    return SetTQ;
}
// start display time attributes
function startDisplayTime(element) {
    let attributeDisplayTimeArray = $(element).data('attribute').split(":"), displayTimer;
    if (attributeDisplayTimeArray[1] === '1') {
        $(element).hide();
        displayTimer = setTimeout(function () {
            $(element).fadeIn();
            if (attributeDisplayTimeArray[2] === '1') {
                nextQuestion($(element));
            }
        }, attributeDisplayTimeArray[0] * 1000 + 10);
    }
    if (attributeDisplayTimeArray[1] === '0') {
        $(element).show().find('button').prop('disabled', true);
        displayTimer = setTimeout(function () {
            $(element).find('button').prop('disabled', false);
            if (attributeDisplayTimeArray[2] === '1') {
                nextQuestion($(element));
            }
        }, attributeDisplayTimeArray[0] * 1000 + 10);
    }
    return displayTimer;
}
function findFile(FileArticle) {
    let i = 0;
    $('div.FileList').find('.File').each(function() {
        let File = $(this).data('attribute');
        if (FileArticle === File ) {
            $(this).fadeIn(0);
            i++;
        }
        else {
            $(this).hide();
        }
    });
    if (i === 0){
        let empty = $('div.FileList').find('.vh-file-empty').eq(0);
        empty.fadeIn(0);
    }
}

// Collection of test answer forms

var $collectionHolder;
var $addTagButton = $('<a><i data-toggle="tooltip" data-placement="right" title="Pridėti naują atsakymą" class="p-form text-dark pointer fa fa-plus-square"></i></a>');
var $newLinkLi = $('<div class="form-group row mb-0"><label class="col-sm-2 col-form-label">Atsakymo kūrimas</label></div>').append($addTagButton);

(function() {
    $collectionHolder = $('div.answeroptions');

    $collectionHolder.find('div.d-flex').each(function() {
        addAnswerFormDeleteLink($(this));
    });

    $collectionHolder.append($newLinkLi);
    $collectionHolder.data('index', $collectionHolder.find('input').length);

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
            '<label class="col-sm-12 col-form-label">'+ label + ' ' + number + ' ' + '*' + '</label>' +
            '<div class="col-sm-12 ">' +
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

// Collection of button color attributes

var $collectionHolderBtnC;
var $addButtonBtnC = $('<a><i data-toggle="tooltip" data-placement="right" title="Pridėti naują mygtuko spalvos savybę" class="p-form text-dark pointer fa fa-plus-square"></i></a>');
var $newLinkBtnC = $('<div class="form-group row mb-0"><label class="col-sm-3 col-form-label">Spalvos savybės kūrimas</label></div>').append($addButtonBtnC);

(function() {
    $collectionHolderBtnC = $('div.buttoncolors');

    $collectionHolderBtnC.find('div.d-flex').each(function() {
        addBtnCFormDeleteLink($(this));
    });

    $collectionHolderBtnC.append($newLinkBtnC);
    $collectionHolderBtnC.data('index', $collectionHolderBtnC.find('input').length);

    $addButtonBtnC.on('click', function(e) {
        e.preventDefault();
        addBtnCForm($collectionHolderBtnC, $newLinkBtnC);
    });
})();
function addBtnCForm($collectionHolderBtnC, $newLinkBtnC) {
    var prototype = $collectionHolderBtnC.data('prototype');
    var index = $collectionHolderBtnC.data('index');

    var newForm = prototype;
    newForm = newForm.replace(/__name__/g, index);
    $collectionHolderBtnC.data('index', index + 1);

    var input = newForm.match(/<input(.*?)>/ig);
    var label = newForm.match(/<label(.*?)<\/label>/ig);
    var span = newForm.match(/<span(.*?)<\/span>/ig);
    var number = index+1;

    var $newFormLi =
        $('<div class="form-group row">' +
            '<label class="col-sm-12 col-form-label">'+ label + ' ' + number + ' ' + '*' + '</label>' +
            '<div class="col-sm-12">' +
            '<div class="d-flex">' + input +
            '</div>' +
            span +
            '</div>' +
            '</div>');

addBtnCFormDeleteLink($newFormLi.find('div.d-flex'));
$newLinkBtnC.before($newFormLi);
}
function addBtnCFormDeleteLink($tagFormLi) {
    var $removeFormButton = $('<button class="btn btn-outline-dark btn-no-left-radius">Pašalinti</button>');
    $tagFormLi.append($removeFormButton);

    $removeFormButton.on('click', function(e) {
        e.preventDefault();
        $tagFormLi.parent().parent().remove();
    });
}

// Collection of background color attributes

var $collectionHolderBgC;
var $addButtonBgC = $('<a><i data-toggle="tooltip" data-placement="right" title="Pridėti naują fono spalvos savybę" class="p-form text-dark pointer fa fa-plus-square"></i></a>');
var $newLinkBgC = $('<div class="form-group row mb-0"><label class="col-sm-3 col-form-label">Spalvos savybės kūrimas</label></div>').append($addButtonBgC);

(function() {
    $collectionHolderBgC = $('div.backgroundColors');

    $collectionHolderBgC.find('div.d-flex').each(function() {
        addBgCFormDeleteLink($(this));
    });

    $collectionHolderBgC.append($newLinkBgC);
    $collectionHolderBgC.data('index', $collectionHolderBgC.find('input').length);

    $addButtonBgC.on('click', function(e) {
        e.preventDefault();
        addBgCForm($collectionHolderBgC, $newLinkBgC);
    });
})();
function addBgCForm($collectionHolderBgC, $newLinkBgC) {
    var prototype = $collectionHolderBgC.data('prototype');
    var index = $collectionHolderBgC.data('index');

    var newForm = prototype;
    newForm = newForm.replace(/__name__/g, index);
    $collectionHolderBgC.data('index', index + 1);

    var input = newForm.match(/<input(.*?)>/ig);
    var label = newForm.match(/<label(.*?)<\/label>/ig);
    var span = newForm.match(/<span(.*?)<\/span>/ig);
    var number = index+1;

    var $newFormLi =
        $('<div class="form-group row">' +
            '<label class="col-sm-12 col-form-label">'+ label + ' ' + number + ' ' + '*' + '</label>' +
            '<div class="col-sm-12">' +
            '<div class="d-flex">' + input +
            '</div>' +
            span +
            '</div>' +
            '</div>');

    addBgCFormDeleteLink($newFormLi.find('div.d-flex'));
    $newLinkBgC.before($newFormLi);
}
function addBgCFormDeleteLink($tagFormLi) {
    var $removeFormButton = $('<button class="btn btn-outline-dark btn-no-left-radius">Pašalinti</button>');
    $tagFormLi.append($removeFormButton);

    $removeFormButton.on('click', function(e) {
        e.preventDefault();
        $tagFormLi.parent().parent().remove();
    });
}

// Collection of Time attributes

var $collectionHolderT;
var $addButtonT = $('<a><i data-toggle="tooltip" data-placement="right" title="Pridėti naują laiko skaičiavimo savybę" class="p-form text-dark pointer fa fa-plus-square"></i></a>');
var $newLinkT = $('<div class="form-group row mb-0"><label class="col-sm-3 col-form-label">Laiko savybės kūrimas</label></div>').append($addButtonT);

(function() {
    $collectionHolderT = $('div.times');

    $collectionHolderT.find('div.d-flex').each(function() {
        addTFormDeleteLink($(this));
    });

    $collectionHolderT.append($newLinkT);
    $collectionHolderT.data('index', $collectionHolderT.find('div.d-flex').length);

    $addButtonT.on('click', function(e) {
        e.preventDefault();
        addTForm($collectionHolderT, $newLinkT);
    });
})();
function addTForm($collectionHolderT, $newLinkT) {
    var prototype = $collectionHolderT.data('prototype');
    var index = $collectionHolderT.data('index');

    var newForm = prototype;
    newForm = newForm.replace(/__name__/g, index);
    $collectionHolderT.data('index', index + 1);

    var label = newForm.match(/<label(.*?)<\/label>/ig);
    var input = newForm.match(/<input(.*?)>/ig);
    var inputs = input.toString().split(",");
    var number = index+1;
    var function1 = 'this.value=this.value.slice(0,this.maxLength||0/0);this.value=(this.value < 0 || this.value > 99999) ? (0/0) : this.value;';
    var function2 = 'this.value=this.value.slice(0,this.maxLength||0/0);this.value=(this.value < 0 || this.value > 1) ? (0/0) : this.value';
    var $newFormLi =
        $('<div class="form-group row">' +
            '<label class="col-sm-12 col-form-label">'+ label + ' ' + number + ' ' + '*' + '</label>' +
            '<div class="col-sm-12">' +
            '<div class="d-flex input-group">' +
            inputs[0] + '<div class="input-group-prepend"><span class="input-group-text border-left-0 font-weight-bold">' + ' : ' +'</span></div>'+
            inputs[1] + '<div class="input-group-prepend"><span class="input-group-text border-left-0 border-right-0 font-weight-bold">'+' : '+'</span></div>'+
            inputs[2] +
            '</div>' +
            '</div>' +
            '</div>');

    addTFormDeleteLink($newFormLi.find('div.input-group'));
    $newFormLi.find('.t').attr("oninput", function1);
    $newFormLi.find('.bool').attr("oninput", function2);
    $newLinkT.before($newFormLi);
}
function addTFormDeleteLink($tagFormLi) {
    var $removeFormButton = $('<button class="btn btn-outline-dark btn-no-left-radius">Pašalinti</button>');
    $tagFormLi.append($removeFormButton);

    $removeFormButton.on('click', function(e) {
        e.preventDefault();
        $tagFormLi.parent().parent().remove();
    });
}

// Collection of display Time attributes

var $collectionHolderDT;
var $addButtonDT = $('<a><i data-toggle="tooltip" data-placement="right" title="Pridėti naują rodymo trukmės savybę" class="p-form text-dark pointer fa fa-plus-square"></i></a>');
var $newLinkDT = $('<div class="form-group row mb-0"><label class="col-sm-3 col-form-label">Rodymo trukmės savybės kūrimas</label></div>').append($addButtonDT);

(function() {
    $collectionHolderDT = $('div.displayTimes');

    $collectionHolderDT.find('div.d-flex').each(function() {
        addDTFormDeleteLink($(this));
    });

    $collectionHolderDT.append($newLinkDT);
    $collectionHolderDT.data('index', $collectionHolderDT.find('div.d-flex').length);

    $addButtonDT.on('click', function(e) {
        e.preventDefault();
        addDTForm($collectionHolderDT, $newLinkDT);
    });
})();
function addDTForm($collectionHolderDT, $newLinkDT) {
    var prototype = $collectionHolderDT.data('prototype');
    var index = $collectionHolderDT.data('index');

    var newForm = prototype;
    newForm = newForm.replace(/__name__/g, index);
    $collectionHolderDT.data('index', index + 1);

    var label = newForm.match(/<label(.*?)<\/label>/ig);
    var input = newForm.match(/<input(.*?)>/ig);
    var inputs = input.toString().split(",");
    var number = index+1;
    var function1 = 'this.value=this.value.slice(0,this.maxLength||0/1);this.value=(this.value < 0 || this.value > 99999) ? (0/0) : this.value;';
    var function2 = 'this.value=this.value.slice(0,this.maxLength||0/1);this.value=(this.value < 0 || this.value > 1) ? (0/0) : this.value';
    var $newFormLi =
        $('<div class="form-group row">' +
            '<label class="col-sm-12 col-form-label">'+ label + ' ' + number + ' ' + '*' + '</label>' +
            '<div class="col-sm-12 ">' +
            '<div class="d-flex input-group">' +
            inputs[0] + '<div class="input-group-prepend"><span class="input-group-text border-left-0 font-weight-bold">' + ' : ' +'</span></div>'+
            inputs[1] + '<div class="input-group-prepend"><span class="input-group-text border-left-0 border-right-0 font-weight-bold">'+' : '+'</span></div>'+
            inputs[2] +
            '</div>' +
            '</div>' +
            '</div>');

    addDTFormDeleteLink($newFormLi.find('div.input-group'));
    $newFormLi.find('.t').attr("oninput", function1);
    $newFormLi.find('.bool').attr("oninput", function2);
    $newLinkDT.before($newFormLi);
}
function addDTFormDeleteLink($tagFormLi) {
    var $removeFormButton = $('<button class="btn btn-outline-dark btn-no-left-radius">Pašalinti</button>');
    $tagFormLi.append($removeFormButton);

    $removeFormButton.on('click', function(e) {
        e.preventDefault();
        $tagFormLi.parent().parent().remove();
    });
}

// Collection of picture attributes

var $collectionHolderPic;
var $addButtonPic = $('<a><i data-toggle="tooltip" data-placement="right" title="Pridėti naują paveikslėlio savybę" class="p-form text-dark pointer fa fa-plus-square"></i></a>');
var $newLinkPic = $('<div class="form-group row mb-0"><label class="col-sm-3 col-form-label">Paveikslėlio savybės kūrimas</label></div>').append($addButtonPic);

(function() {
    $collectionHolderPic = $('div.pictures');

    $collectionHolderPic.find('div.input-group-append').each(function() {
        addPicFormDeleteLink($(this));
    });

    $collectionHolderPic.append($newLinkPic);
    $collectionHolderPic.data('index', $collectionHolderPic.find('input').length);

    $addButtonPic.on('click', function(e) {
        e.preventDefault();
        addPicForm($collectionHolderPic, $newLinkPic);
    });
})();
function addPicForm($collectionHolderPic, $newLinkPic) {
    var prototype = $collectionHolderPic.data('prototype');
    var index = $collectionHolderPic.data('index');

    var newForm = prototype;
    newForm = newForm.replace(/__name__/g, index);
    $collectionHolderPic.data('index', index + 1);

    var input = newForm.match(/<input(.*?)>/ig);
    var label = newForm.match(/<label(.*?)<\/label>/ig);
    var span = newForm.match(/<span(.*?)<\/span>/ig);
    var number = index+1;

    var $newFormLi =
        $('<div class="mb-4">' +
        '<div class="input-group ">' +
            '<div class="custom-file">' +
            input +
            label +
            '</div>' +
            '<div class="input-group-append">' +
            '</div>' +
          '</div>'+
            span +
        '</div>'
            );

    addPicFormDeleteLink($newFormLi.find('div.input-group-append'));
    $newLinkPic.before($newFormLi);
}
function addPicFormDeleteLink($tagFormLi) {
    var $removeFormButton = $('<button class="btn btn-outline-dark">Pašalinti</button>');
    $tagFormLi.append($removeFormButton);

    $removeFormButton.on('click', function(e) {
        e.preventDefault();
        $tagFormLi.parent().parent().remove();
    });
}

// // Collection of test question forms

var $collectionHolder2;
var $addTestQuestionButton = $('<a><i data-toggle="tooltip" data-placement="right" title="Pridėti naują klausimą" class="p-form text-dark pointer fa fa-plus-square"></i></a>');
var $newLinkLi2 = $('<div class="form-group row mb-0"><label class="col-sm-2 col-form-label">Klausimo pridėjimas</label></div>').append($addTestQuestionButton);
(function() {
    $collectionHolder2 = $('div.testquestions');
    $collectionHolder2.find('div.d-flex').each(function() {
        addTestQuestionFormDeleteLink($(this));
    });
    $collectionHolder2.append($newLinkLi2);
    $collectionHolder2.data('index', $collectionHolder2.find('div.d-flex').length);
    // updateSelectOptions();
    $addTestQuestionButton.on('click', function(e) {
        e.preventDefault();
        addTestQuestionForm($collectionHolder2, $newLinkLi2);
    });

})();

function addTestQuestionForm($collectionHolder2, $newLinkLi2) {

    var prototype = $collectionHolder2.data('prototype');
    var index = $collectionHolder2.data('index');

    var newForm = prototype;
    newForm = newForm.replace(/__name__label__/g, index);
    newForm = newForm.replace(/__name__/g, index);

    var select = newForm.match(/<select(.*?)>/ig);
    var label = newForm.match(/<label(.*?)<\/label>/ig);
    var options = prototype.match(/<option(.*?)<\/option>/ig);
    var number = index + 1;
    $collectionHolder2.data('index', index + 1);

    let selected = [];
    $collectionHolder2.find('option:selected').each(function () {
        if ($(this).val() !== '') {
            selected.push($(this).val());
        }
    });
    let newOptionsString = '';
    $.each(options, function (index, value) {
        let isSelected = false;
        for (let j = 0; j < selected.length; j++) {
            if ($(value).val() === selected[j] && $(selected[j]) !== '') {
                isSelected = true;
            }
        }
        if (!isSelected) {
            newOptionsString = newOptionsString + value;
        }
    });
    var $newFormLi2 =
        $('<div class="form-group row">' +
            '<label class="col-sm-12 col-form-label">'+ label + ' ' + number + '*' + '</label>' +
            '<div class="col-sm-12 ">' +
            '<div class="d-flex">' + select + newOptionsString +'</select>' +
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
        updateSelectOptions();
    });
}

$(document).on('change','select.testSelect',function (){
    updateSelectOptions();
});

function updateSelectOptions() {
    var $collectionHolder3;
    $collectionHolder3 = $('div.testquestions');
    var prototype2 = $collectionHolder3.data('prototype');
    var oA2 = prototype2.match(/<option(.*?)<\/option>/ig);
    var options = oA2;

    let selected = [];
    $collectionHolder3.find('option:selected').each(function () {
        if ($(this).val() !== '') {
            selected.push($(this).val());
        }
    });
    var selectElem = document.getElementsByClassName('testSelect');
    $.each(selectElem, function () {
        let newOptionsString = '',
            select = $(this),
            selectedOption = '';

        selectedOption = $(select).find('option:selected').val();

        $.each(options, function (index, value) {
            let optionString = '';
            if ($(value).val().toString() === selectedOption) {
                optionString = '<option value="' + $(value).val() + '" selected="selected">' + $(value).text() + '</option>';
            }
            else {
                let isSelected = false;
                for (let j = 0; j < selected.length; j++) {
                    if ($(value).val() === selected[j] && $(selected[j]) !== '') {
                        isSelected = true;
                    }
                }
                if (!isSelected) {
                    optionString = '<option value="' + $(value).val() + '">' + $(value).text() + '</option>';
                }
            }
            newOptionsString = newOptionsString + optionString;
        });
        $(select).html(newOptionsString);
    });
}

// Table header animation

const contentTop = $('.table-header-sticky').offset().top;
$( window ).scroll(function() {
    const contentTop2 = $('.bd-navbar').offset().top + 50;
    if (contentTop2 >= contentTop ) {
        $('#tableheader').removeClass('table-header').addClass('header-transform');
    }
    else {
        $('#tableheader').removeClass('header-transform').addClass('table-header');
    }
});