/*!

 =========================================================
 * Bootstrap Wizard - v1.1.1
 =========================================================

 * Product Page: https://www.creative-tim.com/product/bootstrap-wizard
 * Copyright 2017 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/creativetimofficial/bootstrap-wizard/blob/master/LICENSE.md)

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 */

// Get Shit Done Kit Bootstrap Wizard Functions

searchVisible = 0;
transparent = true;

$(document).ready(function() {

    /*  Activate the tooltips      */
    $('[rel="tooltip"]').tooltip();

    // Code for the Validator
    var $validator = $('.wizard-card .tab-content form').validate({
        rules: {
            patient_name: {
                required: true,
            },
            gender: {
                required: true,
            },
            id_number: {
                required: true,
            },
            id_number_end: {
                required: true,
            },
            phone: {
                required: true,
            },
            email: {
                required: true,
            },

        },
        messages: {
            patient_name: {
                patient_name: 'الاسم مطلوب <i class="zmdi zmdi-info"></i>'
            },
            gender: {
                gender: 'الجنس مطلوب <i class="zmdi zmdi-info"></i>'
            },
            phone: {
                phone: ' رقم الجوال مطلوب<i class="zmdi zmdi-info"></i>'
            },
            email: {
                email: 'البريد الالكتروني مطلوب <i class="zmdi zmdi-info"></i>'
            },
        },
    });

    // Wizard Initialization
    $('.wizard-card').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'nextSelector': '.btn-next',
        'previousSelector': '.btn-previous',

        onNext: function(tab, navigation, index) {
            var $valid = $('.wizard-card .tab-content form').valid();
            if (!$valid) {
                $validator.focusInvalid();
                return false;
            }
        },

        onInit: function(tab, navigation, index) {

            //check number of tabs and fill the entire row
            var $total = navigation.find('li').length;
            $width = 95 / $total;
            var $wizard = navigation.closest('.wizard-card');

            $display_width = $(document).width();

            if ($display_width < 600 && $total > 3) {
                $width = 50;
            }

            navigation.find('li').css('width', $width + '%');
            $first_li = navigation.find('li:first-child a').html();
            $moving_div = $('<div class="moving-tab">' + $first_li + '</div>');
            $('.wizard-card .wizard-navigation').append($moving_div);
            refreshAnimation($wizard, index);
            $('.moving-tab').css('transition', 'transform 0s');
        },

        onTabClick: function(tab, navigation, index) {

            var $valid = $('.wizard-card form').valid();

            if (!$valid) {
                return false;
            } else {
                return true;
            }
        },

        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index + 1;

            var $wizard = navigation.closest('.wizard-card');

            // If it's the last tab then hide the last button and show the finish instead

            if ($current == 1) {
                $("#submit1").css('display', 'block');
                $("#submit3").css('display', 'none');
                $("#sendd").css('display', 'none');
                $($wizard).find('.btn-finish').hide();

            }
            if ($current == 2) {
                $("#submit1").css('display', 'none');
                $("#sendd").css('display', 'none');
                $("#submit3").css('display', 'none');
                $($wizard).find('.btn-finish').hide();
            }
            if ($current >= 3) {
                $("#submit1").css('display', 'none');
                $("#sendd").css('display', 'none');
                $("#submit3").css('display', 'block');
                $($wizard).find('.btn-finish').hide();
            }
            if ($current == 5) {
                $("#submit1").css('display', 'none');
                $("#sendd").css('display', 'none');
                $("#submit3").css('display', 'none');
                $($wizard).find('.btn-finish').show();
            }



            button_text = navigation.find('li:nth-child(' + $current + ') a').html();

            setTimeout(function() {
                $('.moving-tab').text(button_text);
            }, 150);

            var checkbox = $('.footer-checkbox');

            if (!index == 0) {
                $(checkbox).css({
                    'opacity': '0',
                    'visibility': 'hidden',
                    'position': 'absolute'
                });
            } else {
                $(checkbox).css({
                    'opacity': '1',
                    'visibility': 'visible'
                });
            }

            refreshAnimation($wizard, index);
        },


    });

    $('#submit1').on('click', function(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var form = $('#signup-form1')[0];

        var data = new FormData(form);
        var patient_name = $("input[name='patient_name']").val();
        data.append('patient_name', patient_name);
        var gender = $('#gender option:selected').val();
        data.append('gender', gender);
        var phone = $("input[name='phone']").val();
        data.append('phone', phone);
        var email = $("input[name='email']").val();
        data.append('email', email);
        var id_number = $("input[name='id_number']").val();
        data.append('id_number', id_number);
        var id_number_end = $("input[name='id_number_end']").val();
        data.append('id_number_end', id_number_end);

        $.ajax({
            method: 'post',
            url: "appstore",
            processData: false,
            contentType: false,
            data: data,
            success: function(data) {

                if (data.status == false) {
                    $(".wizard-container").css('display', 'none');

                    Swal.fire({
                        title: 'نأسف لا يمكنك التسجيل في الوقت الحالي',
                        imageUrl: 'data:image/jpeg;base64,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',
                        imageWidth: '200px',
                        imageHeight: '200px',
                        showCancelButton: false,
                        width: '500px',
                        height: '600px',
                        timer: 99999,
                    })

                    .then(() => {
                        window.location.href = 'https://qalbi.sa/';

                    });
                }
            },

        });


    });
    $('#submit2').on('click', function(e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var form = $('#signup-form2')[0];

        var data = new FormData(form);
        var code = $("input[name='code']").val();
        data.append('code', code);

        $.ajax({
            method: 'post',
            url: "storecode",
            processData: false,
            contentType: false,
            data: data,
            success: function(data) {
                if (data.status == true) {
                    $('#msg_success').show();
                    $("#sendd").css('display', 'block');
                } else {
                    $('#msg_error').show();
                }
            },
            error: function(reject) {
                ("#msg_error").append("error");

            }
        });
    });

    $('#save').on('click', function(e) {
        $(".loader").delay(99999).fadeOut("fast");
        $(".loader").css('display', 'block');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var form = $('#signup-form3')[0];

        var data = new FormData(form);
        var nationality = $("input[name='nationality']").val();
        data.append('nationality', nationality);
        var clas = $('#classs option:selected').val();
        data.append('class', clas);
        var city = $('#city option:selected').val();
        data.append('city', city);
        var neighborhood = $('#neighborhood option:selected').val();
        data.append('neighborhood', neighborhood);
        var rentـvalue = $("input[name='rentـvalue']").val();
        data.append('rentـvalue', rentـvalue);
        var relativeـname = $("input[name='relativeـname']").val();
        data.append('relativeـname', relativeـname);
        var phoneـname = $("input[name='phoneـname']").val();
        data.append('phoneـname', phoneـname);
        var relative = $("input[name='relative']").val();
        data.append('relative', relative);
        var salary = $("input[name='salary']").val();
        data.append('salary', salary);
        var medical_insurance_class = $('#medical_insurance_class option:selected').val();
        data.append('medical_insurance_class', medical_insurance_class);
        var current_job = $("input[name='current_job']").val();
        data.append('current_job', current_job);
        var telphone = $("input[name='telphone']").val();
        data.append('telphone', telphone);
        var medical_specialty = $('#medical_specialty option:selected').val();
        data.append('medical_specialty', medical_specialty);
        var patient_condition = $("input[name='patient_condition']").val();
        data.append('patient_condition', patient_condition);
        var id_photo = $("input[name='id_photo']").val();
        data.append('id_photo', id_photo);
        var medical_report = $("input[name='medical_report']").val();
        data.append('medical_report', medical_report);
        var housing_contract = $("input[name='housing_contract']").val();
        data.append('housing_contract', housing_contract);
        var definition_salary = $("input[name='definition_salary']").val();
        data.append('definition_salary', definition_salary);
        var visa_photo = $("input[name='visa_photo']").val();
        data.append('visa_photo', visa_photo);
        var other = $("input[name='other']").val();
        data.append('other', other);


        $.ajax({
            method: 'post',
            url: "storeother",
            processData: false,
            contentType: false,
            data: data,
            success: function(data) {
                $(".loader").css('display', 'none');

                Swal.fire({
                    title: ' تم التسجيل بنجاح',
                    imageUrl: 'https://cdn-icons-png.flaticon.com/512/189/189677.png?w=740',
                    imageWidth: '100px',
                    imageHeight: '100px',
                    showConfirmButton: false,
                    width: '500px',
                    height: '600px',
                    timer: 2000,
                })
                window.location.href = 'http://www.qalbi.sa/';
            }
        });
    });
    // Prepare the preview for profile picture
    $("#wizard-picture").change(function() {
        readURL(this);
    });

    $('[data-toggle="wizard-radio"]').click(function() {
        wizard = $(this).closest('.wizard-card');
        wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
        $(this).addClass('active');
        $(wizard).find('[type="radio"]').removeAttr('checked');
        $(this).find('[type="radio"]').attr('checked', 'true');
    });

    $('[data-toggle="wizard-checkbox"]').click(function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).find('[type="checkbox"]').removeAttr('checked');
        } else {
            $(this).addClass('active');
            $(this).find('[type="checkbox"]').attr('checked', 'true');
        }
    });

    $('.set-full-height').css('height', 'auto');
    //


});



//Function to show image before upload

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(window).resize(function() {
    $('.wizard-card').each(function() {
        $wizard = $(this);
        index = $wizard.bootstrapWizard('currentIndex');
        refreshAnimation($wizard, index);

        $('.moving-tab').css({
            'transition': 'transform 0s',

        });
    });
});

function refreshAnimation($wizard, index) {
    total_steps = $wizard.find('li').length;
    move_distance = $wizard.width() / total_steps;
    step_width = move_distance;
    move_distance *= index;

    $wizard.find('.moving-tab').css('width', step_width);
    $('.moving-tab').css({
        'transform': 'translate3d(-' + move_distance + 'px, 0, 0)',
        'transition': 'all 0.3s ease-out',

    });
}

function debounce(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this,
            args = arguments;
        clearTimeout(timeout);
        timeout = setTimeout(function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        }, wait);
        if (immediate && !timeout) func.apply(context, args);
    };
};