$(document)
.on("submit", "form.js-register, form.js-login", function(event) {
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);

    var dataObj = {
        firstname: $("input[type='firstname']", _form).val(),
        secondname: $("input[type='secondname']", _form).val(),
        dateOfBirth: $("input[type='date']", _form).val(),
        department: $("input[type='department']", _form).val(),
        telephone: $("input[type='telephone']", _form).val(),
        username: $("input[type='username']", _form).val(),
        email: $("input[type='email']", _form).val(),
        password: $("input[type='password']", _form).val()
       
    };
    if(dataObj.firstname.length == 0){
        _error
            .text("Please enter your first name")
            .show();
        return false;
    }
    else if(dataObj.secondname.length == 0){
        _error
            .text("Please enter your secondname")
            .show();
        return false;
    }
    else if(dataObj.dateOfBirth.length == 0){
        _error
            .text("Please enter your date of birth")
            .show();
        return false;
    }
    else if(dataObj.department.length == 0){
        _error
            .text("Please enter your department")
            .show();
        return false;
    }
    else if(dataObj.telephone.length == 0){
        _error
            .text("Please enter your contact number")
            .show();
        return false;
    }
    else if(dataObj.username.length == 0){
        _error
            .text("Please enter your Username")
            .show();
        return false;
    }
   else if(dataObj.email.length < 6) {
        _error
            .text("Please enter a valid email address")
            .show();
        return false;
    }
    else if(dataObj.password.length == 0){
        _error
            .text("Please enter password you want to use")
            .show();
        return false;    
    } else if (dataObj.password.length < 11) {
        _error
            .text("Please enter a passphrase that is at least 11 characters long.")
            .show();
        return false;
    }
    // Assuming the code gets this far, we can start the ajax process
    _error.hide();

    $.ajax({
        type: 'POST',
        url: '/ajax/register.php',
        data: dataObj,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(data) {
        // Whatever data is 
        if(data.redirect !== undefined) {
            window.location = data.redirect;
        } else if(data.error !== undefined) {
            _error
                .text(data.error)
                .show();
        }
    })
    .fail(function ajaxFailed(e) {
        // This failed 
    })
    .always(function ajaxAlwaysDoThis(data) {
        // Always do
        console.log('Always');
    })

    return false;
})
// 
.on("submit", "form.js-login", function(event) {
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);

    var dataObj = {
        email: $("input[type='email']", _form).val(),
        password: $("input[type='password']", _form).val()
    };

    if(dataObj.email.length < 6) {
        _error
            .text("Please enter a valid email address")
            .show();
        return false;
    } else if (dataObj.password.length < 11) {
        _error
            .text("Please enter a passphrase that is at least 11 characters long.")
            .show();
        return false;
    }

    // Assuming the code gets this far, we can start the ajax process
    _error.hide();

    $.ajax({
        type: 'POST',
        url: '/ajax/login.php',
        data: dataObj,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(data) {
        // Whatever data is 
        if(data.redirect !== undefined) {
            window.location = data.redirect;
        } else if(data.error !== undefined) {
            _error
                .html(data.error)
                .show();
        }
    })
    .fail(function ajaxFailed(e) {
        // This failed 
    })
    .always(function ajaxAlwaysDoThis(data) {
        // Always do
        console.log('Always');
    })

    return false;
})

$(window).ready(function(){

//------- Addnew & tab -------
    $('.active').click(function(){
        $('.content table').show();
        $('.add').hide();
    }); 
    $('.addn').click(function(){
        $('.add').show();
        $('.content table').hide();
    });


    $('.admin-btn').click(function(){
        $('.head ul .admin-show').toggleClass("show");
        $('.head ul .first').toggleClass("rotate");
      });
    $('nav ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
    });

//---- Dashboard js------
        $('.dash-head span').click(function(){
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
        });

        $('.admin-btn').click(function(){
            $('.dash-head ul .admin-show').toggleClass("show");
            $('.dash-head ul .first').toggleClass("rotate");
        });

        $('.dash-head ul li').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });

//------ Addnew Employee and Item -------

});
