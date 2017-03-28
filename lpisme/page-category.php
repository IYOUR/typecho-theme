<?php
/**
* Template categroy of Archives
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

        <div class="container">
				<?php
					$this->widget('Widget_Metas_Category_List')->to($recent);
				    $year=0; $i=0; $j=0;
				    $output = '<div class="archives-outer">';
				    while($recent->next()):
				     
				        $output .= '<div class="archive-article" style="text-align:center;"><div class="archive-article-inner"><div class="archive-article-title"><a href="'.$recent->permalink .'" itemprop="name" target="_blank">'. $recent->name .'</a></div><div class="archive-article-description">'.$recent->description.'</div></div></div>';
				    endwhile;
				    $output .= '</div></div></div>';
				    echo $output;
				?>
		</div>

<?php $this->need('footer.php'); ?>