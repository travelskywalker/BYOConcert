$(document).ready(function(){
  listSchool();
  remain();

  if($('.school-page').length > 0){
    getSchoolPageData();
    if($(document).width() <= 992) $('.school-list-view').height($('.school-top-container').height() - ($('.school-top-details').height()+35));
  }
  
  $('.modal').modal({
    preventScrolling: true,
    dismissible: false,
    startingTop: '50%',
    endingTop: '50%',
    onCloseEnd: function(){
      if($(this).attr('id')=='learnmore'){
        // $('#subscribe').modal('open');
        $('#subscribe').modal('open');
      }
    }
  });

  // $('#subscribe').modal({
  //   onCloseEnd: function(){
  //     $('#email').val('');
  //   }
  // });

  $('#school').keyup(function(){

    if($(this).val().length >= 2){

      sendAPI('GET','/schools/'+$(this).val()).then(function(response){
        
        var arr = [];
        // push schools from database into array 
        $.each(response.schools, function(key,val){
          arr.push(val.school_name);
        });

        for(var x=0; x<=response.suggested_schools.length-1; x++){
          arr.push(response.suggested_schools[x]);
        }

        // append each school to suggestion content
        if(unique(arr).length > 0) $('.suggestion').fadeIn().html('');
        else $('.suggestion').fadeOut();

        $.each(unique(arr), function(key,value){
          $('.suggestion').append('<div class="school-list">'+ucwords(value)+'</div>');
        });

        $('.school-list').click(function(){
          $('#school').val($(this).html());
          $('.suggestion').fadeOut();
        });
      })
      .catch(function(error){

      });
    }else{
      $('.suggestion').fadeOut().html('');
    }
  });

  $('.submit-nomination').click(function(){
    if(isFormValid() && $('#tnc_radio').is(':checked')){
      sendAPI('GET','/isNameRecorded/'+$('#name').val()).then(function(response){
        if(response.isNameRecorded == true){
          alert('Your name is already submitted');
        }else{
          $('#nomination_form').submit();
          return false;
        }
      })
      .catch(function(error){

      });
    }
  });

  $("#tnc_radio").click(function() {
    // Get the storedValue
    var previousValue = $(this).data('storedValue');
    // if previousValue = true then
    //     Step 1: toggle radio button check mark.
    //     Step 2: save data-StoredValue as false to indicate radio button is unchecked.
    if (previousValue) {
      $(this).prop('checked', !previousValue);
      $(this).data('storedValue', !previousValue);
    }
    // If previousValue is other than true
    //    Step 1: save data-StoredValue as true to for currently checked radio button.
    //    Step 2: save data-StoredValue as false for all non-checked radio buttons.
    else{
      $(this).data('storedValue', true);
      $("input[type=radio]:not(:checked)").data("storedValue", false);
    }
  });

  $('.grid').click(function(){
    window.location.href="/vote/"+$(this).attr('name');
  });

  $('.switch-button').click(function(){
    if($(this).html() == 'Switch to List View'){
      $(this).html('Switch to Stage View');
    }else{
      $(this).html('Switch to List View');
    }

    $('.school-stage-view').toggle();
    $('.school-list-view').toggle();
  });

  $('.subscribe-button').click(function(){
    var email = $('#email').val();
    if(email != '' && validateEmail(email)){
      var url = '/admin/subscribe/'+email;
      sendAPI('GET', url,'').then(function(response){
        if(response.message == 'success'){
          $('#subscribe').modal('close');
          $('#email').val('');
        }else if(response.message == 'existing'){
          alert('email exist!')
        }
      });
    }
    
  });
  
});

function validateEmail(email){
  let filter = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,6})+$/;
  return filter.test(email);
}

function isNameRecorded(){
  sendAPI('GET','/isNameRecorded/'+$('#name').val()).then(function(response){
    return response.isNameRecorded;
  })
  .catch(function(error){

  });
}

function unique(arr) {
  var b = {};
  for (var i=0; i<arr.length; i++) { b[arr[i].toUpperCase()]=arr[i].toUpperCase(); }
  var c = [];
  for (var key in b) { c.push(b[key]); }
  return c;
}

function isFormValid(){ 
  if($('#name').val().length >= 2 && $('#school').val().length >= 2){
    return true;
  }else{
    return false;
  }
}

function getSchoolSuggestion(name){
  sendAPI('GET','/schools/'+name).then(function(response){
    return response;
  })
  .catch(function(error){

  });
}

function sendAPI(method,url,data){
  return(
    $.ajax({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          url: url,
          data: data,
          datatype:'json',
          // cache: false,
          // processData: false,
          type: method,
          success: function (dat) {
              // do something with the result
              // console.log(dat);
          }
      })
  );
}

function ucwords(string) {
	var str = string.toLowerCase();
	var words = str.split(' ');
	str = '';
	for (var i = 0; i < words.length; i++) {
		var word = words[i];
		word = word.charAt(0).toUpperCase() + word.slice(1);
		if (i > 0) { str = str + ' '; }
		str = str + word;
	}
	return str;
}



// for school list page\
function listSchool(){
  if($('.grid-container').length > 0){
    var schools = school_data.schools;
    $.each(schools, function( key, value ) {
      // alert( key + ": " + value );

      // append to container
      $('.grid-container').append(listView(value));
    });
  }
}

function listView(data){
  var container = "";
  container+='<div class="grid" name="'+data.name+'">';
  container+='<div class="school-logo"><img class="responsive-img" src="/images/schools/logo/'+data.logo+'"></div>'; 
  container+='<div class="g-content">';
  container+='<div class="stage"></div>';
  container+='<div class="school-details">';
  container+='<div class="school-name">'+data.name+'</div>';
  container+='<div class="school-place">'+data.place+'</div>';
  container+='</div> ';
  container+='</div>';
  container+='</div>';

  return container;
}

// school-page data
function getSchoolPageData(){
  var url = window.location.pathname;
  var array = url.split('/');

  var lastsegment = unescape(array[array.length-1]);

  // get school data 
  $.each(school_data.schools, function(key,val){
    if(val.name == lastsegment){
      loadSchoolPageData(val);
    }
  });
}

// load school data in school page
function loadSchoolPageData(data){
  $('.school-stage-view').addClass('stage-'+getStageProgress(data.progress));
  $('.school-list-view').html('<img class="responsive-img" src="/images/icon-'+getStageProgress(data.progress)+'.png">');
  $('.school-logo').html('<img class="responsive-img" src="/images/schools/logo/'+data.logo+'">');
  $('.school-place').html(data.place);
  $('.school-name').html(data.name);

  $('.barcode-area').html('<img class="responsive-img" src="/images/schools/barcode/'+data.barcode+'">');

  $('.barcode-download').attr('href', '/images/schools/barcode/'+data.barcode);
  // get stage display
  // get progress icon display
  $('.bar-progress').css('width', data.progress+'%');
  if(data.progress <= 35){
    $('.percent-container').css('position', 'absolute').css('margin-left', data.progress+'%');
  }

  if(data.progress == 100){
    $('.bar-prompt').html('completed').css('font-size','10px');
  }

  if(data.progress == 0){
    $('.bar-progress').css('background','none');
  }

  $('.percent').html(data.progress+'%');
}

function getStageProgress(progress){
  return Math.trunc(progress/7);
}

// countdown timer
function remain() {
  var end = new Date(school_data.nextUpdate);
  sec = 1000,
    min = sec * 60,
    hour = min * 60,
    day = hour * 24;

  var now = new Date(),
      between = end - now;

      hours = Math.floor(between/hour);
      minutes = Math.floor((between % hour) / min),
      seconds = Math.floor((between % min) / sec);

  var dayString = 'days ',
      hourString = 'hrs ',
      minString = 'mins ',
      secString = 'secs ';

  if (hours == 1) {
      hourString = 'hr ';
  };
  if (minutes == 1) {
      minString = 'min ';
  };
  if (seconds == 1) {
      secString = 'sec ';
  };
  // var clock = days + dayString + hours + hourString + minutes + minString + seconds + secString;
  var clock = hours + ':' + minutes + ':' + seconds;
  // document.getElementById("clock").innerHTML = clock;
  $('.counter-container').html(clock+' until the next update');

  // run countdown timer
  timer = setInterval(function () {
    remain();
  }, 1000);
}



