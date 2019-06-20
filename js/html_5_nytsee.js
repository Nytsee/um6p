$(document).ready(function() {
    
    function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname+"="+cvalue+"; "+expires;
    }
    
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    
    function checkCookie() {
        var user=getCookie("username");
        if (user != "") {
            //alert("Welcome again " + user);
            $("#cookies_cont").hide();
            $("#cookies_cont_top").hide();
        } else {
          /*user = prompt("Please enter your name:","");
           if (user != "" && user != null) {
               setCookie("username", user, 1);
           }*/
        }
    }
    
    
    function deletecookie( name ) {
      setCookie("username", "", -1);
    }
    
    
      checkCookie();
      $("#cookies_box .closeCookies, #cookies_cont_top .closeCookiTop").click(function(){
        setCookie("username", "cpige", 1);
        checkCookie();
      })
    
    
    function isMobile() {
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            return true;
        }
        else {
            return false;
        }
    }
    
    
    if(isMobile()){
    }
    
    
    


$("#backToForm").click(function() {
    var offset = -30; //Offset of 20px

    $('html, body').animate({
        scrollTop: $("#dataFormations").offset().top + offset
    }, 500);
});


 $('.parallax').parallax();

    
    
      jQuery("#formID").validationEngine({
        ajaxFormValidation: false,
        promptPosition : "bottomRight:-153",
        showOneMessage : 1,
        maxErrorsPerField: 1,
        binded: true,
    
         // promptPosition : "topLeft:+20",
        scroll: false,
        ajaxFormValidationMethod: 'post',
          'customFunctions': {
              'checkCountry': function (field, rules, i, options){
                //alert($("#mychamps").val())
                    if ($('#country').val() === '') {
                      console.log(field.val())
                        return options.allrules.required.alertTextListe;
                    }
                
                  //alert("ok")
                 // console.log(rules)
              }
          }
        /*onAjaxFormComplete: ajaxValidationCallback*/
      })
    
    
  
      $('.nytList').formSelect();
      
              $('.datepicker').datepicker({
                  format : 'dd/mm/yyyy',
                  firstDay: 1,
                  yearRange : [1970,2018],
                  'i18n' : {
                       cancel : 'Annuler',
                       today: 'aujourd\'hui',
                       monthsShort: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                       months: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                       weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
                       weekdaysAbbrev	: ['Di','Lu','Ma','Me','Je','Ve','Sa']
                       
                  }
              });
              $('.timepicker').timepicker({
                  twelveHour : false,
                  vibrate : true,
      
                  'i18n' : {
                       cancel : 'Annuler',
                       done : 'Ok'
                  }
              });
      
      
              $("#datevisite, #heurevisite").change(function() { 
                var datevisite = $("#datevisite").val();
                var heurevisite = $("#heurevisite").val();
                $(".dateRDV").val(datevisite+" "+heurevisite)
               });
      
               $(".selects-container").click(function(e){
                 return false;
               })
    

                
    $("#callToaction").click(function(){
       $(".detailMaster").show(300);
            var offset = -100; //Offset of 20px

            $('html, body').animate({
                scrollTop: $("#container").offset().top
            }, 500);
       return false;
    })



    $("#printThis").click(function () {
        var contents = $("#printArea").html();
        var frame1 = $('<iframe />');
        frame1[0].name = "frame1";
        frame1.css({ "position": "absolute", "top": "-1000000px" });
        $("body").append(frame1);
        var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
        frameDoc.document.open();
        //Create a new HTML document.
        frameDoc.document.write('<html><head><title>McDonald\'s / Détails de la personne récupérant le gain</title>');
        frameDoc.document.write('</head><body>');
        //Append the external CSS file.
        frameDoc.document.write('<link href="css/style.css" rel="stylesheet" type="text/css" />');
        //Append the DIV contents.
        frameDoc.document.write(contents);
        frameDoc.document.write('</body></html>');
        frameDoc.document.close();
        setTimeout(function () {
            window.frames["frame1"].focus();
            window.frames["frame1"].print();
            frame1.remove();
        }, 500);
    });

    
            });
    
    
    
    