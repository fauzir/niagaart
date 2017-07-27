{{--
<style>
  .uploadimg
  {
    position: absolute;
    top:0;
  }
  #upload-demo
  {
    position: relative;
  }

.image-upload > input {
  visibility:hidden;
  width:0;
  height:0;
  background:transparent;
}

#upload-demo-i
{
position: absolute;
top:0;
}

.modal {
  position: fixed;
  top: 10%;
  margin-left: 13%;
  z-index: 1050;
  width: 1000px;
  height: 750px;
  background-color: #ffffff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.3);
  *border: 1px solid #999;
  -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
  outline: none;
  -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
     -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
          box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
  -webkit-background-clip: padding-box;
     -moz-background-clip: padding-box;
          background-clip: padding-box;
}

.modal.fade {
  top: -25%;
  -webkit-transition: opacity 0.3s linear, top 0.3s ease-out;
     -moz-transition: opacity 0.3s linear, top 0.3s ease-out;
       -o-transition: opacity 0.3s linear, top 0.3s ease-out;
          transition: opacity 0.3s linear, top 0.3s ease-out;
}

.modal.fade.in {
  top: 10%;
}

.modal-header {
  padding: 9px 15px;
  border-bottom: 1px solid #eee;
}

.modal-header .close {
  margin-top: 2px;
}

.modal-header h3 {
  margin: 0;
  line-height: 30px;
}

.modal-body {
  position: relative;
  max-height: 700px;
  padding: 15px;
  overflow-y: auto;
}

.modal-form {
  margin-bottom: 0;
}

.modal-footer {
  padding: 14px 15px 15px;
  margin-bottom: 0;
  text-align: right;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  -webkit-border-radius: 0 0 6px 6px;
     -moz-border-radius: 0 0 6px 6px;
          border-radius: 0 0 6px 6px;
  *zoom: 1;
  -webkit-box-shadow: inset 0 1px 0 #ffffff;
     -moz-box-shadow: inset 0 1px 0 #ffffff;
          box-shadow: inset 0 1px 0 #ffffff;
}

.modal-footer:before,
.modal-footer:after {
  display: table;
  line-height: 0;
  content: "";
}

.modal-footer:after {
  clear: both;
}

.modal-footer .btn + .btn {
  margin-bottom: 0;
  margin-left: 5px;
}

.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}

.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
</style> --}}
{{-- <head>
  <meta name="_token" content="{{ csrf_token() }}" />


  <script type="text/javascript">



  </script>
  <link rel="stylesheet" href="{{ asset('jcrop/css/main.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('jcrop/css/demos.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('jcrop/css/jquery.Jcrop.css') }}" type="text/css" />
  <style type="text/css">
    .optdual { position: relative; }
    .optdual .offset { position: absolute; left: 18em; }
    .optlist label { width: 16em; display: block; }
    #dl_links { margin-top: .5em; }

  </style>
</head> --}}
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Image Crop</h4>
  </div>
    <div class="modal-body">
      <img id="target" alt="[Jcrop Example]" height="400px" width="525px" class="center" />

    </div>
    <button type="button" name="submit"></button>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {{-- <div class="image-upload">
          <label for="upload">
                      Click Here to Upload
                    </label>
          <input type="file" id="upload" data-target="#myModal" data-toggle="modal" >

          <div id="upload-demo-i" style="cursor: pointer" onclick="editImage()"></div>
      </div> --}}
        {{-- <input type="file" name="image" id="imageUpload" class="form-control"> --}}
        {!! Form::file('image', null, ['class' => 'form-control', 'id' => 'imageUpload', 'required' => 'required']) !!}
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}

    </div>
</div><div class="form-group {{ $errors->has('welcome_text') ? 'has-error' : ''}}">
    {!! Form::label('welcome_text', 'Welcome Text', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('welcome_text', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('welcome_text', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('company_description') ? 'has-error' : ''}}">
    {!! Form::label('company_description', 'Company Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('company_description', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('company_description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

{{-- <div id="myModal" class="modal fade " role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
      <div class="modal-header">
        <button type="button"   style=" "class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">

        <img id="blah" src="#" alt="your image" />

    </div>
  </div>

</div>
</div> --}}

{{-- <script type="text/javascript">
  $(function(){


    // The variable jcrop_api will hold a reference to the
    // Jcrop API once Jcrop is instantiated.
    var jcrop_api;

    // In this example, since Jcrop may be attached or detached
    // at the whim of the user, I've wrapped the call into a function


    // The function is pretty simple
    function initJcrop()//
    {
      $('.requiresjcrop').hide();

      s('#target').Jcrop({
        onRelease: releaseCheck
      },function(){

        jcrop_api = this;
        jcrop_api.animateTo([100,100,400,300]);
        jcrop_api.setOptions(
          { aspectRatio: 16/9 });
        jcrop_api.focus();

        // Setup and dipslay the interface for "enabled"
        $('#can_click,#can_move,#can_size').attr('checked','checked');
        $('#ar_lock,#size_lock,#bg_swap').attr('checked',false);
        $('.requiresjcrop').show();

      });

    };

    function releaseCheck()
    {
      jcrop_api.setOptions({ allowSelect: true });
      $('#can_click').attr('checked',false);
    };

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#myModal').modal('show');
                $('#target').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imageUpload").change(function(){
        readURL(this);
        initJcrop();
    });


    $("#imageUpload").on('change',function(){
      $.ajax({
         url: '/upload-original',
         type: "post",
         success: function(response){
           $('.modal-body').html(response)
           $('#myModal').modal('show');
         },
         error: function(response){
           console.log('Error '+response);
         }
       });
    });
  });
</script> --}}

{{-- <script type="text/javascript">
$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 300,
        height: 225,
        type: 'rectangle'
    },
    boundary: {
        width: 300,
        height: 300
    }
});

$('#upload').on('change', function () {
	var reader = new FileReader();
    reader.onload = function (e) {
    	$uploadCrop.croppie('bind', {
    		url: e.target.result
    	}).then(function(){
    		console.log('jQuery bind complete');
    	});

    }
    reader.readAsDataURL(this.files[0]);
});

$('.upload-result').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {

	$.ajax({
			url: "postImage",
			type: "POST",
			data: {
				"_token": "{{ csrf_token() }}",
				"image":resp
			},
			success: function (data) {//alert(data);
				html = '<img src="' + resp + '" />';
				$("#upload-demo-i").html(html);
				console.log(data);
			}
		});
	});
});
/*This function is added for Image Reupload Facility: Start*/
function editImage() {
  //alert("hiiiiiii");

  location.reload(true);
  editImage2();


}

function editImage() {
  $("#upload").click();
}

/*This function is added for Image Reupload Facility: End*/


</script> --}}
