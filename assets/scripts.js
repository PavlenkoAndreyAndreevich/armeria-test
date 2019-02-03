$(function(){

    function showResult(res){
        $('.contribution span').html(res);
    }

    $('.button').on('click', function (e) {
        e.preventDefault();

        var summn1 = $('#amount').val();
        var daysn = $('#datepicker').val();
        var years = $('select').val();
        var summadd = $('#amount_2').val();
        var myRadio = $("input[name=radio_button_2]");
        var checkedValueRadio = myRadio.filter(":checked").val();

        $.ajax({
            url: '/calc.php',
            type: 'POST',
            data:{summn1:summn1, date:daysn, years:years, summ_add:summadd, radio_button_2:checkedValueRadio},
            success: function(res){
                if(!res) alert('Заполните все поля формы');
                showResult(res);

            },
            error: function(){
                alert('Заполните все поля формы!');
            }
        });
    });


        $( "#datepicker" ).datepicker({dateFormat: 'd.m.yy'});

        $( ".slider-range-min" ).slider({
            range: "min",
            value: 1000,
            min: 1000,
            max: 3000000,
            step:1000,
            slide: function( event, ui ) {
                $( "#amount" ).val( ui.value );
            }
        });
        $( "#amount" ).val(  $( ".slider-range-min" ).slider( "value" ) );

        $( "#slider-range-min" ).slider({
            range: "min",
            value: 1000,
            min: 1000,
            max: 3000000,
            step:1000,
            slide: function( event, ui ) {
                $( "#amount_2" ).val( ui.value );
            }
        });
        $( "#amount_2" ).val(  $( "#slider-range-min" ).slider( "value" ) );

});