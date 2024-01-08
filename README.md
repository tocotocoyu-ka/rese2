#アプリケーション名
　Rese
##作成した目的
　飲食店情報の取得、予約を簡易にするため。
##アプリケーションURL
　http://localhost/
 店舗お気に入り登録、予約機能使用時には、会員情報の登録、ログインが必要となります。
##機能一覧
　会員登録機能
  ログイン機能
  ログアウト機能
  お気に入り登録機能
  予約機能
  飲食店一覧表示機能
  飲食店詳細情報取得機能
  店舗検索機能
##使用技術
　Laravel 8.x
##テーブル設計
![スクリーンショット 2024-01-08 191530](https://github.com/tocotocoyu-ka/rese2/assets/138411087/78c9cd6d-0a0a-41db-9b37-3c583dc748f5)
##ER図
![スクリーンショット 2024-01-08 220353](https://github.com/tocotocoyu-ka/rese2/assets/138411087/fcc1bc41-337d-4a35-b019-b8d3267bb39d)
##環境構築
　ホームページへアクセスすると、店舗一覧画面が閲覧できます。
  左上部のメニューボタンを押下し、Registerボタンで会員登録、Loginボタンでログインすることができます。
  ホームページでは、各店舗一覧から詳細をみるボタンで各店舗の詳細画面が閲覧でき、詳細をみるボタンの隣にあるお気に入りボタンを押下するとお気に入り登録ができます。
  詳細画面では日時、予約人数を選択し、予約するボタンを押下すると予約ができますが、予約機能とお気に入り登録を利用するためにはログインが必要です。
