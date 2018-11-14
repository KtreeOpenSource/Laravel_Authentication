<html>
  <head>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
      $(function () {
       $('form').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            url: 'http://xxxxx',
            data: $('form').serialize(),
            success: function (data) {  
console.log('data is this ',data)                
var token =  data.success.token
                if(token)
                {
$('#finalValue').css('display','block');                   
 $('#finalValue').text('Token from laravel is this  '+token);
                }
                else
                {
                    alert('Please provide proper credentials');
                }
            },
            complete:function(res)
            {
              if(res.status != '200')
              {
                  alert('Please provide proper credentials')
              }
            }
          });
        });
      });

$(document).ajaxStart(function() {
  $("#wait").css('display','block');
}).ajaxStop(function() {
  $("#wait").css('display','none');
});


    </script>
    <style>
		form {
			max-width: 300px;
			font-size:16px;
		}
		label {
			margin-bottom:5px;
			display:block;
		}
		form input,form button {
			margin-bottom: 15px;
		}
		.input-field {
			display: block;
			width: 100%;
			padding: 5px 10px;
			font-size: 16px;
			line-height: 1.5;
			color: #495057;
			background-color: #fff;
			border: 1px solid #ced4da;
			border-radius: 4px;
		}
		.button {
			border: 1px solid transparent;
			padding: 5px 12px;
			font-size: 16px;
			line-height: 1.5;
			border-radius: 4px;
			color: #fff;
			background-color: #007bff;
			border-color: #007bff;
			cursor: pointer;
		}
    </style>
  </head>
  <body>
	<h1>Laravel Authentication via Api</h1>
    <form>
<label>Email:</label>      <input class="input-field" name="email">
<label>Password:</label>      <input class="input-field" name="password" type="password">
      <input name="submit" class="button" type="submit" value="Submit">
      <div style="display:none" id='finalValue' ></div>
    </form>
 <div id="wait" style="display:none;width:69px;height:89px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;"><img src='loading.gif' width="64" height="64" /><br></div>
  </body>
</html>
