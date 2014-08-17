<?php $title="登陆米莫"; $page="login"; include("inc/header.php"); ?>

	<div class="container">
		<div class="row loginbk">
			<div class="col-md-12 ">
				<div class="logo">
					<img src="images/logo.png" alt="" />
				</div>
			</div>
			<div class="col-md-12">
				<div class="row loginbox">
					<div class="col-md-6">
						<h3>欢迎回来 , 请登录</h3>
					</div>
					<div class="col-md-6 reglink">
						新用户请点击注册 >
					</div>
					<div class="col-md-12" style="margin-top:20px;">
						<form action="">
							<div class="ground" style="margin-top:20px;">
								<input type="text" class="gr-tbox" placeholder="emal@121.com" />
								<span class="note">
									邮箱尚未注册 , <a href="#">请先注册</a>
								</span>
							</div>
							<div class="ground">
								<input type="text" placeholder="******" class="gr-tbox" />
								<span class="note">
									密码错误 , <a href="#">忘记密码？</a>
								</span>
							</div>
							<div class="ground">
								<a href="#" style="float:right;">忘记密码？</a>
								<label class="fl" ><input type="checkbox" id="" />记住我</label>
								
							</div>

							<div style="text-align:center;padding-top:10px;padding-bottom:30px;">
								<button class="btn1 yh" style="background:#e2005a;" type="submit"><span class="">登陆米莫</span></button>
							</div>
							
							<div class="share">
								<div style="float:left;margin-right:5px; position:relative;top:2px;">或使用社交账号登录米莫:</div>
								<a href="#"><img src="images/icon-bg.png" alt=""></a>
								<a href="#"><img src="images/icon-bg-02.png" alt=""></a>
								<a href="#"><img src="images/icon-bg-03.png" alt=""></a>
								<a href="#"><img src="images/icon-bg-04.png" alt=""></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


	</div>

<?php include("inc/footer.php"); ?>


	