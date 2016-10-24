<div class="first_half">
				<div class="categories">
					<header>
						<h3 class="side-title-head">Top questions</h3>
					</header>
					<ul>
											<?php use App\Question;
$cate =Question::all(); ?>
												<li>
												
												  @foreach($cate as $brand)
<li><a href="#" value="{{$brand->id}}">{{ $brand->title}}</a></li>
 @endforeach  								
												</li></ul></li>
										
									</ul>
				</div>
				<div class="newsletter">
					<h1 class="side-title-head">Newsletter</h1>
					<p class="sign">Sign up to receive our free newsletters!</p>
					<form>
						<input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
						<input type="submit" value="submit">
					</form>
				</div>
		
					 <div class="side-bar-articles">
						<div class="side-bar-article">
							<a href="single.html"><img src="{{URL::asset('images/sai.jpg')}}" alt="" /></a>
							<div class="side-bar-article-title">
								<a href="single.html">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
							</div>
						</div>
					
					 </div>
					  </div>
					
					<div class="clearfix"></div>