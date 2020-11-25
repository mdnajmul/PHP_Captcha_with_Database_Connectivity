<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Captcha Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <h1>Captcha Form</h1><br/>
                    <form id="frmCaptcha">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile:</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile" required>
                        </div>
                        <div class="form-group">
                            <label>Details:</label>
                            <textarea class="form-control" id="details" name="details" placeholder="Enter details" required></textarea>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-10">
                                    <label>Captcha:</label>
                                    <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Enter captcha">
                                </div>
                                <div class="col-lg-2" style="margin-top:25px;">
                                    <img src="captcha.php">
                                </div>
                            </div>
                        </div>
                        
                        <button type="button" class="btn btn-default" onclick="submit_data()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            function submit_data(){
                var name=jQuery('#name').val();
                var mobile=jQuery('#mobile').val();
                var details=jQuery('#details').val();
                var captcha=jQuery('#captcha').val();
                var is_error='';
                if(name==''){
                    is_error='yes';
                }
                if(mobile==''){
                    is_error='yes';
                }
                if(details==''){
                    is_error='yes';
                }
                if(captcha==''){
                    is_error='yes';
                }
                if(is_error==''){
                    jQuery.ajax({
                        url:'insert.php',
                        type:'post',
                        data:jQuery('#frmCaptcha').serialize(),
                        success:function(result){
                            alert(result);
                        }
                    });
                }
            }
        </script>
        
    </body>
</html>