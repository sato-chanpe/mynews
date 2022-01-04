<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $posts = News::all()->sortByDesc('updated_at'); //Eloquentを使いすべてのnewsテーブルを取得し、投稿日時順に新しい方から並べる

        if (count($posts) > 0) {
            $headline = $posts->shift(); //shift()メソッドは、配列の最初のデータを削除しその値を返す(配列左にシフトする)
        } else {
            $headline = null;
        }

        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('news.index', ['headline' => $headline, 'posts' => $posts]);
    }
}
