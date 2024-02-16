// JavaScript Document
"use strict";
var baseUrl = APP_URL + "/";
var flashstatus = $("span.flashstatus").text();
var flashmessage = $("span.flashmessage").text();
var pagetype = jQuery('input[name="pagetype"]').val();
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
$(document).ready(function (e) {
   
    if (flashstatus == "SUCCESS") {
        $.toast({
            heading: "Success",
            text: flashmessage,
            loader: true,
            icon: "success",
            position: TOAST_POSITION,
        });
    }

    if (flashstatus == "ERROR") {
        $.toast({
            heading: "Error",
            text: flashmessage,
            loader: true,
            icon: "error",
            position: TOAST_POSITION,
        });
    }

    if (flashstatus == "INFORMATION") {
        $.toast({
            heading: "Information",
            text: flashmessage,
            loader: true,
            icon: "info",
            position: TOAST_POSITION,
        });
    }

    if (flashstatus == "WARNING") {
        $.toast({
            heading: "Warning",
            text: flashmessage,
            loader: true,
            icon: "warning",
            position: TOAST_POSITION,
        });
    }

    //toggle password


    $(document).on("click", ".reload", function (e) {
        console.log("this is reload");
        location.reload();
    });
    $(document).on("click", ".addBtn", function (e) {
        var $this = $(this);
        var modalName = $this.data('modalname');
        $('#' + modalName).modal('show');
        $("#" + modalName).find('form.formsubmit').trigger('reset');
        $("#" + modalName).find('form .form-control').removeClass('is-invalid');
        $("#" + modalName).find('form .err_message').remove();
        $("#" + modalName).find('.action-name').html('Add');
    });
    $(document).on("click", ".editbtn", function (e) {
        var $this = $(this);
        var modalName = $this.data('modalname');
        $('#' + modalName).modal('show');
        $("#" + modalName).find('form.formsubmit').trigger('reset');
        $("#" + modalName).find('.action-name').html('Edit');
    });

    $("form.formsubmit").on("submit", function (e) {
        e.preventDefault();
        var $this = $(this);
        /* console.table($this); */
        var formActionUrl = $this.prop("action");
        if ($($this).hasClass("fileupload")) {
            var fd = new FormData(document.getElementById($($this).attr("id")));
        } else {
            var fd = $($this).serialize();
        }

        // console.log(formActionUrl);
        let commonOption = {
            type: "post",
            url: formActionUrl,
            data: fd,
            dataType: "json",
        };
        if ($($this).hasClass("fileupload")) {
            commonOption["cache"] = false;
            commonOption["processData"] = false;
            commonOption["contentType"] = false;
        }
        // console.log(commonOption);
        // return false;
        // console.log($($this).attr('id'));
        $.ajax({
            ...commonOption,
            beforeSend: function () {},
            success: function (response) {
                if (response.status) {
                    if (response.data.redirect_url) {
                        Swal.fire({
                            icon: "success",
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1500,
                        });
                        setTimeout(function () {
                            $(location).attr(
                                "href",
                                response.data.redirect_url
                            );
                        }, 1500);
                    } else {
                        Swal.fire({
                            icon: "success",
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1500,
                        });
                        setTimeout(function () {
                            location.reload();
                        }, 1500);
                    }
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "We are facing some technical issue now.",
                        showConfirmButton: false,
                        timer: 1500,
                    });
                }
            },
            error: function (response) {
                console.log(response);
                let responseJSON = response.responseJSON;
                $(".err_message").removeClass("d-block").hide();
                $("form .form-control").removeClass("is-invalid");
                $.each(responseJSON.errors, function (index, valueMessage) {
                    $("#" + index).addClass("is-invalid");
                    $("#" + index).after(
                        "<p class='d-block text-danger err_message'>" +
                            valueMessage +
                            "</p>"
                    );
                });

                // Swal.fire({
                //     icon: 'error',
                //     title: 'We are facing some technical issue now. Please try again after some time',
                //     showConfirmButton: false,
                //     timer: 1500
                // })
            },
            /* ,
            complete: function(response){
                location.reload();
            } */
        });
    });

    

    $(".close-btn").click(function (e) {
        $(".formsubmit").trigger("reset");
        $(".slide-from-right").removeClass("show-side-form");
    });

    $(".card-table").on("click", ".changeStatus", function (e) {
        var $this = $(this);
        var uuid = $this.data("uuid");
        var value = $this.data("value");
        var find = $this.data("table");
        var actionUrl = $this.data("action");
        var message = $this.data("message") ?? "test message";
        Swal.fire({
            title: "Are you sure you want to " + message + " it?",
            text: "The status will be changed to " + message,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, " + message + " it!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "get",
                    url: actionUrl,
                    data: { uuid: uuid, find: find, value: value },
                    cache: false,
                    dataType: "json",
                    beforeSend: function () {},
                    success: function (response) {
                        if (response.status) {
                            Swal.fire({
                                icon: "success",
                                title: "Status Updated!",
                                showConfirmButton: false,
                                timer: 1500,
                            });
                            location.reload();
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "We are facing some technical issue now.",
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        }
                    },
                    error: function (response) {
                        Swal.fire({
                            icon: "error",
                            title: "We are facing some technical issue now. Please try again after some time",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    },
                    /* ,
                    complete: function(response){
                        location.reload();
                    } */
                });
            }
        });
    });
    $(".card-table").on("click", ".deleteData", function (e) {
        var $this = $(this);
        var uuid = $this.data("uuid");
        var find = $this.data("table");
        let actionUrl = $this.data("action");
        var message = $this.data("message") ?? "test message";
        Swal.fire({
            title: "Are you sure you want to delete it?",
            text: "You wont be able to revert this action!!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "get",
                    url: actionUrl,
                    data: { uuid: uuid, find: find },
                    cache: false,
                    dataType: "json",
                    beforeSend: function () {},
                    success: function (response) {
                        if (response.status) {
                            Swal.fire({
                                icon: "success",
                                title: "Deleted Successfully",
                                showConfirmButton: false,
                                timer: 1500,
                            });
                            location.reload();
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "We are facing some technical issue now.",
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        }
                    },
                    error: function (response) {
                        Swal.fire({
                            icon: "error",
                            title: "We are facing some technical issue now. Please try again after some time",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    },
                    /* ,
                    complete: function(response){
                        location.reload();
                    } */
                });
            }
        });
    });

    $(".this-div").on("click", ".deleteRecord", function (e) {
        let $this = $(this);
        let token = $this.data("token");
        let id = $this.data("id");
        let actionUrl = $this.data("action");

        Swal.fire({
            title: "Are you sure you want to delete it?",
            text: "You wont be able to revert this action!!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then(function (value) {
            if (value) {
                $.ajax({
                    url: actionUrl,
                    method: "POST",
                    dataType: "json",
                    data: {
                        _token: token,
                        id: id,
                    },
                    success: function (response) {
                        if (response.status == true) {
                            Swal.fire({
                                icon: "success",
                                title: response.message,
                                showConfirmButton: false,
                                timer: 1500,
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 1500);
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: response.error,
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        }
                    },
                });
            }
        });
    });

    $(".card-table").on("click", ".editData", function (e) {
        var $this = $(this);
        var uuid = $this.data("uuid");
        var find = $this.data("table");
        var action = $this.data("action");
        var formModal = $this.data("form-modal");
        console.log(formModal)
        var message = $this.data("message") ?? "test message";

        $.ajax({
            type: "get",
            url: action,
            data: { uuid: uuid, find: find },
            cache: false,
            dataType: "json",
            beforeSend: function () {},
            success: function (response) {
                if (response.status) {
                    let update = $("#" + formModal)
                        .find('button[type="submit"]')
                        .html("Update");
                        $("#" + formModal).find('.action_name').html('Edit');
                    $("#" + formModal)
                        .find('button[type="reset"]')
                        .html("Cancel");
                    // $("#" + formModal)
                    //     .find('button[type="reset"]')
                    //     .addClass("reload");
                    $("#" + formModal)
                        .find('.form-section')
                        .html(response.data.html_view);
                    $("#" + formModal).modal('show');
                    // $.each(response.data, function (index, valueMessage) {
                    //     // console.log(index);
                    //     $("#" + index).val(valueMessage);
                    // });
                 
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "We are facing some technical issue now.",
                        showConfirmButton: false,
                        timer: 1500,
                    });
                }
            },
            error: function (response) {
                Swal.fire({
                    icon: "error",
                    title: "We are facing some technical issue now. Please try again after some time",
                    showConfirmButton: false,
                    timer: 1500,
                });
            },
            /* ,
            complete: function(response){
                location.reload();
            } */
        });
    });
    $(".card-table").on("click", ".viewStatus", function (e) {
        var $this = $(this);
        var uuid = $this.data("uuid");
        console.log(uuid);
        var find = $this.data("table");
        var viewModal = $this.data("view-modal");
        var message = $this.data("message") ?? "test message";

        $.ajax({
            type: "get",
            url: baseUrl + "ajax/view-data",
            data: { uuid: uuid, find: find },
            cache: false,
            dataType: "json",
            beforeSend: function () {},
            success: function (response) {
                if (response.status) {
                    $("#" + viewModal).addClass("show-side-form");
                    $.each(response.data, function (index, valueMessage) {
                        console.log(index);
                        $("#" + index).val(valueMessage);
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "We are facing some technical issue now.",
                        showConfirmButton: false,
                        timer: 1500,
                    });
                }
            },
            error: function (response) {
                Swal.fire({
                    icon: "error",
                    title: "We are facing some technical issue now. Please try again after some time",
                    showConfirmButton: false,
                    timer: 1500,
                });
            },
            /* ,
            complete: function(response){
                location.reload();
            } */
        });
    });
});
function showToast(type, title, message) {
    $.toast({
        heading: title,
        text: message,
        loader: true,
        icon: type,
        position: "bottom-right",
    });
}
function getAjaxData(data, url) {
    $.ajax({
        url: url,
        type: "get",
        data: data,
        dataType: "json",
        success: function (result) {
            return result;
        },
    });
}
// Function to generate a slug from a given string
function slugify(str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();

    // Replace spaces with '-'
    str = str.replace(/\s+/g, '-');

    // Remove special characters
    str = str.replace(/[^\w-]+/g, '');

    return str;
}
