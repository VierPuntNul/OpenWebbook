<?php theme_include('header'); ?>

<section id="objectives" class="well">
				<div class="onerow">
					<div class="col12">
						<h1>Objectives:</h1>
					</div>
				</div>
				
				<div class="onerow">
					<div class="col4">
						<li>Find start OS</li>
						<li>Compare OS with alternatives</li>
					</div>
					<div class="col4">
						<li>Write down Goals and Milestones</li>
						<li>Find Partners</li>
					</div>
					<div class="col4 last">
						<li>Find development device</li>
					</div>
				</div>
				
				<div class="spacer inline-block"></div>
			</section>
			
			
			<section id="blog">
				<div class="onerow">
					<div class="col12">
						<h1>The OpenWebbook Dev Blog<br/>
						<span>A view into the story behind this Quest</span></h1>
					</div>
				</div>
				
				<div class="onerow">
					<div class="col8">
						
						<?php if(has_posts()): ?>
								<?php posts(); ?>
								<div class="article">
										<h2 title="<?php echo article_title(); ?>"><?php echo article_title(); ?><br />
										<span><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?></span></h2>
					
										<div class="content">
											<?php echo article_markdown(); ?>
										</div>
								</div>
								<?php $i = 0; while(posts()): ?>
								<?php $bg = sprintf('background: hsl(215, 28%%, %d%%);', round(((++$i / posts_per_page()) * 20) + 20)); ?>
								<div class="article">
										<h2><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a><br />
										<span><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?></span></h2>
								</div>
								<?php endwhile; ?>
					
							<?php if(has_pagination()): ?>
							<nav class="pagination">
								<div class="wrap">
									<?php echo posts_prev(); ?>
									<?php echo posts_next(); ?>
								</div>
							</nav>
							<?php endif; ?>
						
						<?php else: ?>
							<p>Looks like you have some writing to do!</p>
						<?php endif; ?>
						
					</div>
					
					
					<div class="col4 last" id="categories">
						<h3>Categories</h3>
						<hr />
						<ul>
							<li>Software</li>
							<li>Hardware</li>
							<li>General</li>
							<li>Partnerships</li>
						</ul>
					</div>
					
				</div>
				
			</section>
		</div>

<?php theme_include('footer'); ?>
