

$(document).ready(function(){
    $('.js-toggle-sidemenu').click(function(e){
        e.preventDefault();

        $(this).toggleClass('is-active');
        $('#wrapper').toggleClass('toggled');
    });

    $('.js-create-website').click( function (e) {
        e.preventDefault();

        $('#mainmodal').modal('show');
    });

    $('.showmodal').click( function (e) {
        e.preventDefault();

        $('#mainmodal').modal('show');
    });

    $('.js-create-website-save').click(function(e){
        e.preventDefault();

        var json = {};

        var allFilled = true;

        $('#createWebsite').find('[required]').each(function(){
            if($(this).val() == ""){
                allFilled = false;
                $(this).parents('.alert').removeClass('alert-success').addClass('alert-danger');
            } else {
                $(this).parents('.alert').removeClass('alert-danger').addClass('alert-success');
            }
        });

        if(allFilled) {
            json['website_name'] = $('input[name="website_name"]').val();
            json['website_url_local'] = $('input[name="website_url_local"]').parents('.input-group').find('.input-group-addon').first().text() + $('input[name="website_url_local"]').val() + $('input[name="website_url_local"]').parents('.input-group').find('.input-group-addon').last().text();
            json['website_path_local'] = $('input[name="website_path_local"]').parents('.input-group').find('.input-group-addon').text() + $('input[name="website_path_local"]').val();
            json['website_url_remote'] = $('input[name="website_url_remote"]').parents('.input-group').find('.input-group-addon').first().text() + $('input[name="website_url_remote"]').val() + $('input[name="website_url_remote"]').parents('.input-group').find('.input-group-addon').last().text();
            json['website_path_remote'] = $('input[name="website_path_remote"]').parents('.input-group').find('.input-group-addon').text() + $('input[name="website_path_remote"]').val();
            json['website_git'] = $('input[name="website_git"]').val();

            var data = {
                "websiteData": JSON.stringify(json),
                "_token": $('#createWebsite').find('input[name="_token"]').val()
            };

            $.ajax({
                type: "POST",
                url: '/api/websites/create',
                data: data,
                success: function (response) {
                    var responseDetails = response;
                    if(typeof responseDetails !='object'){
                        responseDetails = JSON.parse(response);
                    }
                    if (responseDetails.id !== undefined) {
                        $('#mainmodal').modal('hide');
                        setTimeout(function(){
                            window.location = window.location.href;
                        })
                    } else {
                        console.log(response);
                        alert('Couldn\'t save the brand at the moment');
                    }
                },
                fail: function (response) {
                    console.log(response);
                    alert('Couldn\'t save the brand at the moment');
                }
            });

        } else {
            alert('Some fields are empty');
        }

        console.log(json);
    });
});