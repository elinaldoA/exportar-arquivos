<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{asset('js/style.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
<!------ Include HEAD tag ---------->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">Registrar</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="#" method="post" role="form" style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="nome" id="nome" tabindex="1" class="form-control" placeholder="Nome" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="senha" id="senha" tabindex="2" class="form-control" placeholder="Senha">
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember"> Lembre-me</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Logar">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="#" tabindex="5" class="forgot-password">Esqueci minha senha?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form id="register-form" action="#" method="post" role="form" style="display: none;">
                                <div class="form-group">
                                    <input type="text" name="nome" id="nome" tabindex="1" class="form-control" placeholder="Nome completo" value="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Seu melhor e-mail" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="senha" id="senha" tabindex="2" class="form-control" placeholder="Sua senha">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirmar-senha" id="confirmar-senha" tabindex="2" class="form-control" placeholder="Confirmar sua senha">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Criar conta">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>