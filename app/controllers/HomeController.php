<?php

/**
 * Created by PhpStorm.
 * User: lee
 * Date: 16-1-25
 * Time: 上午9:13
 */
class HomeController extends BaseController
{
    public function home()
    {
        $article=Article::first();
        $this->view = View::make('home')->with('article',$article)

            ->withTitle('title')

            ->withFuckMe('OK!');

        /*$this->mail = Mail::to(['xxx@qq.com'])

            ->from('MotherFucker <xxx@163.com>')

            ->title('Fuck Me!')

            ->content('<h1>Hello~~</h1>');*/

    }

    public function test()
    {
        Rediss::set('key','value',10,'s');

        echo Rediss::get('key');
    }
}