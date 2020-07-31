<?php
namespace Modules\Article\Services;

use Blade;
use Houdunwang\Arr\Arr;

class TagService {
    public function make() {
        $this->slide();
        $this->category();
        $this->lists();
    }

    //栏目,具体实现看中级81集
    public function category(){
        Blade::directive('category',function($expression){
            $expression = $expression?:'[]';
            $php = <<<php
<?php
\$params = $expression;
\$data = \Modules\Article\Entities\Category::get()->toArray();
\$data = (new \Houdunwang\Arr\Arr())->channelList(\$data,0,"&nbsp;",'id');
foreach(\$data as \$field):
\$field['url'] = '/article/lists/'.\$field['id'].'.html';
?>
php;

return $php;
        });
        Blade::directive('endCategory',function($expression){
            return "<?php endforeach;?>";
        });
    }

    //读取文章标签
    public function lists(){
        Blade::directive('list',function($expression){
            $expression = $expression?:'[]';
            $php = <<<php
<?php
\$params = $expression;
\$db = \Modules\Article\Entities\Content::where('id','>',0);
if(isset(\$params['cid'])){
    \$db->whereIn('category_id',\$params['cid']);
}
if(isset(\$params['iscommend'])){
    \$db->where('iscommend',1);
}
if(isset(\$params['ishot'])){
    \$db->orderBy('click','desc');
}
if(isset(\$params['limit'])){
    \$db->limit(\$params['limit']);
}
foreach(\$db->get() as \$field):
    \$field['url'] = '/article/content/'.\$field['id'].'.html';
?>
php;

return $php;
        });
        Blade::directive('endList',function($expression){
            return "<?php endforeach;?>";
        });


    }


    //轮播标签，具体实现看后盾中级篇80集
    public function slide(){
        Blade::directive('slide',function(){

        });
    }
}