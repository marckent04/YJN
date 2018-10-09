$(function(){
    $('.appear').appear();
    $(".appear").on("appear", function(data) {
            var id = $(this).attr("id");
            jQuery('.nav li').removeClass('active');
            jQuery(".nav a[href='#" + id + "']").parent().addClass("active");                   
        });
  
})