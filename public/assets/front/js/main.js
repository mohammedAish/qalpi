(function($) {

    var form = $("#signup-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            patient_name: {
                required: true,
            },
            gender: {
                required: true,
            },
            nationality: {
                required: true,
            },
            class: {
                required: true,
            },
            phone: {
                required: true,
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            patient_name: {
                patient_name: 'الاسم مطلوب <i class="zmdi zmdi-info"></i>'
            },
            gender: {
                gender: 'الجنس مطلوب <i class="zmdi zmdi-info"></i>'
            },
            nationality: {
                nationality: 'الجنسية مطلوب <i class="zmdi zmdi-info"></i>'
            },
            class: {
                class: 'الفئة مطلوب <i class="zmdi zmdi-info"></i>'
            },
            phone: {
                phone: ' رقم الجوال مطلوب<i class="zmdi zmdi-info"></i>'
            },
            email: {
                email: 'البريد الالكتروني مطلوب <i class="zmdi zmdi-info"></i>'
            },
        },
        onfocusout: function(element) {
            $(element).valid();
        },
    });
    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        labels: {
            previous: 'السابق',
            next: 'التالي',
            finish: 'ارسال',
            current: ''
        },
        titleTemplate: '<div class="title"><span class="number">#index#</span>#title#</div>',
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            // console.log(form.steps("getCurrentIndex"));
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            console.log(getCurrentIndex);
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert('Sumited');
        },
        // onInit : function (event, currentIndex) {
        //     event.append('demo');
        // }
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });


    $.dobPicker({
        daySelector: '#expiry_date',
        monthSelector: '#expiry_month',
        yearSelector: '#expiry_year',
        dayDefault: 'DD',
        yearDefault: 'YYYY',
        minimumAge: 0,
        maximumAge: 120
    });

    $('#password').pwstrength();

    $('#button').click(function() {
        $("input[type='file']").trigger('click');
    })

    $("input[type='file']").change(function() {
        $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
    })

})(jQuery);
