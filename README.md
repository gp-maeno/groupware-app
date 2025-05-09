# ニップシステム - 日報管理アプリケーション

NativePHPを使用したデスクトップアプリケーションとして開発された日報管理システムです。

## 機能一覧

- ログイン / ログアウト
- 日報一覧（ページング機能付き）
- 日報詳細表示
- 日報の新規登録
- 日報の編集

## セットアップ方法

### 必要要件

- PHP 8.1以上
- Composer
- NativePHP

### インストール手順

```bash
# リポジトリをクローン
git clone https://github.com/gp-maeno/groupware-app.git
cd groupware-app

# 依存関係のインストール
composer install

# .envファイルの作成
cp .env.example .env

# アプリケーションキーの生成
php artisan key:generate

# データベースのセットアップ
php artisan migrate --seed

# NativePHPアプリケーションの起動
php artisan native:serve
```

## 開発情報

- フレームワーク: Laravel + NativePHP
- 主要言語: PHP, JavaScript
