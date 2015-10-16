var onGoingEvent = 0;
var preloader = ' <img src="'+base_url+'/assets/img/preloader1.gif" style="height:18px; width:auto">';

var $active,$next;
function cycleQuotes(){

      $active = $('.quotes .visible');
      $next = ($active.next().length > 0) ? $active.next() : $('.quotes div:first');
      $active.removeClass('visible animated zoomIn');
      $next.addClass('visible').addClass('animated zoomIn');
}
$(function () {
  $('[data-toggle="popover"]').popover({'trigger':'hover'});
})
$(document).ready(function(){

    $("#section_panel").css('min-height',($('.section-names').height()+50)+'px');

    var inter = setInterval('cycleQuotes()', 8000);
    $(document).on("click",".section_link", function(){
        var div_show = $(this).attr("data-show");
        $("#menu_name").html($(this).find('.section_name').eq(0).html());
        $(".section_link").removeClass('active');
        $(this).addClass('active');
        $('.section').addClass('hide_panel');
        $(div_show).removeClass('hide_panel');

        if($(document).width() <= 980){
            $(".cv-toggle a").trigger('click');
        }
    });
    $(document).on("click",".edit-section", function(){
        $("#Modal .modal-title").html('Edit Section Name');
        $("#Modal .modal-body-main").html('Loading');
        var id = $(this).attr('data-id');
        $.get(base_url+'/cvbuilder/edit_ui_section/'+id,function(data){
            $("#Modal .modal-body-main").html(data);
        });
    });
     $(document).on("click",".edit-work", function(){
        $("#Modal .modal-title").html('Edit Work Section');
        $("#Modal .modal-body-main").html('Loading');
        var id = $(this).attr('data-id');
        $.get(base_url+'/cvbuilder/edit_ui_workex/'+id,function(data){
            $("#Modal .modal-body-main").html(data);
            onmodalload("#Modal");
        });
    });
     $(document).on("click",".edit-education", function(){
        $("#Modal .modal-title").html('Edit Education Section');
        $("#Modal .modal-body-main").html('Loading');
        var id = $(this).attr('data-id');
        $.get(base_url+'/cvbuilder/edit_ui_education/'+id,function(data){
            $("#Modal .modal-body-main").html(data);
            onmodalload("#Modal");
        });
    });
      $(document).on("click",".edit-nysc", function(){
        $("#Modal .modal-title").html('Edit NYSC Section');
        $("#Modal .modal-body-main").html('Loading');
        var id = $(this).attr('data-id');
        $.get(base_url+'/cvbuilder/edit_ui_nysc/'+id,function(data){
            $("#Modal .modal-body-main").html(data);
            onmodalload("#Modal");
        });
    });
       $(document).on("click",".edit-language", function(){
        $("#Modal .modal-title").html('Edit Language Section');
        $("#Modal .modal-body-main").html('Loading');
        var id = $(this).attr('data-id');
        $.get(base_url+'/cvbuilder/edit_ui_language/'+id,function(data){
            $("#Modal .modal-body-main").html(data);
            onmodalload("#Modal");
        });
    });

    $(document).on("click",".remove-work", function(){
        var item = $(this);
        var id = item.attr('data-id');
        var cv_code = $("#cv_code").val();
        $.post(base_url+'/cvbuilder/remove_work/'+id+'/'+cv_code,function(data){
            item.parent().parent().parent().parent().hide("slow",function(){
                item.parent().parent().parent().parent().remove();
            });
        });

    });
     $(document).on("click",".remove-education", function(){
        var item = $(this);
        var id = item.attr('data-id');
        var cv_code = $("#cv_code").val();
        $.post(base_url+'/cvbuilder/remove_education/'+id+'/'+cv_code,function(data){
            item.parent().parent().parent().parent().hide("slow",function(){
                item.parent().parent().parent().parent().remove();
            });
        });

    });
      $(document).on("click",".remove-nysc", function(){
        var item = $(this);
        var id = item.attr('data-id');
        var cv_code = $("#cv_code").val();
        $.post(base_url+'/cvbuilder/remove_nysc/'+id+'/'+cv_code,function(data){
            item.parent().parent().parent().parent().parent().parent().hide("slow",function(){
                item.parent().parent().parent().parent().parent().parent().remove();
            });
        });

    });
       $(document).on("click",".remove-language", function(){
        var item = $(this);
        var id = item.attr('data-id');
        var cv_code = $("#cv_code").val();
        $.post(base_url+'/cvbuilder/remove_language/'+id+'/'+cv_code,function(data){
            item.parent().parent().parent().parent().hide("slow",function(){
                item.parent().parent().parent().parent().remove();
            });
        });

    });

      $(document).on("click",".remove-section", function(){
        var item = $(this);
        var id = item.attr('data-id');
        var cv_code = $("#cv_code").val();
        $.post(base_url+'/cvbuilder/remove_section/'+id+'/'+cv_code,function(data){
            item.parent().remove();
            $("#section_panel #prop"+id).remove();
        });

    });

    $(document).on("click",".preview", function(){
        var item = $(this);
        var cv_code = $("#cv_code").val();
        var style = $("input[name=cvstyle]:checked").val();
        if(onGoingEvent == 0){
            onGoingEvent =1;
            var item = $(this);
            item.html(item.html()+preloader);
            var cv_code = $("#cv_code").val();
            var val = $(".builderForm").serialize();
            $.post(base_url+'/cvbuilder/saveinfo/'+cv_code,val,function(data){
                if(data == 'success'){
                    $("#style-modal").modal('hide');
                    $("#Preview_Modal").modal('show');
                    $("#Preview_Modal .modal-content").html('Loading');

                    $.get(base_url+'/cvbuilder/preview/'+cv_code+'/'+style+'/1',function(data){
                        $("#Preview_Modal").modal('show');
                        $("#Preview_Modal .modal-content").html(data);
                    });

                } else alert(data);
                item.html('Preview');
                onGoingEvent = 0;
            });
       }
    });

    $(document).on("click",".submit-form", function(){
       if(onGoingEvent == 0){
        onGoingEvent =1;
        var item = $(this);
        item.html(item.html()+preloader);
        var cv_code = $("#cv_code").val();
        var val = $(".builderForm").serialize();
        $.post(base_url+'/cvbuilder/saveinfo/'+cv_code,val,function(data){
            if(data == 'success'){
               
            } else alert(data);
            item.html('Save');
            onGoingEvent = 0;
        });
       } });

    $(".profile-toggle a").on("click", function(event) {
            event.preventDefault();//the default action of the event will not be triggered
            $(".side-menu").toggle(300);
        });
    $(".cv-toggle a").on("click", function(event) {
            event.preventDefault();//the default action of the event will not be triggered
            $(".cv-links").toggle(300);
        });

    $(document).on("click",".download_pdf", function(){
       if(onGoingEvent == 0){
        onGoingEvent =1;
        var item = $(this);
        var inital_html = item.html();
        item.html(inital_html+preloader);
        var cv_style = $("input[name=cvstyle_final]:checked").val();
        var cv_code = $("#cv_code").val();
        window.open(base_url+'/cvbuilder/pdf/1/'+cv_code+'/'+cv_style, '_blank');
        item.html(inital_html);
        $("#Download").modal('hide');
        onGoingEvent = 0;
       } 
   });

    $(document).on("click",".print_cv", function(){
       if(onGoingEvent == 0){
        onGoingEvent =1;
        var item = $(this);
        var inital_html = item.html();
        item.html(inital_html+preloader);
        var cv_style = $("input[name=cvstyle_final]:checked").val();
        var cv_code = $("#cv_code").val();
        window.open(base_url+'/cvbuilder/pdf/2/'+cv_code+'/'+cv_style, '_blank');
        item.html(inital_html);
        $("#Download").modal('hide');
        onGoingEvent = 0;
       } 
   });

    $(document).on("click",".email_pdf", function(){
       if(onGoingEvent == 0){
        onGoingEvent =1;
        var item = $(this);
        var inital_html = item.html();
        item.html(inital_html+preloader);
        var cv_style = $("input[name=cvstyle_final]:checked").val();
        var emails = $("#email_mail").val();
        var cv_code = $("#cv_code").val();

        $.post(base_url+'/cvbuilder/pdf/3/'+cv_code+'/'+cv_style,{emails:emails},function(data){
            data = $.parseJSON(data);
            if(data.success){
                alert(data.message);
                $("#Download").modal('hide');
            }   else {
                alert(data.message);
            }
            item.html(inital_html);
            onGoingEvent = 0;
        });
       } 
   });

    $(document).on("change","select[name=language_id]", function(){
        var item = $(this);
        var inputbox = $("input[name=language_name]");
        if(item.val() == -1){
            inputbox.removeAttr('readonly');
        } else {
            inputbox.attr('readonly','readonly');
            inputbox.val('');
        }
    });

});

$(function(){
    $("#add_new_section").click(function(){
        $("#Modal .modal-title").html('Add New Section');
        $("#Modal .modal-body-main").html('Loading');
        $.get(base_url+'/cvbuilder/fetch_ui_section',function(data){
            $("#Modal .modal-body-main").html(data);
        });
    });

    $("select[name=religion]").change(function(){
        if($(this).val() == -1){
            $("input[name=religion_text]").removeClass('hidden');
        } else {
            $("input[name=religion_text]").addClass('hidden');
            $("input[name=religion_text]").val('');
        }
    });

});
$(function(){
    $("#add_new_work_ex").click(function(){
        $("#Modal .modal-title").html('Add New Work Ex');
        $("#Modal .modal-body-main").html('Loading');
        $.get(base_url+'/cvbuilder/fetch_workex',function(data){
            $("#Modal .modal-body-main").html(data);
            onmodalload("#Modal");
        });
    });

});

$(function(){
    $("#add_new_education").click(function(){
        $("#Modal .modal-title").html('Add New Education');
        $("#Modal .modal-body-main").html('Loading');
        $.get(base_url+'/cvbuilder/fetch_education',function(data){
            $("#Modal .modal-body-main").html(data);
            onmodalload("#Modal");
        });
    });
});
$(function(){
    $("#add_new_nysc").click(function(){
        $("#Modal .modal-title").html('Add New Education');
        $("#Modal .modal-body-main").html('Loading');
        $.get(base_url+'/cvbuilder/fetch_nysc',function(data){
            $("#Modal .modal-body-main").html(data);
            onmodalload("#Modal");
        });
    });
});

$(function(){
    $("#add_new_language").click(function(){
        $("#Modal .modal-title").html('Add New Language');
        $("#Modal .modal-body-main").html('Loading');
        $.get(base_url+'/cvbuilder/fetch_language',function(data){
            $("#Modal .modal-body-main").html(data);
            onmodalload("#Modal");
        });
    });
});

function work_ex_submit(){
        $("#work_ex_submit").html('Adding '+preloader);
        var val = $("#work_ex_form").serialize();
        var id = $("#cv_id").val();
        val = val+'&cv_id='+id;
        $.post(base_url+'/cvbuilder/fetch_workex',val,function(data){
            data = $.parseJSON(data);
            if(data.success){
                $("#Modal .modal-body-main").html(data.message);
                $("#work_ex_panel").prepend('<div class="workex-item"> <div class="row" style="padding:10px 0"> <div class="col-md-10" id="work"> <input type="checkbox" name="work_ex[]" value="'+data.id+'" checked=""> <div class="row" style="padding:0" id="work'+data.id+'"> <div class="col-md-4"> <span class="small-text">Position</span><br> <b>'+data.title+'</b> </div> <div class="col-md-4"> <span class="small-text">Company</span><br> <b>'+data.company+'</b> </div> <div class="col-md-4"> <span class="small-text">Duration</span><br> <b>'+data.startdate+' - '+data.enddate+'</b> </div> </div> </div> <div class="col-md-2"> <div class="edit"> <a href="javascript:;" data-id="'+data.id+'" data-toggle="modal" data-target="#Modal" class="edit-work"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a href="javascript:;" class="remove-work" data-id="'+data.id+'" title=""><i class="fa fa-remove"></i></a> </div> </div> </div> </div>');
            } else{
                alert(data.message);
            }
            
            $("#work_ex_submit").html('Add');
        });
};

function education_submit(){
    $("#education_submit").html('Adding '+preloader);

    var val = $("#education_form").serialize();
    var id = $("#cv_id").val();
    val = val+'&cv_id='+id;
    $.post(base_url+'/cvbuilder/fetch_education',val,function(data){
        data = $.parseJSON(data);
        if(data.success){
            $("#Modal .modal-body-main").html(data.message);
            $("#education_panel").prepend('<div class="education-item"> <div class="row"> <div class="col-md-10" id="edu"> <input type="checkbox" name="education[]" value="'+data.id+'" checked=""> <div class="row" style="padding:0" id="edu'+data.id+'"> <div class="col-md-4"> <span class="small-text">Course</span><br> <b>'+data.coursename+'</b> </div> <div class="col-md-4"> <span class="small-text">Institute</span><br> <b>'+data.institutename+'</b> </div> <div class="col-md-4"> <span class="small-text">Duration</span><br> <b>'+data.startdate+'-'+data.enddate+'</b> </div> </div> </div> <div class="col-md-2"> <div class="edit-edu"> <a href="javascript:;" data-id="'+data.id+'" data-toggle="modal" data-target="#Modal" class="edit-education"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a href="javascript:;" class="remove-education" data-id="'+data.id+'" title=""><i class="fa fa-remove"></i></a> </div> </div> </div> </div>');
        }else{
           alert(data.message); 
        }
        $("#education_submit").html('Add');
        
    });
};

function language_submit(){
    $("#language_submit").html('Adding '+preloader);
    var val = $("#language_form").serialize();
    var id = $("#cv_id").val();
    val = val+'&cv_id='+id;
    $.post(base_url+'/cvbuilder/fetch_language',val,function(data){
        data = $.parseJSON(data);
        if(data.success){
            $("#Modal .modal-body-main").html(data.message);
            $("#language_panel").prepend('<div class="language-item"> <div class="row"> <div class="col-md-10" id="lang"> <input type="checkbox" name="language[]" value="'+data.id+'" checked=""> <div class="row" style="padding:0" id="lang'+data.id+'"> <div class="col-md-4"> <span class="small-text">Language Name</span><br> <b>'+data.language_id+'</b> </div> <div class="col-md-4"> <span class="small-text">Ability</span><br> <b>'+data.ability+'</b> </div> <div class="col-md-4"> <span class="small-text">Level</span><br> <b>'+data.level+'</b> </div> </div> </div> <div class="col-md-2"> <div class="edit-lang"> <a href="javascript:;" data-id="'+data.id+'" data-toggle="modal" data-target="#Modal" class="edit-language"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a href="javascript:;" class="remove-language" data-id="'+data.id+'" title=""><i class="fa fa-remove"></i></a> </div> </div> </div> </div>');
        } else {
            alert(data.message);
        }
        $("#language_submit").html('Add');
    });
};

function addsection_submit(){
    var val = $("#addsection_form").serialize();
    var id = $("#cv_id").val();
    val = val+'&cv_id='+id;
    $.post(base_url+'/cvbuilder/fetch_addsection',val,function(data){
        data = $.parseJSON(data);
        $("#Modal .modal-body-main").html(data.message);
        // $("#sortable1").append('<div style="background:#EEE; padding:5px 10px; text-align:center; font-size:14px; margin-bottom:1px" class="section_link" data-show="#prop'+data.id+'"><input type="checkbox" name="section[]" id="" value="'+data.id+'" checked>'+data.section_name+'</div>');
        $("#sortable1").append('<div class="section_link" data-show="#prop'+data.id+'"><input type="checkbox" name="section[]" id="" value="'+data.id+'" checked=""><span id="section'+data.id+'">'+data.section_name+'</span><a href="javascript:;" data-id="'+data.id+'" class="remove-section" style="float:right;"><i class="fa fa-remove"></i></a><a href="javascript:;" data-id="'+data.id+'" data-toggle="modal" data-target="#Modal" class="edit-section"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;/div>');
        $("#section_panel").append('<div class="row section hide_panel" id="prop'+data.id+'"><h2>'+data.section_name+'</h2><div class="col-md-11"><div class="form-group"><textarea name="section_'+data.id+'" class="form-control textarea"  cols="50" rows="10"></textarea></div></div></div>');
        $(".section_link[data-show=#prop"+data.id+"]").trigger('click');
        onmodalload("#prop"+data.id);
         $("#section_panel").css('min-height',($('.section-names').height()+50)+'px');
    });
};

function editsection_submit(id){
    var val = $("#editsection_form").serialize();
    var cv_code = $("#cv_code").val();
    val = val+'&section_id='+id+'&cv_code='+cv_code;
    $.post(base_url+'/cvbuilder/edit_section',val,function(data){
        data = $.parseJSON(data);
        $("#Modal .modal-body-main").html(data.message);
        $("#section"+id).html(data.section_name);
        $("#prop"+id+" h2").html(data.section_name);
    });
};

function editwork_submit(id){
    $("#work_ex_submit").html('Updating '+preloader);
    var val = $("#editwork_form").serialize();
    var cv_code = $("#cv_code").val();
    val = val+'&work_id='+id+'&cv_code='+cv_code;
    $.post(base_url+'/cvbuilder/edit_work',val,function(data){
        data = $.parseJSON(data);
        if(data.success){
            $("#Modal .modal-body-main").html(data.message);
            $("#work"+id).find('b').eq(0).html(data.title);
            $("#work"+id).find('b').eq(1).html(data.company);
            $("#work"+id).find('b').eq(2).html(data.startdate + '-' +data.enddate);
        } else {
            alert(data.message);
        }
        
        $("#work_ex_submit").html('Update');
    });
};

function editeducation_submit(id){
    $("#education_submit").html('Updating '+preloader);

    var val = $("#editeducation_form").serialize();
    var cv_code = $("#cv_code").val();
    val = val+'&education_id='+id+'&cv_code='+cv_code;
    $.post(base_url+'/cvbuilder/edit_education',val,function(data){
        data = $.parseJSON(data);
        if(data.success){
            $("#Modal .modal-body-main").html(data.message);
            $("#edu"+id).find('b').eq(0).html(data.coursename);
            $("#edu"+id).find('b').eq(1).html(data.institutename);
            $("#edu"+id).find('b').eq(2).html(data.startdate+ '-' +data.enddate);
        } else {
            alert(data.message);
        }
        $("#education_submit").html('Update');
    });
};
function editlanguage_submit(id){
        $("#editlanguage_submit").html("Updating "+preloader);

    var val = $("#editlanguage_form").serialize();
    var cv_code = $("#cv_code").val();
    val = val+'&language_edit='+id+'&cv_code='+cv_code;
    $.post(base_url+'/cvbuilder/edit_language',val,function(data){
        data = $.parseJSON(data);
        if(data.success){
            $("#Modal .modal-body-main").html(data.message);
            $("#lang"+id).find('b').eq(0).html(data.language_id);
            $("#lang"+id).find('b').eq(1).html(data.ability);
            $("#lang"+id).find('b').eq(2).html(data.level);
        } else {
            alert(data.message);
        }
        $("#editlanguage_submit").html("Update");
    });
};
function nysc_submit(){
    $("#nysc_submit").html("Adding "+preloader);
    var val = $("#nysc_form").serialize();
    var id = $("#cv_id").val();
    val = val+'&cv_id='+id;
    $.post(base_url+'/cvbuilder/fetch_nysc',val,function(data){
    data = $.parseJSON(data);
    if(data.success){
        $("#Modal .modal-body-main").html(data.message);
        $("#nysc_panel").prepend('<div class="nysc-item"><div class="row"> <div class="col-md-12" id="nysc"> <input type="checkbox" name="nysc[]" value="'+data.id+'" checked=""> <div class="row" style="padding:0" id="nysc'+data.id+'"> <div class="col-md-3"> <span class="small-text">Batch</span><br> <b>'+data.batch+'</b> </div> <div class="col-md-3"> <span class="small-text">Year</span><br> <b>'+data.year+'</b> </div> <div class="col-md-4"> <span class="small-text">PPA</span><br> <b>'+data.ppa+'</b> </div> <div class="col-md-2"> <div class="edit-edu"> <a href="javascript:;" data-id="'+data.id+'" data-toggle="modal" data-target="#Modal" class="edit-nysc"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a href="javascript:;" class="remove-nysc" data-id="'+data.id+'" title=""><i class="fa fa-remove"></i></a> </div> </div> </div> </div> </div></div>');
    } else {
        alert(data.message);
    }
    $("#nysc_submit").html("Add");
    
    });
};
function subscribe(){
     $("#subscribe_btn").html("Subscribing..");
        var email = $("input[name=email_sub]").val();

        $.post(base_url+'/subscribe',{email:email},function(data){
        data = $.parseJSON(data);
        if(data.success){
            $(".error-sub").html('');
            $("input[name=email_sub]").val('');
            alert(data.message);
        } else {
            $(".error-sub").html(data.message);
        }
        $("#subscribe_btn").html("Subscribe");
    });
}

function editnysc_submit(id){
    $("#nysc_submit").html("Updating "+preloader);

    var val = $("#editnysc_form").serialize();
    var cv_code = $("#cv_code").val();
    val = val+'&nysc_id='+id+'&cv_code='+cv_code;
    $.post(base_url+'/cvbuilder/edit_nysc',val,function(data){
        data = $.parseJSON(data);
        if(data.success){
            $("#Modal .modal-body-main").html(data.message);
            $("#nysc"+id).find('b').eq(0).html(data.batch);
            $("#nysc"+id).find('b').eq(1).html(data.year);
            $("#nysc"+id).find('b').eq(2).html(data.ppa);
        } else {
            alert(data.message);
        }
        $("#nysc_submit").html("Update");

    });
};
$(document).ready(function(){
    $('.textarea').wysihtml5({
        "font-styles": false, //Font styling, e.g. h1, h2, etc. Default true
        "emphasis": true, //Italics, bold, etc. Default true
        "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
        "html": false, //Button which allows you to edit the generated HTML. Default false
        "link": true, //Button to insert a link. Default true
        "image": false, //Button to insert an image. Default true,
        "color": false //Button to change color of font  
    });
});

function onmodalload(divid){
    $(divid + ' .textarea').wysihtml5({
        "font-styles": false, //Font styling, e.g. h1, h2, etc. Default true
        "emphasis": true, //Italics, bold, etc. Default true
        "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
        "html": false, //Button which allows you to edit the generated HTML. Default false
        "link": true, //Button to insert a link. Default true
        "image": false, //Button to insert an image. Default true,
        "color": false //Button to change color of font  
    });
}