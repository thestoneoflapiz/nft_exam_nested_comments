<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NFT - EXAM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .row.mind-margin{margin:5px;}
            .error{color:red;}
            .error-span{font-weight:bold;display:none;}
            .btn:is(:disabled){background-color:grey;border-color:black;}

            .comment-div{border-top: 1px solid #e2e8f0;padding-left:3rem;}
            .comment-div-child{border-top: 1px solid #e2e8f0;margin-right:5px;margin-left:5px;}
            .comment-children{margin-top:1rem;}

            .posted-by-label{font-weight:bold;}
            .posted-date-label{color:#656565;font-size:0.9rem;text-align:right;}
            .posted-description{color:#656565;font-size:0.9rem;}
            .posted-description.comment{background-color:#e0e0e042;padding:10px;border-radius:5px;}

            .btn-reply{margin-top:1.5rem;font-size:0.9rem;}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" id="postDataDiv" style="display:none;">
                    <div class="grid grid-cols-1 md:grid-cols-1">
                        <div class="p-6" id="postDiv"></div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-1" id="commentDataDiv"></div>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-1">
                        <form id="commentForm">
                            <div class="p-6">
                                <span class="error error-span"></span>
                                <div class="row mind-margin">
                                    <div class="col-12">
                                        <input type="text" name="comment_0" placeholder="What's in your mind?" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mind-margin">
                                    <div class="col-12">
                                        <button class="btn btn-success" style="float:right;" type="submit" id="formButton">comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/thestoneoflapiz" target="_blank" class="ml-1 underline">
                                thestoneoflapiz {{ date("Y")}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.4.3/jquery.timeago.js"></script>
        
        <script>
            var postData = [];

            jQuery(document).ready(function(){
                validateForm(0,1);
                get_post_data();
            });

            function validateForm(parentId, commentableId){
                var formName = parentId>0?("parent_comment_form_"+parentId):"commentForm";
                $("#"+formName).validate({
                rules:{
                    comment:{
                        required: true,
                    }
                },
                messages:{
                    comment:{
                        required: "We need atleast a single character to post your comment...",
                    }
                },
                submitHandler: function(form) {
                    $("#formButton_"+parentId).prop("disabled", true);
                    $(".error-span").html("").hide();

                    $.ajax({
                        url: "/post/comment",
                        method: "post",
                        data: {
                            post_id: postData.id,
                            parent_id: parentId>0?parentId:null ,
                            commentable_id: commentableId,
                            comment: $("[name=comment_"+parentId+"]").val(),
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response){
                            setTimeout(() => {
                                $("#commentForm").trigger('reset');
                                get_post_data();
                            }, 1000);
                        },
                        error: function(response){
                            var jsonRes = response.responseJSON;
                            if(jsonRes.hasOwnProperty("error")){
                                $(".error-span").html(jsonRes.error).show();
                            }
                        },
                        complete: function(){
                            setTimeout(() => {
                                $("#formButton_"+parentId).prop("disabled", false);
                            }, 1500);
                        }
                    });
                },
            });
            }

            function get_post_data(){
                $.ajax({
                    url: "/getPost",
                    success: function(response){
                        if(response.hasOwnProperty("data") && response.data.id > 0){
                            postData = response.data;
                            generatePost();
                        }
                    },
                    complete: function(){
                        if (postData.length > 0) {
                            setTimeout(() => {
                                $("#postDataDiv").show();
                            }, 1500);
                        }
                    }
                });
            }

            function generatePost(){
                $("#postDiv").html(`
                    <div class="row mind-margin">
                        <div class="col-6 posted-by-label">${postData.user_name}</div>
                        <div class="col-6 posted-date-label">${jQuery.timeago(new Date(postData.created_at))}</div>
                        <div class="col-12 posted-description">${postData.description}</div>
                        `+(postData.comments.length > 0 ? `<div class="col-12 posted-date-label">${postData.comments.length} comment${postData.comments.length>1?"s":""}</div>`: '')+`
                    </div>
                `);

                $("#commentDataDiv").empty();
                if(postData.comments.length > 0){
                    var flc_data = postData.comments;
                    flc_data.forEach((flc, flck) => {
                        
                        var flc_new_div = generateComment(true, flc);
                        $("#commentDataDiv").append(flc_new_div);

                        if(flc.comments.length > 0){
                            var slc_data = flc.comments;
                            slc_data.forEach((slc, slck) => {

                                console.log(slc);
                                var slc_new_div = generateComment(true, slc);
                                $("#comment_children_"+slc.parent_id).append(slc_new_div);

                                if(slc.comments.length > 0){
                                    var tlc_data = slc.comments;
                                    tlc_data.forEach((tlc, tlck) => {
                                        var tlc_new_div = generateComment(false, tlc);
                                        $("#comment_children_"+tlc.parent_id).append(tlc_new_div);
                                    });
                                }
                            });
                        }

                    });

                    $("#commentDataDiv").show();
                }else{
                    $("#commentDataDiv").hide();
                }

                $("#postDataDiv").show();
            }

            function generateComment(isCommentable, data){
                if(isCommentable){
                    return $("<div></div>").addClass("p-6 comment-div").append(`
                        <div class="row mind-margin" id="comment_parent_${data.id}">
                            <div class="col-6 posted-by-label">${data.user_name}</div>
                            <div class="col-6 posted-date-label">${jQuery.timeago(new Date(data.created_at))}</div>
                            <div class="col-12 posted-description comment">${data.description}</div>
                            `+(data.comments.length > 0 ? `<div class="col-12 posted-date-label">${data.comments.length} repl${data.comments.length>1?"ies":"y"}</div>` : ``)+`
                            <div class="col-12"><a onclick="replyToComment(${data.id}, ${data.commentable_id+1})" class="btn-reply">Reply</a></div>
                            <div class="col-12"><div class="grid grid-cols-1 md:grid-cols-1 comment-children" id="comment_children_${data.id}"></div></div>
                        </div>
                    `); 
                }

                return $("<div></div>").addClass("p-6 comment-div").append(`
                    <div class="row" id="comment_parent_${data.id}">
                        <div class="col-6 posted-by-label">${data.user_name}</div>
                        <div class="col-6 posted-date-label">${jQuery.timeago(new Date(data.created_at))}</div>
                        <div class="col-12 posted-description comment">${data.description}</div>
                    </div>
                `);
            }

            function replyToComment(parentId, commentableId){
                var parent_comment = $("#comment_parent_"+parentId);
                var existing_pc_form = $(`#parent_comment_form_${parentId}`).length;
                if(!existing_pc_form){
                    parent_comment.append(`
                        <div class="col-12">
                            <form id="parent_comment_form_${parentId}">
                                <div class="row mind-margin">
                                    <div class="col-12">
                                        <input type="text" name="comment_${parentId}" placeholder="What's in your mind?" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mind-margin">
                                    <div class="col-12">
                                        <button class="btn btn-primary" style="float:right;" type="submit" id="formButton_${parentId}">reply</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    `);                   

                    validateForm(parentId, commentableId);
                }

                $('html, body').animate({
                    scrollTop: $(`#parent_comment_form_${parentId}`).offset().top
                }, 1000);

                $(`#parent_comment_form_${parentId}`).find("input").focus();
            }

        </script>
    </body>
</html>
