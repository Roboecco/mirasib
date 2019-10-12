<?php
	use yii\helpers\Html;
	use app\models\Article;
?>

<div class="primary-sidebar">
	<aside class="widget pos-padding">
		<h3 class="widget-title text-uppercase text-center">Президент организации</h3>
		<div class="popular-post gallery">
			<a href="/images/kulekin.jpg" title='Президент НРОО "МиРа" Кулекин Владимир Льович' class="col-md-12 text-center">
				<img src="/images/kulekin.jpg" alt="Кулекин Владимир Льович" title="Кулекин Владимир Льович" />
			</a>
			<div class="p-content text-center col-md-12">Кулекин Владимир Львович</div>
		</div>		
	</aside>
	
	<?php $articles = Article::find()->where(['category_id' => 3])->orderBy(['date' => SORT_DESC])->all();	?>
	<?php if(count($articles)): ?>	
		<aside class="widget border pos-padding">
			<h3 class="widget-title text-uppercase text-center">Услуги</h3>
			<ul>
				<?php foreach($articles as $article): ?>
					<li>
						<?= Html::a($article['title'], [$article->pageURL, 'alias' => $article->alias]); ?>							
					</li>						
				<?php endforeach; ?>
			</ul>
		</aside>
	<?php endif;?>
		
	<aside class="widget border pos-padding">
		<h3 class="widget-title text-uppercase text-center">Центр помощи</h3>
		<ul>
			<li>
				<?= Html::a('Полезные ссылки', ['page/links']); ?>							
			</li>
			<li>				
				<?= Html::a('Нормативно-правовые акты', ['page/documents']); ?>	
			</li>
			<li>				
				<?= Html::a('Права инвалидов в вопросах и ответах', ['page/faq']); ?>	
			</li>			
		</ul>
	</aside>
</div>