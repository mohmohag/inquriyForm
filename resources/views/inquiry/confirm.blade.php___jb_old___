<html>
    <head>
        <title>Contact Form Tutorial by Bootstrapious.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <div class="container">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">

                    <h1>お問い合わせフォーム </h1>


                    <!-- We're going to place the form here in the next step -->
                    <!-- <form id="contact-form" method="post" action="contact.php" role="form"> -->
                      {!! Form::open(['route' => 'inquiry.store']) !!}


                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('form_name', '名前') !!}
                                        <h5>{{ $inquiryform['name'] }}</h5>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      {!! Form::label('form_name', '性別') !!}
                                      @if ($inquiryform['gender'] == 0)
                                        {{ "男性"}}
                                      @else
                                        {{ "女性"}}
                                      @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('form_email', 'メールアドレス') !!}
                                        <h5>{{$inquiryform['email']}}</h5>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('form_email', 'URL') !!}
                                        <h5>{{$inquiryform['url']}}</h5>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {!! Form::label('form_message', 'お問い合わせ内容') !!}
                                        <h5>{{$inquiryform['detail']}}</h5>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">




                                  <li class="btn btn-back btn-send"><a href={{route('inquiry.back')}}>戻る</a></li>
                                    <!-- <input type="submit" class="btn btn-back btn-send" value="戻る"> -->
                                    <input type="submit" class="btn btn-success btn-send" value="次へ">

                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        <script src="contact.js"></script>
    </body>
</html>
