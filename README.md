# SnackExpl

# 概要
個人開発
コンビニのお菓子について、その詳細や様々な人からの口コミを見れるサイト。
また、お菓子をランダムで表示する機能がある。
制作期間：制作中（2022.9〜）
サイトURL：https://snack-expl.herokuapp.com


# 作成背景
**「SnackのExplore × Expain」**

「自分のお気に入りのお菓子を皆に伝えたい」
「いつも買っているお菓子に飽きた」
という思いから、お菓子のランダム表示機能を搭載した、各コンビニ毎のお菓子を統合した口コミサイトの作成を決意。
今まで食べてこなかったお菓子との出会いや、口コミの解説によるお菓子の新たな魅力と巡り合う意味でSnackExplという名前を付けた。


# 使用言語
* PHP 8.0.25
* Laravel 9.19
* HTML
* CSS
* Javascript


# 機能一覧
* 非ログインユーザー
    * お菓子の詳細閲覧機能
    * お店の詳細閲覧機能
    * 口コミの閲覧機能
    * お菓子の詳細ランダム表示機能

* ログインユーザー
    * お菓子の詳細閲覧機能
    * お店の詳細閲覧機能
    * 口コミの閲覧機能
    * お菓子の詳細ランダム表示機能
    * 口コミの投稿,編集,削除機能
    * 口コミのブックマーク機能
    * ブックマークした口コミ一覧の表示機能

* 管理者
    * お菓子の詳細閲覧機能
    * お店の詳細閲覧機能
    * 口コミの閲覧機能
    * お菓子の詳細ランダム表示機能
    * 口コミの投稿,編集,削除機能
    * 口コミのブックマーク機能
    * ブックマークした口コミ一覧の表示機能
    * 新しいお菓子の追加機能
    * お菓子の詳細の編集,削除機能
    * お菓子の画像の追加機能
    * 新しいお店の追加機能
    * お店の詳細の編集,削除機能

* その他
    * ログイン機能
    * バリデーション機能
    * ページネーション機能 etc.


# 特にこだわった機能
* お菓子のランダム表示機能  
コントローラーにランダムメソッドを追加することで、URLからどのお菓子詳細に飛ぶのかわからないようにした。

* ポリモーフィックリレーションの使用  
一対多のポリモーフィックリレーションを使用することで必要なテーブルの数を3個から1個に減らすことができた。

* 多対多リレーションの使用  
ブックマーク機能の実装の際に多対多のリレーションを使用した。

* policyを使用した認可機能  
policyとauthorizeを使うことで、ユーザーによって制限される機能や使用できる機能を分け、情報の信頼性を担保した。


# 今後追加したい機能
* お菓子の検索機能
* 各コンビニ毎でのお菓子の比較
* 評価ごとのお菓子一覧表示


# 課題
* レイアウトやデザインの凝り具合
* 外部API(social )の組み込み
* react(JSのフレームワーク)の使用


# 環境構築の手順
下記コードを順に入力
```
$ git clone git@github.com:shotanuno/SnackExpl.git
```
```
$ cd snackexpl
```
```
$ composer install
```
```
$ npm install
```
```
$ cp .env.example .env
```
```
$php artisan key:generate
```
上記のコマンド入力後、.envにデータベースの情報を入力する
```
$ php artisan migrate --seed
```
```
$ php artisan serve --port=8080
```
