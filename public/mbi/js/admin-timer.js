jQuery(document).ready(function(t){function e(){s=setTimeout(function(){clearInterval(l)},1e3*parseInt(u.text())),l=setInterval(function(){u.text(parseInt(u.text())-1)},1e3)}function i(){clearTimeout(s),clearInterval(l)}function n(){u.text(90)}function a(t){t.addClass("active").attr("disabled","disabled")}function c(t){t.removeClass("active").removeAttr("disabled")}function r(t){t.removeClass("active").attr("disabled","disabled")}if(t("#admin-timer").length){var s,l,o=t("#show-timer"),d=t("#hide-timer"),u=t("#admin-timer-display"),m=t("#timer-start"),f=t("#timer-stop"),v=t("#timer-reset");o.click(function(){a(o),c(d),u.addClass("active"),c(m)}),d.click(function(){a(d),c(o),u.removeClass("active"),r(m),r(f),r(v),i()}),m.click(function(){e(),a(m),c(f),r(v)}),f.click(function(){i(),c(m),a(f),c(v)}),v.click(function(){n(),c(m),r(f),r(v)})}});