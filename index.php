<!doctype html>
<html lang="he">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="jQuery-Custom-Bootstrap-Checkboxes/css/checkbox-x.min.css"/>
        <link href="css/rainbow.css" rel="stylesheet" type="text/css"/>
        <title>landing-page-sarai-1</title>
    </head>
    <body>
        <div class="container">
            <div class="row" dir="rtl">
                <div class="col-md-6 mt-4"> 
                    <div class="image-div text-center">
                        <img src="images/logo.png" alt="rainbow logo">  
                    </div>
                    <div class="title text-center mt-4">
                        <p class="h3" dir="rtl">גם לחברים על <span style="color:red">4</span> מגיע את הטוב ביותר!</p>
                    </div>
                    <div class="middle-text text-right mt-5 pr-3 mr-5" dir="rtl">
                        <p><i class="fas fa-paw text-danger pl-1"></i> מעושר בויטמינים ומינרלים </p> 
                        <p><i class="fas fa-paw text-danger pl-1"></i> מחזק את העצמות והשיניים </p> 
                        <p><i class="fas fa-paw text-danger pl-1"></i> מחזק את הפרווה ומפחית נשירת שיער </p> 
                        <p><i class="fas fa-paw text-danger pl-1"></i> ללא גלוטן </p> 
                    </div>
                    <div class="bottom-text text-right mt-3 pr-3 mr-5" dir="rtl">
                        <p class="mb-0">לקבלת מידע נוסף ודוגמית חינם, השאירו פרטים ונחזור אליכם:</p>

                        <div class="form-group has-error">
                            <label class="cbx-label sr-only" for="checkbox-id">אני מאשר קבלת חומרים פרסומיים במייל</label>                             
                            <input id="checkbox-id" value="1" data-toggle="checkbox-x" data-theme="krajee-flatblue" data-size="xs">                            
                            <small class="text-danger">אני מאשר/ת קבלת חומרים פרסומיים במייל</small>
                        </div>                      

                    </div>

                </div>
            </div>
            <div class="row" dir="rtl">
                <div class="col-12 bg-danger">
                    <form id="contact-form" class="d-inline" action="" method="POST" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-6 col-md-3 mt-md-4"> 
                                <div class="form-group text-right">
                                    <label for="name" class="text-right">שם מלא:</label>
                                    <input type="text" class="mr-2" id="name" name="name">
                                    <p class="text-white text-center"></p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mt-md-4"> 
                                <div class="form-group text-right">
                                    <label for="name" class="text-right">טלפון:</label>
                                    <input type="text" class="mr-2" id="phone" name="phone">
                                    <p class="text-white text-center"></p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mt-md-4"> 
                                <div class="form-group text-right">
                                    <label for="name" class="text-right">מייל:</label>
                                    <input type="text" class="mr-2" id="email" name="email">
                                    <p class="text-white text-center"></p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mt-md-4 mt-4">
                                <div class="form-group text-right mr-3">
                                    <button id="submit" type="submit" class="btn text-danger">וואף >></button>
                                    <p class="text-white text-center"></p>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>


        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="jQuery-Custom-Bootstrap-Checkboxes/js/checkbox-x.min.js"></script>
        <script src="js/rainbow.js" type="text/javascript"></script>
    </body>

</html>