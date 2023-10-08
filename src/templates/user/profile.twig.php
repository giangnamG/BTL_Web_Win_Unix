<!DOCTYPE html>
<html lang="en">
<head>
	<title>Colo Shop</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/templates/assets/styles/bootstrap4/bootstrap.min.css">
	<link href="/templates/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="/templates/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="/templates/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="/templates/assets/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="/templates/assets/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="/templates/assets/styles/responsive.css">

    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/templates/assets/styles/profile/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/templates/assets/styles/profile/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/templates/assets/styles/profile/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/templates/assets/styles/profile/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/templates/assets/styles/profile/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/templates/assets/styles/profile/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/templates/assets/styles/profile/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/templates/assets/styles/profile/style.css" type="text/css">
</head>
<body>
<style>
        .header{
            top: 0;
            width: 100%;
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 10px 13px;
            text-decoration: none;
            font-size: 17px;
        }
    </style>

<div class="super_container">
	<!-- Header -->

	<header class="header trans_300" style="padding: 0px">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">free shipping on all u.s orders over $50</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								<li class="currency">
									<a href="#">
										usd
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="currency_selection">
										<li><a href="#">cad</a></li>
										<li><a href="#">aud</a></li>
										<li><a href="#">eur</a></li>
										<li><a href="#">gbp</a></li>
									</ul>
								</li>
								<li class="language">
									<a href="#">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="#">French</a></li>
										<li><a href="#">Italian</a></li>
										<li><a href="#">German</a></li>
										<li><a href="#">Spanish</a></li>
									</ul>
								</li>
								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Profile</a></li>
										<form id="logout" action="/logout" method="POST">
											<input name="logout" value="logout" type="hidden">
										</form>
											<li><a href="#" value="logout" onclick="document.getElementById('logout').submit();"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">colo<span>shop</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								{% if permistion == 'admin' %}
								<li><a href="/admin" style="margin-bottom: 100px;">admin</a></li>
								{% endif %}
								<li><a href="/">home</a></li>
								<li><a href="#">shop</a></li>
								<li><a href="#">promotion</a></li>
								<li><a href="#">pages</a></li>
								<li><a href="contact.html">contact</a></li>
							</ul>
							<ul class="navbar_user">
								<li></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li class="checkout">
									<a href="#">
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						usd
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">cad</a></li>
						<li><a href="#">aud</a></li>
						<li><a href="#">eur</a></li>
						<li><a href="#">gbp</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">French</a></li>
						<li><a href="#">Italian</a></li>
						<li><a href="#">German</a></li>
						<li><a href="#">Spanish</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">shop</a></li>
				<li class="menu_item"><a href="#">promotion</a></li>
				<li class="menu_item"><a href="#">pages</a></li>
				<li class="menu_item"><a href="#">blog</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>
</div>

<br>
    <div class="breadcrumb-option" style="padding-top: 140px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="">
                    <div class="breadcrumb__links">
                        <a style="text-decoration: none" href="/"><i class="fa fa-home"></i> Home</a>
                        profile</div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section >
            <!-- OPTION  -->
            <div class="container pIHdXn" style="
    padding-top: 10px;
">
                <link rel="stylesheet" data-modern="true" href="/templates/assets/styles/profile/ho_so_1.css">
                <link rel="stylesheet" type="text/css" href="/templates/assets/styles/profile/ho_so_2.css">
                <link rel="stylesheet" type="text/css" href="/templates/assets/styles/profile/ho_so_3.css">
                <div class="kul4+s">
                    <div class="AmWkJQ">
                        <a class="_1O4r+C" href="#">
                            <img src="{{ user.avatar }}" class="rounded-circle shadow-4" alt="Avatar" /></a>
                            <div class="miwGmI">
                                <div class="mC1Llc">{{ user.username }}</div>
                                <div><a class="_78QHr1" href="#">
                                    <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg" style="margin-right: 4px;">
                                        <path d="M8.54 0L6.987 1.56l3.46 3.48L12 3.48M0 8.52l.073 3.428L3.46 12l6.21-6.18-3.46-3.48" fill="#9B9B9B" fill-rule="evenodd"></path>
                                    </svg>Sửa hồ sơ</a>
                                </div>
                            </div>
                        </div>
                        <div class="rhmIbk">
                            <div class="stardust-dropdown stardust-dropdown--open">
                                <div class="stardust-dropdown__item-header">
                                    <a class="+1U02e" href="#">
                                        <div class="bfikuD"><img src="/templates/assets/images/profile/ba61750a46794d8847c3f463c5e71cc4"></div>
                                        <div class="DlL0zX">
                                            <span class="adF7Xs">Tài khoản của tôi</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="stardust-dropdown__item-body stardust-dropdown__item-body--open">
                                    <div class="Yu7gVR">
                                        <a class="FEE-3D tH0d6d" href="#"><span class="qyt-aY">Hồ sơ</span></a>
                                        <a class="FEE-3D" href="#"><span class="qyt-aY">Địa chỉ</span></a>
                                        <a class="FEE-3D" href="#"><span class="qyt-aY">Đổi mật khẩu</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="stardust-dropdown">
                                <div class="stardust-dropdown__item-header">
                                    <a class="+1U02e" href="#"><div class="bfikuD"><img src="/templates/assets/images/profile/f0049e9df4e536bc3e7f140d071e9078"></div>
                                        <div class="DlL0zX"><span class="adF7Xs">Đơn Mua</span></div>
                                    </a>
                                </div>
                                <div class="stardust-dropdown__item-body">
                                    <div class="Yu7gVR"></div>
                                </div>
                            </div>
                            <div class="stardust-dropdown">
                                <div class="stardust-dropdown__item-header">
                                    <a class="+1U02e" href="/user/notifications/order">
                                        <div class="bfikuD">
                                            <img src="/templates/assets/images/profile/e10a43b53ec8605f4829da5618e0717c">
                                        </div>
                                        <div class="DlL0zX"><span class="adF7Xs">Thông báo</span></div>
                                    </a>
                                </div>
                                <div class="stardust-dropdown__item-body">
                                    <div class="Yu7gVR">
                                        <a class="FEE-3D" href="/user/notifications/order"><span class="qyt-aY">Cập nhật đơn hàng</span></a>
                                        <a class="FEE-3D" href="/user/notifications/promotion"><span class="qyt-aY">Khuyến mãi</span></a>
                                        <a class="FEE-3D" href="/user/notifications/wallet"><span class="qyt-aY">Cập nhật Ví</span></a>
                                        <a class="FEE-3D" href="/user/notifications/activity"><span class="qyt-aY">Hoạt động</span></a>
                                        <a class="FEE-3D" href="/user/notifications/rating"><span class="qyt-aY">Cập nhật đánh giá</span></a>
                                        <a class="FEE-3D" href="/user/notifications/shopee"><span class="qyt-aY">Cập nhật Shopee</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="stardust-dropdown"><div class="stardust-dropdown__item-header"></div>
                            <div class="stardust-dropdown__item-body"><div class="Yu7gVR"></div>
                        </div>
                    </div>
                    <div class="stardust-dropdown">
                        <div class="stardust-dropdown__item-header"></div>
                        <div class="stardust-dropdown__item-body"><div class="Yu7gVR"></div>
                    </div>
                    </div>
                        </div>
                </div>

                <div class="xMDeox">
                    <div class="Hvae38" role="main">
                        <div style="display: contents;">
                        <div class="TApBFI">
                            <div class="Q5feZb">
                                <h1 class="OomjNA">Hồ sơ của tôi</h1>
                                <div class="HJ5nmd">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
                            </div>
                            <div class="+eqaLN">
                                <div class="InGfFt">
                                    <form action="/user/profile" method="POST" enctype='multipart/form-data'>
                                        <div class="dghdd9"><div class="h4eiAQ">
                                            <div class="tBgRZR _7cr4dR"><label>Tên đăng nhập</label></div>
                                            <div class="gV+dPk"><div>
                                                <div class="ovqcxY">
                                                    <input type="text" placeholder="" class="y-NK4C" value="{{ user.username }}">
                                                </div>
                                                <div class="MBDYjl">Tên Đăng nhập chỉ có thể thay đổi một lần.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dghdd9">
                                    <div class="h4eiAQ">
                                        <div class="tBgRZR">
                                            <label>Tên</label>
                                        </div>
                                        <div class="gV+dPk"><div>
                                        <div class="ovqcxY">
                                            <input type="text" name="fullname" boder="1" placeholder="" class="y-NK4C" value="{{ user.fullname }}">
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dghdd9">
                                    <div class="h4eiAQ">
                                        <div class="tBgRZR">
                                            <label>Email</label>
                                        </div>
                                        <div class="gV+dPk"><div>
                                        <div class="ovqcxY">
                                            <input type="text" name="email" placeholder="" class="y-NK4C" value="{{ user.email }}">
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dghdd9">
                                    <div class="h4eiAQ">
                                        <div class="tBgRZR">
                                            <label>Phone</label>
                                        </div>
                                        <div class="gV+dPk"><div>
                                        <div class="ovqcxY">
                                            <input type="text" name="phone" placeholder="" class="y-NK4C" value="{{ user.phone }}">
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <div class="dghdd9"><div class="h4eiAQ">
                            <div class="gV+dPk"></div></div></div>
                            <div class="dghdd9"><div class="h4eiAQ"><div class="tBgRZR"><label>Giới tính</label></div>
                            <div class="gV+dPk"><div class="vidoEC"><div class="stardust-radio-group" role="radiogroup"><div class="stardust-radio stardust-radio--checked" tabindex="0" role="radio" aria-checked="true">
                                <div class="stardust-radio-button stardust-radio-button--checked">
                                    <div class="stardust-radio-button__outer-circle">
                                        <div class="stardust-radio-button__inner-circle"></div></div></div>
                                        <div class="stardust-radio__content"><div class="stardust-radio__label">Nam</div></div>
                                    </div><div class="stardust-radio" tabindex="0" role="radio" aria-checked="false">
                                        <div class="stardust-radio-button"><div class="stardust-radio-button__outer-circle">
                                            <div class="stardust-radio-button__inner-circle"></div>
                                        </div></div><div class="stardust-radio__content"><div class="stardust-radio__label">Nữ</div>
                                    </div>
                                </div>
                                <div class="stardust-radio" tabindex="0" role="radio" aria-checked="false">
                                    <div class="stardust-radio-button"><div class="stardust-radio-button__outer-circle">
                                        <div class="stardust-radio-button__inner-circle"></div>
                                    </div></div><div class="stardust-radio__content">
                                        <div class="stardust-radio__label">Khác</div></div>
                                    </div></div></div></div></div></div><div class="dghdd9">
                                        <div class="h4eiAQ"><div class="tBgRZR"><label>Ngày sinh</label></div>
                                        <div class="gV+dPk"><div class="MWGELC">
                                            <div class="shopee-dropdown shopee-dropdown--has-selected">
                                                <div class="shopee-dropdown__entry shopee-dropdown__entry--selected">
                                                    <span>1</span>
                                                <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-down"><g><path d="m11 2.5c0 .1 0 .2-.1.3l-5 6c-.1.1-.3.2-.4.2s-.3-.1-.4-.2l-5-6c-.2-.2-.1-.5.1-.7s.5-.1.7.1l4.6 5.5 4.6-5.5c.2-.2.5-.2.7-.1.1.1.2.3.2.4z"></path></g></svg></div></div><div class="shopee-dropdown shopee-dropdown--has-selected"><div class="shopee-dropdown__entry shopee-dropdown__entry--selected">
                                                    <span>Tháng 1</span><svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-down"><g><path d="m11 2.5c0 .1 0 .2-.1.3l-5 6c-.1.1-.3.2-.4.2s-.3-.1-.4-.2l-5-6c-.2-.2-.1-.5.1-.7s.5-.1.7.1l4.6 5.5 4.6-5.5c.2-.2.5-.2.7-.1.1.1.2.3.2.4z"></path></g></svg></div></div><div class="shopee-dropdown shopee-dropdown--has-selected"><div class="shopee-dropdown__entry shopee-dropdown__entry--selected">
                                                    <span>2003</span><svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-down"><g><path d="m11 2.5c0 .1 0 .2-.1.3l-5 6c-.1.1-.3.2-.4.2s-.3-.1-.4-.2l-5-6c-.2-.2-.1-.5.1-.7s.5-.1.7.1l4.6 5.5 4.6-5.5c.2-.2.5-.2.7-.1.1.1.2.3.2.4z"></path></g></svg></div></div></div></div></div></div><div class="X9w211">
                                                    <button type="submit" name="submit" class="btn btn-solid-primary btn--m btn--inline" aria-disabled="false">Lưu</button>
                                                </div></div><div class="_6-dPdd"><div class="DyzGC5">
                                                    <div class="miizbf"><div class="c-WmUJ">
                                                        <img src="{{ user.avatar }}" class="rounded-circle shadow-4" alt="Avatar" /></a>
                                                    </div></div>
                                                <input class="btn btn-light btn--m btn--inline" type="file" name="avatar" accept=".jpg,.jpeg,.png" style="border: 0px;">
                                                <div class="dWItVn">
                                                    <div class="ayiXAf">Dụng lượng file tối đa 1 MB</div><div class="ayiXAf">Định dạng:.JPEG, .PNG</div>
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

        </section>
    </main>


</body>
</html>