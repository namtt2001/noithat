@extends('page.index')
@section('main')
<main class="main">
    <div class="page-header">
        <div class="container d-flex flex-column align-items-center">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <a href="" class="logo">

                </a>
            </nav>

            <h1>My Account</h1>
        </div>
    </div>

    <div class="container login-container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading mb-1">
                            <h2 class="row justify-content-center">Đăng Ký </h2>
                        </div>
                        <form method="POST" action="" >
                            @csrf
                            <label for="register-name">
                                Tên Tài Khoản
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-input form-wide" id="register-name"name ="name" required />

                            <label for="register-email">
                                Email
                                <span class="required">*</span>
                            </label>
                            <input type="email" class="form-input form-wide" id="register-email" name = "email" required />
                            <label for="register-phone">
                                Số điện thoại
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-input form-wide" id="register-name"name ="phone" required />
                            <label for="register-name">
                                Địa chỉ
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-input form-wide" id="register-name"name ="address" required />



                            <label for="register-password">
                                Mật Khẩu
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-input form-wide" id="register-password" name="password"required />
                            <label for="login-confirm password">
                                Nhập Lại Mật Khẩu
                                <span class="required">*</span>
                            </label>
                            <input type="confirm password" class="form-input form-wide" id="login-confirm password" name="confirm password" required />
                            <div class="form-footer">
                                </div>
                                <a href="forgot-password.html"
                                    class="forget-password text-dark form-footer-right">Bạn đã có Account</a>
                            <div class="form-footer mb-2">
                                <button type="submit" class="btn btn-dark btn-md w-100 mb-0">
                                    Đăng ký
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

