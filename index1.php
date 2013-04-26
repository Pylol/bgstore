<?php
	include('templates/header.html');
?>
<div id="contain">
	<div id="navSideBar">
	<div id="navSideBar_Kinds">
		<h3>书籍种类</h3>
		<ul>
			<li class="title">生活</li>
			<li><a href="#">旅游</a></li>
			<li><a href="#">时尚</a></li>
			<li><a href="#">美食</a></li>
			<li><a href="#">家居休闲</a></li>
			<li><a href="#">健身保养</a></li>
			<li class="title">文学</li>
			<li><a href="#">小说</a></li>
			<li><a href="#">哲学</a></li>
			<li><a href="#">传记</a></li>
			<li><a href="#">励志成功</a></li>
			<li><a href="#">诗歌</a></li>
			<li class="title">教育</li>
			<li><a href="#">教材教辅</a></li>
			<li><a href="#">考试</a></li>
			<li><a href="#">教育心理</a></li>
			<li><a href="#">少儿教育</a></li>
			<li class="title">艺术</li>
			<li><a href="#">音乐</a></li>
			<li><a href="#">绘画</a></li>
			<li><a href="#">书法</a></li>
			<li><a href="#">雕塑</a></li>
			<li><a href="#">艺术史</a></li>
			<li class="title">科技与自然</li>
			<li><a href="#">数学</a></li>
			<li><a href="#">医学</a></li>
			<li><a href="#">生物学</a></li>
			<li><a href="#">计算机</a></li>
			<li><a href="#">物理学</a></li>
			<li><a href="#">建筑学</a></li>
			<li><a href="#">航天学</a></li>
		</ul>
		<br style="clear: both" />
	</div>
	<img src="images/nav_bg_220_40.png" />

	<div id="navSideBar_Sale">
		<h3>促销信息</h3>
		<ul>
			<li><a href="bookInfo.php?bookId=1">突然就走到了西藏</a><span>$19.5</span></li>
			<li><a href="#">大地的愤怒</a><span>$19.5</span></li>
			<li><a href="#">躲在小兵后面</a><span>$19.5</span></li>
			<li><a href="#">德玛西亚的超神之路</a><span>$19.5</span></li>
			<li><a href="#">我们都是过客</a><span>$19.5</span></li>
			<li><a href="#">山</a><span>$19.5</span></li>
			<li><a href="#">草丛是青春的坟墓</a><span>$19.5</span></li>
			<li><a href="#">天空之城</a><span>$19.5</span></li>
			<li><a href="#">我</a><span>$19.5</span></li>
			<li><a href="#">饿了</a><span>$19.5</span></li>
		</ul>
	</div>
	<img src="images/nav_bg_220_40_2.png" />


	</div><!-- end of navSideBar -->
	<form id="searchForm">
		<select>
			<option>全部</option>
			<option>生活</option>
			<option>文学</option>
			<option>教育</option>
			<option>艺术</option>
			<option>科技</option>
		</select>
		<input type="text" value="请输入您要查询的书籍" name="searchBooks" id="searchBooks" maxlength="100" onfocus="value=''"onblur="value=defaultValue" />
		<input class="go" type="submit" value="查询" />
	</form>
	
	
	<div id="main">
		<div id="main_content">
		<div id="my-folio-of-works" class="svwp">
			<ul>
				<li><img alt="教主的金龙鱼花生油降价啦！"  src="images/message_1.jpg" /></li>
				<li><img alt="BuGoo书屋开业大酬宾！"  src="images/message_2.jpg" /></li>
				<li><img alt="感谢同学们共同打造布谷书屋！"  src="images/message_3.jpg" /></li>
				<li><img alt="布谷书屋，值得信赖！"  src="images/message_4.jpg" /></li>
			</ul>
		</div>

		<div id="moving_tab">
			<div class="tabs">
				<div class="lava"></div>
				<span class="item">旅游</span>
				<span class="item">时尚</span>
				<span class="item">美食</span>
				<span class="item">家居休闲</span>
				<span class="item">健身保养</span>

			</div>			
			<div class="content">						
				<div class="panel">				
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>						
				</div>
				<!-- end of panel -->
			</div>
			<!-- end of content -->
		</div>
		<!-- end of moving_tab -->
		<div id="moving_tab">
			<div class="tabs">
				<div class="lava"></div>
				<span class="item">小说</span>
				<span class="item">哲学</span>
				<span class="item">传记</span>
				<span class="item">励志成功</span>
				<span class="item">诗歌</span>

			</div>			
			<div class="content">						
				<div class="panel">				
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>						
				</div>
				<!-- end of panel -->
			</div>
			<!-- end of content -->
		</div>
		<!-- end of moving_tab -->


		<div id="moving_tab">
			<div class="tabs">
				<div class="lava"></div>
				<span class="item">教育辅导</span>
				<span class="item">考试</span>
				<span class="item">教育心理</span>
				<span class="item">少儿教育</span>
			</div>			
			<div class="content">						
				<div class="panel">				
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>						
				</div>
				<!-- end of panel -->
			</div>
			<!-- end of content -->
		</div>
		<!-- end of moving_tab -->


		<div id="moving_tab">
			<div class="tabs">
				<div class="lava"></div>
				<span class="item">音乐</span>
				<span class="item">绘画</span>
				<span class="item">书法</span>
				<span class="item">雕塑</span>
				<span class="item">艺术史</span>

			</div>			
			<div class="content">						
				<div class="panel">				
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>						
				</div>
				<!-- end of panel -->
			</div>
			<!-- end of content -->
		</div>
		<!-- end of moving_tab -->
		<div id="moving_tab">
			<div class="tabs">
				<div class="lava"></div>
				<span class="item">数学</span>
				<span class="item">医学</span>
				<span class="item">生物学</span>
				<span class="item">计算机</span>
				<span class="item">物理学</span>
				<span class="item">建筑学</span>
				<span class="item">航天学</span>

			</div>			
			<div class="content">						
				<div class="panel">				
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_01.jpg" />
								</div>
								
								<a href='#'>FUCK!!!</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_02.jpg" />
								</div>
								
								<a href='#'>你可以幸福！</a>
								<span class="bookValue">$19.6</span>
								<span class="bookAuthor">威尔•鲍温</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_03.jpg" />
								</div>
								
								<a href='#'>给你一个团队,你能怎么管? </a>
								<span class="bookValue">$22.0</span>
								<span class="bookAuthor">赵伟</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_04.jpg" />
								</div>
								
								<a href='#' title="觉醒:唤醒成功基因的75堂心灵成长课 ">觉醒:唤醒成功基因的75堂心灵成长课</a>
								<span class="bookValue">$20.0</span>
								<span class="bookAuthor">郭淑哲</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_05.jpg" />
								</div>
								
								<a href='#'>美妙的新世界(英汉对照)</a>
								<span class="bookValue">$22.5</span>
								<span class="bookAuthor">奥尔德斯•伦纳德•赫胥黎</span>
							</div>
						</li>
						<li>
							<div class="bookInfo">
								<div class="bookImage">
									<img src="images/book_06.jpg" title="最好的时光在路上:中国国家地理" />
								</div>
								
								<a href='#'>最好的时光在路上:中国国家地理</a>
								<span class="bookValue">$19.0</span>
								<span class="bookAuthor">郭子鹰</span>
							</div>
						</li>
					</ul>
				</div>
				<!-- end of panel -->
			</div>
			<!-- end of content -->
		</div>
		<!-- end of moving_tab -->
			

		</div><!--end of main_content-->

	</div><!-- end of main -->
	<br style="clear: both" />
</div><!-- end of contain -->


<?php
	include('templates/footer.html');
?>

<script type="text/javascript">
    $(window).bind("load", function() {
    $("div#my-folio-of-works").slideViewerPro({
    thumbs: 6,
    autoslide: true,
    asTimer: 3000,
    typo: true,
    galBorderWidth: 0,
    thumbsBorderOpacity: 0,
    buttonsTextColor: "#ccc",
    buttonsWidth: 20,
    thumbsActiveBorderOpacity: 0.8,
    thumbsActiveBorderColor: "#464646",
    shuffle: true
    });
    $('.lava').css({left:$('span.item:first').position()['left']});
	$('.item').mouseover(function () {
		lava = $(this).siblings('.lava');
		panel = $(this).parent('.tabs').next('.content').children('.panel');
		lava.stop().animate({left:$(this).position()['left']}, {duration:200});	
		panel.stop().animate({left:$(this).position()['left'] * (-10)}, {duration:200});
	});
    }); 
    jQuery(function(){
    jQuery("div.svwp").prepend("<img src='images/svwloader.gif' class='ldrgif' alt='loading...'/ >");
    }); 
</script>
</html>