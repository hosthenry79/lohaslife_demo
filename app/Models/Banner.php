<?php

namespace App\Models;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Banner extends Model implements Sortable
{
    use SortableTrait;

    protected $table = 'demo_banners';

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];

    public static function grid($callback)
    {
        return new Grid(new static, $callback);
    }

    public static function form($callback)
    {
        return new Form(new static, $callback);
    }

    protected function detail($id)
    {
        $show = new Show(Post::findOrFail($id));

        $show->panel()
            ->style('danger')
            ->title('post基本信息')
            ->tools(function ($tools) {
                // $tools->disableEdit();
            });;

        $show->title()->foo();
        $show->content()->json();
        $show->rate();
        $show->created_at();
        $show->updated_at();
        $show->release_at();

        $show->divider();

        $show->tags('标签')->as(function ($tags) {
            return $tags->pluck('name');
        })->badge();

        $show->author('作者信息', function ($author) {

            $author->setResource('/demo/users');

            $author->id();
            $author->name();
            $author->email();
            $author->avatar();
            $author->profile()->age();
            $author->profile()->gender('性别')->using(['m' => '女', 'f' => '男'], '未知');

            $author->panel()->tools(function ($tools) {
                $tools->disableDelete();
            });
        });

        $show->comments('评论', function ($line) {

            $line->resource('/demo/post-comments');

            $line->id();
            $line->content()->limit(10);
            $line->created_at();
            $line->updated_at();

            $line->filter(function ($filter) {
                $filter->like('content');
            });
        });

        return $show;
    }
}
