/* There are multiple different button functions to load websites depending on the business. 
These numerous functions can all be simplifed to just work based upon a class ('.dBus' for example). I now developed by using as little 
repeating functions as possible
*/

$(document).ready(function () {
        
        
    //Navigate to the selected page /business, or the main page if
    $("a").on("click", function(){
        if($(this).text() == "Home")
        window.location = "index.php";
    })
    
    //Load fashion business when selected and update all of the pages necessary  
    $("#fashDrop").on("click", "a", function () {
        console.log(this);

        console.log($(this).text());
        console.log();
        $("#locationNav").find("li.active").removeClass("active");


        //Add the active class to the parent
        $(this).parent().parent('li').addClass('active');
        $.ajax({
            url: "queries/load_business.php",
            type: "POST",
            cache: false,
            data: { BUSINESS_ID: $(this).attr('id') },
            success: function (result) {
                console.log(result);
                $("#body").empty();
                $("#footerInfo").empty();
                $("#body").append("<br/> \
                    <div class='header'>\
                        <h1 class='title'>"+ result[0].BUSINESS_NAME + "</h1>\
                        <hr />\
                        <div class = 'color'>Contact us<br/>\
                        <div>"+ result[0].BUSINESS_CONTACT + "</div></div><br/>\
                    </div>");
                $("#body").append("<div id = 'carouselFashion' class='carousel slide col-md-4' data-ride='carousel'>\
                            <div class='carousel-inner'>\
                                <div class='carousel-item active'>\
                                    <img class='d-block' src="+ result[0].PICTURE_URL + " alt='First slide'>\
                                </div>");
                for (var i = 1; i < result.length; i++) {
                    $("#body").append("<div class='carousel-item'>\
                                <img class='d-block' src="+ result[i].PICTURE_URL + " alt=" + i + "slide>\
                            </div>");
                }
                $("#body").append("</div>\
                      <a class='carousel-control-prev' href='#carouselFashion' role='button' data-slide='prev'>\
                        <span class= 'carousel-control-prev-icon' aria-hidden='true'></span>\
                        <span class='sr-only'>Previous</span></a >\
                        <a class='carousel-control-next' href='#carouselFashion' role='button' data-slide='next'>\
                            <span class='carousel-control-next-icon' aria-hidden='true'></span>\
                            <span class='sr-only'>Next</span>\
                        </a></div>");
                $("#footerInfo").append("<p> Current Location: Home/" + result[0].BUSINESS_CATEGORY + "/" + result[0].BUSINESS_NAME + "</p>                 <p> Made by Derrick Leeper </p>\       <p>For more information, please contact <a href='mailto:Derrick.Leeper@gmail.com'>Derrick Leeper</a></p>\ <br/>\
                    <br/>\
                ")
            },
            error: function (e, err) {
                console.error(e.responseText)
            }
        })
    })
        
    $("#restaurants").on("click", "a", function () {
        console.log(this);

        console.log($(this).text());
        console.log();
        $("#locationNav").find("li.active").removeClass("active");


        //Add the active class to the parent
        $(this).parent().parent('li').addClass('active');
        $.ajax({
            url: "queries/load_business.php",
            type: "POST",
            cache: false,
            data: { BUSINESS_ID: $(this).attr('id') },
            success: function (result) {
                console.log(result);
                $("#body").empty();
                $("#footerInfo").empty();
                $("#body").append("<br/> \
                    <div class='header'>\
                        <h1 class='title'>"+ result[0].BUSINESS_NAME + "</h1>\
                        <hr />\
                        <div class = 'color'>Contact us<br/>\
                        <div>"+ result[0].BUSINESS_CONTACT + "</div></div><br/>\
                    </div>");
                $("#body").append("<div id = 'carouselFashion' class='carousel slide col-md-4' data-ride='carousel'>\
                            <div class='carousel-inner'>\
                                <div class='carousel-item active'>\
                                    <img class='d-block' src="+ result[0].PICTURE_URL + " alt='First slide'>\
                                </div>");
                for (var i = 1; i < result.length; i++) {
                    $("#body").append("<div class='carousel-item'>\
                                <img class='d-block' src="+ result[i].PICTURE_URL + " alt=" + i + "slide>\
                            </div>");
                }
                $("#body").append("</div>\
                      <a class='carousel-control-prev' href='#carouselFashion' role='button' data-slide='prev'>\
                        <span class= 'carousel-control-prev-icon' aria-hidden='true'></span>\
                        <span class='sr-only'>Previous</span></a >\
                        <a class='carousel-control-next' href='#carouselFashion' role='button' data-slide='next'>\
                            <span class='carousel-control-next-icon' aria-hidden='true'></span>\
                            <span class='sr-only'>Next</span>\
                        </a></div>");
                $("#footerInfo").append("<p> Current Location: Home/" + result[0].BUSINESS_CATEGORY + "/" + result[0].BUSINESS_NAME + "</p>                 <p> Made by Derrick Leeper </p>\       <p>For more information, please contact <a href='mailto:Derrick.Leeper@gmail.com'>Derrick Leeper</a></p>\ <br/>\
                    <br/>\
                ")
            },
            error: function (e, err) {
                console.error(e.responseText)
            }
        })
    })

    $("#fashion").on("click", "a", function () {
        console.log(this);

        console.log($(this).text());
        console.log();
        $("#locationNav").find("li.active").removeClass("active");


        //Add the active class to the parent
        $(this).parent().parent('li').addClass('active');
        $.ajax({
            url: "queries/load_business.php",
            type: "POST",
            cache: false,
            data: { BUSINESS_ID: $(this).attr('id') },
            success: function (result) {
                console.log(result);
                $("#body").empty();
                $("#footerInfo").empty();
                $("#body").append("<br/> \
                    <div class='header'>\
                        <h1 class='title'>"+ result[0].BUSINESS_NAME + "</h1>\
                        <hr />\
                        <div class = 'color'>Contact us<br/>\
                        <div>"+ result[0].BUSINESS_CONTACT + "</div></div><br/>\
                    </div>");
                $("#body").append("<div id = 'carouselFashion' class='carousel slide col-md-4' data-ride='carousel'>\
                            <div class='carousel-inner'>\
                                <div class='carousel-item active'>\
                                    <img class='d-block' src="+ result[0].PICTURE_URL + " alt='First slide'>\
                                </div>");
                for (var i = 1; i < result.length; i++) {
                    $("#body").append("<div class='carousel-item'>\
                                <img class='d-block' src="+ result[i].PICTURE_URL + " alt=" + i + "slide>\
                            </div>");
                }
                $("#body").append("</div>\
                      <a class='carousel-control-prev' href='#carouselFashion' role='button' data-slide='prev'>\
                        <span class= 'carousel-control-prev-icon' aria-hidden='true'></span>\
                        <span class='sr-only'>Previous</span></a >\
                        <a class='carousel-control-next' href='#carouselFashion' role='button' data-slide='next'>\
                            <span class='carousel-control-next-icon' aria-hidden='true'></span>\
                            <span class='sr-only'>Next</span>\
                        </a></div>");
                $("#footerInfo").append("<p> Current Location: Home/" + result[0].BUSINESS_CATEGORY + "/" + result[0].BUSINESS_NAME + "</p>                 <p> Made by Derrick Leeper </p>\       <p>For more information, please contact <a href='mailto:Derrick.Leeper@gmail.com'>Derrick Leeper</a></p>\ <br/>\
                    <br/>\
                ")
            },
            error: function (e, err) {
                console.error(e.responseText)
            }
        })
    })


    $("#enteDrop").on("click", "a", function () {
        console.log(this);

        console.log($(this).text());
        console.log();
        $("#locationNav").find("li.active").removeClass("active");


        //Add the active class to the parent
        $(this).parent().parent('li').addClass('active');
        $.ajax({
            url: "queries/load_business.php",
            type: "POST",
            cache: false,
            data: { BUSINESS_ID: $(this).attr('id') },
            success: function (result) {
                console.log(result);
                $("#body").empty();
                $("#footerInfo").empty();
                $("#body").append("<br/> \
                    <div class='header'>\
                        <h1 class='title'>"+ result[0].BUSINESS_NAME + "</h1>\
                        <hr />\
                        <div class = 'color'>Contact us<br/>\
                        <div>"+ result[0].BUSINESS_CONTACT + "</div></div><br/>\
                    </div>");
                $("#body").append("<div id = 'carouselFashion' class='carousel slide col-md-4' data-ride='carousel'>\
                            <div class='carousel-inner'>\
                                <div class='carousel-item active'>\
                                    <img class='d-block' src="+ result[0].PICTURE_URL + " alt='First slide'>\
                                </div>");
                for (var i = 1; i < result.length; i++) {
                    $("#body").append("<div class='carousel-item'>\
                                <img class='d-block' src="+ result[i].PICTURE_URL + " alt=" + i + "slide>\
                            </div>");
                }
                $("#body").append("</div>\
                      <a class='carousel-control-prev' href='#carouselFashion' role='button' data-slide='prev'>\
                        <span class= 'carousel-control-prev-icon' aria-hidden='true'></span>\
                        <span class='sr-only'>Previous</span></a >\
                        <a class='carousel-control-next' href='#carouselFashion' role='button' data-slide='next'>\
                            <span class='carousel-control-next-icon' aria-hidden='true'></span>\
                            <span class='sr-only'>Next</span>\
                        </a></div>");
                $("#footerInfo").append("<p> Current Location: Home/" + result[0].BUSINESS_CATEGORY + "/" + result[0].BUSINESS_NAME + "</p>                 <p> Made by Derrick Leeper </p>\       <p>For more information, please contact <a href='mailto:Derrick.Leeper@gmail.com'>Derrick Leeper</a></p>\ <br/>\
                    <br/>\
                ")
            },
            error: function (e, err) {
                console.error(e.responseText)
            }
        })
    })
    $("#entertainment").on("click", "a", function () {
        console.log(this);

        console.log($(this).text());
        console.log();
        $("#locationNav").find("li.active").removeClass("active");


        //Add the active class to the parent
        $(this).parent().parent('li').addClass('active');
        $.ajax({
            url: "queries/load_business.php",
            type: "POST",
            cache: false,
            data: { BUSINESS_ID: $(this).attr('id') },
            success: function (result) {
                console.log(result);
                $("#body").empty();
                $("#footerInfo").empty();
                $("#body").append("<br/> \
                    <div class='header'>\
                        <h1 class='title'>"+ result[0].BUSINESS_NAME + "</h1>\
                        <hr />\
                        <div class = 'color'>Contact us<br/>\
                        <div>"+ result[0].BUSINESS_CONTACT + "</div></div><br/>\
                    </div>");
                $("#body").append("<div id = 'carouselFashion' class='carousel slide col-md-4' data-ride='carousel'>\
                            <div class='carousel-inner'>\
                                <div class='carousel-item active'>\
                                    <img class='d-block' src="+ result[0].PICTURE_URL + " alt='First slide'>\
                                </div>");
                for (var i = 1; i < result.length; i++) {
                    $("#body").append("<div class='carousel-item'>\
                                <img class='d-block' src="+ result[i].PICTURE_URL + " alt=" + i + "slide>\
                            </div>");
                }
                $("#body").append("</div>\
                      <a class='carousel-control-prev' href='#carouselFashion' role='button' data-slide='prev'>\
                        <span class= 'carousel-control-prev-icon' aria-hidden='true'></span>\
                        <span class='sr-only'>Previous</span></a >\
                        <a class='carousel-control-next' href='#carouselFashion' role='button' data-slide='next'>\
                            <span class='carousel-control-next-icon' aria-hidden='true'></span>\
                            <span class='sr-only'>Next</span>\
                        </a></div>");
                $("#footerInfo").append("<p> Current Location: Home/" + result[0].BUSINESS_CATEGORY + "/" + result[0].BUSINESS_NAME + "</p>                 <p> Made by Derrick Leeper </p>\       <p>For more information, please contact <a href='mailto:Derrick.Leeper@gmail.com'>Derrick Leeper</a></p>\ <br/>\
                    <br/>\
                ")
            },
            error: function (e, err) {
                console.error(e.responseText)
            }
        })
    })


    $("#otherDrop").on("click", "a", function () {
        console.log(this);

        console.log($(this).text());
        console.log();
        $("#locationNav").find("li.active").removeClass("active");


        //Add the active class to the parent
        $(this).parent().parent('li').addClass('active');
        $.ajax({
            url: "queries/load_business.php",
            type: "POST",
            cache: false,
            data: { BUSINESS_ID: $(this).attr('id') },
            success: function (result) {
                console.log(result);
                $("#body").empty();
                $("#footerInfo").empty();
                $("#body").append("<br/> \
                    <div class='header'>\
                        <h1 class='title'>"+ result[0].BUSINESS_NAME + "</h1>\
                        <hr />\
                        <div class = 'color'>Contact us<br/>\
                        <div>"+ result[0].BUSINESS_CONTACT + "</div></div><br/>\
                    </div>");
                $("#body").append("<div id = 'carouselFashion' class='carousel slide col-md-4' data-ride='carousel'>\
                            <div class='carousel-inner'>\
                                <div class='carousel-item active'>\
                                    <img class='d-block' src="+ result[0].PICTURE_URL + " alt='First slide'>\
                                </div>");
                for (var i = 1; i < result.length; i++) {
                    $("#body").append("<div class='carousel-item'>\
                                <img class='d-block' src="+ result[i].PICTURE_URL + " alt=" + i + "slide>\
                            </div>");
                }
                $("#body").append("</div>\
                      <a class='carousel-control-prev' href='#carouselFashion' role='button' data-slide='prev'>\
                        <span class= 'carousel-control-prev-icon' aria-hidden='true'></span>\
                        <span class='sr-only'>Previous</span></a >\
                        <a class='carousel-control-next' href='#carouselFashion' role='button' data-slide='next'>\
                            <span class='carousel-control-next-icon' aria-hidden='true'></span>\
                            <span class='sr-only'>Next</span>\
                        </a></div>");
                $("#footerInfo").append("<p> Current Location: Home/" + result[0].BUSINESS_CATEGORY + "/" + result[0].BUSINESS_NAME + "</p>                 <p> Made by Derrick Leeper </p>\       <p>For more information, please contact <a href='mailto:Derrick.Leeper@gmail.com'>Derrick Leeper</a></p>\ <br/>\
                    <br/>\
                ")
            },
            error: function (e, err) {
                console.error(e.responseText)
            }
        })
    })
    $("#other").on("click", "a", function () {
        console.log(this);

        console.log($(this).text());
        console.log();
        $("#locationNav").find("li.active").removeClass("active");


        //Add the active class to the parent
        $(this).parent().parent('li').addClass('active');
        $.ajax({
            url: "queries/load_business.php",
            type: "POST",
            cache: false,
            data: { BUSINESS_ID: $(this).attr('id') },
            success: function (result) {
                console.log(result);
                $("#body").empty();
                $("#footerInfo").empty();
                $("#body").append("<br/> \
                    <div class='header'>\
                        <h1 class='title'>"+ result[0].BUSINESS_NAME + "</h1>\
                        <hr />\
                        <div class = 'color'>Contact us<br/>\
                        <div>"+ result[0].BUSINESS_CONTACT + "</div></div><br/>\
                    </div>");

                $("#body").append("<div id = 'carouselFashion' class='carousel slide' data-ride='carousel'>\
                            <div class='carousel-inner'>\
                                <div class='carousel-item active'>\
                                    <img class='d-block' src="+ result[0].PICTURE_URL + " alt='First slide'>\
                                </div>");

                for (var i = 1; i < result.length; i++) {
                    $("#body").append("<div class='carousel-item'>\
                                <img class='d-block' src="+ result[i].PICTURE_URL + " alt=" + i + "slide>\
                            </div>");
                }
                $("#body").append("</div>\
                      <a class='carousel-control-prev' href='#carouselFashion' role='button' data-slide='prev'>\
                        <span class= 'carousel-control-prev-icon' aria-hidden='true'></span>\
                        <span class='sr-only'>Previous</span></a >\
                        <a class='carousel-control-next' href='#carouselFashion' role='button' data-slide='next'>\
                            <span class='carousel-control-next-icon' aria-hidden='true'></span>\
                            <span class='sr-only'>Next</span>\
                        </a></div>");
                $("#footerInfo").append("<p> Current Location: Home/" + result[0].BUSINESS_CATEGORY + "/" + result[0].BUSINESS_NAME + "</p>                 <p> Made by Derrick Leeper </p>\       <p>For more information, please contact <a href='mailto:Derrick.Leeper@gmail.com'>Derrick Leeper</a></p>\ <br/>\
                    <br/>\
                ")
            },
            error: function (e, err) {
                console.error(e.responseText)
            }
        })
    })


    $('.carousel').carousel({
        interval: 500
    })


    loadBusinesses();


    function loadBusinesses() {
        $.ajax({
            url: "queries/load_businesses.php",
            type: "POST",
            cache: false,
            data: '',
            success: function (result) {
                
                for (var i = 0; i < result.length; i++) {
                    if (result[i].business_category == "Food" || result[i].business_category == "Bar" ) {
                        $("#restBarDrop").append("<a href = '#" + result[i].name + "' id=" + result[i].id + ">" + result[i].name +"</a></br>");

                        $("#restaurants").append("<a href='#"+result[i].id+"'  id=" + result[i].id + ">" + result[i].name + "</a></br>");
                    }
                    else if (result[i].business_category == "Fashion") {
                        $("#fashDrop").append("<a data-toggle='tab' href = '#" + result[i].name + "' id=" + result[i].id + ">" + result[i].name + "</a></br>");

                        $("#fashion").append("<a href='#" + result[i].id + "'  id=" + result[i].id + ">" + result[i].name + "</a></br>");
                    }
                    else if (result[i].business_category == "Entertainment") {
                        $("#enteDrop").append("<a data-toggle='tab' href = '#" + result[i].name + "' id=" + result[i].id + ">" + result[i].name + "</a></br>");

                        $("#entertainment").append("<a href='#" + result[i].id + "'  id=" + result[i].id + ">" + result[i].name + "</a></br>");
                    } else {
                        $("#otherDrop").append("<a data-toggle='tab' href = '#" + result[i].name + "' id=" + result[i].id + ">" + result[i].name + "</a></br>");

                        $("#other").append("<a href='#" + result[i].id + "'  id=" + result[i].id + ">" + result[i].name + "</a></br>");                        
                    }                    
                }
            },
            error: function (e, err) {
                console.error(e.responseText)
            }
        })
    }
})
