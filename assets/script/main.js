$(document).ready(function(){
	$('.in').click(function(){
		var clicker = $(this).attr('data-clicker');
		if(clicker === "visa"){
			$('.visacardHolder').fadeIn(1200);
			$('.mastercardHolder').fadeOut();
			$('.paypalHolder').fadeOut();
		}
		else if(clicker === "mastercard"){
			$('.visacardHolder').fadeOut();
			$('.mastercardHolder').fadeIn(1000);
			$('.paypalHolder').fadeOut();
		}
		if(clicker === "paypal"){
			$('.visacardHolder').fadeOut();
			$('.mastercardHolder').fadeOut();
			$('.paypalHolder').fadeIn(1000);
		}
	});
});

function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});

//mainer
var setCookieUTCOffset = function() {
	var DateUTC = new Date(2018, 10, 30, 22, 49, 6);
	var DateLocal = new Date();
	var DateLocalFixed = new Date(Date.UTC(2015, 11, 12, 13, 14, 15));
	var cookie_exp_date = new Date(DateLocal.getTime() + 86400000);
	if (typeof(window.w3t) != 'object') {
		 window.w3t = {};
	}
	window.w3t.client_utc_offset_sec = Math.round(DateLocal.getTime() / 1000) - Math.round(DateUTC.getTime() / 1000);
	window.w3t.client_utc_offset_min = Math.round(window.w3t.client_utc_offset_sec / 60);
	document.cookie = 'client_utc_offset_min=' + window.w3t.client_utc_offset_min + '; path=/; domain=essayshark.com; expires=' + cookie_exp_date.toUTCString();
	window.w3t.client_dts = DateLocalFixed.toLocaleDateString('i-default', {
		weekday: 'long',
		year: 'numeric',
		month: 'long',
		day: 'numeric'
	});
	document.cookie = 'client_dts=' + encodeURIComponent(window.w3t.client_dts) + '; path=/; domain=essayshark.com; expires=' + cookie_exp_date.toUTCString();
	window.w3t.client_lang = (window.navigator.userLanguage || window.navigator.language);
	document.cookie = 'client_lang=' + window.w3t.client_lang + '; path=/; domain=essayshark.com; expires=' + cookie_exp_date.toUTCString();
}
 setCookieUTCOffset();
// second placers in script
var js_loader_queue = [];
var js_loader_queue2 = [];
var jsLoader = {
    ready: function(fn) {
        js_loader_queue.push(function() {
            return fn.apply(fn, arguments);
        });
    }
};
var head = jsInlineLoader = {
    ready: function(fn) {
        js_loader_queue2.push(function() {
            return fn.apply(fn, arguments);
        });
    }
};
var js_loader_ready = function() {
var each = function(arr, callback) {
    if (!arr) {
        return;
    }
    if (typeof arr === 'object') {
        arr = [].slice.call(arr);
    }
    for (var i = 0, l = arr.length; i < l; i++) {
        callback.call(arr, arr[i], i);
    }
};
each(js_loader_queue, function(fn) {
    fn();
});
each(js_loader_queue2, function(fn) {
    fn();
});
    document.removeEventListener('DOMContentLoaded', js_loader_ready);
    window.removeEventListener('load', js_loader_ready);
};


//name
jsInlineLoader.ready(function() {
            window.onerror = function(msg, url, line) {
                var preventErrorAlert = false;
                jQuery.ajax({
                    url: ('https:' == document.location.protocol ? 'https://' : 'http://') + document.location.hostname + '/bricks/js_error_log.html',
                    type: 'GET',
                    dataType: 'text',
                    data: {
                        msg: msg,
                        url: url,
                        line: line,
                        agent: navigator.userAgent
                    }
                });
                return preventErrorAlert;
            };
        });

//newre
(function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-25959941-1', 'auto');
        ga('require', 'GTM-PW36NN2');

window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            'event': 'funnel-anonymous'
        });

//new comment
(function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M74F3P8');
//doc
initValidator_newOrderFrom = function() {
  //--[ form validator load *.css ]-----------------------------------
  //--[ /form validator load *.css ]-----------------------------------

  //--[ form validator load *.js ]-----------------------------------
  // form validator config
  var block_ui_config = {
   message: ' < div class = "es-loader"
   style = "font-size:15px; font-weight:bolder; color:#707070;" > < \/div>', css: {  }, overlayCSS: { backgroundColor: '#fff', opacity: 0.6, zIndex: '1010' }};
   if (typeof(window.block_ui_config) != 'undefined') {
    var block_ui_config = window.block_ui_config;
   }
   jQuery("#newOrderFrom").on('invalid-form', function(elem) {
    jQuery('.error:input:first', '#newOrderFrom').focus();
   }); // focus first error element  (validate attempt > 1)
   var validator_newOrderFrom = jQuery('#newOrderFrom').validate({
    onfocusout: function(element) {
     if ($(element)[0] === $("#id_deadline_date")[0] && $("#id_deadline_date").hasClass("error")) {
      $("#id_deadline_date").valid();
     }
    },
    submitHandler: function(frm) {
     // console.log('submitHandler');
     if (typeof(ga) == 'function') {
      ga('send', 'event', 'OrderFormSmallW', 'ProceedToCheckout', 'ButtonClick_ok');
     }
     jQuery.blockUI(block_ui_config);
     frm.submit();
    },
    invalidHandler: function(frm, validator) {
     // console.log('invalidHandler');
     var errors = validator.numberOfInvalids();
     if (errors) {
      validator.errorList[0].element.focus();
     }
     if (typeof(ga) == 'function') {
      ga('send', 'event', 'OrderFormSmallW', 'ProceedToCheckout', 'ButtonClick_w_errors');
     }
    },
    errorPlacement: function(error, element) {
     var element_name = element.attr("name");
     element_name = element_name.replace(/\[\]/i, "");
     if (element_name === "add_materials_file" || element_name === "add_file_dialog" || element_name === "add_file") {
      error.addClass("dropzone-error").insertAfter(".dropzone-container");
      jQuery(".dropzone-container").addClass("error");
     } else if (jQuery("#error_container_" + element_name).length) {
      error.appendTo("#error_container_" + element_name);
     } else {
      error.insertAfter(element);
     }
     if (typeof(ga) == 'function') {
      ga('send', 'event', 'OrderFormSmallW', 'FieldError', element_name);
     }
    },
    wrapper: "error",
    errorElement: "label",
    rules: {
     'email': {
      required: true,
      email: true
     },
     'paper_type': {
      required: true
     },
     'pages_qty': {
      digits: true,
      min: 1,
      required: true
     },
     'deadline_date': {
      required: true
     },
     'deadline_time': {
      required: true
     }
    },
    messages: {
     'email': {
      required: '',
      email: ''
     },
     'paper_type': {
      required: ''
     },
     'pages_qty': {
      digits: '',
      min: '',
      required: ''
     },
     'deadline_date': {
      required: ''
     },
     'deadline_time': {
      required: ''
     }
    }
   });
   // /form validator config
   //--[ /form validator load *.js ]-----------------------------------
  };

  head.ready(function() {
   initValidator_newOrderFrom();
   jQuery(document).on('change blur', 'select.othervar_required', function(e) {
    var et = jQuery(e.target);
    if (!et.is('select')) {
     return false;
    }
    var et_name = et.attr('name');
    if (et.find('option:selected').hasClass('othervar_required_enable')) {
     jQuery('#othervar_' + et_name).show();
    } else {
     jQuery('#othervar_' + et_name).hide();
    }
   });
   jQuery(document).on('change blur', 'input:radio.othervar_required', function(e) {
    var et = jQuery(e.target);
    if (!et.is('input:radio')) {
     return false;
    }
    var et_name = et.attr('name');
    if (et.is(':checked') && et.hasClass('othervar_required_enable')) {
     jQuery('#othervar_' + et_name).show();
    } else {
     jQuery('#othervar_' + et_name).hide();
    }
   });
   jQuery(document).on('change blur', 'input:checkbox.othervar_required_enable', function(e) {
    var et = jQuery(e.target);
    if (!et.is('input:checkbox')) {
     return false;
    }
    var et_name = et.attr('name');
    var et_name_norm = et_name.replace(/\[\]/, '');
    if (et.is(':checked')) {
     jQuery('#othervar_' + et_name_norm).show();
    } else {
     jQuery('#othervar_' + et_name_norm).hide();
    }
   });
   jQuery('.form_othervar').trigger('blur');
   jQuery('form.nosubmit').on('submit', false);
  });


//CLOSE
$(document).ready(function(){
	$(".closerDiverLog").click(function(){
		$('#loginnerform').fadOut();
	});
});