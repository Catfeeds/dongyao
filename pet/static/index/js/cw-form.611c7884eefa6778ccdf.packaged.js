(window.webpackJsonp=window.webpackJsonp||[]).push([[61],{517:function(e,r){!function(e){var r={hasContent:function(e){return""!==e.val()},toggleContentClass:function(e){this.hasContent(e)?e.closest(".field").addClass("field--content"):e.closest(".field").removeClass("field--content")},init:function(a){var i=e(".field label");i.addClass("no-transition"),setTimeout(function(){i.removeClass("no-transition")},300),a.each(function(a,i){var t=e(i);r.toggleContentClass(t),t.off("focus.actionHandler").on("focus.actionHandler",function(){e(this).closest(".field").addClass("field--focus")}),t.is("select")?t.off("change.actionHandler").on("change.actionHandler",function(){e(this).closest(".field").removeClass("field--focus"),r.toggleContentClass(t),e(this).trigger("blur")}):t.off("blur.actionHandler").on("blur.actionHandler",function(){e(this).closest(".field").removeClass("field--focus"),r.toggleContentClass(t)}),t.on("input.actionHandler",function(){r.toggleContentClass(t),t.off("input.actionHandler")})}),e(".js-cw-btn--submit").on("click",function(r){r.preventDefault(),this.disabled="disabled",this.onclick=null,e(this).closest("form").submit()})}};e(function(){r.init(e(".field__input, .field__textarea, .field__select"))}),e.subscribe("form.rebind",function(a,i){i&&i.formEl?r.init(e(i.formEl).find(".field__input, .field__textarea, .field__select")):r.init(e(".field__input, .field__textarea, .field__select"))})}(jQuery),function(e){var r={labelMessage:function(r){return function(a,i){var t=e("label[for='"+i.id+"']");return t&&t.text().length?t.text().replace(":","").trim()+" is required.":r}},normalizeCcNumber:function(e){return e&&e.length?e.replace(/\D/g,""):""},luhnCheck:function(e){for(var r,a=e.length-1,i=0;a>=0;)i+=parseInt(e[a],10),a-=2;for(a=e.length-2;a>=0;)(r=2*parseInt(e[a],10))>9&&(r-=9),i+=r,a-=2;return i%10==0},isValidCcNumber:function(e){return e=r.normalizeCcNumber(e),/^(3\d{14}|[2456]\d{15})$/g.test(e)&&r.luhnCheck(e)},isAllDigits:function(e){return/^\d+$/g.test(e)},buildBadCharsArray:function(r,a){var i,t=!1,n={},s=[];do{(i=r.exec(a))&&(t=!0,n[i[0]]=!0)}while(i);return t?(e.each(n,function(e){s.push(e)}),s.join("")):null},getNonLatinSmartPunctuationCharsMatches:function(e){return this.buildBadCharsArray(/[^\x00-\xFF\u2010-\u2015\u2018\u2019\u201b\u201c\u201d\u201f]/g,e)},getNonLatinCharsMatches:function(e){return this.buildBadCharsArray(/[^\x00-\xFF]/g,e)}},a={rules:{requiredField:{required:!0},fullName:{required:!0,maxlength:35},email:{required:!0,email:!0},password:{required:!0,minlength:6},passwordVerify:{required:!0,equalTo:".field__input--pw"},billingPhone:{required:!0,maxlength:15,isLatinCharOnly:!0},phone:{required:!0,isLatinCharOnly:!0},addressFullName:{required:!0,maxlength:35,isLatinCharOrSmartPunctuation:!0},address1:{required:!0,maxlength:35,isLatinCharOnly:!0},address2:{isLatinCharOnly:!0,maxlength:35},shippingAddress1:{required:!0,isLatinCharOnly:!0,maxlength:35},shippingAddress2:{isLatinCharOnly:!0,maxlength:35},billingAddress1:{required:!0,isLatinCharOnly:!0,maxlength:35},billingAddress2:{isLatinCharOnly:!0,maxlength:35},city:{required:!0,isLatinCharOnly:!0,minlength:3,maxlength:35},state:{required:!0},shippingState:{required:!0,isLower48:!0},postcode:{required:!0,isZip:!0},ccNumber:{required:!0,isCreditCard:!0},ccExpiryMonth:{required:!0,isCcExpiry:!0},ccExpiryYear:{required:!0,isCcExpiry:!0},cardholderName:{required:!0,isCardholderName:!0,maxlength:50}},messages:{fullName:{required:"Full name is required.",maxlength:e.validator.format("Full name must be {0} characters or less.")},addressFullName:{required:"Full name is required.",maxlength:e.validator.format("Full name must be {0} characters or less.")},email:{required:"Email address is required.",email:"Enter a valid email address e.g. yourname@aol.com."},password:{required:r.labelMessage("Password is required."),minlength:"Password must be at least 6 characters long."},passwordVerify:{required:"Re-enter your password.",equalTo:"Passwords must match."},address1:{required:r.labelMessage("Address is required."),minlength:e.validator.format("Address Line 1 must be at least {0} characters long."),maxlength:e.validator.format("Address Line 1 must be {0} characters or less.")},address2:{maxlength:e.validator.format("Address line 2 must be {0} characters or less.")},shippingAddress1:{required:"Shipping street address is required.",minlength:e.validator.format("Shipping address line 1 must be at least {0} characters long."),maxlength:e.validator.format("Shipping address line 1 must be {0} characters or less.")},shippingAddress2:{maxlength:e.validator.format("Shipping address line 2 must be {0} characters or less.")},billingAddress1:{required:"Billing street address is required.",minlength:e.validator.format("Billing address line 1 must be at least {0} characters long."),maxlength:e.validator.format("Billing address line 1 must be {0} characters or less.")},billingAddress2:{maxlength:e.validator.format("Billing address line 2 must be {0} characters or less.")},city:{required:"City is required.",minlength:e.validator.format("City must be at least {0} characters long."),maxlength:e.validator.format("City must be {0} characters or less.")},state:{required:"State is required."},postcode:{required:"ZIP code is required.",number:"Enter a valid ZIP code."},billingPhone:{required:"Phone number is required.",maxlength:e.validator.format("Phone number must be {0} characters or less.")},phone:{required:"Phone number is required."},ccNumber:{required:"Credit card number is required."},ccExpiryMonth:{required:"Credit card expiration month is required."},ccExpiryYear:{required:"Credit card expiration year is required."},cardholderName:{required:"Cardholder's name is required.",maxlength:e.validator.format("Cardholder's name must be {0} characters or less.")},reenterCC:{required:"Re-enter your credit card number."}}};e.validator.addMethod("isLatinCharOnly",function(a,i){var t;return!!this.optional(i)||(!(t=r.getNonLatinCharsMatches(a))||(e(i).data("invalid-chars",t),!1))},function(r,a){var i=e(a).data("invalid-chars");return i?e.validator.format("Remove invalid characters : "+i):"Field contains characters we do not accept. Remove special characters."}),e.validator.addMethod("isLatinCharOrSmartPunctuation",function(a,i){var t;return!!this.optional(i)||(!(t=r.getNonLatinSmartPunctuationCharsMatches(a))||(e(i).data("invalid-chars",t),!1))},function(r,a){var i=e(a).data("invalid-chars");return i?e.validator.format("Remove invalid characters : "+i):"Field contains characters we do not accept. Remove special characters."}),e.validator.addMethod("isCreditCard",function(e,a){return this.optional(a)||r.isValidCcNumber(e)},"Enter a valid credit card number.");var i={checkEmptyVal:function(e){var r=e.val();return null!==r&&""!==r.toString()},checkDates:function(){return!(!this.checkEmptyVal(e(".js-expiration-month"))||!this.checkEmptyVal(e(".js-expiration-year")))}};e.validator.addMethod("isCcExpiry",function(r,a){var t,n,s,l,o,d=e(a),c=new Date,u=c.getMonth()+1,h=c.getFullYear();return!!this.optional(a)||(!i.checkDates()||(d.attr("id").indexOf("Month")>=0?(t=d,s=e("#"+d.attr("id").replace(".","\\.").replace("Month","Year"))):(s=d,t=e("#"+d.attr("id").replace(".","\\.").replace("Year","Month"))),n=t.val()<10?"0"+t.val().toString():t.val().toString(),l=s.val().toString(),u=u<10?"0"+u.toString():u.toString(),(o=l+n>=h.toString()+u)&&window.chewy.FormValidator.utils.clearError(d),o))},"Credit card expiration date cannot be in the past."),e.validator.addMethod("isCardholderName",function(e,a){return this.optional(a)||!r.isAllDigits(e)},"Enter a valid cardholder name."),e.validator.addMethod("isZip",function(e,r){return this.optional(r)||/^(\d{5}(?:-\d{4})?)$/g.test(e)},"Enter a valid ZIP code."),e.validator.addMethod("isValidPhone",function(e,r){return this.optional(r)||/^(([+]?1[ -]?)?[(]?\d{3}[)]?[ -]?)?\d{3}[ -]?\d{4}$/g.test(e)},"Enter a valid phone number e.g. 800-672-4399."),e.validator.addMethod("isLower48",function(e,r){return this.optional(r)||!/^AK$/g.test(e)&&!/^HI$/g.test(e)},"We only ship within the contiguous United States at this time."),e.validator.addMethod("email",function(e,r){return this.optional(r)||/^[^@]*@[\S]+\.[^.\s]{2,}$/.test(e)&&/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(e)}),e.validator.addMethod("nowhitespace",function(e,r){return this.optional(r)||/^\S+$/i.test(e)},"No spaces."),e.validator.addMethod("alphanumeric",function(e,r){return this.optional(r)||/^[A-Za-z0-9]+$/i.test(e)},"Letters and numbers only."),window.chewy=window.chewy||{},window.chewy.FormValidator={validate:function(r,a){r.validate({debug:!1,ignore:".field__input--novalidation :hidden",focusCleanup:!1,onkeyup:!1,onsubmit:!1,onfocusout:function(r){e(r).valid()},rules:a.rules,messages:a.messages,errorClass:"field__message",errorElement:"p",errorPlacement:function(r,a){e(a).attr("id").indexOf("expiration")>=0&&e(a).closest(".field").find(".field__message").remove(),a.closest(".field").append(r)},highlight:function(r){var a=e(r),i=a.closest(".field");i.find(".field__message--submit").remove(),a.removeClass("field__input--error"),i.addClass("field--error")},unhighlight:function(r){var a=e(r),i=a.closest(".field");i.find(".field__message--submit").remove(),a.removeClass("field__input--error"),i.removeClass("field--error")}})},commonOpts:a,utils:{clearFormFocus:function(e){var r,a=document.querySelectorAll(e+" .field");for(r=0;r<a.length;r+=1)window.chewy.FormValidator.utils.clearFocus(a[r])},clearFocus:function(e){e.classList.remove("field--content")},clearFormErrors:function(r){r.find(":input").each(function(){var r=e(this);window.chewy.FormValidator.utils.clearError(r),""!==r.val()?r.closest(".field").addClass("field--content"):r.closest(".field").removeClass("field--content")}),e(".cw-messages").remove()},clearError:function(e){var r=e.closest(".field");e.removeClass("field__input--error"),r.removeClass("field--error"),r.find(".field__message").remove()},loadAjaxErrors:function(r,a){var i,t;if(a&&a.errors||(a={errors:!0,globalErrors:["Something went wrong... Please try again later."],fieldErrors:[]}),a.errors){var n=e('<div class="cw-messages cw-messages--error"></div>'),s="Oops!",l="",o=a.fieldErrors?e.map(a.fieldErrors,function(e,r){return r}).length:0;a.globalErrors.length+Math.min(o,1)===1?s=a.globalErrors.length>0?s+" "+a.globalErrors[0]:s+" Please fix the errors below.":(l+="<ul>",e.each(a.globalErrors,function(e,r){l+="<li>"+r+"</li>"}),o>0&&(l+="<li>Please fix the errors below.</li>"),l+="</ul>"),n.html('<h5><span class="cw-messages__icon"></span>'+s+"</h5>"+l),r.find(".cw-messages.cw-messages--error").remove(),r.find(".js-errors").html(n)}e.each(a.fieldErrors,function(a,n){i=r.find('[name="'+a+'"]'),window.chewy.FormValidator.utils.clearError(i),i.addClass("field__input--error"),t=e('<p class="field__message field__message--submit">'+n+"</p>"),i.closest(".field__wrapper").append(t)})}}},e(function(){e.publish("validation.ready")})}(jQuery)}},[[517,0]]]);
//# sourceMappingURL=cw-form.611c7884eefa6778ccdf.packaged.js.map