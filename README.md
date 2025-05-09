# Groupware App - 日報管理システム

NativePHPを利用したデスクトップ版日報管理システムです。

## 機能一覧

- ログイン認証
- 日報の一覧表示（ページング機能付き）
- 日報の詳細表示
- 日報の新規登録
- 日報の編集

## 開発環境

- PHP 8.2以上
- Laravel 10.x
- NativePHP
- SQLite (開発用)

## インストール方法

```bash
# リポジトリのクローン
git clone https://github.com/gp-maeno/groupware-app.git
cd groupware-app

# 依存パッケージのインストール
composer install

# .envファイルの作成
cp .env.example .env

# アプリケーションキーの生成
php artisan key:generate

# データベースのマイグレーションとシード
php artisan migrate --seed

# NativePHPアプリの起動
php artisan native:serve
```

## 使用方法

アプリケーションを起動すると、ログイン画面が表示されます。
初期ユーザーとして以下の情報でログインできます。

- ユーザー名: admin@example.com
- パスワード: password

## ライセンス

[MIT License](LICENSE)
