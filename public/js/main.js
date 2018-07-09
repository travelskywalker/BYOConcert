$(document).ready(function(){
  $('.modal').modal({
    preventScrolling: true,
    dismissible: false,
    startingTop: '50%',
    endingTop: '50%',
  });

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
    if(isFormValid()){
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

  
});


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

